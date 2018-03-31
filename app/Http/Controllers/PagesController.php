<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
      $title = 'Welcome to RadBlog!!';
    	//return view('pages/index', compact('title'));
      return view('pages/index')->with('title',$title);
    }

 	public function about(){
      $title = 'About Me';
    	return view('pages/about')->with('title',$title);
    }

    public function services(){
      $data = array(
        'title' => 'Services Page',
        'services' => ['Web Design', 'Database Administration', 'Other Stuff']
      );
    	return view('pages/services')->with($data);
    }

}
