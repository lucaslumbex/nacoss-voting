<?php

namespace App\Http\Controllers;

use App\Candidates;
use App\Vote_categories;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $logged_in_user = Auth::user();
        $candidates = Candidates::all();
        $allData = [
            'candidates' => $candidates,
            'current_user' => $logged_in_user,
            'error' => '',
            'title' => 'All Candidates',
            'ActivePage' => 'All Candidates'
        ];
        return view('admin.candidate.all', $allData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories

        $logged_in_user = Auth::user();
        $categories = Vote_categories::all();

        $allData = [
            'current_user' => $logged_in_user,
            'categories' => $categories,
            'error' => '',
            'success' => '',
            'title' => 'Add Candidate',
            'ActivePage' => 'Add Candidate'
        ];
        return view('admin.candidate.add', $allData);

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'category'=> 'required',
            'cand_name'=> 'required|unique:candidates,cand_name',
            'cand_course'=> 'required',
//            'cand_picture'=> 'required',
//            'cand_campaign_pic'=> 'required',
            'cand_campaign_memo'=> 'required',
        ]);

//        dd($request);

        if ($cand_picture = $request->file('cand_picture')){
            $cand_picture_name = $cand_picture->getClientOriginalName();
            $cand_picture->move('image', $cand_picture_name);
        }else{
            $cand_picture_name = 'avi.jpg';
        }
        if ($cand_campaign_pic = $request->file('cand_campaign_pic')){
            $cand_campaign_pic_name = $cand_campaign_pic->getClientOriginalName();
            $cand_campaign_pic->move('image', $cand_campaign_pic_name);
        }else{
            $cand_campaign_pic_name = 'hero-background.png';
        }

        echo $cand_picture_name;
//        return $cand_campaign_pic_name;


        $candidate = new Candidates();
        $candidate->category= $request->category;
        $candidate->cand_name= $request->cand_name;
        $candidate->cand_course= $request->cand_course;
        $candidate->cand_picture= $cand_picture_name;
        $candidate->cand_campaign_pic= $cand_campaign_pic_name;
        $candidate->cand_campaign_memo= $request->cand_campaign_memo;

        $logged_in_user = Auth::user();
        $categories = Vote_categories::all();
        $check_max_number1 = Vote_categories::where('cat_name',$request->category)->orderBy('id', 'desc')->get();
        $check_max_number2 = Candidates::where('category',$request->category)->count();
        $check_max_number1_max = $check_max_number1[0]->max_no_of_candidate;

        if ($check_max_number2 >= $check_max_number1_max){
            $allData = [
                'current_user' => $logged_in_user,
                'categories' => $categories,
                'error' => 'Candidates for this category already at maximum',
                'success' => '',
                'title' => 'Add Candidate',
                'ActivePage' => 'Add Candidate'
            ];
            return view('admin.candidate.add', $allData);
        }else{
            $save_am = $candidate->save();
            if (!$save_am){
                $allData = [
                    'current_user' => $logged_in_user,
                    'categories' => $categories,
                    'error' => 'Record Not Added',
                    'success' => '',
                    'title' => 'Add Candidate',
                    'ActivePage' => 'Add Candidate'
                ];
                return view('admin.candidate.add', $allData);
            }else{
                $allData = [
                    'current_user' => $logged_in_user,
                    'categories' => $categories,
                    'error' => '',
                    'success' => 'Record Successfully Added',
                    'title' => 'Add Candidate',
                    'ActivePage' => 'Add Candidate'
                ];
                return view('admin.candidate.add', $allData);
            }
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
