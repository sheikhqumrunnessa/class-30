<?php

Route::get('/',[
    'uses'=>'NewShopController@index',
    'as' => '/'
]);
Route::get('/category-product',[
    'uses'=>'NewShopController@categoryProduct',
    'as' => 'category-product'
]);
Route::get('/mail-us',[
    'uses'=>'NewShopController@mailUs',
    'as' => 'mail-us'
]);
Route::get('/category/add',[
    'uses'=>'CategoryController@index',
    'as' => 'add-category'
]);
Route::post('/category/save',[
    'uses'=>'CategoryController@saveCategoryInfo',
    'as' => 'new-category'
]);
Route::get('/category/manage',[
    'uses'=>'CategoryController@manageCategoryInfo',
    'as' => 'manage-category'
]);
Route::get('/category/unpublished/{id}',[
    'uses'=>'CategoryController@unpublishedCategoryInfo',
    'as' => 'unpublished-category'
]);
Route::get('/category/published/{id}',[
    'uses'=>'CategoryController@publishedCategoryInfo',
    'as' => 'published-category'
]);

Route::get('/category/edit/{id}',[
    'uses'=>'CategoryController@editCategoryInfo',
    'as' => 'edit-category'
]);
Route::post('/category/update',[
    'uses'=>'CategoryController@updateCategoryInfo',
    'as' => 'update-category'
]);
Route::get('/category/delete/{id}',[
    'uses'=>'CategoryController@deleteCategoryInfo',
    'as' => 'delete-category'
]);





Route::get('/brand/add',[
    'uses'=>'BrandController@index',
    'as' => 'add-brand'
]);
Route::post('/brand/save',[
    'uses'=>'BrandController@saveBrandInfo',
    'as' => 'new-brand'
]);
Route::get('/brand/manage',[
    'uses'=>'BrandController@manageBrandInfo',
    'as' => 'manage-brand'
]);
Route::get('/brand/unpublished/{id}',[
    'uses'=>'BrandController@unpublishedBrandInfo',
    'as' => 'unpublished-brand'
]);
Route::get('/brand/published/{id}',[
    'uses'=>'BrandController@publishedBrandInfo',
    'as' => 'published-brand'
]);

Route::get('/brand/edit/{id}',[
    'uses'=>'BrandController@editBrandInfo',
    'as' => 'edit-brand'
]);
Route::post('/brand/update',[
    'uses'=>'brandController@updateBrandInfo',
    'as' => 'update-brand'
]);
Route::get('/brand/delete/{id}',[
    'uses'=>'BrandController@deleteBrandInfo',
    'as' => 'delete-brand'
]);






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



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

//Route::get('/', function () {
//    return view('welcome');
//});

//php artisan


//Route::get('/',[
//    'uses' => 'StudentController@index',
//    'as' => '/'
//]);
//
//Route::get('/about',[
//    'uses' => 'StudentController@add',
//    'as' => '/about'
//]);
//
//
//
//Route::get('/bitm', function(){
//    return "Hello BITM";
//});
//Route::get('/basis/bitm', function() {
//    return "Hello 123";
//});

