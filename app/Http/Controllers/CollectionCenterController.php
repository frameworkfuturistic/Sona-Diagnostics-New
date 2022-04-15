<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;

class CollectionCenterController extends Controller
{
    public function Index(){
        return view('admin.addCollectionCenter');
    }

    public function store(Request $request){
        $user=User::firstOrNew(
            ['email'=>request('email')]
        );
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->password=Hash::make($request->password);
        $user->usertype=$request->userType;
        $user->save();
        return back()->with('success','Successfully added the data');
    }
}
