<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Student_info;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */

//    protected $redirectTo = '/register2';
    protected $redirectTo = '/userTypeCheck';

//    protected $redirectTo = redirectTo();

//    protected function redirectTo()
//    {
//        return '/register2';
//    }

    protected $redirectAfterLogout = '/login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'matric_no' => 'required|Size:10|unique:users|exists:student_info,matric_no',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
       $student_info = Student_info::where('matric_no', $data['matric_no'])->get();
        $student_info_update = Student_info::where('matric_no', $data['matric_no'])->update(['is_registered'=>'1']);

        $request = app('request');


        if ($request->file(['picture_path'])){
            $prof_picture = $request->file('picture_path');
            $prof_picture_name = $prof_picture->getClientOriginalName();
            $prof_picture->move('prof_image', $prof_picture_name);
        }
        else{
            $prof_picture_name = 'avi.gif';
        }

        return User::create([
                'name' => $student_info[0]->name,
                'matric_no' => $data['matric_no'],
                'course' => $student_info[0]->course,
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'picture_path' => $prof_picture_name
            ]);
    }
}
