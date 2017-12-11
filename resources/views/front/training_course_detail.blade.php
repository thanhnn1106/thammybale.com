@extends('front.layout')

@section('content')
<!-- wrapper -->
@if(empty($courseDetail))
<h1>Không tìm thấy dữ liệu.</h1>
@else
<h1>{{ $courseDetail->name_vn }}</h1>
<p>{{ $courseDetail->description }}</p>
<p>Thời gian: {{ $courseDetail->duration }}</p>
<p>{!! $courseDetail->details !!}</p>
<img src="{{ asset($courseDetail->image1) }}" />
<img src="{{ asset($courseDetail->image2) }}" />
<img src="{{ asset($courseDetail->image3) }}" />
<img src="{{ asset($courseDetail->image4) }}" />
<img src="{{ asset($courseDetail->image5) }}" />
@endif
<!-- close container -->
@endsection
