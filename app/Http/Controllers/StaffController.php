<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staff = DB::table('staff')->get();
        
        return view('staff.index', ['staff' => $staff]);
    }

    public function create()
    {

    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}
