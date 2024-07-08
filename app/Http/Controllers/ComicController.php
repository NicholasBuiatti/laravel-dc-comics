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
        //SALVO I DATI CHE RICEVO NEL FORM IN UN ARRAY ASSOCIATIO DATA
        // $comic = $request->all();

        $data = $request->validate([
            "title" => "required|min:3|max:100",
            "descritpion" => "required|min:12|max:255",
            "thumb" => "required",
            "price" => "required",
            "series" => "required",
            "sale_date" => "required",
            "type" => "required"
        ]);

        //CREO UN OGGETTO NUOVO CHE PRENDE I DATI DALL'ARRAY DATA
        // $newComic = new Comic();
        // $newComic->title = $comic['title'];
        // $newComic->descritpion = $comic['description'];
        // $newComic->thumb = $comic['thumb'];
        // $newComic->price = $comic['price'];
        // $newComic->series = $comic['series'];
        // $newComic->sale_date = $comic['sale_date'];
        // $newComic->type = $comic['type'];
        // $newComic->save();

        // CREO UN NUOVO OGGETTO DOVE CI ISTANZIO I DATI TRAMITE FILL
        $newComic = new Comic();
        $newComic->fill($data);

        // SALVO I DATI SU DB
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //METODO ALTERNATIVO
    //     $comicsList = Comic::find($id);
    //     $data = [
    //         "comicsList" => $comicsList
    //     ];
    //     return view("comics.show", $data);
    // }

    //METODO BREVE CHE PRENDE LA CLASSE COMIC E LA POPOLA IN BASE ALL'ID IN AUTOMATICO PER MERITO DI LARAVEL
    public function show(Comic $comic)
    {

        $data = [
            "comicsList" => $comic
        ];

        return view("comics.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $data = [
            "comic" => $comic
        ];
        return view("comics.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // //SALVO I DATI CHE RICEVO NEL FORM IN UN ARRAY ASSOCIATIO DATA
        $data = $request->all();

        // // NON SERVE CHE CREO UN OGGETTO NUOVO PERCHè STO MODIFICANDO UNO GIà ESISTENTE
        // $comic->title = $data['title'];
        // $comic->descritpion = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        // $comic->save();
        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
