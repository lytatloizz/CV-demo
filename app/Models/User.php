<?php

namespace App\Models;

use App\Http\Controllers\AdminController;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_name',
        'user_email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'user_id';


    // functions
    public function StoreUser(StoreUsersRequest $request){
        $user = new User();
        $user->user_name = $request->input('user_name');
        $user->user_email = $request->input('user_email');
        $user->password = Hash::make($request->input('password'));
        $user->user_role = $request->input('user_role');
        $user->user_status = 0;
        $user->save();

        return redirect()->route('users');
    }

    public function UpdateUser(UpdateUsersRequest $request, User $users){
        $user = $users->find($request->user_id);
        $user->user_name = $request->input('user_name');
        $user->user_email = $request->input('user_email');
        $user->user_role = $request->input('user_role');
        $user->user_status = 0;
        $user->update();

        return redirect()->route('users');
    }

    public function MoveToTrash(User $users, $id){
        $user = $users->find($id);
        if($user){
            $user->user_status = 1;
            $user->update();

            return redirect()->route('users');
        }
        return redirect()->route('users')->withSuccess('Your user are not valid');
    }

    public function RestoreUser(User $users, $id){
        $user = $users->find($id);
        if($user){
            $user->user_status = 0;
            $user->update();

            return redirect()->route('usersTrash');
        }
        return redirect()->route('usersTrash')->withSuccess('Your user are not valid');
    }

    public function DeleteUser(User $users, $id){
        $user = $users->find($id);
        if($user){
            $user->delete();
            return redirect()->route('usersTrash');
        }
        return redirect()->route('usersTrash')->withSuccess('Your user are not valid');
    }

    public function CustomerRegister(Request $request){
        $request->validate([
            'user_name' => 'required|string|max:30',
            'user_email' => 'required|string|max:100|unique:users',
            'password' => 'required|string|max:200'
        ]);

        $user = new User();
        $user->user_name = $request->input('user_name');
        $user->user_email = $request->input('user_email');
        $user->password = Hash::make($request->input('password'));
        $user->user_role = 2;
        $user->user_status = 0;
        $user->save();
        return true;
    }
}
