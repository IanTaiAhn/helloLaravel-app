@props(['tagsCsv'])

@php
// Turns our $listing->tags into an array and since it was a comma seperated value it is now just an array without the commas.
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach($tags as $tag)
    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
        {{-- What is a query parameter? look that up. --}}
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>