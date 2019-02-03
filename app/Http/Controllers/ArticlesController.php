<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\App;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // query를 6번 작동시킨다
        //$articles = \App\Article::get();
        
        // 즉시로드
        $articles = \App\Article::latest()->paginate(2
    );
        //                         with는 항상 모델 뒤에 와야한다
        
        // 지연로드
        // $articles = \App\Article::get();
        
        // $articles->load('user');

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        
           $article = User::find(1)->articles()->create($request->all());

           if (! $article) {
               return back()->with('flash-message','글이 저장되지 않았습니다.')->whithInput();
           }

           ## 이벤트 처리
        //    var_dump('이벤트를 던집니다');
           //이벤트 던지는 명
           // 직접 던지는 거다
           //    var_dump('article.created.', [$article]);
           event(new \App\Events\ArticlesEvent($article));
            //    dump('이벤트를  던졋습니다');
           // var_dump($article->toArray());

           return redirect(route('articles.index'))->with('flash-message','글이 저장되었습니다.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // echo $foo;
        
        $artilce = \App\Article::findOrFail($id);

        

        return $article->toArry();    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return __METHOD__.'은 다음 기본키를 가진 article 모델을 수정하기 위한 폼을 담은 뷰를 반환합니다.'.$id;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return __METHOD__.'은 다음 기본키를 가진 article 모델을 수정합니다.'.$id;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    }
}
