<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    public function index(){
        $Users = Users::all();

        return response()->json($Users);
    }

    public function show($id){
        $User = Users::find($id);

        if(!$User){
            return response()->json([
                'message' => 'Record not found',
            ],404);
        }

        return response()->json($User);
    }

    public function store(Request $request){
        $User = new Users;
        $User->fill($request->all());
        $User->save();

        return response()->json($User, 201);
    }

    public function update(Request $request, $id){
        $User = Users::find($id);

        if(!$User) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $User->fill($request->all());
        $User->save();

        return response()->json($User);
    }

    public function destroy($id){
        $User = Users::find($id);

        if(!$User) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $User->delete();

         return response()->json([
                'message'   => 'Registro deletado',
            ], 200);
    }

}
