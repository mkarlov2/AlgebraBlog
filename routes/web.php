<?php

use App\Post;
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

//Route::get('/', function () {

   // $posts = DB ::table('posts')->get();
    //$posts = ['Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porta magna sagittis eros egestas, eget condimentum lorem lacinia. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean rhoncus neque lectus, eu volutpat quam mollis non. Quisque sit amet tellus ut libero euismod faucibus vel a ex. Curabitur quis nisl eu quam cursus dapibus. Etiam quis nulla nec orci aliquet fermentum in et urna. Integer vitae turpis viverra, convallis enim et, rutrum odio. Phasellus facilisis est sodales orci pharetra, non tempor eros hendrerit. Aenean rutrum id urna nec ullamcorper. Aliquam molestie leo metus. Curabitur ac leo sit amet arcu feugiat facilisis vitae eu urna. Etiam consectetur nisl urna, efficitur consequat turpis iaculis vel.', 
   // 'Curabitur fringilla placerat scelerisque. Integer posuere, massa vitae ornare viverra, mi arcu venenatis ante, sollicitudin cursus nisi mauris vel justo. Nulla id ornare nunc. Phasellus id iaculis purus, sit amet commodo nibh. Fusce sodales mattis massa, et egestas lectus maximus in. Fusce finibus commodo molestie. Vestibulum ut posuere dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam ultrices lorem eget ligula elementum pharetra. Pellentesque risus nulla, gravida sit amet dictum id, sodales id erat. Fusce sed tellus velit. Donec aliquam quam quam, id tincidunt ex cursus sed. Etiam finibus arcu orci, id egestas urna maximus ornare. Donec dui urna, varius vel sodales eget, consequat id lacus. Vestibulum luctus pharetra nunc, et placerat tellus posuere vel.', 
    //'In maximus scelerisque fermentum. Mauris tempor ut dui et malesuada. Nam in scelerisque lacus. Fusce mi augue, rhoncus sed neque non, iaculis sagittis lectus. Pellentesque ultrices iaculis aliquam. Vivamus eget magna fermentum, mattis ante sed, pretium tellus. Quisque rhoncus, elit condimentum hendrerit vehicula, mi justo sagittis eros, sit amet ultricies sapien ligula tempor enim. Phasellus varius orci eu velit mattis tristique. Vivamus pellentesque felis vel velit porttitor, et dictum est vulputate. Vivamus et ultrices ante. Integer porttitor justo id sem pretium, sit amet ultricies nisi volutpat. Vivamus nibh justo, ultrices posuere arcu rhoncus, finibus suscipit justo. In ut rutrum felis.'
    //];
    //return $posts; 
    //return view('welcome', ['posts' => $posts]);
        //return $posts;
       

    //return view('welcome');
    //});
    Route::get('/', 'PostController@index'); 
    Route::get('/posts/{id}', 'PostController@show');


Route::get('/users', function () {
    return view('users.show'); // točku koristimo umjesto "/"
});
