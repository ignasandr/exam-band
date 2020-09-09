<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Horse;

class HorseController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
       return view('horses.index', ['horses' => Horse::orderBy('name')->get()]);
    }

    public function create() {
        return view('horses.create', ['horses' => Horse::orderBy('name')->get()]);
    }

    public function store() {
       $horse = new Horse();

       $horse->name = request('name');
       $horse->runs = request('runs');
       $horse->wins = request('wins');
       $horse->about = request('about');
       $horse->save();
       return redirect()->route('horses.index');
    }

    public function show($id) {
        $horse = Horse::findOrFail($id);
        return view('horses.show', ['horse' => $horse, 'horses' => Horse::orderBy('name')->get()]);
    } 

    public function destroy($id){
        $horse = Horse::findOrFail($id);
        $horse->delete($id);

        return redirect()->route('horses.index');
    }
    public function update($id){
        $horse = Horse::findOrFail($id);

        $horse->name = request('name');
        $horse->runs = request('runs');
        $horse->wins = request('wins');
        $horse->about = request('about');
        $horse->save();
        return redirect()->route('horses.index');
    }
}