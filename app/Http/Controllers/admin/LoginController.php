<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\error;

class LoginController extends Controller
{
    public function index(Request $request){
        if($request->method()=='GET'){
        return view('admin.login.index');
    }else{

        dd($request->all());
        $validator=Validator::make($request->all(),[
            'email'=>'required',
            'password1'=>'required',
        ]);

        // if($validator->fails()){

        //     return response()->json([

        //         'status'=>false,
        //         'message'=>error(),
        //     ]);
            // if{
            //     $request->password
            // }
        // }

    }
}
}
