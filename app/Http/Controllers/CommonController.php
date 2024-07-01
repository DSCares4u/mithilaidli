<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Franchise;
use App\Models\Blog;
use App\Models\Rating;
use App\Models\Event;
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
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',                   
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
            'image' => 'required|image|max:10240',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }

        // Handle the file upload
        if ($request->hasFile('image')) {
            $image = time() . "." . $request->image->extension();
            $request->image->move(public_path("blog/image"), $image);
        } else {
            return response()->json([
                'status' => 422,
                'errors' => ['image' => 'Image is required.']
            ], 422);
        }

        // Create the blog post
        $blog = Blog::create([
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description,
            'image' => $image
        ]);

        if ($blog) {
            return response()->json([
                'status' => 200,
                'message' => 'Blog Added Successfully'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "Unable to add your Request"
            ], 500);
        }
    }

    public function eventIndex()
    {
        $event = Event::orderBy('created_at', 'desc')->get();
        if ($event->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $event
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }
    }

    public function eventBooking(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',                   
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',                   
            'address' => 'required|string',                   
            'event_type' => 'required|string',                   
            'quantity' => 'required|integer|min:10',
        ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'errors' => $validator->messages()
                ], 422);
            }
        else {    
            $event = Event::create([
                'name' => $request->name,                                       
                'mobile' => $request->mobile,
                'address'=>$request->address,                                       
                'quantity'=>$request->quantity,                                   
                'event_type'=>$request->event_type,                                      
            ]);
    
            if ($event) {
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
    public function ratingIndex()
    {
        $rating = Rating::orderBy('created_at', 'desc')->get();
        if ($event->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $rating
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }
    }

    public function ratingStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',                   
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',                   
            'rate' => 'required',                   
        ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'errors' => $validator->messages()
                ], 422);
            }
        else {    
            $rating = Rating::create([
                'name' => $request->name,                                       
                'mobile' => $request->mobile,
                'rate' => $request->rate,
                'comment' => $request->comment,                                                    
            ]);
    
            if ($rating) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Your Review Is Very Precious For Us'
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