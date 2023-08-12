<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminStoreRequest;
use App\Http\Requests\AdminUpdateRequest;
use App\Http\Resources\AdminResource;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AdminResource::collection(Admin::all());
    }

    public function store(AdminStoreRequest $request)
    {
        return AdminResource::make(
            Admin::create([
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ])
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        return AdminResource::make($admin);
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminUpdateRequest $request, Admin $admin)
    {
        if (isset($request->email)) {
            $admin->email = $request->email;
        }

        if (isset($request->password)) {
            $admin->password = $request->password;
        }

        $admin->save();

        return AdminResource::make($admin);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return response()->json([
            'success' => true,
            'message' => 'Successfully Deleted'
        ]);
    }
}
