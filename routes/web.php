<?php

//auth & user
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::post('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index')->name('admin.dashboard');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
        // Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update');
Route::post('admin/logout', 'AdminController@logout')->name('admin.logout');



/*******
 * Backend Routes
 * **************************
 *************************************/

// university
Route::get('all/university/category/list','Backend\UniversityController@UniversityCategories')->name('uni.categories');
Route::post('category/stored','Backend\UniversityController@StoreCategory')->name('store.uni.category');

Route::get('all/university/list','Backend\UniversityController@AllUniversity')->name('all.universities');
Route::post('university/added','Backend\UniversityController@StoreUniversity')->name('store.university');
Route::get('edit/university/{id}','Backend\UniversityController@EditUniversity');
Route::post('update/uni/{id}','Backend\UniversityController@UpdateUniversity');


//student admission applications manage
Route::get('new/applications/list','Backend\ApplicantsController@NewApplicants')->name('new.applicant');
Route::get('confirmed/applications/list','Backend\ApplicantsController@ConfirmApplicants')->name('confirmed.applicant');
Route::get('remove/confirm/applicant/{id}','Backend\ApplicantsController@DeleteConfirmApplicant');
//details applicant
Route::get('details/pending/applicant/{id}','Backend\ApplicantsController@DetailsPending');
//sending confirm email
Route::get('approve/pending/applicant/{id}','Backend\ApplicantsController@MailSend');

//upload result
Route::get('upload/students/result','Backend\ResultController@showForm')->name('upload.result');
Route::post('import/result','Backend\ResultController@ImportResult')->name('import.result');

//university total seat filled up
Route::get('seat','Backend\ResultnMigrationController@Seat')->name('seat');

Route::get('migration/requests','Backend\ResultnMigrationController@MigrationRequest')->name('migrations');

Route::get('result/published','Backend\ResultController@ResultPublished');
Route::get('result/published/off','Backend\ResultController@ResultPublishedOff');

//migration
//view single students migration details
Route::get('view/migration/info/{id}','Backend\ResultnMigrationController@MigrationDetails');
//approved migration
Route::get('migration/approved/{id}','Backend\ResultnMigrationController@MigrationApproved');
//deny migration
Route::get('migration/deny/{id}','Backend\ResultnMigrationController@MigrationDenied');

/*******
 * Student Routes
 * **************************
 *************************************/

//student basic information
//show form
Route::get('student/basic/information','Frontend\FrontendController@BasicInfo')->name('basic.infos');
Route::get('student/information','Frontend\FrontendController@BasicInfoEdit')->name('basicinfo.update');
Route::post('info/update/{id}','Frontend\FrontendController@BasicInfoUpdate');
//store information
Route::post('information/stored','Frontend\FrontendController@storeInfos')->name('student.basic.info');

//student admission apply
Route::get('university/admission/apply','Frontend\FrontendController@AdmissionForm')->name('apply.admission');
//all university access
Route::post('alluniversity','Frontend\FrontendController@AdmissionAllAccess')->name('admission.store');
Route::get('applied/form','Frontend\FrontendController@Applied')->name('applied');
//admit card
Route::get('student/admit-card','Frontend\PDFController@ShowData')->name('admit.card');
Route::get('show/pdf/{id}','Frontend\PDFController@previewPDF');

//university Migration
Route::get('university/migration','Frontend\FrontendController@applyMigration')->name('uni.migrate');
Route::post('migration/applied/','Frontend\FrontendController@MigratedApplied');

Route::get('admission/test/result','Frontend\FrontendController@Fail')->name('fail');


/*******
 * Frontend Routes
 * **************************
 *************************************/
Route::get('/','Frontend\PageController@Index')->name('page.index');
