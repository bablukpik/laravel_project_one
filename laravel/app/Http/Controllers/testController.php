<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class testController extends Controller
{

   public function about(){
		$mydata='Faruk Ahmed Bablu';
		$id='51';
		$dept='CSE';
		$records=array('name'=>'MD. Bablu Mia','id'=>'51','dept'=>'CSE');

		return view('about', compact('mydata','id', 'dept'))->with('records',$records);//page name ->with('name',$myData)
   }

//office-master project
    public function index(){
		return view('officemaster.index');//page name
   }

    public function aboutUs(){
		return view('officemaster.about');//page 
		
   }

}
