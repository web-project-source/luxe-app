<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{

     function vieworders(){
     if (Auth::user()->role_id == 1){
     $orders= DB::table('orders_view')->get();
     }
     else {
     $orders= DB::table('orders_view')->where('userName', Auth::user()->name)->get();
     }    
     return view('vieworders',['orders' => $orders]);
    }

     function edit(Request $request,$id) {

     $request->validate([
                'rejectQty' => 'required|numeric'
                      ]);
     $rejectQty = $request->input('rejectQty');
     $statusId = $request->input('status');
     $dateCollection = $request->input('dateCollection');
     $dateReturn = $request->input('dateReturn');

     //$data=array('rejectQty'=>$rejectQty,"statusId"=>$statusId,"dateCollection"=>$dateCollection,"dateReturn"=>$dateReturn);

     try{
      //DB::table('orders')->update($data);
      //DB::table('orders')->whereIn('id', $id)->update($request->all());
      DB::update('update orders set rejectQty = ?,statusId=?,dateCollection=?,dateReturn=? where id = ?',[$rejectQty,$statusId,$dateCollection,$dateReturn,$id]);
       return redirect('vieworders')->with('status',"Insert successfully");		
	}
       catch(Exception $e){
       return redirect('vieworders')->with('failed',"operation failed");
	}
    }

    public function show($id) {
    $orders = DB::select('select * from orders where id = ?',[$id]);
    $status= DB::table('status')->get();
    return view('updateorder',['orders'=>$orders], ['status'=>$status]);
   }
}
