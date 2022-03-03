<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cats;

class catcontroller extends Controller
{

   public function index() {
        $data = cats::all();
        return view('cats.index', ['cats' => $data]);
   }

   public function create() {
        return view('cats.create');
   }

   public function store() {
        $data = new cats();
        $data->breed = request('breed');
        $data->type = request('type');
        $data->coatLength = request('coatLength');

        $data->save();
        return redirect('/cats')->with('mssg','Successfully Saved.');
  }

  public function show($id) {
     $data = cats::find($id);
     return view('cats.edit', ['cat' => $data]);
  }

  public function update(Request $request) {

     $data = cats::find($request->id);

     $data->breed = $request->breed;
     $data->type = $request->type;
     $data->coatLength = $request->coatLength;

     $data->save();

     return redirect('/cats')->with('mssg','Successfully Updated.');
 }

 public function destroy($id) {

     $data = cats::find($id);
     $data->delete();

     return redirect('/cats')->with('mssg','Deleted.');
 }


}
