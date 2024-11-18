<x-guest-layout>
    <form method="POST" action="{{ route('tarea.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="title" :value="__('Titulo')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required
                autofocus autocomplete="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="descripcion" :value="__('Descripción')" />
            <textarea id="descripcion"
                style="background-color: white; border: 1px solid rgb(209 213 219 / var(--tw-border-opacity, 1));"
                class="block mt-1 w-full" name="description" required autocomplete="username"> {{ old('descripcion') }}</textarea>
            <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
        </div>

        <!-- trabajadores-->
        <div class="mt-4">
            <x-input-label for="category" :value="__('Categoria')" />
            <select id="category"
                style="background-color: white; border: 1px solid rgb(209 213 219 / var(--tw-border-opacity, 1));"
                class="block mt-1 w-full" name="category" :value="old('category')" required autofocus>
                <option value="" disabled selected>- selecciona una categoria -</option>
                @foreach ($categorias as $category)
                    <option value="{{$category->id}}">{{ $category->name }}</option>
                @endforeach

            </select>
            <x-input-error :messages="$errors->get('category')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="date" :value="__('Dia de vencimiento')" />

            <x-text-input id="date" class="block mt-1 w-full" type="date" name="due_date" required
                autocomplete="date" />

            <x-input-error :messages="$errors->get('date')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
