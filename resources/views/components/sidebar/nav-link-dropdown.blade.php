@props(['classes' => ''])

<span class="grid" x-data="{isActive: false}">
    <button @click="isActive = !isActive" type="button" class="flex items-center hover:bg-slate-600 hover:bg-opacity-75 cursor-pointer ease-in duration-150 p-4 rounded-xl group"
    :class="{'text-slate-600': isActive, 'bg-white': isActive}"
    >
        {{ $icon }}
        <span class="ml-5 block">
            {{ $trigger }}
        </span>
        <span :class="{'rotate-90': isActive}" class="block ml-auto group-hover:rotate-90 duration-150 ease-in">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
            </svg>
        </span>
    </button>

    <div x-show="isActive" @click.outside="isActive = false" class="mt-3">
        {{ $slot }}
    </div>
</span>