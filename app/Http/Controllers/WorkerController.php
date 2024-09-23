<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workers  = Worker::paginate(10);
        return view('admin-panel.worker.index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-panel.worker.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Worker::create([
            'name' => $request->name,
            'email' => $request->email,
            'nrc' => $request->nrc,
            'phone' => $request->phone,
            'status' => $request->status,
            'start_date' => $request->start_date,
        ]);

        return redirect()->route('workers.index')->with('success', 'Worker created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $worker = Worker::find($id);
        return view('admin-panel.worker.edit', compact('worker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Worker::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'nrc' => $request->nrc,
            'phone' => $request->phone,
            'status' => $request->status,
            'start_date' => $request->start_date,
        ]);
        return redirect()->route('workers.index')->with('successMsg', 'You have successfully updated a worker!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Worker::find($id)->delete();
        return redirect()->route('workers.index')->with('successMsg', 'You have successfully deleted a worker!');
    }
}