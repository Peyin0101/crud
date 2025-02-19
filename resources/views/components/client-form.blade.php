<div>
    <form action="{{ $action }}" method="POST"
        class="bg-white dark:bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @if ($method !== 'POST')
            @method($method)
        @endif
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="name">Name:</label>
            <input type="text" name="name" id="name" value=""
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <p class="text-red-500 text-xs italic">This is an error message.</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="surname">Surname:</label>
            <input type="text" name="surname" id="surname" value=""
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <p class="text-red-500 text-xs italic">This is an error message.</p>
        </div>
        <div class="mb-4">
            <div class="flex gap-2 items-center mb-2">
                <input type="hidden" name="premium" value="0">
                <input type="checkbox" name="premium" id="premium" value="1" class="leading-tight">
                <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold" for="premium">Premium</label>
            </div>
            <p class="text-red-500 text-xs italic">This is an error message.</p>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">{{ $buttonText }}</button>
            <a href="{{ route('clients.index') }}"
                class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800 dark:text-blue-300 dark:hover:text-blue-500">Cancel</a>
        </div>
    </form>
</div>
