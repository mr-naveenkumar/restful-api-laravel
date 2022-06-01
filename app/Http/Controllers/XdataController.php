<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Xdata;

class XdataController extends Controller
{
    // this is insert data 

    public function insert(Request $request){
          $request->validate([
            'name'=>'required',
            'detail'=>'required',
            'age'=>'required',
        ]); // it is validate data 

          $list=new Xdata;
          $list->name =$request->name;
          $list->detail=$request->detail;
          $list->age=$request->age;

          $list->save();
          
          return response()->json(['message'=>'Product add successfuly'],200);
    }

    // this is view data 

    public  function viewfile(Request $request){
        $list = Xdata::all(); // get all data 
        return response()->json(['list'=>$list],200); // this is for getting information of all
        

    }

    // show data by id 
/** 
    public function viewparticular($id){
        $list = Xdata::find($id); // get id in model Xdata
        
        if($list){
            return response()->json(['list'=>$list],200);
        }

        else{
            return response()->json(['message'=>'data not found bro '],404);
        }
    }
*/

public function show($id){
    $table_info = Xdata::find($id);
   
    if($table_info){
    return response()->json(['products'=>$table_info],200); // here 2 condition if else
    }
    else{
        return response()->json(['message'=>'no record found'],404);
    }
}

    public function updatefile(Request $request , $id)
    {
        $request->validate([
            'name'=>'required',           // this is for update data
            'detail'=>'required',
            'age'=>'required',
        ]);

        $list = Xdata::find($id);
        if($list){
            $list->name =$request->name;
            $list->detail =$request->detail;
            $list->age =$request->age;
            $list->update();    
            return response()->json(['message'=>'Product add successfuly'],200);       
        }

        else{
            return response()->json(['message'=>'Product not found'],404);
        }
    }

    public function deldata($id){
        $list=Xdata::find($id);

        if($list){
            $list->delete();
            return response()->json(['message'=>'stuff delte successfly'],200);
        }
        else{
            return response()->json(['message'=>'unable to delete '],404);
        }
    }
    
}
