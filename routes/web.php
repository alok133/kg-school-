<?php



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

// Route::get('/', function () {

//     return view('welcome');
// });



Route::match(['get','post'],'/','StudentController@addStudent');

// Route::get('/send-mail/{student}','MailSend@mailsend');

// Route::match(['get','post'],'//send-mail/{student}/','MailSend@mailsend');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::match(['get','post'],'/admin','AdminController@login');

Route::group(['middleware'=>['auth']],function(){

Route::match(['get','post'],'/dashboard','AdminController@dashboard');

Route::match(['get','post'],'/viewStudent','StudentController@viewStudent');

Route::match(['get','post'],'/student/delete/{id}','StudentController@deleteStudent');

Route::match(['get','post'],'/student/print/{id}','StudentController@printStudent');

Route::match(['get','post'],'/student/edit/{id}','StudentController@editStudent');

});



Route::get('/logout','AdminController@logout');
