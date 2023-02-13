@extends('layouts.main-layout')

@section('content')
    
    <h1>People</h1>
    <ul>
        @foreach ($people as $person)
            <li>
                <img src= " {{ $person-> person_detail -> avatar }} " alt="avatar utente">
                <h3>{{$person-> username}}</h3>
                <div>{{ $person-> email }}</div>
                <div>{{$person-> person_detail -> phone}}</div>
                <div>{{$person-> person_detail -> address}}</div>
                <a href="/posts">Posts</a>    
            </li>            
        @endforeach
    </ul>

@endsection