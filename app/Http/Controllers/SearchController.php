<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service; // Assurez-vous de charger le modèle approprié

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Recherchez les services qui correspondent à la requête
        $services = Service::where('title', 'LIKE', "%{$query}%")
                            ->orWhere('description', 'LIKE', "%{$query}%")
                            ->get();

        // Retournez la vue avec les résultats de la recherche
        return view('search.results', compact('services', 'query'));
    }
}
