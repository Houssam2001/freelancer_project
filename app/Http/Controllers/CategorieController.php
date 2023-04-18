<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        return Categorie::all();
    }
 
    public function show($id)
    {
        return Categorie::find($id);
    }

    public function store(Request $request)
    {
        return Categorie::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->update($request->all());

        return $categorie;
    }

    public function delete(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();

        return 204;
    }
}
