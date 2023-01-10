{{-- We can now add classes onto the x-card tag since we have it 'merrged' --}}
<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6'])}}>
    {{$slot}}
</div>