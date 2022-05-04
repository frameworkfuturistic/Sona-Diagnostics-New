<?php

namespace App\Http\Controllers;
use App\Models\TestGroup;

use Illuminate\Http\Request;

class TestGroupController extends Controller
{
    public function TestGroup(){
        $data=TestGroup::select('id','GroupName','TestCode','Charge','ShortName')->get();
        return response()->json($data);
    }

    public function showTestGroup(){
        return view('admin.testGroups.testGroup');
    }

    public function testGroupByID($id){
        $data=TestGroup::find($id);
        return response()->json($data);
    }   

    public function editTestGroup(Request $request){
        $price=TestGroup::find($request->id);
        $price->Charge=$request->price;
        $price->save();
    }
}
