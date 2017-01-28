{{-- @extends('layouts.master') --}}

@section('content')
    @foreach ($posts as $post)
        @php
            print_r($post);
        @endphp
    @endforeach
@stop