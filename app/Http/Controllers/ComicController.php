<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

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
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required|max:150',
            'description'=>'required|max:20000',
            'thumb'=>'required|max:60000|url',
            'price'=>'required|decimal:0,99999',
            'series'=>'required|max:20000',
            'sale_date'=>'required|date',
            'type'=>'required|max:20000',
        ]);

        $data_received = $request->all();
        // dd($data_received);

        $newComic = new Comic();
        $newComic->fill($data_received);
        // $newComic->title = $data_received['title'];
        // $newComic->description = $data_received['description'];
        // $newComic->thumb = $data_received['thumb'];
        // $newComic->price = $data_received['price'];
        // $newComic->series = $data_received['series'];
        // $newComic->sale_date = $data_received['sale_date'];
        // $newComic->type = $data_received['type'];
        $newComic->save();

        return redirect()->route('comics.show',['comic' => $newComic->id])->with('status','New comic created succesfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
        return redirect()->route('comics.show',['comic' => $newComic->id]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

       
        $request->validate([
            'title'=>'required|max:150',
            'description'=>'required|max:20000',
            'thumb'=>'required|max:60000|url',
            'price'=>'required|decimal:0,99999',
            'series'=>'required|max:20000',
            'sale_date'=>'required|date',
            'type'=>'required|max:20000',
        ]);

        $data_received = $request->all();
        $comic->update($data_received);

        return redirect()->route('comics.show',['comic' => $comic->id])->with('status','Comic updated succesfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {

        $comic->delete();
        return redirect()->route('comics.index');


    }
}
