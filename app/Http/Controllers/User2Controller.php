<?php

namespace App\Http\Controllers;

use App\Candidates;
use App\Student_info;
use App\Vote_categories;
use App\Vote_center;
use App\Vote_timer;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class User2Controller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('isUser');
    }

    public function index()
    {
        //
        $vot_timer = Vote_timer::all();
        $logged_in_user = Auth::user();

        $allData = [
            'current_user' => $logged_in_user,
            'vot_timer' => $vot_timer[0],
            'error' => '',
            'success' => '',
            'title' => 'All Student Info',
            'ActivePage' => 'All Student Info'
        ];

        return view('users.index', $allData);
    }

    public function vote_center()
    {
        //
//        return $vot_timer[0]->is_vote_active;

        $vot_timer = Vote_timer::all();
        $logged_in_user = Auth::user();
        $vote_center = Vote_center::all();
        $categories = Vote_categories::all();
        $candidate = Candidates::all();

        $sort= [];

        for ($i = 0; $i < $candidate->count(); $i++){
            if (!empty($categories[$i])) {
                $candidate2 = Candidates::where('category',$categories[$i]->cat_name)->get();
                $sort[] = array($categories[$i]->cat_name => $candidate2);
            }
        }


        $allData = [
            'current_user' => $logged_in_user,
            'vot_timer' => $vot_timer[0],
            'sort' => $sort,
            'error' => '',
            'success' => '',
            'title' => 'Vote Center',
            'ActivePage' => 'Vote Center'
        ];

//        return $sort;
        return view('users.vote_center', $allData);

    }

        public function vote_cast(Request $request)
    {
        //
        $this->validate($request,[
            'candidate_id'=> 'required',
            'user_id'=> 'required',
//            'course'=> 'required'
        ]);

        $vot_timer = Vote_timer::all();
        $logged_in_user = Auth::user();
        $candidate = Candidates::where('id',$request->candidate_id)->get();

//        return $candidate;

        $vote_center= new Vote_center();
        $vote_center->category = $candidate[0]->category;
        $vote_center->chosen_candidate = $candidate[0]->cand_name;
        $vote_center->chosen_candidate_pic = $candidate[0]->cand_picture;  $vote_center->voter_email = $logged_in_user->email;
        $vote_center->voter_matric_no = $logged_in_user->matric_no;

        $check_existence = Vote_center::where('voter_email',$logged_in_user->email)->where('category',$candidate[0]->category)->get()->count();

        if ($check_existence > 0){
            return 'already voted';
        }else{
            $vote_center->save();
            return redirect('/users/vote_center');
        }

//        $allData = [
//            'current_user' => $logged_in_user,
//            'vot_timer' => $vot_timer[0],
//            'error' => '',
//            'success' => '',
//            'title' => 'All Student Info',
//            'ActivePage' => 'All Student Info'
//        ];
//
//        return $check_existence;

//        return view('users.index', $allData);
    }

    public function vote_results()
    {
        //
        $vot_timer = Vote_timer::all();
        $logged_in_user = Auth::user();
        $vote_center = Vote_center::all();
        $categories = Vote_categories::all();
        $candidate = Candidates::all();

        function mult_dim_unique ($array, $key){
            $temp_aray = array();
            $i = 0;
            $key_arry = array();

            foreach ($array as $val){
                if (!in_array($val[$key],$key_arry)){
                    $key_arry[$i] = $val[$key];
                    $temp_aray[$i] = $val;
                }
                $i++;
            }
            return $temp_aray;
        }

        $sort= [];
        $sort2= [];

        for ($i = 0; $i < $categories->count(); $i++){
            $vote_center2 = Vote_center::where('category',$categories[$i]->cat_name)->get();
            for ($j = 0; $j < $vote_center2->count(); $j++){

                $vote_center3 = Vote_center::where('chosen_candidate',$vote_center2[$j]->chosen_candidate)->get();

                $sort2[] = array("name"=>$vote_center2[$j]->chosen_candidate, "details"=>$vote_center3[0], "count"=>$vote_center3->count());
            }
            $sort2 = mult_dim_unique($sort2, 'name');
            $sort[] = array($categories[$i]->cat_name => $sort2);
            $sort2 = [];
        }

        $allData = [
            'current_user' => $logged_in_user,
            'vot_timer' => $vot_timer[0],
            'sort' => $sort,
            'error' => '',
            'success' => '',
            'title' => 'Vote Results',
            'ActivePage' => 'Vote Results'
        ];

//        return $sort;
        return view('users.vote_results', $allData);
    }

    public function profile($id)
    {
        //
        $vot_timer = Vote_timer::all();
        $logged_in_user = Auth::user();
        $cadidate_profile = Candidates::where('id', $id)->get();

        $allData = [
            'current_user' => $logged_in_user,
            'vot_timer' => $vot_timer[0],
            'candidate' => $cadidate_profile[0],
            'error' => '',
            'success' => '',
            'title' => 'Profile',
            'ActivePage' => 'Profile'
        ];
//        return $cadidate_profile[0];
        return view('users.cand_profile', $allData);
    }

    public function my_profile()
    {
        //
        $vot_timer = Vote_timer::all();
        $logged_in_user = Auth::user();
//        $cadidate_profile = Candidates::where('id', $logged_in_user->id)->get();

        $allData = [
            'current_user' => $logged_in_user,
            'vot_timer' => $vot_timer[0],
            'error' => '',
            'success' => '',
            'title' => 'My Profile',
            'ActivePage' => 'My Profile'
        ];
//        return $cadidate_profile[0];
        return view('users.user_profile', $allData);
    }

}
