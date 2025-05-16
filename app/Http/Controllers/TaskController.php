<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function manajemenProject()
    {
        return view('manajemen-project');
    }
    
public function tugasSaya()
{
    return view('tugas-saya');
}



}
