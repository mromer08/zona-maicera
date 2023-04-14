<form action="{{ route('game.next') }}" method="post">
    @csrf
    <div class="flex-initial w-32 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <h2 class="font-bold text-xl">{{ $title }}</h2>
            <div class="grid grid-cols-1 gap-2 mt-4">
                @foreach ($answers as $answer)
                    <label for="answer{{ $answer->id }}" class="block bg-purple-500 text-white rounded-lg p-4">
                        <input type="radio" name="answer" id="answer{{ $answer->id }}"
                            value="{{ $answer->id }}">
                        {{ $answer->title }}
                    </label>
                @endforeach
            </div>
        </div>
    </div>
    <x-primary-button class="ml-3">
        {{ __('Siguiente') }}
    </x-primary-button>
</form>
