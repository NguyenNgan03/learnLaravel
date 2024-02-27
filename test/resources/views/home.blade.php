<h1>Trang chủ unicode</h1>
<h2>
{{
request()->keyword;
}}
</h2>
<div>
    {!!$content!!}
</div>
@for ($i = 1;$i<=10;$i++)
<p>Phần tử thứ :{{$i}}</p>
@endfor
<!-- 
@while ($index<=10)
    <p>Phần thử thứ : {{$index}}</p>
    @php
    $index++
    @endphp
@endwhile -->

@if($number>=10)
<p>Giá trị đúng </p>
