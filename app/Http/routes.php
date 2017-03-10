<?php

use App\User;
use App\Student_info;
use App\Vote_categories;
use App\Candidates;
use App\Vote_center;
use App\Vote_timer;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {

    if (Auth::check()){
        $logged_in_user = Auth::user();
        $check_Is_admin = $logged_in_user->is_admin;

        if ($check_Is_admin == 1 ){

            return redirect('admin/dashboard');
        }else{

            return redirect('users/index');
        }
    }else{
        return redirect('/login');
    }

});
Route::get('/err_AccessDenied',['middleware'=>'auth', function () {

    $logged_in_user = Auth::user();

    $allData = [
        'current_user' => $logged_in_user,
        'error' => 'Tho does not have the permisiion to view this file dey your lane BIKO!',
        'title' => 'Error (Access Denied)',
        'ActivePage' => 'Error (Access Denied)'
    ];
    return view('err_AccessDenied', $allData);

}]);


Route::get('/userTypeCheck', function () {

    $logged_in_user = Auth::user();

    if ($logged_in_user->is_admin == 0){
//        return redirect('user/home');
//        return 'i be user';
        return redirect('/users/index');

    }else{
        return redirect('/admin/');
//        return 'you be Admin';
    }
//    return view('register2');
});

Route::get('/adminadd', function () {
//    13cghADMIN ADMIN administrator

//    $matric_no_val = '13cghADMIN';
//    $cand_name_val = 'ADMIN';
//    $cand_course_val = 'administrator';

//    $studendt_info = new Student_info();
//    $studendt_info->matric_no = $matric_no_val;
//    $studendt_info->name = $cand_name_val;
//    $studendt_info->course = $cand_course_val;
//    $save_am = $studendt_info->save();

    $vote_timer = new Vote_timer();
    $vote_timer->is_vote_active = 0;
    $vote_timer->save();

    return Vote_timer::all();

});



/*
|--------------------------------------------------------------------------
| Admin APIs
|--------------------------------------------------------------------------
|
| Here are the admin APIs.
|
*/

/*|--------------------------------------------------------------------------
    admin/index API
  |--------------------------------------------------------------------------
*/
Route::get('/admin/', function () {
    $logged_in_user = Auth::user();
        $check_Is_admin = $logged_in_user->is_admin;

    if ($check_Is_admin == 0 || $check_Is_admin >= 2 ){
        return 'Tho does not have the permisiion to view this file dey your lane BIKO!';
    }else{
    $logged_in_user = Auth::user();
        return redirect('/admin/dashboard');
    }
});
/*|--------------------------------------------------------------------------
    admin/dashboard API
  |--------------------------------------------------------------------------
*/
Route::get('/admin/dashboard', function () {
    if (Auth::check()){
        $logged_in_user = Auth::user();
        $check_Is_admin = $logged_in_user->is_admin;

        if ($check_Is_admin == 0 || $check_Is_admin >= 2 ){
            return 'Tho does not have the permisiion to view this file dey your lane BIKO!';
        }else{
            $logged_in_user = Auth::user();

            $allData = [
                'current_user' => $logged_in_user,
                'error' => '',
                'title' => 'Dashboard',
                'ActivePage' => 'Dashboard'
            ];

            return view('admin.dashboard', $allData);
        }
    }else{
        return redirect('/login');
    }
});



