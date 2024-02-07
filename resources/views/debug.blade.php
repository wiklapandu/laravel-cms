<x-app-layout>

    <div class="w-2/3 mx-auto pt-8">
        <div class="bg-white w-full min-h-8 rounded-lg p-4">
            <h2 class="font-medium text-2xl mb-4">Testing</h2>
            @foreach ($fields as $field)
                @switch($field->type)
                    @case('select')
                        <div class="mb-3">
                            <select name="" id="" class="w-full border rounded-lg border-gray-300">
                                @foreach ($field->options as $option)
                                    <option value="{{ $option->value }}">{{$option->label}}</option>
                                @endforeach
                            </select>
                        </div>
                        @break
                    @case('text')
                    @case('number')
                    @default
                        <div class="mb-3">
                            <x-input :type="$field->type" :name="$field->name" class="w-full" />
                        </div>
                        @break
                        
                @endswitch
            @endforeach
        </div>
    </div>
    
</x-app-layout>