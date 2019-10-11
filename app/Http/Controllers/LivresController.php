<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



use App\Livre;
use App\Category;

class LivresController extends Controller
{
    public function ajouter_livre()
    {


    	return view('ajouter_livre');
    }


    public function post_ajouter_livre(Request $request)
    {

        
        $data=$request->validate([
                                    'titre'=> 'required',
                                    'description'=> 'required',
                                    'auteur'=> '',
                                    'nbr_pages'=> '',
                                    'category_id'=> ''
                                  ]);
        //dd($data);
        Livre::create($data);
             //  $livre=new Livre;

             // $livre->titre=$request->titre;

             //  $livre->description=$request->description;


             //  $livre->save();

        return back()->with('success','Votre livre a été ajouté');
    	//return view('ajouter_livre');
    }

    public function deleteLivre($livre)
    {
        //$livre_a_supprimer=Livre::find($livre)->delete(); 
        $livre_a_supprimer=Livre::where('id',$livre)->first(); 
        $livre_a_supprimer->delete();
        return back()->with('success','Votre livre a été supprimé');
    } 

    public function voirLivre($id)
    {
        //$livres=Livre::where('id',$id)->first();
        $livres=Livre::find($id);
        //dd($livres);
        return view('voir_livre', ['livres'=>$livres]);
    }

    public function editLivre($id)
    {
        //$livres=Livre::where('id',$id)->first();
        $livre=Livre::find($id);

        return view('edit_livre', ['livre'=>$livre]);
    } 
    
    public function updateLivre(Request $request,$id)
    {

       $data=$request->validate([
                            'titre'=> 'required',
                            'description'=> 'required',
                            'auteur'=> '',
                            'nbr_pages'=> '',
                            'category_id'=> ''
                          ]);
                      //dd($data);

        $livre=Livre::find($id);
        $livre->update($data);
        //return view('home');
        return back()->with('success','Votre livre a été modifié');
    }
    
}
