<?php

use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;
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

Route::get('/', 'PageController@home')->name('home');



Route::group(['prefix' => '/admin', 'middleware' => 'checklogin'], function () {
    // check login : demo 
    Route::get('/dashboard', 'UserController@demo')->name('user.login');
    // Team
    Route::resource('teams', 'TeamController');
    //Whitepaper
    Route::resource('whitepapers', 'WhitepaperController');
    // Advisors
    Route::resource('advisors', 'AdvisorsController');
    // roadmaps
    Route::resource('roadmaps', 'RoadmapController');
    // FAQ 
    Route::resource('fag', 'FAQController');
    //contact
    Route::resource('contacts', 'ContactController');
    //Users
    Route::resource('users', 'UserController');
    //Banner
    Route::resource('banner', 'BannerController');
    //ICO
    Route::resource('icos', 'IcoController');
    //App
    Route::resource('apps', 'AppController');

    //Our
    Route::resource('out', 'OurController');
    //Solution
    Route::resource('solution', 'SolutionController');
    //Token
    Route::resource('token', 'TokenSaleController');
    //Catelory Question 
    Route::resource('category', 'CategoriesController');
    //Question 
    Route::resource('questions', 'QuestionsController');
    //Distributions 
    Route::resource('distributions', 'DistributionController');
    //Token Distributions 
    Route::resource('token_distributions', 'TokenDistributionsController');
});

//File manager
Route::group(['prefix' => 'filemanager'], function () {
    Lfm::routes();
});
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact/save', 'PageController@saveContact')->name('contact.save');

//Login
Route::get('/login', 'UserController@getlogin')->name('login.user');
Route::post('/login', 'UserController@Login');
//Register
Route::get('/register', 'UserController@getRegister')->name('register.user');
Route::post('/register', 'UserController@Register')->name('register');
//Logout
Route::get('/logout', 'UserController@Logout')->name('logout');