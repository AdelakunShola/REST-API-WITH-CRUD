<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return post::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $fields  =  $request->validate([
            'title' =>   'required',
            'body'=> 'required',
        ]);
        $post = Post::create($fields);
        return ['post' => $post];
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $fields  =  $request->validate([
            'title' =>   'required',
            'body'=> 'required',
        ]);
        $post -> update($fields);
        return $post;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return ['message' => 'The ost was deleted'];
    }





 public function register(Request $request)
    {
     $field = $request->validate([
        'name' => 'required',
        'email'=> 'required|email|unique:users',
        'password'=>'required|confirmed'
     ]);
     $user = User::create($field);



     $token = $user->createToken('$request->name');


     return[
       'user'=> $user,
        'token'=> $token->plainTextToken
     ]; 
    }

     public function login(Request $request)
    {
      $request->validate([
        'email'=> 'required|email|exists:users',
        'password'=>'required'
     ]);
     $user = User::where('email', $request->email)->first();
     if (!$user || !Hash::check($request->password, $user->password)) {
        return[
            'message'=> 'The provided credentials are incorrect'
    ];
}
    $token = $user->createToken('$user->name');

     return[
       'user'=> $user,
        'token'=> $token->plainTextToken
     ]; 


    }

     public function logout(Request $request)
    {
      $request->user()->tokens()->delete();

      return[
        'message'=> 'you are logged out.'
      ];
    }




}
