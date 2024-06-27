<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Franchise;
use App\Models\Blog;
use Validator;


class CommonController extends Controller
{
    public function franchiseIndex()
    {
        $data = Franchise::orderBy('created_at', 'desc')->get();
        if ($data->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }
    }

    public function franchiseStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',                   
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/|unique:users',                   
            'email' => 'required|string',                   
            'location' => 'required|string',                   
        ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'errors' => $validator->messages()
                ], 422);
            }
        else {    
            $data = Franchise::create([
                'name' => $request->name,                                       
                'mobile' => $request->mobile,
                'location'=>$request->location,                                       
                'email'=>$request->email,                                       
                'message'=>$request->message  
            ]);
    
            if ($data) {
                return response()->json([
                    'status' => 200,
                    'message' => 'We Will Connect You Soon'
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add your Request"
                ], 500);
            }
        }
    }

    public function blogIndex()
    {
        $data = Blog::orderBy('created_at', 'desc')->get();
        if ($data->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }
    }

    public function blogStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',                   
            'description' => 'required|string',                   
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'errors' => $validator->messages()
                ], 422);
            }
        else {  
            
            // Handle the file upload
            if ($request->hasFile('image')) {
                $logo = time() . "." . $request->logo->extension();
                $request->logo->move(public_path("blog/image"), $logo);
            } else {
                return response()->json([
                    'status' => 422,
                    'errors' => ['logo' => 'Logo is required.']
                ], 422);
            }

            $user = Blog::create([
                'title' => $request->title,                                       
                'link' => $request->link,                                       
                'description' => $request->description,  
                'image'=>$logo
            ]);
    
            if ($user) {
                return response()->json([
                    'user_id' => 200,
                    'message' => 'Blog Added Successfully'
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add your Request"
                ], 500);
            }
        }
    }
}
