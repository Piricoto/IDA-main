<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{

    use Notifiable, HasRoles;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = new User();
        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        #no se utiliza la funcionalidad incorporada para poder hacer un hash de la contraseña antes de guardarla
        $nuevoUser = $request->validated();
        // log::info(print_r($request->all(), true));
        // User::create($nuevoUser);
        $usuario = new User();
        $usuario->name = $nuevoUser['name'];
        $usuario->email = $nuevoUser['email'];
        $usuario->password = Hash::make($nuevoUser['password']);
        // log::info(print_r($usuario->all(), true));
        $usuario->save();


        return redirect()->route('users.index')
            ->with('success', 'Usuario creado.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
