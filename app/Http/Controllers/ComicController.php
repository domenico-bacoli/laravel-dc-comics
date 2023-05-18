<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $comics = Comic::all();

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);

        $formData =  $request->all();

        $newComic = new Comic();

        // Metodo stabìndard dove andremo a scrivere più codice 
        // $newComic->title = $formData['title'];
        // $newComic->description = $formData['description'];
        // $newComic->thumb = $formData['thumb'];
        // $newComic->price = $formData['price'];
        // $newComic->series = $formData['series'];
        // $newComic->sale_date = $formData['sale_date'];
        // $newComic->type = $formData['type'];

        // comando più veloce per riempire una riga nel db
        // ha bisogno della proprietà protected $fillable nel model comic per funzionare
        // questo sarà utile anche per l'update
        $newComic->fill($formData);

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {   
        $this->validation($request);
        $formData = $request->all();

        //Funziona solo se abbiamo inserito nel model la proprietà protected $fillable
        $comic->update($formData);

        $comic->save();
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {   
        // con questo metodo eliminiamo in modo permanente il dato dal database
        $comic->delete();
        return redirect()->route('comics.index');
    }

        //controlla che i parametri del form rispettino le regole che indico
        //in caso NON le rispettino (ne basta anche solo una) fa tornare l'utente 
        //alla rotta precedente, passandogli un array di errori
    private function validation($request) {
        // Validazione che restituisce errori standard e quindi in inglese
        //     $request->validate([
        //     'title' => 'required|max:50|min:4',
        //     'description' => 'required',
        //     'thumb' => 'required',
        //     'price' => 'required|max:10',
        //     'series' => 'required|max:20',
        //     'sale_date' => 'required|max:10',
        //     'type' => 'required|max:20'
        // ]);

        // restituiamo ora i messaggi in italiano:
        $formData = $request->all();
            //qui inseriamo l'array di regole ( le stesse che abbiamo inserito nella 
            //versione standard che restituisce gli errori in inglese)
        $validator = Validator::make($formData, [
            'title' => 'required|max:50|',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|max:10',
            'series' => 'required|max:20',
            'sale_date' => 'required|max:10',
            'type' => 'required|max:20'
        ], [
            //qui inseriamo i messaggi da comunicare all'utente per ogni errore che vogliamo modificare
            'title.required' => 'inserisci un titolo',
            'title.max' => 'massimo 50 caratteri',
            'description.required' => 'inserisci una descizione',
            'thumb.required' => 'inserisci una url per la cover',
            'price.required' => 'inserisci un prezzo',
            'price.max' => 'massimo 10 caratteri',
            'series.required' => 'inserisci una serie',
            'series.max' => 'massimo 20 caratteri',
            'sale_date.required' => 'inserisci una data di lancio',
            'sale_date' =>'massimo 10 caratteri',
            'type.required' => 'inserisci un tipo',
            'type.max' => 'massimo 20 caratteri',
        ])->validate();
    }
}
