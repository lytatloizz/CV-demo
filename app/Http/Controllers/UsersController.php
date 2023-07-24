<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;

class UsersController extends Controller
{
    //
    function create(){
        return view('admin.user.user');
    }

    function show(User $users){
        $users = $users->where('user_status', 0)->get();
        return view('admin.user.users', compact('users'));
    }

    function showTrash(User $users){
        $users_trash = $users->where('user_status', 1)->get();
        return view('admin.user.users', compact('users_trash'));
    }

    function edit(User $users, $id){
        $user = $users->find($id);
        return view('admin.user.user', compact('user'));
    }
    
    function store(StoreUsersRequest $request, User $users){

        return $users->StoreUser($request);
    }

    function update(UpdateUsersRequest $request, User $users){
        return $users->UpdateUser($request, $users);
    }

    function trash(User $users, $id){
        return $users->MoveToTrash($users,$id);
    }

    function restore(User $users, $id){
        return $users->RestoreUser($users,$id);
    }

    function destroy(User $users, $id){
        return $users->DeleteUser($users,$id);
    }

}
