<h1> {{$heading}} </h1>

{{-- We can php it up man --}}
{{-- @php
$test = 1;
@endphp
{{$test}} --}}


{{-- Blade Directives make this so much better. --}}

@if(count($listings) == 0)
    <p>No listings found</p>
@endif
{{-- @if and @unless are the same thing. --}}
{{-- @unless(count($listings) == 0) --}}
@foreach ($listings as $listing)
    <h2>
        <a href="/list/{{$listing['id']}}">
            {{$listing['title']}}
        </a>
    </h2>
    <p>
        {{$listing['description']}}
    </p>
@endforeach

{{-- @else
    <p>No listings found</p>
@endunless --}}