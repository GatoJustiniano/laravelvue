<?php

namespace App\Http\Controllers\dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SettingGeneral;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreUserPost;
use App\Http\Requests\UpdateUserPut;


class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_setting = SettingGeneral::latest()->first();    
        $users = User::orderBy('surname','asc')->paginate(10);
        return view('dashboard/user/index',['users' => $users], compact('data_setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all()->pluck('name', 'id');
        return view('dashboard/user/create',['user'=> new User()], compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPost $request)
    {
        try {
            DB::beginTransaction();

            $user = User::create(
                    [
                        'name' => $request['name'],
                        'surname' => $request['surname'],
                        'email' => $request['email'],
                        'password' => $request['password'],
                    ]
            );
            $roles = $request->input('roles', []);
        
        
            $user->syncRoles($roles);
            DB::commit();
            return redirect()->route('user.index')->with('status', 'Usuario creado con éxito!') ;

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('status', $e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard/user/show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all()->pluck('name', 'id');
        $user->load('roles');
        return view('dashboard/user/edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPut $request, User $user)
    {
        $user->update(
            [
                'name' => $request['name'],
                'surname' => $request['surname'],
                'email' => $request['email'],
            ]
        );
        return redirect()->route('user.index')->with('status','Usuario actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('status','Usuario eliminado con éxito!');
    }
}
