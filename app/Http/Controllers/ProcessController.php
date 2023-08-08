<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $process = Process::all();
        return view('process.index', compact('process'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('process.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $process = new Process();
        $process->name = $request->name;
        $process->description =$request->description;
        $process->save();

        return redirect()->route('process.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Process $process):View
    {
        return view('process.show', compact('process'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Process $process):View
    {
        return view('process.edit', compact('process'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Process $process):RedirectResponse
    {
        $process->update($request->all());
        return redirect()->route('process.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Process $process):RedirectResponse
   {
        $process->delete();
        return redirect()->route('process.index');
    }
}
