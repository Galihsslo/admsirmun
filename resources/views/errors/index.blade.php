<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Errors') }}
        </h2>
        <form method="POST" action="{{ route('logout') }}">

            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
              <i class="mdi mdi-logout text-primary">  {{ __('Log Out') }}</i>
            </x-dropdown-link>
        </form>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ $exception }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
