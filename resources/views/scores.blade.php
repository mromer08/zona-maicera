<x-app-layout>
    <div class="py-12">
        <div class="w-3/4 mx-auto sm:px-6 lg:px-8 space-x-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="font-bold text-xl text-center">Puntuaciones</h2>
                    <table class="table-auto text-xl m-4 mx-auto">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Puntuacion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($scores as $score)
                                <x-score :user="$score->user" :total="$score->total" />
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
