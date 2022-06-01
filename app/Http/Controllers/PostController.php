<?php

namespace App\Http\Controllers;

use App\Row;
use App\Post;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class PostController extends Controller
{
  public function index()
  {

      /*$title = 'mon super titre';
      $title2= 'mon second titre';*/
      //methode compact
      //return view('articles', compact('title','title2'));

      //methode classique
      /*return view('articles', //[
          'title' => $title,
          'title2' => $title2

      ]);
      fin
    
       losqu'on a plusieurs title a recupéré dans une base de donné on adopte la methode post$*/

       $posts  =[
        'mon super titre',
        'mon second titre'
       ];
      // methode classique
      //return view('articles', compact('posts'));
        //oubien
        return view('articles',[
            'posts' => $posts
        ]);





      //return view('articles')->with('title',$title);
  }  
  public function show(){
      return view('/pages/home');
  }

  public function shows(){
      return view ('/base');



    }
    
   public function rows(){
    return view('/pages/inscription');
    }



  public function create(){
      return view('/pages/compte');

  }


  public function store(Request $request){
 
     //dd($request->input('nom_name'));
    //dd($request);

    $row = new Row();
$row->nom_name = $request->nom_name;
$row->nomc_name = $request->nomc_name;
$row->date_name = $request->date_name;
$row->mail_name = $request->mail_name;
$row->mdp_name = $request->mdp_name;


$row->save();
    dd('post enregistré');

/*Post ::create([
  'nom-name'=> $request->nom_name,
  'nomc-name'=> $request->nomc_name,
  'date-name'=> $request->date_name,
  'mail-name'=> $request->mail_name,
  'mdp-name'=> $request->mdp_name

    
]);
dd('post enregistré');*/


}

public function creates(){
  return view('/pages/inscrip-med');

}

public function stores(Request $request){
 
  //dd($request->input('nom_name'));
 //dd($request);

 $post = new Post();
$post->username = $request->username;
$post->password = $request->password;



$post->save();
 dd('post enregistré');

}
public function created(){
  return view('/pages/inscrip-pat');

}
public function stored(Request $request){
 
  //dd($request->input('nom_name'));
 //dd($request);

 $user = new User();
$user->email = $request->email;
$user->motdepasse = $request->motdepasse;



$user->save();
 dd('post enregistré');

}



}

 
