<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoriesController extends Controller
{
    public function ajout(){
        return view('categorie.ajout');
    }
    public function ajoutcat(Request $request){

        $this->validate($request,[
        'nom'=>'required|min:2|max:50|unique:categories'
        ]);
        $categorie= new categorie();
        $categorie->nom=$request->nom;
        $categorie->save();
        flash( 'La categorie est créée avec succès')->success();
        return back();
      }
      public function index(){
          $categories=categorie::orderby('created_at','DESC')->get();
          return view('categorie.index',compact('categories'));
      }
      public function edit($id){
          $categories=Categorie::findOrFail($id);
          return view ( 'cotegorie.editer' ,compact('categories'));
      }
      public function update(Request $request, $id){
        $this->validate($request,[
            'nom'=>'required|min:2|max:50|unique:categories,nom'. $id
            ]);
            $categorie=categorie::findOrFail($id);
            $categorie->nom=$request->nom;
            $categorie->save();
            flash( 'La categorie est modifiée avec succès')->success();
        return redirect()->route('password.confirmtegorie.index');
      }
} 