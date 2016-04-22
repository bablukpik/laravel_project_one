<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\myFirstModel;
use Auth;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $count=1;
        $allDBdata = myFirstModel::orderBy('user_name');
        $user_fullname=$request->input('user_fullname');
        $user_name=$request->input('user_name');
        if(!empty($user_fullname)){
            $allDBdata->where('user_fullname', 'like', '%'.$user_fullname.'%');
        }

        if(!empty($user_name)){
            $allDBdata->where('user_name', 'like', '%'.$user_name.'%');
        }

         $allDBdata = $allDBdata->paginate(3);
        return view('dbTest.index', compact('allDBdata','count'));
       
        //return $allDBdata;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            return view('dbTest.form');
        }
        return redirect('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        //return $input;
        myFirstModel::create($input);
        return redirect('reg');
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
        $allDBdata=myFirstModel::findOrFail($id);
        return view('dbTest.edit',compact('allDBdata'));
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
        $inputData=$request->all();
        $dbQueryData=myFirstModel::findOrfail($id);
        $dbQueryData->update($inputData);
        return redirect('reg');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dbQueryData=myFirstModel::findOrfail($id);
        $dbQueryData->delete($dbQueryData);
        return redirect('reg');
    }
}
