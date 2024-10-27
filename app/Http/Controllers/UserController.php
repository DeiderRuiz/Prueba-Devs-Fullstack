<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $usuarios=User::paginate(10);
        return view('private.dashboard', ['usuarios'=>$usuarios]);
    }

    public function create(){
        return view('private.create', ['usuario' => new User()]);
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:20|regex:/^[\pL\s]+$/u',
            'last_name'=>'required|min:3|max:20',
            'email'=>'required|email|max:50',
            'cellphone'=>'required|digits_between:8,12',
            'password'=>'required|min:6|max:20|confirmed',
        ]);
        $usuario = new User();
        $usuario->name = $request->input('name');
        $usuario->last_name = $request->input('last_name');
        $usuario->email = $request->input('email');
        $usuario->cellphone = $request->input('cellphone');
        $usuario->password = Hash::make($request->input('password'));
        $usuario->save();
        return redirect()->route('dashboard')->with('success', 'Nueva cuenta de usuario creada correctamente.');
    }

    public function edit(User $usuario){
        return view('private.edit', ['usuario'=>$usuario]);
    }

    public function update(Request $request, User $usuario){
        $request->validate([
            'name'=>'required|min:3|max:20|regex:/^[\pL\s]+$/u',
            'last_name'=>'required|min:3|max:20',
            'email'=>'required|email|max:50',
            'cellphone'=>'required|digits_between:8,12',
            'password'=>'nullable|min:6|max:20|confirmed',
        ]);
        $usuario->name = $request->input('name');
        $usuario->last_name = $request->input('last_name');
        $usuario->email = $request->input('email');
        $usuario->cellphone = $request->input('cellphone');
        if ($request->input('password')) {
            $usuario->password = Hash::make($request->input('password'));
        }
        $usuario->save();
        return redirect()->route('dashboard')->with('success', 'La cuenta de usuario fue actualizada correctamente.');
    }

    public function destroy(User $usuario){
        $usuario->delete();
        return redirect()->route('dashboard')->with('success', 'La cuenta de usuario fue borrada correctamente.');
    }
}
