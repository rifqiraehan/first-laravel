{{-- DD: Dump & Die. Digunakan untuk melihat isi variabel, array, object.
Dump seperti VarDump dan Die untuk memberhentikan skrip apapun setelah skrip ini--}}
{{-- @dd($posts); --}}

@extends('layouts.main')

@section('container')
    {{-- Melakukan Looping Isi Array --}}
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2><a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a></h2>
            <h5>By: {{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach

@endsection
