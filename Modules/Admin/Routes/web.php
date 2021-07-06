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


Route::group(['namespace' => 'Auth','prefix' => 'auth'], function (){
    Route::get('login','AdminLoginController@login')->name('get_admin.login');
    Route::post('login','AdminLoginController@postLogin');

    Route::get('logout','AdminLoginController@logout')->name('get_admin.logout');
});
Route::prefix('admin')->middleware('checkLoginAdmin')->group(function() {
    Route::get('/', 'AdminDashboardController@index')->name('get_admin.dashboard')->middleware('permission:dashboard|full');

    Route::prefix('tag')->group(function (){
        Route::get('/', 'AdminTagController@index')->name('get_admin.tag.index')->middleware('permission:tag_index|full');
        Route::get('/create', 'AdminTagController@create')->name('get_admin.tag.create')->middleware('permission:tag_create|full');
        Route::post('/create', 'AdminTagController@store');
        Route::get('update/{id}', 'AdminTagController@edit')->name('get_admin.tag.edit')->middleware('permission:tag_edit|full');
        Route::post('update/{id}', 'AdminTagController@update');
        Route::get('delete/{id}', 'AdminTagController@delete')->name('get_admin.tag.delete')->middleware('permission:tag_delete|full');
    });

    Route::prefix('category')->group(function (){
        Route::get('/', 'AdminCategoryController@index')->name('get_admin.category.index')->middleware('permission:category_index|full');
        Route::get('/create', 'AdminCategoryController@create')->name('get_admin.category.create')->middleware('permission:category_create|full');
        Route::post('/create', 'AdminCategoryController@store');
        Route::get('update/{id}', 'AdminCategoryController@edit')->name('get_admin.category.edit')->middleware('permission:category_edit|full');
        Route::post('update/{id}', 'AdminCategoryController@update');
        Route::get('delete/{id}', 'AdminCategoryController@delete')->name('get_admin.category.delete')->middleware('permission:category_delete|full');
    });

    Route::prefix('teacher')->group(function (){
        Route::get('/', 'AdminTeacherController@index')->name('get_admin.teacher.index')->middleware('permission:teacher_index|full');
        Route::get('/create', 'AdminTeacherController@create')->name('get_admin.teacher.create')->middleware('permission:teacher_create|full');
        Route::post('/create', 'AdminTeacherController@store');
        Route::get('update/{id}', 'AdminTeacherController@edit')->name('get_admin.teacher.edit')->middleware('permission:teacher_edit|full');
        Route::post('update/{id}', 'AdminTeacherController@update');
        Route::get('delete/{id}', 'AdminTeacherController@delete')->name('get_admin.teacher.delete')->middleware('permission:teacher_delete|full');
    });

    Route::prefix('course')->group(function (){
        Route::get('/', 'AdminCourseController@index')->name('get_admin.course.index')->middleware('permission:course_index|full');
        Route::get('/create', 'AdminCourseController@create')->name('get_admin.course.create')->middleware('permission:course_create|full');
        Route::post('/create', 'AdminCourseController@store');
        Route::get('update/{id}', 'AdminCourseController@edit')->name('get_admin.course.edit')->middleware('permission:course_update|full');
        Route::prefix('view')->group(function (){
            Route::get('{id}', 'AdminCourseController@show')->name('get_admin.course.show')->middleware('permission:course_show|full');
        });

        Route::prefix('content')->group(function (){
            Route::get('{id}/index', 'AdminCourseContentController@index')->name('get_admin.course_content.index')->middleware('permission:course_content_index|full');
            Route::get('{id}/create', 'AdminCourseContentController@create')->name('get_admin.course_content.create')->middleware('permission:course_content_create|full');
            Route::post('{id}/create', 'AdminCourseContentController@store');

            Route::get('{id}/update/{contentId}', 'AdminCourseContentController@edit')->name('get_admin.course_content.edit')->middleware('permission:course_content_edit|full');
            Route::post('{id}/update/{contentId}', 'AdminCourseContentController@update');
            Route::get('{id}/delete/{contentId}', 'AdminCourseContentController@delete')->name('get_admin.course_content.delete')->middleware('permission:course_content_delete|full');
        });

        Route::prefix('video')->group(function (){
            Route::get('{id}/index', 'AdminCourseVideoController@index')->name('get_admin.course_video.index')->middleware('permission:course_video_index|full');
            Route::get('{id}/create', 'AdminCourseVideoController@create')->name('get_admin.course_video.create')->middleware('permission:course_video_create|full');
            Route::post('{id}/create', 'AdminCourseVideoController@store');

            Route::get('{id}/update/{videoId}', 'AdminCourseVideoController@edit')->name('get_admin.course_video.edit')->middleware('permission:course_video_edit|full');
            Route::post('{id}/update/{videoId}', 'AdminCourseVideoController@update');
            Route::get('{id}/delete/{videoId}', 'AdminCourseVideoController@delete')->name('get_admin.course_video.delete')->middleware('permission:course_video_delete|full');
        });
        Route::prefix('question')->group(function (){
            Route::get('{id}/index', 'AdminCourseQuestionController@index')->name('get_admin.course_question.index')->middleware('permission:course_question_index|full');
            Route::get('{id}/create', 'AdminCourseQuestionController@create')->name('get_admin.course_question.create')
                ->middleware('permission:course_question_create|full');
            Route::post('{id}/create', 'AdminCourseQuestionController@store')->name('get_admin.course_question.create');

            Route::get('{id}/update/{questId}', 'AdminCourseQuestionController@edit')->name('get_admin.course_question.edit')->middleware('permission:course_question_edit|full');
            Route::post('{id}/update/{questId}', 'AdminCourseQuestionController@update');
            Route::get('{id}/delete/{questId}', 'AdminCourseQuestionController@delete')->name('get_admin.course_question.delete')->middleware('permission:course_question_delete|full');
            Route::get('{id}/answers/{questId}/{answerId}','AdminCourseQuestionController@success')->name('get_admin.course_question.success')
                ->middleware('permission:course_question_success|full');
        });
        Route::prefix('faq')->group(function (){
            Route::get('{id}/index', 'AdminCourseFaqController@index')->name('get_admin.course_faq.index');
            Route::get('{id}/create', 'AdminCourseFaqController@create')->name('get_admin.course_faq.create');
            Route::post('{id}/create', 'AdminCourseFaqController@store');

            Route::get('{id}/update/{course_id}', 'AdminCourseFaqController@edit')->name('get_admin.course_faq.edit');
            Route::post('{id}/update/{course_id}', 'AdminCourseFaqController@update');
            Route::get('{id}/delete/{course_id}', 'AdminCourseFaqController@delete')->name('get_admin.course_faq.delete');
          
        });
        Route::prefix('vote')->group(function (){
            Route::get('{id}/index', 'AdminCourseVoteController@index')->name('get_admin.course_vote.index')->middleware('permission:course_vote_index|full');
            Route::get('{id}/delete/{voteId}', 'AdminCourseVoteController@delete')->name('get_admin.course_vote.delete')->middleware('permission:course_vote_delete|full');
        });

        Route::post('update/{id}', 'AdminCourseController@update');
        Route::get('delete/{id}', 'AdminCourseController@delete')->name('get_admin.course.delete')->middleware('permission:course_delete|full');
    });

    Route::prefix('slide')->group(function (){
        Route::get('/', 'AdminSlideController@index')->name('get_admin.slide.index')->middleware('permission:slide_index|full');
        Route::get('/create', 'AdminSlideController@create')->name('get_admin.slide.create')->middleware('permission:slide_create|full');
        Route::post('/create', 'AdminSlideController@store');
        Route::get('update/{id}', 'AdminSlideController@edit')->name('get_admin.slide.edit')->middleware('permission:slide_edit|full');
        Route::post('update/{id}', 'AdminSlideController@update');
        Route::get('delete/{id}', 'AdminSlideController@delete')->name('get_admin.slide.delete')->middleware('permission:slide_delete|full');
    });
    Route::prefix('page')->group(function (){
        Route::get('/', 'AdminPageController@index')->name('get_admin.page.index');
        Route::get('/create', 'AdminPageController@create')->name('get_admin.page.create');
        Route::post('/create', 'AdminPageController@store');
        Route::get('update/{id}', 'AdminPageController@edit')->name('get_admin.page.edit');
        Route::post('update/{id}', 'AdminPageController@update');
        Route::get('delete/{id}', 'AdminPageController@delete')->name('get_admin.page.delete');
    });
    Route::prefix('voucher')->group(function (){
        Route::get('/', 'AdminVoucherController@index')->name('get_admin.voucher.index');
        Route::post('/generate_code', 'AdminVoucherController@generate_code')->name('get_admin.voucher.generate_code');
        Route::get('/create', 'AdminVoucherController@create')->name('get_admin.voucher.create');
        Route::post('/create', 'AdminVoucherController@store');
        Route::get('update/{id}', 'AdminVoucherController@edit')->name('get_admin.voucher.edit');
        Route::post('update/{id}', 'AdminVoucherController@update');
        Route::get('delete/{id}', 'AdminVoucherController@delete')->name('get_admin.voucher.delete');
    });
    Route::prefix('configuration')->group(function (){
        Route::get('/', 'AdminConfigurationController@index')->name('get_admin.configuration.index')
            ->middleware('permission:configuration_index|full');
        Route::post('/', 'AdminConfigurationController@store');
    });

    Route::prefix('ajax')->namespace('Ajax')->group(function (){
        Route::post('/upload/image', 'AdminAjaxUploadImageController@processUpload')->name('post_ajax_admin.uploads');
    });

    Route::prefix('user')->group(function (){
        Route::get('/', 'AdminUserController@index')->name('get_admin.user.index')->middleware('permission:user_index|full');
        Route::get('movetrash', 'AdminUserController@indexmovetrash')->name('get.indexmovetrash');
        Route::get('update/{id}', 'AdminUserController@edit')->name('get_admin.user.edit')->middleware('permission:user_edit|full');
        Route::post('update/{id}', 'AdminUserController@update');
        Route::get('movetrash/{id}', 'AdminUserController@movetrash')->name('get_admin.user.movetrash');
        Route::get('delete/{id}', 'AdminUserController@delete')->name('get_admin.user.delete')->middleware('permission:user_delete|full');
    });
    Route::prefix('freebook')->group(function (){
        Route::get('/', 'AdminFreeBookController@index')->name('get_admin.free_book.index');
        Route::get('/create', 'AdminFreeBookController@create')->name('get_admin.free_book.create');
        Route::post('/create', 'AdminFreeBookController@store');
        Route::get('update/{id}', 'AdminFreeBookController@edit')->name('get_admin.free_book.edit');
        Route::post('update/{id}', 'AdminFreeBookController@update');
        Route::get('delete/{id}', 'AdminFreeBookController@delete')->name('get_admin.free_book.delete');
    });
    Route::prefix('jobs')->group(function (){
        Route::get('/', 'AdminJobsController@index')->name('get_admin.jobs.index');
        Route::get('/create', 'AdminJobsController@create')->name('get_admin.jobs.create');
        Route::post('/create', 'AdminJobsController@store');
        Route::get('update/{id}', 'AdminJobsController@edit')->name('get_admin.jobs.edit');
        Route::post('update/{id}', 'AdminJobsController@update');
        Route::get('delete/{id}', 'AdminJobsController@delete')->name('get_admin.jobs.delete');
    });
    // ----------------------------------------------------------------------------------------------------------------
    Route::prefix('answer_and_questions')->group(function (){
        Route::get('/', 'AdminAnswersController@index')->name('get_admin.answer_and_questions.index');
        Route::get('update/{id}', 'AdminAnswersController@questions')->name('get_admin.answer_and_questions.questions');
        Route::post('update/{id}', 'AdminAnswersController@update');
        Route::get('delete/{id}', 'AdminAnswersController@delete')->name('get_admin.answer_and_questions.delete');
    });
    // ----------------------------------------------------------------------------------------------------------------
    Route::prefix('apmenu')->group(function (){
        Route::get('/', 'AdminApMenuController@index')->name('get_admin.apmenu.index');
        Route::post('/', 'AdminApMenuController@ajax_load')->name('get_admin.apmenu.ajax_load');
        Route::any('/', 'AdminApMenuController@ajax_load_menu')->name('get_admin.apmenu.ajax_load_menu');
        // Route::post('/', 'AdminApMenuController@ajax_save_menu')->name('get_admin.apmenu.ajax_save_menu');



        
    });
    Route::prefix('bill')->group(function (){
        Route::get('/', 'AdminBillController@index')->name('get_admin.bill.index');
        Route::post('/', 'AdminBillController@viewBill')->name('get_admin.bill.view');
    });
    // --------------------------------------------------------------------------------------------------------------------
    Route::prefix('contact')->group(function (){
        Route::get('/', 'AdminContactController@index')->name('get_admin.contact.index');
        Route::get('jobsapply', 'AdminContactController@jobsapply')->name('get_admin.contact.jobsapply');
        Route::post('/', 'AdminContactController@update')->name('get_admin.contact.edit');
        Route::post('jobsapply', 'AdminContactController@updateJobsapply')->name('get_admin.jobsapply.edit_apply');
        Route::get('delete/{id}', 'AdminContactController@delete')->name('get_admin.contact.delete');
        Route::get('delete_apply/{id}', 'AdminContactController@delete_apply')->name('get_admin.jobsapply.delete_apply');
    });

    Route::prefix('uni_product')->group(function (){
        Route::get('/', 'AdminUniProductController@index')->name('get_admin.uni_product.index');
        Route::get('/create', 'AdminUniProductController@create')->name('get_admin.uni_product.create');
        Route::post('/create', 'AdminUniProductController@store');
        Route::get('update/{id}', 'AdminUniProductController@edit')->name('get_admin.uni_product.edit');
        Route::post('update/{id}', 'AdminUniProductController@update');
        Route::get('delete/{id}', 'AdminUniProductController@delete')->name('get_admin.uni_product.delete');
        Route::get('update/{id?}', 'AdminUniProductController@delete_album')->name('get_admin.uni_product.delete_album');
        Route::get('import/{id}', 'AdminUniProductController@importview')->name('get_admin.uni_product.import');
        Route::post('import/{id}', 'AdminUniProductController@import');
    });
    Route::prefix('uni_category')->group(function (){
        Route::get('/', 'AdminUniCategoryController@index')->name('get_admin.uni_category.index');
        Route::get('/create', 'AdminUniCategoryController@create')->name('get_admin.uni_category.create');
        Route::post('/create', 'AdminUniCategoryController@store');
        Route::get('update/{id}', 'AdminUniCategoryController@edit')->name('get_admin.uni_category.edit');
        Route::post('update/{id}', 'AdminUniCategoryController@update');
        Route::get('delete/{id}', 'AdminUniCategoryController@delete')->name('get_admin.uni_category.delete');
    });
    Route::prefix('uni_color')->group(function (){
        Route::get('/', 'AdminUniColorController@index')->name('get_admin.uni_color.index');
        Route::get('/create', 'AdminUniColorController@create')->name('get_admin.uni_color.create');
        Route::post('/create', 'AdminUniColorController@store');
        Route::get('update/{id}', 'AdminUniColorController@edit')->name('get_admin.uni_color.edit');
        Route::post('update/{id}', 'AdminUniColorController@update');
        Route::get('delete/{id}', 'AdminUniColorController@delete')->name('get_admin.uni_color.delete');
    });
    Route::prefix('uni_trade')->group(function (){
        Route::get('/', 'AdminUniTradeController@index')->name('get_admin.uni_trade.index');
        Route::get('/create', 'AdminUniTradeController@create')->name('get_admin.uni_trade.create');
        Route::post('/create', 'AdminUniTradeController@store');
        Route::get('update/{id}', 'AdminUniTradeController@edit')->name('get_admin.uni_trade.edit');
        Route::post('update/{id}', 'AdminUniTradeController@update');
        Route::get('delete/{id}', 'AdminUniTradeController@delete')->name('get_admin.uni_trade.delete');
    });
    Route::prefix('uni_size')->group(function (){
        Route::get('/', 'AdminUniSizeController@index')->name('get_admin.uni_size.index');
        Route::get('/create', 'AdminUniSizeController@create')->name('get_admin.uni_size.create');
        Route::post('/create', 'AdminUniSizeController@store');
        Route::get('update/{id}', 'AdminUniSizeController@edit')->name('get_admin.uni_size.edit');
        Route::post('update/{id}', 'AdminUniSizeController@update');
        Route::get('delete/{id}', 'AdminUniSizeController@delete')->name('get_admin.uni_size.delete');
    });
    Route::prefix('uni_supplier')->group(function (){
        Route::get('/', 'AdminUniSupplierController@index')->name('get_admin.uni_supplier.index');
        Route::get('/create', 'AdminUniSupplierController@create')->name('get_admin.uni_supplier.create');
        Route::post('/create', 'AdminUniSupplierController@store');
        Route::get('update/{id}', 'AdminUniSupplierController@edit')->name('get_admin.uni_supplier.edit');
        Route::post('update/{id}', 'AdminUniSupplierController@update');
        Route::get('delete/{id}', 'AdminUniSupplierController@delete')->name('get_admin.uni_supplier.delete');
    });
    Route::prefix('uni_lotproduct')->group(function (){
        Route::get('/', 'AdminUniLotProductController@index')->name('get_admin.uni_lotproduct.index');
        Route::get('/create', 'AdminUniLotProductController@create')->name('get_admin.uni_lotproduct.create');
        Route::post('/create', 'AdminUniLotProductController@store');
        Route::get('update/{id}', 'AdminUniLotProductController@edit')->name('get_admin.uni_lotproduct.edit');
        Route::post('update/{id}', 'AdminUniLotProductController@update');
        Route::get('delete/{id}', 'AdminUniLotProductController@delete')->name('get_admin.uni_lotproduct.delete');
    });
    Route::prefix('uni_tag')->group(function (){
        Route::get('/', 'AdminUniTagController@index')->name('get_admin.uni_tag.index');
        Route::get('/create', 'AdminUniTagController@create')->name('get_admin.uni_tag.create');
        Route::post('/create', 'AdminUniTagController@store');
        Route::get('update/{id}', 'AdminUniTagController@edit')->name('get_admin.uni_tag.edit');
        Route::post('update/{id}', 'AdminUniTagController@update');
        Route::get('delete/{id}', 'AdminUniTagController@delete')->name('get_admin.uni_tag.delete');
    });




    require_once 'route_acl.php';
    require_once 'route_blog.php';
    require_once 'route_cart.php';
});
