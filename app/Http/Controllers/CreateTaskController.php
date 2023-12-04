<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class CreateTaskController extends Controller
{
    public function crearTasques(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'optional',
            'completed' => 'required',
        ]);

        Task::create([
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'completed' => $request->input('completed'),
        ]);

        return redirect('/');
    }
}
