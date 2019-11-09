<?php
use App\Post;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view("Welcome");
//});
//
//
//Route::get('/about', function(){
//    return "Hi How are you?";
//});
//
//Route::get('/post/{id}', function($id){
//    return "This is a post number ". $id;
//});
//
//Route::get('/name/{name}', function($name){
//    return "{$name} How are you bro!";
//});
//
//Route::get('admin/posts/news', array("as" => "admin.home", function(){
//    return "This is our link ".route("admin.home");
//}));
//
//Route::get('admin/posts/update', function(){
//        return route('admin.home');
//})->name('admin.home');

//Route::resource('/', 'PostsController');
//
//Route::resource('posts', "PostsController", ["parameter" => [
//    'posts' => 'admin'
//]]);
//
//Route::get('/contact', 'PostsController@showMyView');
//
//Route::get('posts/{id}/{name}/{password}', 'PostsController@show_post');






/*
|--------------------------------------------------------------------------
| Database Raw Queries
|--------------------------------------------------------------------------
*/

//Route::get('/insert', function(){
//
//    DB::insert('INSERT INTO posts (title, content) VALUES (?, ?)', ['Php with laravel', 'This course design by Edwin Diaz']);
//
//});
//
//Route::get('/read', function(){
//
//    $result = DB::select('SELECT * FROM posts where id=?', [1]);
//
//    foreach ($result as $post){
//        return $post->content;
//    }
//
//});
//
//Route::get('/update', function(){
//
//    DB::update('UPDATE posts SET title="Laravel from scratch" WHERE id=?', [1]);
//
//});
//
//Route::get('/delete', function(){
//
//    DB::delete('DELETE FROM posts WHERE id=?', [3]);
//
//});

////doing new
///
//Route::get('/delete', function(){
//
//   // DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'Laravel is great thing we could do']);
//
////    $res = DB::select('select * from posts where id=?', [1]);
////
////    foreach ($res as $post){
////        return $post->content;
////    }
//
//   // DB::update('update posts set title="updated title" where id=?', [1]);
//
//   // DB::delete('delete from posts where id=?', [1]);
//
//});




/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/

//Route::get('/read', function(){
//
//
//    $posts = Post::all();
//
//    foreach ($posts as $post){
//        return $post->title;
//    }
//
//});

//Route::get('/find', function (){
//
//    $posts = Post::find(1);
//
//    return $posts->content;
//
//
//});

//Route::get('/findwhere', function (){
//
//
//    $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//
//    return $posts;
//
//});

//Route::get('/findmore', function (){
//
//    $posts = Post::findOrfail(2);
//
////    $posts = Post::where('user_count', '<', 50)->firstOrfail();
//    return $posts;
//});

//insert data

//Route::get('/basicinsert', function (){
//
//    $post = new Post;
//
//    $post->title = 'Hello PHP';
//    $post->content = 'This is how Laravel Eloquent work';
//
//    $post->save();
//
//});

//Route::get('/basicupdate', function (){
//
//    $post = Post::find(2);
//
//    $post->title = 'Hello Laravel';
//    $post->content = 'I\'m working fine with this course';
//
//    $post->save();
//
//});

//creating data with static method
//Route::get('/create', function (){
//
//    Post::create(['title' => 'This is PHP', 'content' => 'I am softy wire']);
//
//});

//Route::get('/update', function (){
//
//    Post::where('id',1)->where('is_admin',1)->update(['title' => 'Exam Day', 'content' => 'I\'m working with laravel']);
//
//});


//Route::get('/delete', function(){
//
//    $posts = Post::find(1);
//    $posts->delete();
//});

//Route::get('/multiDelete', function (){
//
//    Post::destory([2,3]);
//
////    Post::where('id', 4)->delete();
//});

//Route::get('softdelete', function (){
//
//
//    Post::find(9)->delete();
//
//});


//Route::get('/readsoftdelete', function (){
//
//    //this show all value
////    $posts = Post::withTrashed()->where('id', 2)->get();
////    return $posts;
//
//    //this show only trashed value
//    $posts = Post::onlyTrashed()->where('is_admin', 0)->get();
//    return $posts;
//
//});


//Route::get('/restore', function (){
//
//    $posts = Post::withTrashed()->where('is_admin', 0)->restore();
//    return $posts;
//
//});

//Route::get('/deleteSoftDelete', function (){
//
//    Post::onlyTrashed()->where('is_admin', 0)->forcedelete();
//
//});















/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
