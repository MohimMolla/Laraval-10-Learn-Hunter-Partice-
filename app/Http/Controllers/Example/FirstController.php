<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FirstController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        return view('test.contact');
    }
    public function country(){
        return response('hello world');
    }
    public function laraval(){
        if (view()->exists('laraval'))
        {
            return view::make('laraval',['name'=>'Mohim']); 
        }else{
            echo "No data Found";
        }
    
       
    }
    // store method
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:55',
            // 'email' => 'required|unique:users|max:80',
            'email' => 'required|email|max:80',
            'password' => 'required|min:6|max:15',
        ]);
        dd($request->all());

    }
}
