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



// SIMPLE PAGES
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


// BARE METAL

Route::get("/bare-metal-game",function(){
    return view("bare-metal.game.game");
});

Route::get("/bare-metal-game-services-included",function(){
    return view("bare-metal.game.services-included");
});

Route::get("/bare-metal-game-options",function(){
    return view("bare-metal.game.options");
});

Route::get("/bare-metal/game/price",function(){
    return view("bare-metal.game.price");
});

Route::get("/bare-metal/game/game-1",function(){
    return view("bare-metal.game.configure.game-1");
});

Route::get("/bare-metal/rise",function(){
    return view("bare-metal.rise.rise");
});



Route::get("/bare-metal/storage",function(){
    return view("bare-metal.storage.storage");
});




Route::get("/bare-metal/advance",function(){
    return view("bare-metal.advance.advance");
});




Route::get("managed-bare-metal",function(){
    return view("bare-metal.managed.managed");
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



// PUBLIC CLOUD

Route::get("/public-cloud-pricing",function(){
    return view("public-cloud.pricing");
});

Route::get("/public-cloud-compute",function(){
    return view("public-cloud.compute");
});

Route::get("/public-cloud/guranteed-resources",function(){
    return view("public-cloud.guranteed-resources");
});


Route::get("/public-cloud/gpu",function(){
    return view("public-cloud.gpu");
});

Route::get("/public-cloud/iops",function(){
    return view("public-cloud.iops");
});

Route::get("/public-cloud/block-storage",function(){
    return view("public-cloud.block-storage");
});

Route::get("/public-cloud/object-storage",function(){
    return view("public-cloud.object-storage");
});

Route::get("/public-cloud/cloud-archive",function(){
    return view("public-cloud.cloud-archive");
});

Route::get("/public-cloud/volume-snapshot",function(){
    return view("public-cloud.volume-snapshot");
});

Route::get("/public-cloud/instance-backup",function(){
    return view("public-cloud.instance-backup");
});

Route::get("/public-cloud/load-balancer",function(){
    return view("public-cloud.load-balancer");
});

Route::get("/public-cloud/private-network",function(){
    return view("public-cloud.private-network");
});




Route::get("/public-cloud/sandbox",function(){
    return view("public-cloud.sandbox");
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


// public-cloud/ai-training




// ROUTES FOR GUIDES

Route::get("/dedicated-servers/guide",function(){
    return view("guides.dedicated-servers.dedicated");
});