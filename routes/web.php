<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\UniversitiesController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\SupportticketsController;
use App\Http\Controllers\ApplicationguidanceController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\BrochuresController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BackofficeStudentController;
use App\Http\Controllers\MailController;



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


Route::get('/', [FrontEndController::class, 'index'])->name('index');
Route::get('/about-us', [FrontEndController::class, 'about_us'])->name('about-us');
Route::get('/our-company', [FrontEndController::class, 'ourcompany'])->name('our-company');
Route::get('/backoffice', [FrontEndController::class, 'backoffice_home'])->name('backoffice');
Route::get('/backoffice/login', [BackofficeController::class, 'index'])->name('backoffice.login');
Route::post('/backoffice/login', [BackofficeController::class, 'adminLogin'])->name('backoffice.login');
Route::get('/backoffice/dashboard', [BackofficeController::class, 'adminDashboard'])->name('backoffice.dashboard');
Route::get('/agent/login', [AgentController::class, 'index'])->name('agent.login');
Route::post('/agent/login', [AgentController::class, 'agentLogin'])->name('agent.login');
Route::get('/agent/register', [AgentController::class, 'agentRegister'])->name('agent.register');
Route::get('/agent/password/reset', [AgentController::class, 'agentForgotPassword'])->name('agent.password.reset');
Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/agent', [StudentController::class, 'agent'])->name('agent');
Route::get('/disclaimer', [CommonController::class, 'disclaimer'])->name('disclaimer');
Route::get('/privacy-policy', [CommonController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/terms-conditions', [CommonController::class, 'terms_conditions'])->name('terms-conditions');
Route::get('/accreditation-affiliation', [CommonController::class, 'accreditation_affiliation'])->name('accreditation-affiliation');
Route::get('/about-agents', [CommonController::class, 'about_agents'])->name('about-agents');
Route::get('/about-institutes', [CommonController::class, 'about_institutes'])->name('about-institutes');
Route::get('/about-students', [CommonController::class, 'about_students'])->name('about-students');
Route::get('/our-team', [CommonController::class, 'our_team'])->name('our-team');
Route::get('/study/uk', [CommonController::class, 'study_uk'])->name('study.uk');
Route::get('/study/canada', [CommonController::class, 'study_canada'])->name('study.canada');
Route::get('/study/us', [CommonController::class, 'study_us'])->name('study.us');
Route::get('/study/australia', [CommonController::class, 'study_australia'])->name('study.australia');
Route::get('/courses', [CommonController::class, 'courses'])->name('courses');
Route::get('/courses/{slug}', [CommonController::class, 'courses_details'])->name('courses.{slug}');
Route::get('/universities', [CommonController::class, 'universities'])->name('universities');
Route::get('/universities/{slug}', [CommonController::class, 'universities_details'])->name('universities.{slug}');
Route::get('/news', [CommonController::class, 'news'])->name('news');
Route::get('/events', [CommonController::class, 'events'])->name('events');
Route::get('/student/verify/{token}', [CommonController::class, 'student_verify'])->name('student.verify.{token}');
Route::get('/test-route', [CommonController::class, 'test_route'])->name('test-route');
Route::get('/contact-us', [CommonController::class, 'contact_us'])->name('contact-us');
Route::post('/contact-us', [CommonController::class, 'contact_us_post'])->name('contact-us');
Route::get('/career', [CommonController::class, 'career'])->name('career');
Route::get('/find-courses', [CommonController::class, 'find_courses'])->name('find-courses');


Route::get('send-mail', [MailController::class, 'index']);
Route::get('sendbasicemail',[MailController::class,'basic_email']);
Route::get('sendhtmlemail',[MailController::class,'html_email']);
Route::get('sendattachmentemail',[MailController::class,'attachment_email']);
// Route::get('/', function () {
//     return View::make('pages.home');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\FrontEndController::class, 'index'])->name('home');


/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:student'])->group(function () {
    Route::get('/home', [App\Http\Controllers\FrontEndController::class, 'index'])->name('home');
    Route::get('/student/dashboard', [DashboardController::class, 'index'])->name('student.dashboard');
});

Route::middleware(['auth', 'user-access:agent'])->group(function () {
    Route::get('/agent/dashboard', [DashboardController::class, 'agent'])->name('agent.dashboard');
});
  
