{{-- <x-app-layout>
    <div class="py-12">
        <div class="flex w-3/4 mx-auto sm:px-6 lg:px-8">
            <div class="flex-initial w-32 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    JUGAR
                </div>
            </div>

            <div class="flex-initial w-32 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    PUNTUACIONES
                </div>
            </div>

            <div class="flex-initial w-32 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    ACERCA DE
                </div>
            </div>

            
        </div>
    </div>
</x-app-layout> --}}

<x-app-layout>
    <div class="py-12">
        <div class="flex justify-center w-3/4 mx-auto sm:px-6 lg:px-8 space-x-4">
            <a href="/game" class="w-1/3 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    JUGAR
                </div>
            </a>

            <a href="/scores" class="w-1/3 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    PUNTUACIONES
                </div>
            </a>

            <a href="/home" class="w-1/3 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    ACERCA DE
                </div>
            </a>
        </div>
    </div>
</x-app-layout>






