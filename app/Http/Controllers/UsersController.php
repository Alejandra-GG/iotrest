<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //consultar todos los usuarios
    public function index() {
        return User::paginate();

    }

    public function show($id){
       return User::find($id);
    }

    //crear usuarios
    public function store(Request $request){
        return User::create($request->all());
    }

    //actualizar un usuario
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->fill($request->all());
        $user -> save();
        return $user;
    }

    //elimina un usuario
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return $user;
    }

}
