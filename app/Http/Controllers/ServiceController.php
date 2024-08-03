<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    // Afficher la liste des services
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    // Afficher le formulaire de création d'un service
    public function create()
    {
        return view('services.create');
    }

    // Sauvegarder un nouveau service
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $service = new Service();
        $service->user_id = auth()->id();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->save();

        return redirect()->route('services.index')->with('success', 'Service créé avec succès');
    }

    // Afficher un service spécifique
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('services.show', compact('service'));
    }

    // Afficher le formulaire d'édition d'un service
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    // Mettre à jour un service spécifique
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $service = Service::findOrFail($id);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->save();

        return redirect()->route('services.index')->with('success', 'Service mis à jour avec succès');
    }


    // Supprimer un service spécifique
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service supprimé avec succès');
    }
}
