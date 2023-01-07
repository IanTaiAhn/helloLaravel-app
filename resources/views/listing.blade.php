@extends('layout')

@section('content')
@include('partials._search')
<h1> {{$heading}} </h1>

{{-- @if(count($listing) == 0)
    <p>No listings found</p>
@endif --}}


<h2>{{$listing['title']}}</h2>
<p>{{$listing['description']}}</p>
@endsection