// Route::middleware(['auth', 'user-access:superadmin'])->group(function () {
  
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin', 'user-access:superadmin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/backoffice/universities', [UniversitiesController::class, 'index'])->name('backoffice.universities');
    Route::get('/backoffice/universities/add', [UniversitiesController::class, 'add'])->name('backoffice.universities.add');
    Route::post('/backoffice/universities/add', [UniversitiesController::class, 'store'])->name('backoffice.universities.store');
  #  Route::post('/backoffice/universities/add', [UniversitiesController::class, 'store'])->name('backoffice.universities.store');
    Route::get('/backoffice/universities/edit/{id}', [UniversitiesController::class, 'edit'])->name('backoffice.universities.edit');
    Route::post('/backoffice/universities/edit/{id}', [UniversitiesController::class, 'update'])->name('backoffice.universities.update');
    Route::get('/backoffice/universities/delete/{id}', [UniversitiesController::class, 'delete'])->name('backoffice.universities.delete');
    
    Route::get('/backoffice/courses',  [CoursesController::class, 'index'])->name('backoffice.courses');
    Route::get('/backoffice/courses/add',  [CoursesController::class, 'add'])->name('backoffice.courses.add');
    Route::post('/backoffice/courses/add',  [CoursesController::class, 'store'])->name('backoffice.courses.store');
    Route::get('/backoffice/courses/edit/{id}',  [CoursesController::class, 'edit'])->name('backoffice.courses.edit');
    Route::post('/backoffice/courses/edit/{id}',  [CoursesController::class, 'update'])->name('backoffice.courses.update');
    Route::get('/backoffice/courses/delete/{id}',  [CoursesController::class, 'delete'])->name('backoffice.courses.delete');


    Route::get('/backoffice/applications', [ApplicationsController::class, 'index'])->name('backoffice.applications');
    Route::get('/backoffice/applications/add', [ApplicationsController::class, 'add'])->name('backoffice.applications.add');
    Route::post('/backoffice/applications/add', [ApplicationsController::class, 'store'])->name('backoffice.applications.store');
    Route::get('/backoffice/applications/edit/{id}', [ApplicationsController::class, 'edit'])->name('backoffice.applications.edit');
    Route::post('/backoffice/applications/edit/{id}', [ApplicationsController::class, 'update'])->name('backoffice.applications.update');
    Route::get('/backoffice/applications/delete/{id}', [ApplicationsController::class, 'delete'])->name('backoffice.applications.delete');
    Route::get('/backoffice/applications/preview', [ApplicationsController::class, 'preview'])->name('backoffice.applications.preview');
    Route::get('/backoffice/applications/saveapplication', [ApplicationsController::class, 'saveapplication'])->name('backoffice.applications.saveapplication');
    Route::get('/backoffice/applications/view/{id}', [ApplicationsController::class, 'view'])->name('backoffice.applications.view');

    Route::get('/backoffice/news', [NewsController::class, 'index'])->name('backoffice.news');
    Route::get('/backoffice/news/add', [NewsController::class, 'add'])->name('backoffice.news.add');
    Route::post('/backoffice/news/store', [NewsController::class, 'store'])->name('backoffice.news.store');
    Route::get('/backoffice/news/edit/{id}', [NewsController::class, 'edit'])->name('backoffice.news.edit');
    Route::post('/backoffice/news/update/{id}', [NewsController::class, 'update'])->name('backoffice.news.update');
    Route::get('/backoffice/news/delete/{id}', [NewsController::class, 'delete'])->name('backoffice.news.delete');

    Route::get('/backoffice/brochures', [BrochuresController::class,'index'])->name('backoffice.brochures');
    Route::get('/backoffice/brochures/add', [BrochuresController::class,'add'])->name('backoffice.brochures.add');
    Route::post('/backoffice/brochures/store', [BrochuresController::class,'store'])->name('backoffice.brochures.store');
    Route::get('/backoffice/brochures/edit/{id}', [BrochuresController::class,'edit'])->name('backoffice.brochures.edit');
    Route::post('/backoffice/brochures/update/{id}', [BrochuresController::class,'update'])->name('backoffice.brochures.update');
    Route::get('/backoffice/brochures/delete/{id}', [BrochuresController::class,'delete'])->name('backoffice.brochures.delete');

    Route::get('/backoffice/documents', [DocumentsController::class, 'index'])->name('backoffice.documents');
    Route::get('/backoffice/admindocuments', [DocumentsController::class, 'admindocuments'])->name('backoffice.admindocuments');
    Route::post('/backoffice/documents/store', [DocumentsController::class, 'store'])->name('backoffice.documents.store');
    Route::get('/backoffice/documents/delete/{id}', [DocumentsController::class, 'delete'])->name('backoffice.documents.delete');

    Route::get('/backoffice/events', [EventsController::class, 'index'])->name('backoffice.events');
    Route::get('/backoffice/events/add', [EventsController::class, 'add'])->name('backoffice.events.add');
    Route::post('/backoffice/events/store', [EventsController::class, 'store'])->name('backoffice.events.store');
    Route::get('/backoffice/events/edit/{id}', [EventsController::class, 'edit'])->name('backoffice.events.edit');
    Route::post('/backoffice/events/update/{id}', [EventsController::class, 'update'])->name('backoffice.events.update');
    Route::get('/backoffice/events/delete/{id}', [EventsController::class, 'delete'])->name('backoffice.events.delete');


    Route::get('/backoffice/supporttickets', [SupportticketsController::class, 'index'])->name('backoffice.supporttickets');
    Route::get('/backoffice/supporttickets/create', [SupportticketsController::class, 'create'])->name('backoffice.supporttickets.create');
    Route::post('/backoffice/supporttickets/store', [SupportticketsController::class, 'store'])->name('backoffice.supporttickets.store');
    Route::get('/backoffice/supporttickets/view/{id}', [SupportticketsController::class, 'view'])->name('backoffice.supporttickets.view');
    Route::post('/backoffice/supporttickets/reply', [SupportticketsController::class, 'reply'])->name('backoffice.supporttickets.reply');

    Route::get('/backoffice/application_guidance', [ApplicationguidanceController::class,'index'])->name('backoffice.application_guidance');
    Route::post('/backoffice/application_guidance/store', [ApplicationguidanceController::class,'store'])->name('backoffice.application_guidance.store');
    Route::get('/backoffice/application_guidance/edit/{id}', [ApplicationguidanceController::class,'edit'])->name('backoffice.application_guidance.edit');
    Route::post('/backoffice/application_guidance/update/{id}', [ApplicationguidanceController::class,'update'])->name('backoffice.application_guidance.update');
    Route::get('/backoffice/application_guidance/delete/{id}', [ApplicationguidanceController::class,'delete'])->name('backoffice.application_guidance.delete');

    Route::get('/backoffice/contactus', [ContactusController::class, 'index'])->name('backoffice.contactus');
    Route::post('/backoffice/contactus/store', [ContactusController::class, 'store'])->name('backoffice.contactus.store');
    
    Route::get('/backoffice/attendance', [AttendanceController::class,'index'])->name('backoffice.attendance');
    Route::get('/backoffice/payslip', [PayslipController::class,'index'])->name('backoffice.payslip');
    Route::get('/backoffice/payslip/add', [PayslipController::class,'add'])->name('backoffice.payslip.add');
    Route::post('/backoffice/payslip/store', [PayslipController::class,'store'])->name('backoffice.payslip.store');
    Route::get('/backoffice/payslip/edit/{id}', [PayslipController::class,'edit'])->name('backoffice.payslip.edit');
    Route::get('/backoffice/payslip/view/{id}', [PayslipController::class,'view'])->name('backoffice.payslip.view');
    Route::post('/backoffice/payslip/update/{id}', [PayslipController::class,'update'])->name('backoffice.payslip.update');
    Route::get('/backoffice/payslip/delete/{id}', [PayslipController::class,'delete'])->name('backoffice.payslip.delete');
    Route::get('/backoffice/employmentcontract', [UsersController::class,'employmentcontract'])->name('backoffice.employmentcontract');
    Route::post('/backoffice/postemploymentcontract', [UsersController::class,'postemploymentcontract'])->name('backoffice.postemploymentcontract');
    Route::get('/backoffice/deletecontract/{id}', [UsersController::class,'deletecontract'])->name('backoffice.deletecontract');

    Route::get('/backoffice/emergencydetails', [UsersController::class,'emergencydetails'])->name('backoffice.emergencydetails');
    Route::post('/backoffice/postemergencydetail', [UsersController::class,'postemergencydetail'])->name('backoffice.postemergencydetail');
    Route::get('/backoffice/deleteemergencycontact/{id}', [UsersController::class,'deleteemergencycontact'])->name('backoffice.deleteemergencycontact');


    Route::get('/backoffice/countries', [CountriesController::class, 'index'])->name('backoffice.countries');
    Route::get('/backoffice/countries/add', [CountriesController::class, 'add'])->name('backoffice.countries.add');
    Route::post('/backoffice/countries/add', [CountriesController::class, 'store'])->name('backoffice.countries.store');
    Route::get('/backoffice/countries/edit/{id}', [CountriesController::class, 'edit'])->name('backoffice.countries.edit');
    Route::post('/backoffice/countries/edit/{id}', [CountriesController::class, 'update'])->name('backoffice.countries.update');
    Route::get('/backoffice/countries/delete/{id}', [CountriesController::class, 'delete'])->name('backoffice.countries.delete');

    Route::get('/backoffice/students', [BackofficeStudentController::class, 'index'])->name('backoffice.students');
    Route::get('/backoffice/students/add', [BackofficeStudentController::class, 'add'])->name('backoffice.students.add');
    Route::post('/backoffice/students/add', [BackofficeStudentController::class, 'store'])->name('backoffice.students.store');
    Route::get('/backoffice/students/edit/{id}', [BackofficeStudentController::class, 'edit'])->name('backoffice.students.edit');
    Route::post('/backoffice/students/edit/{id}', [BackofficeStudentController::class, 'update'])->name('backoffice.students.update');
    Route::get('/backoffice/students/delete/{id}', [BackofficeStudentController::class, 'delete'])->name('backoffice.students.delete');

});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:staff'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
 
