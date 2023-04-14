<x-app-layout>
    <div class="py-12">
        <div class="w-3/4 mx-auto sm:px-6 lg:px-8 space-x-4">

            {{-- @foreach ($questions as $question) --}}
                <x-question :title="$question->title" :answers="$question->answers" />
            {{-- @endforeach --}}
        </div>
    </div>
</x-app-layout>
