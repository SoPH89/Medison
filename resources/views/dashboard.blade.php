<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
        }
    </style>
    @if(Session::has('flash_message'))
        <p class="alert alert-info">{{ Session::get('flash_message') }}</p>
    @endif
    <div class="grid-container">
        <div class="grid-child">
            <div class="py-6">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @if ( isset($id) )
                            @php echo App\Http\Controllers\CountriesController::edit($id); @endphp    
                        @else
                            @include('countries.create')
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-child">
            <div class="py-6">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @php echo App\Http\Controllers\CountriesController::index(); @endphp
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>