<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

//Admin Route
use App\Http\Controllers\Admin\AdminDashBoardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\KatalogController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CategoryController;

//Site Route
use App\Http\Controllers\Site\SiteAboutusController;
use App\Http\Controllers\Site\SiteDashboardController;
use App\Http\Controllers\Site\SiteProductController;
use App\Http\Controllers\Site\SiteCategoryController;
use App\Http\Controllers\Site\SiteKatalogController;
use App\Http\Controllers\Site\SiteContactController;


use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\Site\SiteLanguageController;

Route::group(["prefix" => "admin", "as" => "admin."], function () {

    Route::middleware(["guest:web"])->group(function () {
        Route::get("/login", [AdminDashBoardController::class, "login"])->name("login");
        Route::post("/check", [AdminDashBoardController::class, "check"])->name("check");
    });

    Route::middleware(["auth:web"])->group(function () {
        Route::get("/", [AdminDashBoardController::class, "index"])->name("index");
        Route::post("/logout", [AdminDashBoardController::class, "logout"])->name('logout');

        Route::controller(ProductController::class)
            ->prefix("product")
            ->as("product.")
            ->group(function () {
                Route::get('/', 'index')->name('index');
                // CRUD Route
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/delete/{id}', 'delete')->name('delete');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/update/{id}', 'update')->name('update');
                // Galeri Route
                Route::get('/galeri/{id}', 'galeri')->name('galeri');
                Route::post('/galeriStore/{products_id}', 'galeriStore')->name('galeriStore');
                // Excel Route
                Route::get("/file-export", 'fileExport')->name("file-export");
                Route::post("/file-import", "fileImport")->name("file-import");
                // Product-Search Route
                Route::get('/search', 'searchProduct')->name("searchProduct");
            });

        Route::controller(CategoryController::class)
            ->prefix("category")
            ->as("category.")
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/addCategory', 'store')->name('addCategory');
                Route::get('/delete/{id}', 'delete')->name('deleteCategory');
                Route::get('/deleteSub/{id}', 'deleteSub')->name('deleteCategorySub');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/update/{id}', 'update')->name('update');
            });

        Route::controller(KatalogController::class)
            ->prefix("katalog")
            ->as("katalog.")
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/delete/{id}', 'delete')->name('delete');
                Route::get('/galeri/{id}', 'galeri')->name('galeri');
                Route::post('/galeriStore/{katalogs_id}', 'galeriStore')->name('galeriStore');
            });


        Route::controller(AdminDashBoardController::class)
            ->prefix("users")
            ->as("users.")
            ->group(function () {
                Route::get('/', 'getUser')->name('index');
                Route::get('/create', 'userCreate')->name('userCreate');
                Route::post('/store', 'userStore')->name('userStore');
                Route::get('/edit/{id}', 'userEdit')->name('userEdit');
                Route::post('/update/{id}', 'userUpdate')->name('userUpdate');
                Route::get('/delete/{id}', 'userDelete')->name('userDelete');
            });

        Route::controller(SettingController::class)
            ->prefix("setting")
            ->as("setting.")
            ->group(function () {
                Route::get('/', 'index')->name('index');
            });

        Route::controller(SliderController::class)
            ->prefix("slider")
            ->as("slider.")
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get("/status/{id}", "status")->name("sliderStatus");
                Route::get('/delete/{id}', 'delete')->name('delete');
            });
    });
});

Route::group(["namespace" => "site", "as" => "site."], function () {



    Route::get("/lang/{lang}", [SiteLanguageController::class, "switchLang"])->name("lang.switch");
    
    Route::get("/", [SiteDashboardController::class, "index"])->name("index");

    Route::get("/searchTitle", [SiteDashboardController::class, "searchTitle"])->name("searchTitle");

    Route::get("/product", [SiteProductController::class, "index"])->name("product.index");

    Route::get("/kataloglar", [SiteKatalogController::class, "index"])->name("kataloglar.index");
    Route::get("/katalog/{url}", [SiteKatalogController::class, "detail"])->name("katalog.detay");

    Route::get("/about-us", [SiteAboutusController::class, "index"])->name("aboutus.index");

    Route::get("/contact", [SiteContactController::class, "index"])->name("contact.index");







    // !URL SECTİON

    Route::get("/{url}", [SiteProductController::class, "productDetail"])->name("productDetail");

    Route::get("/category/{url}", [SiteCategoryController::class, "index"])->name("kategori");







    //!    Route::get("/productDetails/{id}",[SiteDashBoardController::class,"productDetails"])->name("productDetails");
    //!   Route::post("/productUpdate/{id}",[SiteDashBoardController::class,"productUpdate"])->name("productUpdate");
    //!    Route::get ("/search",[SiteDashBoardController::class,"search"])->name("searchproducts");

});
