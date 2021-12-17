<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
      //Route pour l'accueil
    public function accueil(){
        return view("site.accueil");
    }
    //Route pour le formulaire du devis
    public function devis(){
        return view("site.devis");
    }
    //Route pour Activité 1
    public function activite_1(){
        return view("site.activite_one");
    }
     //Route pour Activité 2
    public function activite_2(){
        return view("site.activite_two");
    }
    //Route pour Activité 3
    public function activite_3(){
        return view("site.activite_tree");
    }
    //Route pour Activité 4
    public function activite_4(){
        return view("site.activite_four");
    }
    //Route pour Activité 5
    public function activite_5(){
        return view("site.activite_five");
    }
}
