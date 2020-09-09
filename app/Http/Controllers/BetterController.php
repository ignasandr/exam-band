<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Better;
use App\Horse;

class BetterController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
       return view('betters.index', ['betters' => Better::orderBy('bet', 'DESC')->get()]);
    }

    public function create() {
        return view('betters.create', ['horses' => Horse::orderBy('name')->get()]);
    }

    public function store() {
       $better = new Better();

       $better->name = request('name');
       $better->surname = request('surname');
       $better->bet = request('bet');
       $better->horse_id = request('horse_id');
       $better->save();
       return redirect()->route('betters.index');
    }

    public function show($id) {
        $better = Better::findOrFail($id);
        return view('betters.show', ['better' => $better, 'horses' => Horse::orderBy('name')->get()]);
    } 

    public function destroy($id){
        $better = Better::findOrFail($id);
        $better->delete($id);

        return redirect()->route('betters.index');
    }
    public function update($id){
        $better = Better::findOrFail($id);

        $better->name = request('name');
        $better->surname = request('surname');
        $better->bet = request('bet');
        $better->horse_id = request('horse_id');
        $better->save();
        return redirect()->route('betters.index');
    }
}
