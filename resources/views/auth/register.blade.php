@extends('layouts.main')
@section('main')
    <div class="single-product-area section-padding-100 clearfix">
        <div class="container-fluid">
            <x-auth-card>
                <form style="width: 50%; margin: 0 auto" method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')"/>
                        <x-text-input id="name" class="form-control mb-3" type="text" name="name"
                                      :value="old('name')"
                                      required autofocus/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')"/>
                        <x-text-input id="email" class="form-control mb-3" type="email" name="email"
                                      :value="old('email')"
                                      required/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')"/>

                        <x-text-input id="password" class="form-control mb-3"
                                      type="password"
                                      name="password"
                                      required autocomplete="new-password"/>

                        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>

                        <x-text-input id="password_confirmation" class="form-control mb-3"
                                      type="password"
                                      name="password_confirmation" required/>

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                    </div>

                    <div>
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                           href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </x-auth-card>
        </div>
    </div>
@endsection
