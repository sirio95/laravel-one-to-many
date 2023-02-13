@extends('layouts.main-layout')

@section('content')
    <h1>POSTS</h1>

    @foreach ($posts as $post)
        <div>
            <h4>{{$post-> title}}</h4>
            <p>{{ $post-> body}}</p>
            <div>
                Autore: {{$post-> person-> username}}
            </div>
            <div>
                Dettagli autore:
                <ul>
                    <li>{{$post-> person -> email}}</li>
                    <li>{{$post-> person -> person_detail -> phone_num }}</li>
                    <li>{{$post-> person -> person_detail -> address }}</li>
                </ul>
            </div>
        </div>
    @endforeach
@endsection