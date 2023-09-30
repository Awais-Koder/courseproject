<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CourseContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\StudentCourseController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User\UserCourseContentController;
use App\Http\Controllers\User\UserCourseController;
use App\Http\Controllers\UserFileController;
use App\Http\Controllers\UserSideEventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [HomeController::class , 'index']);
// ********* User side course routes ****************
Route::get('/show/courses', [UserCourseController::class , 'courses']);
Route::get('/course/details/{id}', [UserCourseController::class , 'details']);
// register course when a user is already registered
Route::post('register/course/{id}', [UserCourseController::class , 'register']);

// ********* End User side course routes ****************


// ************ Start Course contents routes ****************
Route::controller(UserSideEventController::class)->group(function(){
    Route::get( '/event/details/{id}' , 'show');
    Route::get( '/events/show/' , 'index');
});
Route::controller(UserCourseContentController::class)->group(function(){
    Route::get( '/user/view/course/content/{id}' , 'index');
});
// ************ End Course contents routes ****************

// ************ Start Gallery routes ****************
Route::controller(GalleryController::class)->group(function(){
    Route::get('/gallery' , 'Userindex');
});
// ************ End Gallery routes ****************
// ************ Start Gallery routes ****************
Route::controller(UserFileController::class)->group(function(){
    Route::get('/files' , 'index');
});
// ************ End Gallery routes ****************



Route::get('/register/user' , [ProfileController::class , 'index']);
Route::post('/profile/create' , [ProfileController::class , 'create']);
Route::get('/user/dashboard' , [ProfileController::class , 'showDashboard']);
Route::get('/open/dashboard' , [ProfileController::class , 'dashboard']);


Route::controller(CertificateController::class)->group(function(){
    Route::get('/check/certificate' , 'check');
    Route::get('/validate/certificate' , 'validateCertificate');
});

Route::controller(ContactUsController::class)->group(function(){
    Route::get('/contact/us' , 'index');
    Route::post('/store/message' , 'store');
});

Route::get('/about/us', function(){
    return view('home.about.about');
});

Route::middleware(['isAdmin'])->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::get('approve/status/{id}', [AdminController::class, 'updateStatus']);
    Route::get('view/details/{id}', [AdminController::class, 'viewDetails']);
    Route::get('approved/students', [AdminController::class, 'approvedStudents']);
    Route::get('proficiency/test/students', [AdminController::class, 'proficiencyUsers']);
    Route::post('/store/proficiency/test/link/{id}', [AdminController::class, 'storeProficiencyTestLInk']);
    Route::get('delete/student/{id}', [AdminController::class, 'deleteStudent']);
    Route::get('/admin/account', [AdminController::class, 'showAccount']);
    Route::post('/update/admin/account', [AdminController::class, 'updateAccount']);
    Route::get('/search/students', [AdminController::class, 'search']);
    // ***************starting slider routes***********
    Route::get('view/slider', [SliderController::class, 'index']);
    Route::get('create/slider', [SliderController::class, 'create']);
    Route::post('store/slider', [SliderController::class, 'store']);
    Route::get('edit/slider/{id}', [SliderController::class, 'edit']);
    Route::post('update/slider/{id}', [SliderController::class, 'update']);
    Route::get('delete/slider/{id}', [SliderController::class, 'delete']);
    // ***************ending slider routes***********
    
    
    // ***************starting courses routes***********
    Route::get('view/courses', [CourseController::class , 'index']);
    Route::get('edit/course/{id}', [CourseController::class , 'edit']);
    Route::post('update/course/{id}', [CourseController::class , 'update']);
    Route::get('create/course', [CourseController::class , 'create']);
    Route::post('store/course', [CourseController::class , 'store']);
    Route::get('delete/course/{id}', [CourseController::class , 'delete']);
    Route::get('update/course/status/{id}', [CourseController::class , 'updateStatus']);
    // ***************ending courses routes***********

    // ***************starting course content routes***********
    Route::get('add/course/content/{courseid}' , [CourseContentController::class , 'index']);
    Route::post('store/course/content' , [CourseContentController::class , 'store']);
    Route::get('view/course/content/{courseId}' , [CourseContentController::class , 'view']);
    Route::post('update/content' , [CourseContentController::class , 'update']);
    // ***************ending course content routes***********


    // ***************starting course content routes***********
    Route::controller(LevelController::class)->group(function(){
        Route::get('update/level/status/{id}' , 'updateStatus');
    });
    // ***************ending course content routes***********


    // ***************starting student course  routes***********
    Route::controller(StudentCourseController::class)->group(function(){
        Route::get('view/selected/courses/{id}' , 'index');
    });
    // ***************ending student course routes***********

    // ***************starting student course  routes***********
    Route::controller(TestController::class)->group(function(){
        Route::post('create/test/{id}' , 'create');
        Route::get('level/tests/{levelid}' , 'show');
        Route::get('delete/test/{testid}/{levelid}' , 'delete');
    });
    // ***************ending student course routes***********

    // ***************starting event routes***********
    Route::controller(EventController::class)->group(function(){
        Route::get('all/events' , 'index');
        Route::get('event/show' , 'create');
        Route::post('event/store' , 'store');
        Route::get('edit/event/{id}' , 'edit');
        Route::post('event/update/{id}' , 'update');
        Route::get('delete/event/{id}' , 'delete');
    });
    // ***************ending student course routes***********

    // ***************starting gallery routes***********
    Route::controller(GalleryController::class)->group(function(){
        Route::get('all/images' , 'index');
        Route::post('store/image' , 'store');
        Route::get('delete/image/{id}' , 'delete');
        Route::get('view/image/{id}' , 'show');
    });
    // ***************ending student course routes***********


    // ***************starting files routes***********
    Route::controller(FilesController::class)->group(function(){
        Route::get('get/all/files' , 'index');
        Route::get('create/new/file' , 'show');
        Route::post('store/file' , 'store');
        Route::get('/delete/file/{id}' , 'delete');
    });
    // ***************ending files course routes***********

    // ***************starting files routes***********
    Route::controller(SocialMediaController::class)->group(function(){
        Route::get('/show/all' , 'index');
        Route::post('store/icon' , 'store');
        Route::get('create/icon' , 'show');
        Route::get('delete/link/{id}' , 'delete');
    });
    // ***************ending files course routes***********

    // ***************starting address routes***********
    Route::controller(AddressController::class)->group(function(){
        Route::get('/show/address' , 'index');
        Route::post('store/address' , 'store');
        Route::get('create/address' , 'create');
        Route::get('delete/address/{id}' , 'delete');
    });
    // ***************ending files course routes***********

    // ***************starting certificate routes***********
    Route::controller(CertificateController::class)->group(function(){
        Route::get('/issue/certificate' , 'create');
        Route::post('/store/certificate' , 'store');
    });
    // ***************ending certificate routes***********

    Route::get('/messages' , [ContactUsController::class , 'show']);
    Route::get('view/message/{id}' , [ContactUsController::class , 'view']);
    Route::get('delete/message/{id}' , [ContactUsController::class , 'delete']);

});

Auth::routes();
