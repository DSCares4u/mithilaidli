<?php

namespace App\Http\Controllers;

use App\Mail\BookedMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('created_at', 'desc')->get();
        if ($user->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $user
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',                   
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',                   
            'address' => 'required|string',                   
            'booking_date' => 'required|date|after:tomorrow',
            'quantity' => 'required|integer|min:50',
        ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'errors' => $validator->messages()
                ], 422);
            }
        else {    
            $user = User::create([
                'name' => $request->name,                                       
                'mobile' => $request->mobile,
                'booking_date' => $request->booking_date,
                'address'=>$request->address,                                       
                'quantity'=>$request->quantity                                      
            ]);
    
            if ($user) {

                Mail::to('ronitsaha836@gmail.com')->send(new BookedMail($user));

                return response()->json([
                    'user_id' => $user->id,
                    'message' => 'Order Booked Successfully'
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add your Request"
                ], 500);
            }
        }
    }

    public function show($id)
    {
        $user = User::find($id);
        if($user){
            return response()->json([
                'status' => 200,
                'data' => $user
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No call Found"
            ], 404);
        }
    }
        
    // public function update(Request $request, int $id)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|min:3',
            
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 422,
    //             'error' => $validator->messages()
    //         ], 422);
    //     } else {
    //         $user = User::find($id);
    //         if ($user) {
    //             $user->update([
    //                 'name' => $request->name,
                    
    //             ]);

    //             return response()->json([
    //                 'status' => 200,
    //                 'message' => "Hiring Updated Successfully"
    //             ], 200);
    //         } else {
    //             return response()->json([
    //                 'status' => 500,
    //                 'message' => "No Hire Found"
    //             ], 500);
    //         }
    //     }
    // }

    public function destroy($id)
    {
        $user  = User::find($id);
        if($user){
            $user->delete();
            return response()->json([
                'status' => 200,
                'message' => "Hire Deleted"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => "No Hire Found"
            ], 500);
        }       
    }
}