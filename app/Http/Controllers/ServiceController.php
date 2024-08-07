<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Precision;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    // Afficher la liste des services de l'utilisateur connecté

    public function getPrecisionsByTags($tagIds)
    {
        $tagIdsArray = explode(',', $tagIds);
        $precisions = Precision::whereIn('tag_id', $tagIdsArray)->get();

        return response()->json($precisions);
    }

    public function index()
    {
        $services = Service::where('user_id', auth()->id())->get();
        return view('services.index', compact('services'));
    }

    // Afficher le formulaire de création d'un service
    public function create()
    {
        $tags = Tag::limit(12)->get(); // Vous pouvez ajuster la limite si nécessaire
        $categories = Category::all(); // Assurez-vous que cette ligne est bien présente
        return view('services.create', compact('tags', 'categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tags' => 'required|array',
            'precisions' => 'nullable|array',
            'precisions.*' => 'integer|exists:precisions,id',
        ]);

        $service = new Service();
        $service->user_id = auth()->id();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->category_id = $request->category_id; // Assigner la catégorie
        $service->save();

        if ($request->has('tags')) {
            $service->tags()->sync($request->tags);
        }

        return redirect()->route('services.index')->with('success', 'Service créé avec succès');
    }

    // Afficher un service spécifique
    public function show($id)
    {
        $service = Service::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        return view('services.show', compact('service'));
    }

    // Afficher le formulaire d'édition d'un service
    public function edit($id)
    {
        $service = Service::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $tags = Tag::all();
        $categories = Category::all();
        return view('services.edit', compact('service', 'tags', 'categories'));
    }

    // Mettre à jour un service spécifique
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $service = Service::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('services.index')->with('success', 'Service mis à jour avec succès');
    }

    // Supprimer un service spécifique
    public function destroy($id)
    {
        $service = Service::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service supprimé avec succès');
    }

    // Récupérer les services en fonction de la catégorie
    public function getCategoriesByTags($tagIds)
    {
        $tagIdsArray = explode(',', $tagIds);
        $categories = Category::whereIn('id', function($query) use ($tagIdsArray) {
            $query->select('category_id')
                  ->from('tag_category') // Assurez-vous que vous avez une table de relation pour les tags et catégories
                  ->whereIn('tag_id', $tagIdsArray);
        })->get();
    
        return response()->json($categories);
    }
    
// App\Http\Controllers\ServiceController.php

public function showPlumbingServices()
{
    $precisionId = 1; // À adapter selon le besoin

    $tagId = DB::table('precisions')
        ->where('id', 1)
        ->value('tag_id');

    if (!$tagId) {
        // Retourner une vue vide ou un message d'erreur
        return view('plombier', ['services' => collect()]);
    }

    $serviceIds = DB::table('service_tag')
        ->where('tag_id', $tagId)
        ->pluck('service_id');

    $services = Service::whereIn('id', $serviceIds)
        ->with('user') // Charger l'utilisateur associé à chaque service
        ->get();

    return view('plombier', compact('services'));
}

public function showElectricienServices()
{
    $precisionId = 2;

    $tagId = DB::table('precisions')
        ->where('id', 2)
        ->value('tag_id');

    if (!$tagId) {
        return view('electricien', ['services' => collect()]);
    }

    $serviceIds = DB::table('service_tag')
        ->where('tag_id', $tagId)
        ->pluck('service_id');

    $services = Service::whereIn('id', $serviceIds)
        ->with('user')
        ->get();

    Log::info("Number of services retrieved: " . $services->count());

    return view('electricien', compact('services'));
}


public function showDevwebServices()
{
    $precisionId = 2;

    $tagId = DB::table('precisions')
        ->where('id', 33)
        ->value('tag_id');

    if (!$tagId) {
        return view('electricien', ['services' => collect()]);
    }

    $serviceIds = DB::table('service_tag')
        ->where('tag_id', $tagId)
        ->pluck('service_id');

    $services = Service::whereIn('id', $serviceIds)
        ->with('user')
        ->get();

    Log::info("Number of services retrieved: " . $services->count());

    return view('dev-web', compact('services'));
}

}
