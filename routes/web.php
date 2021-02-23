<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get("/about-us",function(){
    return view("about-us");
});

Route::get("/domain-names",function(){
    return view("domain.domain-names");
});

Route::get("/web-hosting",function(){
    return view("web-hosting.web-hosting");
});

Route::get("/contact-us",function(){
    return view("contact-us");
});



Route::get("/public-cloud-pricing",function(){
    return view("public-cloud.pricing");
});

Route::get("/public-cloud-compute",function(){
    return view("public-cloud.compute");
});

Route::get("/public-cloud-storage",function(){
    return view("public-cloud.storage");
});

Route::get("/public-cloud-network",function(){
    return view("public-cloud.network");
});

Route::get("/public-cloud-orchestration",function(){
    return view("public-cloud.orchestration");
});

Route::get("/public-cloud-data-analytics",function(){
    return view("public-cloud.data-analytics");
});

Route::get("/public-cloud-ai-machine-learning",function(){
    return view("public-cloud.ai-machine-learning");
});

Route::get("/services",function(){
    return view("services");
});

Route::get("/team",function(){
    return view("team");
});

Route::get("/pricing",function(){
    return view("pricing");
});

Route::get("/clients",function(){
    return view("clients");
});

Route::get("/faq",function(){
    return view("faq");
});