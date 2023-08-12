<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TagResource::collection(Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagStoreRequest $request)
    {
        return TagResource::make(
            Tag::create([
                'genre' => $request->genre,
            ])
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return TagResource::make($tag);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagUpdateRequest $request, Tag $tag)
    {
        if (isset($request->genre)) {
            $tag->genre = $request->genre;
        }

        $tag->save();

        return TagResource::make($tag);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return response()->json([
            'success' => true,
            'message' => 'Successfully Deleted'
        ]);
    }
}