/*|--------------------------------------------------------------------------
    POST category/create API
  |--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth']], function () {
    //
    Route::resource('/admin/user', 'UserController@index');
    Route::resource('/admin/{matric_no}/user_profile', 'UserController@user_profile');
    Route::resource('/admin/category', 'CategoryController');
    Route::resource('/admin/candidate', 'CandidateController');
    Route::resource('/admin/student_info', 'Student_infoController');

    Route::resource('/users/index', 'User2Controller@index');
    Route::resource('/users/profile', 'User2Controller@my_profile');
    Route::resource('/users/vote_center', 'User2Controller@vote_center');
    Route::resource('/users/{id}/profile', 'User2Controller@profile');
    Route::resource('/users/vote_cast', 'User2Controller@vote_cast');
    Route::resource('/users/vote_results', 'User2Controller@vote_results');

});

/*|--------------------------------------------------------------------------
    candidate/create API
  |--------------------------------------------------------------------------
*/
Route::get('/candidate/create', function (){
//    'category', 'cand_name','cand_course','cand_picture','cand_campaign_pic','cand_campaign_memo'
    $category_val = 'President';
    $cand_name_val = 'dipo';
    $cand_course_val = 'Computer Science';
    $cand_picture_val = 'PATH';
    $cand_campaign_pic_val = 'Path2';
    $cand_campaign_memo_val = 'Make CMIS great again';

    $candidate = new Candidates();
    $candidate->category= $category_val;
    $candidate->cand_name= $cand_name_val;
    $candidate->cand_course= $cand_course_val;
    $candidate->cand_picture= $cand_picture_val;
    $candidate->cand_campaign_pic= $cand_campaign_pic_val;
    $candidate->cand_campaign_memo= $cand_campaign_memo_val;

    $check_max_number1 = Vote_categories::where('cat_name',$category_val)->orderBy('id', 'desc')->take(1)->get();
    $check_max_number2 = Candidates::count('category',$category_val);
    $check_max_number1_max = $check_max_number1[0]->max_no_of_candidate;

    if ($check_max_number2 >= $check_max_number1_max){
        return 'max number of allowed candidate for this post exceeded';
    }else{
        $check_Redundance = Candidates::where('cand_name', $cand_name_val)->get()->count();

        if ($check_Redundance > 0){
            return 'entry already exist in the DB';
        }else{
            $save_am = $candidate->save();
            echo Candidates::all() ;
//            return 'success ';

        }
    }
});

/*|--------------------------------------------------------------------------
    user/all API
  |--------------------------------------------------------------------------
*/
Route::get('/user/all', function (){
//    $matric_no_val= '13cg015891';

    if (Auth::check()){
        $logged_in_user = Auth::user();
        $check_Is_admin = $logged_in_user->is_admin;

        if ($check_Is_admin == 0 || $check_Is_admin >= 2 ){
            return 'Tho does not have the permisiion to view this page so dey your lane BIKO!';
        }else{

        }
    }else{
        return redirect('/login');
    }
});



/*|--------------------------------------------------------------------------
     vote_timer/check API
  |--------------------------------------------------------------------------
*/
Route::get('/vote_timer/check', function (){
    $matric_no_val= '13cg015891';

//    $check_Is_admin = User::where('matric_no', $matric_no_val)->get();

//    if ($check_Is_admin->is_admin == 0 || $check_Is_admin->is_admin >= 2 ){
//        return 'Tho does not have the permisiion to view this file dey your lane BIKO!';
//    }else{
    $vote_timmer = Vote_timer::all();
//        return $student_info[0];
    return $vote_timmer;
//    }
});


/*|--------------------------------------------------------------------------
     candidate/all API
  |--------------------------------------------------------------------------
*/
Route::get('/candidate/all', function (){
    $matric_no_val= '13cg015891';

    if (Auth::check()){
        $logged_in_user = Auth::user();
        $check_Is_admin = $logged_in_user->is_admin;

        if ($check_Is_admin == 0 || $check_Is_admin >= 2 ){
            return 'Tho does not have the permisiion to view this page so dey your lane BIKO!';
        }else{
            $candidates = Candidates::all();
            $allData = [
                'candidates' => $candidates,
                'error' => '',
                'title' => 'All Candidates',
                'ActivePage' => 'All Candidates'
            ];
            return view('admin.candidate.all', $allData);
        }
    }else{
        return redirect('/login');
    }
});


/*|--------------------------------------------------------------------------
     vote_center/count API (SKIPPED)
  |--------------------------------------------------------------------------
*/



//

/*|--------------------------------------------------------------------------
     vote_timer/activate API
  |--------------------------------------------------------------------------
*/
Route::get('/vote_timer/activate', function (){
    $matric_no_val= '13cg015891';

//    $check_Is_admin = User::where('matric_no', $matric_no_val)->get();

//    if ($check_Is_admin->is_admin == 0 || $check_Is_admin->is_admin >= 2 ){
//        return 'Tho does not have the permisiion to view this file dey your lane BIKO!';
//    }else{
    $vote_activate = Vote_timer::where('id', 1)->update(['is_vote_active'=>1]);
//        return $student_info[0];
    return Vote_timer::all();
//    }
});

