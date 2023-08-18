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

    public function store(BorrowingStoreRequest $request)
    {
        return BorrowingResource::make(
            Borrowing::create([
                'borrowed_by' => $request->borrowedBy,
                'borrowed_date' => Carbon::parse(strtotime($request->borrowedDate)),
                'return_date' => Carbon::parse(strtotime($request->returnDate)),
                'book_id' => $request->bookId
            ])
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrowing $borrowing)
    {
        return Borrowing::make($borrowing);
    }

    public function update(BorrowingUpdateRequest $request, Borrowing $borrowing)
    {
        if (isset($request->borrowedBy)) {
            $borrowing->borrowed_by = $request->borrowedBy;
        }

        if (isset($request->borrowedDate)) {
            $borrowing->borrowed_date = $request->borrowedDate;
        }
        if (isset($request->returnDate)) {
            $borrowing->return_date = $request->returnDate;
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
            'message' => 'Successfully deleted'
        ]);
    }
}
