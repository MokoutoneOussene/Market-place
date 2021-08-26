<?php

namespace App\Http\Controllers;

use App\Achat;
use App\Categorie;
use App\Client;
use App\Fournisseur;
use App\Product;
use App\Vente;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'category' => Categorie::all(),
            'products' => Product::all(),
            'clients' => Client::all(),
            'fournisseurs' => Fournisseur::all(),
            'achats' => Achat::all(),
            'ventes' => Vente::all(),
        ]);
    }
}
