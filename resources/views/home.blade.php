@extends('layout.app')

@section('content')
    <section id="comics">
        <div class="home-wrapper">
            <h2>Current Series</h2>
            @foreach ($comics as $comic)
                <div class="comic-box">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <div>
                        {{ $comic['series'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
