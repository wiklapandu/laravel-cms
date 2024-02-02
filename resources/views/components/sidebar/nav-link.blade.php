@props(['classes' => '', 'icon' => '', 'active' => false, 'schema' => 'light'])

@php
    if($active) {
       $classes = "bg-white text-slate-900"; 
    }

    if($schema == 'dark') {
        $classes .= " hover:bg-white hover:text-slate-900";
    }
@endphp

<a {{ $attributes->merge(['class' => $classes . " flex items-center hover:bg-slate-600 hover:bg-opacity-75 cursor-pointer ease-in duration-150 p-4 rounded-xl"]) }}>
    {{$icon}}
    <span class="ml-5">
        {{$slot}}
    </span>
</a>