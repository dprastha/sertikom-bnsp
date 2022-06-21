<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $clients = Client::all();

        return view('landing-page', compact(
            'products',
            'clients',
        ));
    }
}
