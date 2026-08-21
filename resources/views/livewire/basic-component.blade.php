<div>

    <div class="mb-4">
        <label for="title" class="block text-white text-sm font-bold mb-2">Setting:</label>
        <input type="text" wire:model='title' id="title" name="title" class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

        @error('title')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
    </div>


    <div class="mb-4">
        <label for="title" class="block text-white text-sm font-bold mb-2">Value:</label>
        <textarea cols="40" type="text" wire:model='title' id="title" name="title" class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </textarea>
        @error('title')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
    </div>
</div>
