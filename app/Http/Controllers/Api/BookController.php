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
                'name' => $request->name,
                'author' => $request->author,
                'stocks' => $request->stocks,
                'tag_id' => $request->tagId,
                'description_id' => $request->descriptionId,
            ])
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return BookResource::make($book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookUpdateRequest $request, Book $book)
    {
        if (isset($request->name)) {
            $book->name = $request->name;
        }

        if (isset($request->author)) {
            $book->author = $request->author;
        }

        if (isset($request->stocks)) {
            $book->stocks = $request->stocks;
        }

        if (isset($request->tagId)) {
            $book->tag_id = $request->tagId;
        }

        if (isset($request->descriptionId)) {
            $book->description_id = $request->descriptionId;
        }

        $book->save();

        return BookResource::make($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $book = Book::findOrFail($id);
        
        $book->borrowings()->delete();

        $book->delete();
        return response()->json([
            'success' => true,
            'message' => 'Successfully Deleted'
        ]);
    }
}
