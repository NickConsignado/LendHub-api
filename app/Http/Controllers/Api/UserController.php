<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserResource::collection(User::all());
    }

    public function store(UserStoreRequest $request)
    {
        return UserResource::make(
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ])
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return User::make($user);
    }


    public function update(UserUpdateRequest $request, User $user)
    { {
            if (isset($request->name)) {
                $user->name = $request->name;
            }
            if (isset($request->email)) {
                $user->email = $request->email;
            }

            if (isset($request->password)) {
                $user->password = $request->password;
            }

            $user->save();

            return UserResource::make($user);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
