<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\themeController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('index', [themeController::class, 'showindex'])->name('index');
Route::get('calendar', [themeController::class, 'showcalendar'])->name('calendar');
Route::get('chart-c3', [themeController::class, 'showchartc3'])->name('chart-c3');
Route::get('chart-chartist', [themeController::class, 'showchartchartist'])->name('chart-chartist');
Route::get('chart-chartjs', [themeController::class, 'showchartchartjs'])->name('chart-chartjs');
Route::get('chart-flot', [themeController::class, 'showchartflot'])->name('chart-flot');
Route::get('chart-knob', [themeController::class, 'showchartknob'])->name('chart-knob');
Route::get('chart-morris', [themeController::class, 'showchartmorris'])->name('chart-morris');
Route::get('chart-peity', [themeController::class, 'showchartpeity'])->name('chart-peity');
Route::get('chart-sparkline', [themeController::class, 'showchartsparkline'])->name('chart-sparkline');
Route::get('components-grid', [themeController::class, 'showcomponentsgrid'])->name('components-grid');
Route::get('components-range-sliders', [themeController::class, 'showcomponentsrangesliders'])->name('components-range-sliders');
Route::get('components-ratings', [themeController::class, 'showcomponentsratings'])->name('components-ratings');
Route::get('components-sweet-alert', [themeController::class, 'showcomponentssweetalert'])->name('components-sweet-alert');
Route::get('components-tour', [themeController::class, 'showcomponentstour'])->name('components-tour');
Route::get('components-treeview', [themeController::class, 'showcomponentstreeview'])->name('components-treeview');
Route::get('form-advanced', [themeController::class, 'showformadvanced'])->name('form-advanced');
Route::get('form-elements', [themeController::class, 'showformelements'])->name('form-elements');
Route::get('form-mask', [themeController::class, 'showformmask'])->name('form-mask');
Route::get('form-pickers', [themeController::class, 'showformpickers'])->name('form-pickers');
Route::get('form-uploads', [themeController::class, 'showformuploads'])->name('form-uploads');
Route::get('form-validation', [themeController::class, 'showformvalidation'])->name('form-validation');
Route::get('form-wizard', [themeController::class, 'showformwizard'])->name('form-wizard');
Route::get('form-xeditable', [themeController::class, 'showformxeditable'])->name('form-xeditable');
Route::get('icons-fontawesome', [themeController::class, 'showiconsfontawesome'])->name('icons-fontawesome');
Route::get('icons-ionicons', [themeController::class, 'showiconsionicons'])->name('icons-ionicons');
Route::get('icons-materialdesign', [themeController::class, 'showiconsmaterialdesign'])->name('icons-materialdesign');
Route::get('icons-pe7', [themeController::class, 'showiconspe7'])->name('icons-pe7');
Route::get('icons-simple-line', [themeController::class, 'showiconssimpleline'])->name('icons-simple-line');
Route::get('icons-themify', [themeController::class, 'showiconsthemify'])->name('icons-themify');
Route::get('icons-typicons', [themeController::class, 'showiconstypicons'])->name('icons-typicons');
Route::get('icons-weather', [themeController::class, 'showiconsweather'])->name('icons-weather');
Route::get('pages-404', [themeController::class, 'showpages404'])->name('pages-404');
Route::get('pages-500', [themeController::class, 'showpages500'])->name('pages-500');
Route::get('pages-comingsoon', [themeController::class, 'showpagescomingsoon'])->name('pages-comingsoon');
Route::get('pages-gallery', [themeController::class, 'showpagesgallery'])->name('pages-gallery');
Route::get('pages-invoice', [themeController::class, 'showpagesinvoice'])->name('pages-invoice');
Route::get('pages-lock-screen', [themeController::class, 'showpageslockscreen'])->name('pages-lock-screen');
Route::get('pages-login', [themeController::class, 'showpageslogin'])->name('pages-login');
Route::get('pages-maintenance', [themeController::class, 'showpagesmaintenance'])->name('pages-maintenance');
Route::get('pages-pricing', [themeController::class, 'showpagespricing'])->name('pages-pricing');
Route::get('pages-recoverpw', [themeController::class, 'showpagesrecoverpw'])->name('pages-recoverpw');
Route::get('pages-register', [themeController::class, 'showpagesregister'])->name('pages-register');
Route::get('pages-starter', [themeController::class, 'pagesstarter'])->name('pages-starter');
Route::get('pages-timeline', [themeController::class, 'showpagestimeline'])->name('pages-timeline');
Route::get('tables-basic', [themeController::class, 'showtablesbasic'])->name('tables-basic');
Route::get('tables-datatable', [themeController::class, 'showtablesdatatable'])->name('tables-datatable');
Route::get('tables-responsive', [themeController::class, 'showtablesresponsive'])->name('tables-responsive');
Route::get('tables-tablesaw', [themeController::class, 'showtablestablesaw'])->name('tables-tablesaw');
Route::get('ui-alerts', [themeController::class, 'showuialerts'])->name('ui-alerts');
Route::get('ui-bootstrap', [themeController::class, 'showuibootstrap'])->name('ui-bootstrap');
Route::get('ui-buttons', [themeController::class, 'showuibuttons'])->name('ui-buttons');
Route::get('ui-cards', [themeController::class, 'showuicards'])->name('ui-cards');
Route::get('ui-carousel', [themeController::class, 'showuicarousel'])->name('ui-carousel');
Route::get('ui-checkbox-radio', [themeController::class, 'showuicheckboxradio'])->name('ui-checkbox-radio');
Route::get('ui-dropdowns', [themeController::class, 'showuidropdowns'])->name('ui-dropdowns');
Route::get('ui-modals', [themeController::class, 'showuimodals'])->name('ui-modals');
Route::get('ui-navs', [themeController::class, 'showuinavs'])->name('ui-navs');
Route::get('ui-notification', [themeController::class, 'showuinotification'])->name('ui-notification');
Route::get('ui-progress', [themeController::class, 'showuiprogress'])->name('ui-progress');
Route::get('ui-typography', [themeController::class, 'showuitypography'])->name('ui-typography');
Route::get('widgets-charts', [themeController::class, 'showwidgetscharts'])->name('widgets-charts');
Route::get('widgets-tiles', [themeController::class, 'showwidgetstiles'])->name('widgets-tiles');






Route::get('/', function () {
    return view('welcome');
});
