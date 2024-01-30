@props(['classes' => '', 'icon' => ''])

<a {{ $attributes->merge(['class' => $classes . " flex items-center hover:bg-slate-600 hover:bg-opacity-75 cursor-pointer ease-in duration-150 p-4 rounded-xl"]) }}>
    {{$icon}}
    <span class="ml-5">
        {{$slot}}
    </span>
</a>