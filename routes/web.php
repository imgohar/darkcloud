<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class,"home"]);

Route::get("/about-us",[PagesController::class,"aboutUs"]);

Route::get("/contact-us",[PagesController::class,"contactUs"]);

Route::get("/services",[PagesController::class,"services"]);

Route::get("/team",[PagesController::class,"team"]);

Route::get("/pricing",[PagesController::class,"pricing"]);

Route::get("/clients",[PagesController::class,"clients"]);

Route::get("/faq",[PagesController::class,"faq"]);



Route::get("/domain-names",function(){
    return view("domain.domain-names");
});


Route::get("/web-hosting",function(){
    return view("web-hosting.web-hosting");
});

Route::get("/bare-metal-game",function(){
    return view("bare-metal.game.game");
});

Route::get("/bare-metal-game-services-included",function(){
    return view("bare-metal.game.services-included");
});

Route::get("/bare-metal-game-options",function(){
    return view("bare-metal.game.options");
});

Route::get("/bare-metal-game-price",function(){
    return view("bare-metal.game.price");
});

Route::get("/bare-metal-ip",function(){
    return view("bare-metal.ip.ip");
});

Route::get("/bare-metal-backup-storage",function(){
    return view("bare-metal.backup-storage.backup-storage");
});

Route::get("/anti-ddos",function(){
    return view("anti-ddos.anti-ddos");
});



Route::get("/public-cloud-pricing",function(){
    return view("public-cloud.pricing");
});

Route::get("/public-cloud-compute",function(){
    return view("public-cloud.compute");
});

Route::get("/public-cloud/guranteed-resources",function(){
    return view("public-cloud.guranteed-resources");
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




// ROUTES FOR GUIDES

Route::get("/dedicated-servers-guide",function(){
    return view("guides.dedicated-servers.dedicated");
});