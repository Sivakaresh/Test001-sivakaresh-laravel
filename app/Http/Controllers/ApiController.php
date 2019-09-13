<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class ApiController extends Controller
{
    //
    public function create(Request $request){
        $students = new Student();
        $students->region = $request->input('region');
        $students->country = $request->input('country');
        $students->itemType = $request->input('itemType');

        $students->save();
        return response()->json($students);
    }
}
