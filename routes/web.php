<?php

use Illuminate\Support\Facades\Event;

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
// Route::pattern('foo', '[0-9a-zA-Z]{3}');
// // // 파마리터를 바로 받아서 나타낼수도있다 세글자가 아닐경우 제외한다
// Route::get('/{foo?}', function ( $foo = 'bar') {
//     return "{$foo}";
// });

// Route::get('/', [
//     'as' => 'here',
//     function (){
//         return '제이름은 Home입니다';
//     }
// ]);
// 갑자기 라우터가 바껴도 충분히 같은경로로 돌릴수있다 삼위일체로 바꿔줘야한듯싶다
// Route::get('/here',  function (){
//     return redirect(route('here'));
// });


// 안된다
// Route::get('/', 
//     function (){
//         return abort('503');
//         //메세지를 abort 를 써야한다
//     });


// #version01
// Route::get('/', 
//     function (){
//         return view('welcome')->with('name', 'Foo');
//         //메세지를 abort 를 써야한다
//  });

// version02
//  Route::get('/', 
//     function (){
//         return view('welcome')->
//         with([
//             'name' => 'Foo',
//             'greeting' => '안녕하세요' 
             
//              ]);
        
        
//         //메세지를 abort 를 써야한다
//  });

// version03
// 실전형 코드
Route::resource('articles', 'ArticlesController');

// DB::listen(function ($query){
//     var_dump($query->sql);
//     //이벤트 데이터베이스 쿼리를 감지할수있다
// });

Event::listen('article.created', function($article){
    # 이벤트를 수신한다
    #  라우터에 쓰기에는 너무 복잡하다 -> EventServiceProvider로 이동
    var_dump('이벤트를 받았습니다. 받은 데이터는 다음과 같습니다');
    var_dump($article->toArray());
});



Route::get( '/',
   
    function (){
       return view(
            'welcome', [
                'name' => 'foo',
                'greeting' => '안녕하세요?',
            ]
        );
    }
);

Route::get( '/',
   
    function (){
       $items = [];
    //    $items = ['apple', 'banna', 'tomato'];

        return view(
            'welcome', [
                'items' => $items,
            ]
      );
    }
);


Route::get('auth/login', function () {
    $credentials = [
        'email' => 'in362@naver.com',
        'password'  => 'password'
    ];
    if (! auth() -> attempt($credentials)) {
        # code...
        return '로그인 정보가 유효하지 않습니다';
    }
    return redirect('protected');
});


// Route::get('protected', function () {
//     dump(session()->all());

//     if (! auth()->check() ){
        
//         return '누구세요?';
//     };
Route::get('protected',['middleware' => 'auth',  function () {
   }]);

Route::get('auth/logout', function () {
    auth()->logout();
    return '또봐요 ^^';
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
