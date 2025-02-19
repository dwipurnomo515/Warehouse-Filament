<x-filament::auth-card>
    <h1 class="text-2xl font-bold">Warehouse App</h1>

    {{ $this->form }}

    <x-filament::button type="submit" form="login">
        {{ __('Login') }}
    </x-filament::button>
</x-filament::auth-card>
