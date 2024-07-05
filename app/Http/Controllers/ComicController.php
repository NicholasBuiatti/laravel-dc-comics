<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsList = Comic::all();

        $data = [
            "comicsList" => $comicsList
        ];

        return view("comics.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //METODO PER FAR VEDERE UNA CARTA DEL CATALOGO COMICS E PASSARLA AL DATA
        $comicsList = Comic::all();
        $data = [
            "comicsList" => $comicsList[$id - 1]
        ];
        return view("comics.show", $data);

        //METODO ALTERNATIVO
        // $comicsList = Comic::find($id);
        // $data = [
        //     "comicsList" => $comicsList
        // ];
        // return view("comics.show", $data);
    }

    //METODO BREVE CHE PRENDE LA CLASSE COMIC E LA POPOLA IN BASE ALL'ID IN AUTOMATICO PER MERITO DI LARAVEL
    // public function show(Comic $comic)
    // {

    //     $data = [
    //         "comicsList" => $comic
    //     ];

    //     return view("comics.show", $data);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
