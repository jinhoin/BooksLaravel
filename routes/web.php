<?php

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


// Route::get('/', function () {
//     //문자로도 반환가능
//     return "<h1>hello Foo</h1>";
// });
// 파마리멑를 정규표현을 써서 제한시켰다 없을경우 bar가 대체한다
Route::pattern('foo', '[0-9a-zA-Z]{3}');
// // 파마리터를 바로 받아서 나타낼수도있다 세글자가 아닐경우 제외한다
Route::get('/{foo?}', function ( $foo = 'bar') {
    return "{$foo}";
});

Route::get('/', [
    'as' => 'home',
    function (){
        return '제이름은 Home입니다';
    }
]);

Route::get('/home',  function (){
    return redirect(route('home'));
});