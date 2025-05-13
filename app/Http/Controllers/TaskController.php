<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = [
          
        ];
        return view('dashboard', ['tasks' => $tasks]);
    }

    public function store(Request $request)
    {
        // Simulasi penyimpanan
        return redirect('/');
    }
}
