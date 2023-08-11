<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserSaveRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function CreateOrUpdate(User $user, UserSaveRequest $request)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }
        $user->mobile = $request->mobile;
        $user->save();
        return $user;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::paginate(30);
        return view('users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserSaveRequest $request)
    {
        //
        $user = new User();
        $this->CreateOrUpdate($user, $request);
        return redirect()->route('user.index')->with(['message' => 'User inserted']);

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        return view('user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserSaveRequest $request, User $user)
    {
        //
        $user = new User();
        $this->CreateOrUpdate($user, $request);
        return redirect()->route('user.index')->with(['message' => 'User Updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $name = $user->name;
        $user->delete();
        return redirect()->route('user.index')->with(['message' => 'User "' . $name . '" deleted']);
    }
}
