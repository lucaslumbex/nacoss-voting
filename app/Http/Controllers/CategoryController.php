<?php

namespace App\Http\Controllers;

use App\Vote_categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class CategoryController extends Controller
{
    /**
     * Pipe in the middleware
     *
     * 
     */
    public function __construct()
    {
        $this->middleware('isAdmin', ['only' => ['create', 'store', 'edit', 'delete']]);
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
        $categories = Vote_categories::all();
        $allData = [
            'categories' => $categories,
            'current_user' => $logged_in_user,
            'error' => '',
            'success' => '',
            'title' => 'All Category',
            'ActivePage' => 'All Category'
        ];
        return view('admin.category.all', $allData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $logged_in_user = Auth::user();
        $allData = [
            'current_user' => $logged_in_user,
            'error' => '',
            'success' => '',
            'title' => 'Add Category',
            'ActivePage' => 'Add Category'
        ];
        return view('admin.category.add', $allData);
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
            'cat_name'=> 'required|unique:vote_categories,cat_name',
            'max_no_of_candidate'=> 'required'
        ]);

        $logged_in_user = Auth::user();
        $vote_categories = new Vote_categories(['cat_name' => $request->cat_name, 'max_no_of_candidate' => $request->max_no_of_candidate]);

        $save_am = $vote_categories->save();
        if (!$save_am){
            $allData = [
                'current_user' => $logged_in_user,
                'error' => 'Record Not Added',
                'success' => '',
                'title' => 'Add Category',
                'ActivePage' => 'Add Category'
            ];
            return view('admin.category.add', $allData);
        }else{
            $allData = [
                'current_user' => $logged_in_user,
                'error' => '',
                'success' => 'Record Successfully Added',
                'title' => 'Add Category',
                'ActivePage' => 'Add Category'
            ];
            return view('admin.category.add', $allData);
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
