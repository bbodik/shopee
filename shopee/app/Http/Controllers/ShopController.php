<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ShopController extends Controller
{

    function index()
    {
        $products = Product::orderBy('created_at')->limit(9)->get();
        return View('home', compact('products'));
    }

    function shop($category_name, Request $request)
    {
        $categories = ProductCategory::all();
        $brands = Brand::all();
        $category = ProductCategory::where('name', $category_name)->first();
        $checked_brands = $request->brand;
        $sort = $request->sortBy;
        $products = Product::where(['category_id' => $category->id])->paginate(6);
        if ($sort == null) {
            $sort = 'name';
        }
        if ($checked_brands != null && $sort != null) {
            $products = Product::where(['category_id' => $category->id, 'brand_id' => $checked_brands])->orderBy($sort)->paginate(6);
        }
        return View('shop', compact('categories', 'category_name', 'brands', 'products', 'checked_brands', 'sort'));
    }

    function product($product_id)
    {
        $product = Product::where('id', $product_id)->first();
        $wish = WishList::where(['product_id' => $product_id, 'user_id' => auth()->user()->id])->first();
        return View('product', compact('product', 'wish'));
    }

    function search(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%' . $request->search . '%')->paginate(6);
        return View('home', compact('products'));
    }

    function add_to_cart($product_id, Request $request)
    {
        if ($request->products_count == null) {
            $request->products_count = 1;
        }
        $cart = Cart::where(['product_id' => $product_id, 'user_id' => auth()->user()->id])->first();
        if ($cart) {
            $count = $cart->products_count;
            if ($request->changeCountButton == '-') {
                if ($count - 1 == 0) {
                    $cart->delete();
                } else {
                    $cart->update([
                        'products_count' => $count - 1
                    ]);
                }
            } else if ($request->changeCountButton == '+') {
                $cart->update([
                    'products_count' => $count + 1
                ]);
            } else {
                $cart->update([
                    'products_count' => $count + $request->products_count
                ]);
            }
        } else {
            DB::table('carts')->insert([
                'product_id' => Product::where('id', $product_id)->first()->id,
                'user_id' => User::where('id', auth()->user()->id)->first()->id,
                'products_count' => $request->products_count,
                'orderConfirmed' => false,
            ]);
        }
        return Redirect::back()->with('message', 'Operation Successful !');
    }

    function cart()
    {
        if (auth()->user() != null) {
            $cart_elements = Cart::where(['user_id' => auth()->user()->id, 'orderConfirmed' => false])->get();
            $sub_total = 0;
            foreach ($cart_elements as $element) {
                $sub_total += $element->products_count * $element->product->price;
            }
            $delivery = 0;
            foreach ($cart_elements as $element) {
                $delivery += $element->products_count * $element->product->delivery_price;
            }
            return View('cart', compact('cart_elements', 'sub_total', 'delivery'));
        } else {
            return View('auth.register');
        }
    }

    function checkout()
    {
        if (auth()->user() != null) {
            $cart_elements = Cart::where(['user_id' => auth()->user()->id, 'orderConfirmed' => false])->get();
            $sub_total = 0;
            foreach ($cart_elements as $element) {
                $sub_total += $element->products_count * $element->product->price;
            }
            $delivery = 0;
            foreach ($cart_elements as $element) {
                $delivery += $element->products_count * $element->product->delivery_price;
            }
            return View('checkout', compact('cart_elements', 'sub_total', 'delivery'));
        } else {
            return View('auth.register');
        }
    }

    function add_order(Request $request)
    {
        if (auth()->user() != null) {
            $cart_elements = Cart::where(['user_id' => auth()->user()->id, 'orderConfirmed' => false])->get();
            $products = array();
            $sub_total = 0;
            $delivery = 0;
            foreach ($cart_elements as $element) {
                $sub_total += $element->products_count * $element->product->price;
                $delivery += $element->products_count * $element->product->delivery_price;
                array_push($products, $element->id);

            }
            DB::table('carts')->where(['user_id' => auth()->user()->id, 'orderConfirmed' => false])->update([
                'orderConfirmed' => true
            ]);
            DB::table('orders')->insert([
                'user_id' => User::where('id', auth()->user()->id)->first()->id,
                'lastName' => $request->lastName,
                'firstName' => $request->firstName,
                'country' => $request->country,
                'address' => $request->address,
                'zipcode' => $request->zipcode,
                'phone' => $request->phone,
                'comment' => $request->comment,
                'totalPrice' => $sub_total + $delivery,
                'products' => json_encode($products),
            ]);
            return Redirect::back();
        } else {
            return View('auth.register');
        }
    }

    function add_to_wish($product_id)
    {
        if (auth()->user() != null) {
            $wish = WishList::where(['product_id' => $product_id, 'user_id' => auth()->user()->id])->first();
            if ($wish) {
                $wish->delete();
            } else {
                DB::table('wish_lists')->insert([
                    'product_id' => Product::where('id', $product_id)->first()->id,
                    'user_id' => User::where('id', auth()->user()->id)->first()->id,
                ]);
            }
            return Redirect::back()->with('message', 'Operation Successful !');
        } else {
            return View('auth.register');
        }
    }

    function get_wishes()
    {
        if (auth()->user() != null) {
            $wishes = WishList::where(['user_id' => auth()->user()->id])->get()->all();
            return View('wishes', compact('wishes'));
        } else {
            return View('auth.register');
        }
    }
}

