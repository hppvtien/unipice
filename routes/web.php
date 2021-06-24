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
Route::get('/clear-cache', function() {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('route:clear');
    $run = Artisan::call('config:cache');
    
    return 'FINISHED';  
});
Route::group(['namespace' => 'Frontend'], function (){
    // Route::get('/trang-chu','HomeController@index')->name('get.home');
    Route::get('/','HomeController@index')->name('get.home');

    Route::post('/dang-nhap','LoginController@index')->name('get.login');
    Route::post('/dang-ky','RegisterController@register')->name('get.register');
    Route::get('/verify-email/{code_verication}','RegisterController@verify_email')->name('verify.email');
    Route::get('/forget-password','RegisterController@forgetpassword')->name('get.forgetpassword');
    Route::post('/forget-password','RegisterController@postforgetpassword')->name('post.forgetpassword');
    Route::post('/forget-password','RegisterController@postforgetpassword')->name('post.forgetpassword');
    Route::get('/forget-password{reset_code}','RegisterController@get_reset_code')->name('get.resetcodepassword');
    Route::post('/forget-password{reset_code}','RegisterController@postresetcodepassword')->name('post.resetcodepassword');
    
    // Auth::routes(['verify' => true]);
    Route::post('/social','SocialController@callback')->name('post.social');
    Route::get('/dang-xuat','RegisterController@logout')->name('get.logout');
    // Route::get('/trang-chu','HomeController@index')->name('get.home');
    Route::get('khoa-hoc-ban-chay.html','CoursePaySellingController@index')->name('get.course.pay_selling');
    Route::get('khoa-hoc-yeu-thich.html','CourseFavouriteController@index')->name('get.course.favourite');
    Route::get('/danh-muc/{slug?}','CategoryController@index')->name('get.category');
    Route::get('/khoa-hoc/{slug?}/trac-nghiem','CourseMultipleChoiceController@index')->name('get.course.multiple_choice');
    Route::post('/khoa-hoc/{slug?}/trac-nghiem','CourseMultipleChoiceController@processMultipleChoice');
    Route::get('/khoa-hoc/{slug?}/ket-qua-trac-nghiem','CourseMultipleChoiceController@resultMultipleChoice')->name('get.course.multiple_choice.result');
    Route::get('/khoa-hoc/{slug?}/ket-qua-trac-nghiem-lan-{position?}','CourseMultipleChoiceController@resultMultipleChoice')
        ->name('get.course.multiple_choice.result_position')->where(['position' => '[0-9]+']);
    Route::get('/khoa-hoc/{slug?}','HubCourseController@render')->name('get.course.render');
    Route::get('/khoa-hoc/{slug}','CourseController@voteComment')->name('get.course.voteComment');
    Route::post('/khoa-hoc/{slug}','CourseController@voteComment');
    Route::get('tat-ca-khoa-hoc','CategoryController@index')->name('get.category.all');
    Route::get('giang-vien.html','TeacherController@getAllTeacher')->name('get.teacher');
    Route::get('giang-vien/{slug}','TeacherController@getCourseByTeacherSlug')->name('get.teacher.course');
    Route::get('tim-kiem','SearchController@search')->name('get.search');
    Route::get('gioi-thieu','PageController@getabout')->name('get.about');
    Route::get('inhouse','PageController@getinhouse')->name('get.inhouse');
    Route::get('lien-he','ContactController@index')->name('get.contact');
    Route::post('lien-he','ContactController@submitContact')->name('get.addcontact');
    Route::get('free-book','FreebookController@index')->name('get.freebook');
    // Route::post('free-book','FreebookController@submitContact')->name('get.addcontact');
    Route::get('tin-tuyen-dung','JobsController@index')->name('get.jobs');
    Route::get('tin-tuyen-dung/{slug}','JobsController@jobsdetail')->name('get.jobsdetail');
    Route::post('tin-tuyen-dung/{slug}','JobsController@jobscontact');
    // Route::post('tin-tuyen-dung','JobsController@submitContact')->name('get.addcontact');

    Route::get('video-khoa-hoc/{slug}','VideoKhoaHocController@courseVideo')->name('get.video.kh'); 
    Route::post('video-khoa-hoc/{slug}','VideoKhoaHocController@addAnswer');
    // Route::post('video-khoa-hoc/{slug}','VideoKhoaHocController@addReply')->name('post.reply'); 

    Route::group(['namespace' => 'Ajax','prefix' => 'ajax'], function(){
        Route::get('course/list-by-category/{id}','AjaxHomeController@getCourseByCategory')
            ->name('ajax_get.course.by_category');

        Route::get('course/search','AjaxSearchController@search');

        Route::get('course/view/{videoID}','AjaxUserViewCourseController@viewCourseByVideoID')
            ->name('ajax_get.course.view_course');
    });

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
});
