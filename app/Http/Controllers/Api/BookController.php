<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BookResource::collection(Book::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        return BookResource::make(
            Book::create([
                'title' => $request->title,
                'author' => $request->author,
                'subtitle' => $request->subtitle,
                'stocks' => $request->stocks,
                'genre' => $request->genre,
                'thumbnail' => $request->thumbnail,

            ])
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return Book::make($book);
    }

    public function update(BookUpdateRequest $request, Book $book)
    {
        if (isset($request->title)) {
            $book->title = $request->title;
        }
        if (isset($request->author)) {
            $book->author = $request->author;
        }
        if (isset($request->subtitle)) {
            $book->subtitle = $request->subtitle;
        }
        if (isset($request->stocks)) {
            $book->stocks = $request->stocks;
        }
        if (isset($request->genre)) {
            $book->genre = $request->genre;
        }
        if (isset($request->thumbnail)) {
            $book->thumbnail = $request->thumbnail;
        }

        $book->save();

        return BookResource::make($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
