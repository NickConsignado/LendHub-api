<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookDetailStoreRequest;
use App\Http\Resources\BookDetailResource;
use App\Models\BookDetail;
use Illuminate\Http\Request;

class BookDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BookDetailResource::collection(BookDetail::all());
    }

    public function store(BookDetailStoreRequest $request)
    {
        return BookDetailResource::make(
            BookDetail::create([
            'literary_awards' =>  $request-> literaryAwards,
            'setting' =>  $request->setting,
            'characters' =>  $request->characters,
            'pages' =>  $request->pages,
            'published' =>  $request->published,
            'publisher' =>  $request->publisher,
            'book_id' =>  $request->bookId,
            ])
        );
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
