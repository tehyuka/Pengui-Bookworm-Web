<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;

class bookpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bok.book',[
            'booksk' => books::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul_buku' => 'required|max:255',
            'penulis' => 'required|max:20',
            'penerbit' => 'required|max:20',
            'tahun_terbit' => 'required|max:10',
        ]);

        books::create($validatedData);

        return redirect('/bok')->with('success','New Book Added Succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books=books::find($id);
        return view('bok.edit',[
            'books' => $books
        
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'judul_buku' => 'required|max:255',
            'penulis' => 'required|max:20',
            'penerbit' => 'required|max:20',
            'tahun_terbit' => 'required|max:10',
        ]);
        books::find($id)->update($request->all());
        return redirect('/bok')->with('success','Book Updated Succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        books::destroy($id);
       
        return redirect('/bok')->with('success','Book Deleted Succesfully!');
    }
}
