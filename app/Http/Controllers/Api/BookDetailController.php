<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookDetailStoreRequest;
use App\Http\Requests\BookDetailUpdateRequest;
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
                'literary_awards' =>  $request->literaryAwards,
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
    public function show(BookDetail $bookDetail)
    {
        return BookDetail::make($bookDetail);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookDetailUpdateRequest $request, BookDetail $bookDetail)
    {
        if (isset($request->literaryAwards)) {
            $bookDetail->literary_awards = $request->literaryAwards;
        }
        if (isset($request->setting)) {
            $bookDetail->setting = $request->setting;
        }
        if (isset($request->characters)) {
            $bookDetail->characters = $request->characters;
        }
        if (isset($request->pages)) {
            $bookDetail->pages = $request->pages;
        }
        if (isset($request->published)) {
            $bookDetail->published = $request->published;
        }
        if (isset($request->publisher)) {
            $bookDetail->publisher = $request->publisher;
        }
        if (isset($request->bookId)) {
            $bookDetail->book_id = $request->bookId;
        }

        $bookDetail->save();

        return BookDetailResource::make($bookDetail);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookDetail $bookDetail)
    {
        $bookDetail->delete();
        return response()->json([
            'success' => true,
            'message' => 'Successfully deleted'
        ]);
    }
}
