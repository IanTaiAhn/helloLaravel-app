@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

{{-- We can php it up man --}}
{{-- @php
$test = 1;
@endphp
{{$test}} --}}

{{-- Blade Directives make this so much better. --}}

{{-- @if(count($listings) == 0)
    <p>No listings found</p>
@endif --}}
{{-- @if and @unless are the same thing. --}}
@unless(count($listings) == 0)
    @foreach ($listings as $listing)
        <x-listing-card :listing="$listing"/>
    @endforeach
{{-- @else
    <p>No listings found</p> --}}
@endunless
@endsection

</div>