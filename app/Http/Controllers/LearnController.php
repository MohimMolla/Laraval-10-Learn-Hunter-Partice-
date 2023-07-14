<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnController extends Controller
{
    /**
     * Handle the incoming request.
     */
    
    public function __invoke(Request $request)
    {
       // Data collect from Database
       return 'This is invock method';
    }
    public function hello(){
        return 'Example';
    }
}
