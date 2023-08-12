<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BorrowingStoreRequest;
use App\Http\Requests\BorrowingUpdateRequest;
use App\Http\Resources\BorrowingResource;
use App\Models\Borrowing;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BorrowingResource::collection(Borrowing::all());
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(BorrowingStoreRequest $request)
    {
        return BorrowingResource::make(
            Borrowing::create([
                'borrower_name' => $request->borrowerName,
                'borrowed_date' => Carbon::parse(strtotime($request->borrowedDate)),
                'returned_date' => Carbon::parse(strtotime($request->returnedDate)),
                'book_id' => $request->bookId
            ])
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrowing $borrowing)
    {
        return BorrowingResource::make($borrowing);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(BorrowingUpdateRequest $request, Borrowing $borrowing)
    {

        if (isset($request->borrowerName)) {
            $borrowing->borrower_name = $request->borrowerName;
        }

        if (isset($request->borrowedDate)) {
            $borrowing->borrowed_date = $request->borrowedDate;
        }
        if (isset($request->returnedDate)) {
            $borrowing->returned_date = $request->returnedDate;
        }
        if (isset($request->bookId)) {
            $borrowing->book_id = $request->bookId;
        }

        $borrowing->save();

        return BorrowingResource::make($borrowing);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrowing $borrowing)
    {
        
        $borrowing->delete();
        return response()->json([
            'success' => true,
            'message' => 'Successfully Deleted'
        ]);
    }
}
