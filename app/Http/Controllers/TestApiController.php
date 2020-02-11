<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestApiController extends Controller
{
    public function test(){
    	// $data = [
    	// 	'siswa'=>\App\Student::paginate(),
    	// ];
    	// return $data;

    	return \App\Student::paginate(2);
    }
}
