<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TabelAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ts=Table::all();
        return response()->json($ts);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $tc=Table::create([
            "name"=>$req->name,
            "course"=>$req->course,
            "grade"=>$req->grade
        ]);
         if ($tc) {
            return "suuuuuuuiiiiiiuuuu";
        }
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $te=Table::find($id)->update(request()->all());
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $td=Table::find($id)->delete();
    }
}
