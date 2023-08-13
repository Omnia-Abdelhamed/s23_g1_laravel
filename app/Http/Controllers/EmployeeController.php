<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('employees.index');
    }

    public function create(){
        return view('employees.create');
    }

    public function show($id){
        return view('employees.show');
    }
}
