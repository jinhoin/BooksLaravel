@section('script')
<p>저는 꼬리말입니다. 다른뷰에서 절르 입양해 가요</p>
{{-- 이걸 붙일경우 어른을 먼저 공경하게 된다 --}}
@parent 
 <script>
        alert('저는 조각 뷰의 "script" 섹션입니다');
 </script>


@endsection
    