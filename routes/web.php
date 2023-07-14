<?php

use App\Http\Controllers\Example\FirstController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Repositories\Hunter;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Monolog\Handler\FirePHPHandler;

/*
|-------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // dd(app());
    // return view('welcome');
    return view('test.home');
});
// Route::get('/', function () {
//     // return view('welcome');
//     return "Another route";
// });


// match(['get', 'post'], '/', function ()
Route::match(['get', 'post'], 'about', function () {
    return view('test.about');
    //    return redirect('contact');
});


Route::match(['get', 'post'], 'about', function () {
    return view('test.about');
    //    return redirect('contact');
});

############# Call With Functions #####
// Route::match(['get', 'post'], 'contact', function () {
//     // return " MY contact is : " ;

//     return view('test.contact');
// });
Route::get('contact', function () {
    // return " MY contact is : " ;
    return view('test.contact');
});
Route::post('/store/contact', [FirstController::class, 'store']
)->name('store.contact');


############# Call With Controller #####
// Route::get('contact',[FirstController::class, 'index'])->name('contact.us');

#######InvokeController Controller#####
// Route::get('contact', LearnController::class)->name('contact.us');

Route::get('test', LearnController::class);
Route::get('hello', LearnController::class, 'hello');





Route::match(['get', 'post'], 'contact/{roll}', function ($roll) {
    // return " MY contact is : " . $roll;

    // return view('test.contact', ['roll' => $roll]);
});


// Route::get('country',function(){
//    return view('test.country');
// })->middleware('country');
Route::get('/country', [FirstController::class, 'country'])->name('country');
Route::get('/laraval', [FirstController::class, 'laraval'])->name('laraval');



// direct view route call
// Route::view('about', 'test.about');
// Route::view('contact', 'test.contact');

// Route::get('test', function(){
//     Hunter::test();
// });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/test', function (Request $request) {
    return $request->session()->put('name', 'mohim');
});
Route::get('/all', function (Request $request) {
    return  $request->session()->all();
});
Route::get('/flash', function (Request $request) {
    return  $request->session()->flush();
});



require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
