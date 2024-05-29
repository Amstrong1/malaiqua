<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded">
                <div class="p-6 text-gray-900">
                    <div class="md:flex justify-between">
                        <h1 class="font-semibold text-lg m-1">
                            {{ __('TABLEAU DE BORD') }}
                        </h1>
                    </div>

                    @if (Auth::user()->role === 'superadmin')
                        <!-- Cards -->
                        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                            <!-- Card -->
                            <div class="flex p-4 bg-white rounded shadow-xs">
                                <div class="w-10 h-10 p-2 mr-4 text-green-500 bg-green-100 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600">
                                        Structures : {{ $structures }}
                                    </p>
                                    <p class="mb-2 text-lg font-semibold text-gray-700">
                                    </p>
                                    <hr>
                                    <p class="mt-2 text-sm font-medium text-gray-600">
                                        <a href="{{ route('structure.index') }}">Voir plus</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @elseif (Auth::user()->role === 'admin')
                        <!-- Cards -->
                        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                            <!-- Card -->
                            <div class="flex p-4 bg-white rounded shadow-xs">
                                <div class="w-10 h-10 p-2 mr-4 text-blue-500 bg-blue-100 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600">
                                        Nombre de chambres : {{ $rooms }}
                                    </p>
                                    <p class="mb-2 text-lg font-semibold text-gray-700">
                                    </p>
                                    <hr>
                                    <p class="mt-2 text-sm font-medium text-gray-600">
                                        <a href="{{ route('room.index') }}">Voir plus</a>
                                    </p>
                                </div>
                            </div>

                            <!-- Card -->
                            <div class="flex p-4 bg-white rounded shadow-xs">
                                <div class="w-10 h-10 p-2 mr-4 text-blue-500 bg-blue-100 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600">
                                        Equipment : {{ $equipment }}
                                    </p>
                                    <p class="mb-2 text-lg font-semibold text-gray-700">
                                    </p>
                                    <hr>
                                    <p class="mt-2 text-sm font-medium text-gray-600">
                                        <a href="{{ route('equipment.index') }}">Voir plus</a>
                                    </p>
                                </div>
                            </div>

                            <!-- Card -->
                            <div class="flex p-4 bg-white rounded shadow-xs">
                                <div class="w-10 h-10 p-2 mr-4 text-blue-500 bg-blue-100 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600">
                                        Réservation : {{ $reservation }}
                                    </p>
                                    <p class="mb-2 text-lg font-semibold text-gray-700">
                                    </p>
                                    <hr>
                                    <p class="mt-2 text-sm font-medium text-gray-600">
                                        <a href="{{ route('reservation.index') }}">Voir plus</a>
                                    </p>
                                </div>
                            </div>

                            <!-- Card -->
                            <div class="flex p-4 bg-white rounded shadow-xs">
                                <div class="w-10 h-10 p-2 mr-4 text-blue-500 bg-blue-100 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600">
                                        Conditions : {{ $condition }}
                                    </p>
                                    <p class="mb-2 text-lg font-semibold text-gray-700">
                                    </p>
                                    <hr>
                                    <p class="mt-2 text-sm font-medium text-gray-600">
                                        <a href="{{ route('condition.index') }}">Voir plus</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
