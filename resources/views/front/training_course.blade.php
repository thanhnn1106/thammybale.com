@extends('front.layout')

@section('content')
<!-- wrapper -->
<style type="text/css">
    .traning_portfolio{
        width: 100%;
    }
    .traning_portfolio ul{
        width: 100%;
    }
    .traning_portfolio li{
        width: 20%;
        float: left;
        padding: 15px;
        height: 520px;
    }
</style>
<h1 class="logo">CÁC KHOÁ ĐÀO TẠO</h1>
<div class="traning_portfolio">
    <ul>
        @foreach ($courseList as $item)
            <li>
                <p>
                    <a title="Caption Text" href="/cac-khoa-hoc/{{ $item->name_slug }}" class="portfolio-item-preview" data-rel="prettyPhoto">
                        <img src="{{ $item->image_course }}" alt="" width="210" height="145" class="portfolio-img pretty-box">
                    </a>
                </p>
                <h4>
                    <a href="/cac-khoa-hoc/{{ $item->name_slug }}">{{ $item->name_vn }}</a>
                </h4>
                <p>{{ $item->description }}</p>
            </li>
        @endforeach
    </ul>
    <!--END ul-->
</div>
<!-- close container -->
@endsection
