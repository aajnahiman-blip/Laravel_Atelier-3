<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});
Route::get('/produits/{cat}',function($cat){
    $produits=[];
    if ($cat=='hicking'){
        $produits=[
            ["nom" => "Sac à dos", "prix" => 200, "image" => "sac_do.jpg"],
            ["nom" => "Tente", "prix" => 300, "image" => "tent.jpg"],
            ["nom" => "Montre GPS", "prix" => 150, "image" => "watch_gps.jpg"]
   
        ];
    }elseif($cat=='electromenager'){
        $produits=[
            ["nom" => "Machine à laver", "prix" => 3000, "image" => "machine_lav.jpg"],
            ["nom" => "Four", "prix" => 1500, "image" => "four.jpg"],
            ["nom" => "Micro-onde", "prix" => 1000, "image" => "micro_onde.jpg"]
    
        ];
    }else {
        // ❌ catégorie ma kaynach
        abort(404);
    };
  return view('Produits',[
    'products'=>$produits,
    'categorie'=>$cat
  ]);
});
