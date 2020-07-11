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



Route::match(['get','post'],'/kg-morar','StudentController@addStudent');

Route::match(['get','post'],'/kg-maharajpura','MaharajpuraStudentController@addStudent');

// Route::get('/send-mail/{student}','MailSend@mailsend');

// Route::match(['get','post'],'//send-mail/{student}/','MailSend@mailsend');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::match(['get','post'],'/admin','AdminController@login');

Route::group(['middleware'=>['auth']],function(){

Route::match(['get','post'],'/dashboard','AdminController@dashboard');


// ****************************Morar Branch***********************

Route::match(['get','post'],'/viewStudent','StudentController@viewStudent');

Route::match(['get','post'],'/student/delete/{id}','StudentController@deleteStudent');

Route::match(['get','post'],'/studentMorar/print/{id}','StudentController@printStudent');

Route::match(['get','post'],'/student/edit/{id}','StudentController@editStudent');



Route::get('/downloadPDFMorar/{id}','GenratePdfController@downloadPDFMorar');



// ****************************Maharajpura Branch***********************

Route::match(['get','post'],'/viewStudentMaharajpura','MaharajpuraStudentController@viewStudentMaharajpura');

Route::match(['get','post'],'/edit/StudentMaharajpura/{id}','MaharajpuraStudentController@editStudentMaharajpura');

Route::match(['get','post'],'/delete/StudentMaharajpura/{id}','MaharajpuraStudentController@deleteStudentMaharajpura');


Route::match(['get','post'],'/print/StudentMaharajpura/{id}','MaharajpuraStudentController@printStudentMaharajpura');

Route::get('/downloadPDF/{id}','GenratePdfController@downloadPDF');

});



Route::get('/logout','AdminController@logout');
