{{-- @extends("layouts.app")

@section('title', 'Blog posts')

@section('content')
@forelse ($posts as $key => $post)
@break($key == 2)
@continue($key == 1)
@if ($loop->even)
<div>{{ $key }}.{{ $post["title"] }}</div>
@else
<div style="background-color: silver">{{ $key }}.{{ $post["title"] }}</div>
@endif
@empty
No posts found!
@endforelse

@endsection --}}

@extends("layouts.app")

@section('content')
    <h1>Hello world!</h1>

    <div>
        @for ($i = 0; $i < 10; $i++)
            <div>The current value is {{ $i }}</div>
        @endfor
    </div>

    <div>
        @php $done=false @endphp
        @while (!$done)
            <div>I'm not done</div>

            @php
                if (random_int(0, 1) === 1) {
                    $done = true;
                }
            @endphp
        @endwhile
    </div>
@endsection
