<div 
class="lg:col-span-2 p-8 w-full bg-[#202A36] xl:block xl:sticky xl:translate-x-0 -translate-x-full top-0 fixed z-20 shadow min-h-screen xl:duration-0 duration-300 ease-in-out"
:class="{'-translate-x-full': !sideOpen}"
>
    <div class="brand mb-8 flex items-center">
        <a href="{{ route('dashboard') }}" class="inline-flex items-center text-white">
            <x-application-mark class="block h-9 w-auto" />
            <span class="ml-4 text-3xl font-medium">{{ env('APP_NAME') }}</span>
        </a>

        <button @click="sideOpen = false" type="button" class="xl:hidden inline-block ml-auto p-3 bg-white rounded-lg hover:scale-95 duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
            </svg>
        </button>
    </div>
    <ul class="text-white grid gap-y-2">
        <li class="text-xl">
            <x-sidebar.nav-link href="{{ route('dashboard') }}">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-speedometer" viewBox="0 0 16 16">
                        <path
                            d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2M3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.39.39 0 0 0-.029-.518z" />
                        <path fill-rule="evenodd"
                            d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.95 11.95 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0" />
                    </svg>
                </x-slot>
                Dashboard
            </x-sidebar.nav-link>
        </li>
        <li class="text-xl">
            <x-sidebar.nav-link-dropdown>
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-newspaper" viewBox="0 0 16 16">
                        <path
                            d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
                        <path
                            d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
                    </svg>
                </x-slot>

                <x-slot name="trigger">
                    Blogs
                </x-slot>

                <ul class="grid ml-auto bg-slate-600 rounded-lg">
                    <li>
                        <x-sidebar.nav-link class="hover:bg-white hover:text-slate-600 rounded-none first:rounded-t-lg">
                            All Blogs
                        </x-sidebar.nav-link>
                    </li>
                    <li>
                        <x-sidebar.nav-link class="hover:bg-white hover:text-slate-600 rounded-none last:rounded-b-lg">
                            Add New Blogs
                        </x-sidebar.nav-link>
                    </li>
                </ul>
            </x-sidebar.nav-link-dropdown>
        </li>
    </ul>
</div>