/*|--------------------------------------------------------------------------
     vote_timer/deactivate API
  |--------------------------------------------------------------------------
*/
Route::get('/vote_timer/deactivate', function (){
    $matric_no_val= '13cg015891';

//    $check_Is_admin = User::where('matric_no', $matric_no_val)->get();

//    if ($check_Is_admin->is_admin == 0 || $check_Is_admin->is_admin >= 2 ){
//        return 'Tho does not have the permisiion to view this file dey your lane BIKO!';
//    }else{
    $vote_deactivate = Vote_timer::where('id', 1)->update(['is_vote_active'=>0]);
//        return $student_info[0];
    return Vote_timer::all();
//    }
});


/*|--------------------------------------------------------------------------
     category/update/{id} API
  |--------------------------------------------------------------------------
*/
Route::get('/category/update/{id}', function ($id) {
    $matric_no_val = '13cg015891';
    $cat_name_val = 'President';
    $max_no_of_candidate_val = 9;

//    $check_Is_admin = User::where('matric_no', $matric_no_val)->get();

//    if ($check_Is_admin->is_admin == 0 || $check_Is_admin->is_admin >= 2 ){
//        return 'Tho does not have the permisiion to view this file dey your lane BIKO!';
//    }else{
    $vote_category_find = Vote_categories::where('id', $id)->count();
    if ($vote_category_find <= 0) {
        return 'Category does\'t exist';
    } elseif ($vote_category_find >= 2) {
        return 'Database Error : Multiple Categories with the same ID';
    } else {
        $Vote_category = Vote_categories::where('id', $id)->update([
            'cat_name' => $cat_name_val,
            'max_no_of_candidate' => $max_no_of_candidate_val
        ]);

        return Vote_categories::where('id', $id)->get();

    }
//    }

});


/*|--------------------------------------------------------------------------
     candidate/update/{id} API
  |--------------------------------------------------------------------------
*/
Route::get('/candidate/update/{id}', function ($id) {
    $matric_no_val = '13cg015891';
    $category_val = 'President';
    $cand_name_val = 'ONI OLADIPO';
    $cand_course_val = 'Computer Science';
    $cand_picture_val = 'PATH';
    $cand_campaign_pic_val = 'Path2';
    $cand_campaign_memo_val = 'Make CMIS great again';

//    $check_Is_admin = User::where('matric_no', $matric_no_val)->get();

//    if ($check_Is_admin->is_admin == 0 || $check_Is_admin->is_admin >= 2 ){
//        return 'Tho does not have the permisiion to view this file dey your lane BIKO!';
//    }else{
    $vote_category_find = Candidates::where('id', $id)->count();
    if ($vote_category_find <= 0) {
        return 'Category does\'t exist';
    } elseif ($vote_category_find >= 2) {
        return 'Database Error : Multiple Categories with the same ID';
    } else {
        $Vote_category = Candidates::where('id', $id)->update([
            'category' => $category_val,
            'cand_name' => $cand_name_val,
            'cand_course' => $cand_course_val,
            'cand_picture' => $cand_picture_val,
            'cand_campaign_pic' => $cand_campaign_pic_val,
            'cand_campaign_memo' => $cand_campaign_memo_val
        ]);

        return Candidates::where('id', $id)->get();

    }
//    }

});


/*|--------------------------------------------------------------------------
     student_info/update/{id} API
  |--------------------------------------------------------------------------
*/
Route::get('/student_info/update/{id}', function ($id) {
    $matric_no_val = '13cg015892';
    $name_val = 'Oni Dipo';
    $course_val = 'computer science';

//    $check_Is_admin = User::where('matric_no', $matric_no_val)->get();

//    if ($check_Is_admin->is_admin == 0 || $check_Is_admin->is_admin >= 2 ){
//        return 'Tho does not have the permisiion to view this file dey your lane BIKO!';
//    }else{
    $vote_category_find = Student_info::where('id', $id)->count();
    if ($vote_category_find <= 0) {
        return 'Category does\'t exist';
    } elseif ($vote_category_find >= 2) {
        return 'Database Error : Multiple Categories with the same ID';
    } else {
        $student_info = Student_info::where('id', $id)->update([
            'matric_no' => $matric_no_val,
            'name' => $name_val,
            'course' => $course_val
        ]);

//        if ($vote_category)

        return Student_info::where('id', $id)->get();
    }
//    }
});


