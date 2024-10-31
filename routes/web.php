<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\User;
use App\Models\Role;
use App\Models\Country;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Tag;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "hi";
// }); 

// Route::get('/contact', function () {
//     return view("contact");
// });

// // Route::get('/post/{id}/{name}', function ($id,$name) {
// //     return "this is post ". $id. $name;
// // });


// // Route::resource('/post', 'App\Http\Controllers\PostsController');

// //---------------------------------------------
// // Raw SQL Queries
// //-----------------------------------------


// Route::get("/insert", function(){
//    DB::insert("insert into posts (title, content) values(?,?)" ,["PHP Laravel", "Laravel happend to php"]);
// });

// // Route::get("/read", function(){
// //     $rr = DB::select("select * from posts where id = ?", [1]);
// //     foreach ($rr as $r){
// //         return $r -> title;
// //     }
// // });

// // Route::get("/update",function(){
// //     DB::update('update posts set title = "PHP" where id = ?', [1]);
// // });

// //--------------------------------
// //database
// //--------------------------------

// // Route::get("/find", function(){
// //     $post = Post::find(1);
// //     return $post;
// // });

Route::get("/createnew", function(){
    Post::create(["title" => "PHP create", "content" => "I am learning"]);
});

// // Route::get("/softdelete",function(){
// //     Post::find(3)->delete();
// // });

// Route::get("/readdelete",function(){
//     $post = Post::withTrashed()->find(3);
//     return $post;
// });

// Route::get('/user/{id}/post',function($id){
//      return User::find($id)->post;
// });

// Route::get("/post/{id}/user",function($id){
//     return Post::find($id)->user;
// });

// Route::get("/role/{id}/user",function($id){
//     $user = User::find($id)->roles;
//     return $user;

// });

// Route::get("user/pivot",function(){
//     $user = User::find(1);
//     foreach($user->roles as $role){
//         return $role->pivot;
//     }
// });

// Route::get("user/country",function(){
//     $country = Country::find(1);
//     foreach($country->posts as $post){
//         return $post;
//     }
// });

// // Polymorphic

// Route::get("user/photos",function(){
//     $user = User::find(1);
//     foreach($user->photos as $photo){
//         return $photo;
//     }
// });

// Route::get("photo/{id}",function($id){
//     $photo = Photo::findOrFail($id);
//     return $photo -> imageable;
// });

// Route::get('post/tag',function(){
//     $post = Post::find(1);
//     foreach($post->tags as $tag){
//         return $tag->name;
//     }
// });

// Route::get("tag/post/user",function(){
//     $tag = Tag::find(2);
//     foreach($tag->posts as $post){
//         return $post;
//     }

// });

//crud view

Route::resource("/posts", "App\Http\Controllers\PostsController");

Route::get('dates',function(){
    $date = new DateTime('+1 day');
    echo $date->format('d-m-y');
    echo '<br>';
    echo Carbon::now();
    echo '<br>';
    echo Carbon::now()->diffForHumans();
});

Route::get('/getname', function(){
    $user = User::find(1);
    echo $user->name;
});