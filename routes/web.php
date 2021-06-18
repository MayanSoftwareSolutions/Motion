<?php

use App\Setting;
use App\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth.shopify'])->group(function () {


    Route::get('/', function () {
        $shop = Auth::user();

        $settings = Setting::where("shop_id", $shop->name)->first();

        return view('dashboard', compact('settings'))->with($settings);


    })->name('home');


    Route::get('wishlists', "WishlistController@index")->name('wishlists');

    Route::view('/products', 'products');
    Route::view('/customers', 'customers');
    Route::view('/settings', 'settings');
    Route::view('/orders', 'orders');
    Route::view('/test', 'test');


    Route::post('configureTheme', "SettingController@configureTheme");



});
