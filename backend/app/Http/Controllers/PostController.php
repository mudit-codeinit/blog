<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Contracts\JWTSubject;

use Tymon\JWTAuth\PayloadFactory;
use Tymon\JWTAuth\JWTManager as JWT;


class PostController extends Controller
{

   public function index()
   {
     try {
           if (! $user = JWTAuth::parseToken()->authenticate()) {
               return response()->json(['user_not_found'], 404);
           }else{
              $posts = DB::table('posts')->get();
              return response()->json(compact('posts'));
           }
       } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
           return response()->json(['token_expired'], $e->getStatusCode());
       } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
           return response()->json(['token_invalid'], $e->getStatusCode());
       } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
           return response()->json(['token_absent'], $e->getStatusCode());
       }
 }
  public function add_post(Request $request)
   {
     try {
           if (! $user = JWTAuth::parseToken()->authenticate()) {
               return response()->json(['user_not_found'], 404);
           }else{
            $insert = DB::table('posts')->insert(
                        ['title' => $request->title , 'description' => $request->description , 'is_active' => 1 ]
                      );
                      $posts = DB::table('posts')->get();
                      return response()->json(compact('posts'));
           }
       } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
           return response()->json(['token_expired'], $e->getStatusCode());
       } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
           return response()->json(['token_invalid'], $e->getStatusCode());
       } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
           return response()->json(['token_absent'], $e->getStatusCode());
       }
 } 
 
 public function delete_post(Request $request)
   {
     try {
           if (! $user = JWTAuth::parseToken()->authenticate()) {
               return response()->json(['user_not_found'], 404);
           }else{
            $delete = DB::table('posts')->where('id', $request->id)->delete();

                      $posts = DB::table('posts')->get();
                      return response()->json(compact('posts'));
           }
       } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
           return response()->json(['token_expired'], $e->getStatusCode());
       } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
           return response()->json(['token_invalid'], $e->getStatusCode());
       } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
           return response()->json(['token_absent'], $e->getStatusCode());
       }
 }
 public function get_post(Request $request)
   {
     try {
           if (! $user = JWTAuth::parseToken()->authenticate()) {
               return response()->json(['user_not_found'], 404);
           }else{
            $posts = DB::table('posts')->where('id', $request->id)->first();
		//	$posts = DB::table('posts')->get();
            return response()->json(compact('posts'));
           }
       } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
           return response()->json(['token_expired'], $e->getStatusCode());
       } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
           return response()->json(['token_invalid'], $e->getStatusCode());
       } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
           return response()->json(['token_absent'], $e->getStatusCode());
       }
 } public function edit_post(Request $request)
   {
     try {
           if (! $user = JWTAuth::parseToken()->authenticate()) {
               return response()->json(['user_not_found'], 404);
           }else{
			  $c_post = DB::table('posts')
            ->where('id', $request->id)
            ->update(['title' => $request->title , 'description' => $request->description , 'is_active' => 1 ]);
			$posts = DB::table('posts')->get();
            return response()->json(compact('posts'));
           }
       } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
           return response()->json(['token_expired'], $e->getStatusCode());
       } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
           return response()->json(['token_invalid'], $e->getStatusCode());
       } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
           return response()->json(['token_absent'], $e->getStatusCode());
       }
 }





}
