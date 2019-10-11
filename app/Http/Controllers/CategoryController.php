<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function ajouter_categorie()
    {


    	return view('ajouter_categorie');
    }


    public function post_ajouter_categorie(Request $request)
    {


        $data=$request->validate([
                                    'name'=> 'required |unique:categories'
                                    
                                  ]);
        //dd($data);
        Category::create($data);


        return back()->with('success','Votre catégorie a été ajouté');
    	//return view('ajouter_livre');
    }

    public function deleteCategory($id)
    {
    	$categorie_a_supprimer=Category::where('id',$id)->first(); 
        $categorie_a_supprimer->delete();
        return back()->with('success','Votre catégorie a été supprimé');
    }

    public function voirCatergorie($id)
    {
        $categorie=Category::find($id);

        return view('voir_categorie', ['categorie'=>$categorie]);
    }

    public function editCatergorie($id)
    {
        $categorie=Category::find($id);

        $categorie->livres;
        //compact(tableau associative)==['categorie'=>$categorie]

        return view('edit_categorie', ['categorie'=>$categorie]);
    }
    
    
    public function updateCatergorie(Request $request,$id)
    {

       $data=$request->validate([
                            'name'=> 'required'
                          ]);
        $categorie=Category::find($id);
        $categorie->update($data);
               //dd($request->all());
        //return view('home');
        return back()->with('success','Votre catégorie a été modifié');
    }
}