/*|--------------------------------------------------------------------------
     student_info/delete/{id} API
  |--------------------------------------------------------------------------
*/
Route::get('/student_info/delete/{id}', function ($id) {
//    $matric_no_val = '13cg015892';

//    $check_Is_admin = User::where('matric_no', $matric_no_val)->get();

//    if ($check_Is_admin->is_admin == 0 || $check_Is_admin->is_admin >= 2 ){
//        return 'Tho does not have the permisiion to view this file dey your lane BIKO!';
//    }else{
    $student_info = Student_info::where('id', $id);
    if ($student_info->count() <= 0) {
        return 'Student Info does\'t exist';
    } elseif ($student_info->count() >= 2) {
        return 'Database Error : Multiple Categories with the same ID';
    } else {
        $student_info->delete();

//        if ($vote_category)

        return Student_info::all();
    }
//    }
});


/*|--------------------------------------------------------------------------
     user/delete/{id} API
  |--------------------------------------------------------------------------
*/
Route::get('/student_info/delete/{id}', function ($id) {
//    $matric_no_val = '13cg015892';

//    $check_Is_admin = User::where('matric_no', $matric_no_val)->get();

//    if ($check_Is_admin->is_admin == 0 || $check_Is_admin->is_admin >= 2 ){
//        return 'Tho does not have the permisiion to view this file dey your lane BIKO!';
//    }else{
    $user = User::where('id', $id);
    if ($user->count() <= 0) {
        return 'Student Info does\'t exist';
    } elseif ($user->count() >= 2) {
        return 'Database Error : Multiple Categories with the same ID';
    } else {
        $user->delete();

//        if ($vote_category)

        return User::all();
    }
//    }
});

/*|--------------------------------------------------------------------------
     category/delete/{id} API
  |--------------------------------------------------------------------------
*/
Route::get('/category/delete/{id}', function ($id) {
//    $matric_no_val = '13cg015892';

//    $check_Is_admin = User::where('matric_no', $matric_no_val)->get();

//    if ($check_Is_admin->is_admin == 0 || $check_Is_admin->is_admin >= 2 ){
//        return 'Tho does not have the permisiion to view this file dey your lane BIKO!';
//    }else{
    $category = Vote_categories::where('id', $id);
    if ($category->count() <= 0) {
        return 'Student Info does\'t exist';
    } elseif ($category->count() >= 2) {
        return 'Database Error : Multiple Categories with the same ID';
    } else {
        $category->delete();

//        if ($vote_category)

        return Vote_categories::all();
    }
//    }
});


/*|--------------------------------------------------------------------------
     category/delete/{id} API
  |--------------------------------------------------------------------------
*/
Route::get('/candidate/delete/{id}', function ($id) {
//    $matric_no_val = '13cg015892';

//    $check_Is_admin = User::where('matric_no', $matric_no_val)->get();

//    if ($check_Is_admin->is_admin == 0 || $check_Is_admin->is_admin >= 2 ){
//        return 'Tho does not have the permisiion to view this file dey your lane BIKO!';
//    }else{
    $candidate = Candidates::where('id', $id);
    if ($candidate->count() <= 0) {
        return 'Student Info does\'t exist';
    } elseif ($candidate->count() >= 2) {
        return 'Database Error : Multiple Categories with the same ID';
    } else {
        $candidate->delete();

//        if ($vote_category);

        return Candidates::all();
    }
//    }
});



/*|--------------------------------------------------------------------------
     User APIs
  |--------------------------------------------------------------------------
*/

/*|--------------------------------------------------------------------------
    user/index API
  |--------------------------------------------------------------------------
*/
Route::get('/user/chk', function () {
//    $logged_in_user = Auth::user();

    $check_max_number1 = Vote_categories::where('cat_name','Secretary')->orderBy('id', 'desc')->get();
//    $check_max_number2 = Candidates::count('category','Secretary');
    $check_max_number2 = Candidates::where('category','Secretary')->count();
//    $check_max_number2 = Candidates::all();
    $check_max_number1_max = $check_max_number1[0]->max_no_of_candidate;

    return $check_max_number2;


});




Route::auth();

Route::get('/home', 'HomeController@index');
