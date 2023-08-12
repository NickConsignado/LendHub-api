<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DescriptionStoreRequest;
use App\Http\Requests\DescriptionUpdateRequest;
use App\Http\Resources\DescriptionResource;
use App\Models\Description;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DescriptionResource::collection(Description::all());
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(DescriptionStoreRequest $request)
    {
        return DescriptionResource::make(
            Description::create([
                'original_title' => $request->originalTitle,
                'author' => $request->author,
                'background_info' => $request->backgroundInfo,
                'literary_awards' => $request->literaryAwards,
                'series' => $request->series,
                'setting' => $request->setting,
                'characters' => $request->characters
            ])
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Description $description)
    {
        return DescriptionResource::make($description);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(DescriptionUpdateRequest $request, Description $description)
    {
        if (isset($request->originalTitle)) {
            $description->original_title = $request->originalTitle;
        }

        if (isset($request->author)) {
            $description->author = $request->author;
        }

        if (isset($request->backgroundInfo)) {
            $description->background_info = $request->backgroundInfo;
        }

        if (isset($request->literaryAwards)) {
            $description->literary_awards = $request->literaryAwards;
        }

        if (isset($request->series)) {
            $description->series = $request->series;
        }

        if (isset($request->setting)) {
            $description->setting = $request->setting;
        }

        if (isset($request->characters)) {
            $description->characters = $request->characters;
        }

        $description->save();

        return DescriptionResource::make($description);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Description $description)
    {
        $description->delete();
        return response()->json([
            'success' => true,
            'message' => 'Successfully Deleted'
        ]);
    }
}
