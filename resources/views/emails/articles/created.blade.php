
<title>Email</title>
<h1>
    {{ $article->title}}

    <small>    {{ $article->user->name}}</small>
</h1>

<hr/>

<p>
    {{ $article->content}}
    {{ $article->created_at }}

</p>

<hr/>

<footer>
    이 메일은 {{ config('app.url') }} 에서보냈습니다.
</footer>



