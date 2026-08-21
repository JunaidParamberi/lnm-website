<div>

    <div>
        <div class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label for="title" class="block text-white text-sm font-bold mb-2">Page Subtitle:</label>
                <input type="text" wire:model='title' id="title" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            </div>


            <div class="mb-4">
                <label for="title" class="block text-white text-sm font-bold mb-2">About us small titile:</label>
                <input type="text" wire:model='title' id="title" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            </div>



            <div class="mb-4">
                <label for="title" class="block text-white text-sm font-bold mb-2">About us titile:</label>
                <input type="text" wire:model='title' id="title" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            </div>




            <div class="mb-4">
                <label for="title" class="block text-white text-sm font-bold mb-2">About us content:</label>
                <textarea wire:model='title' id="title" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </textarea>
                @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            </div>



        </div>
        <div class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-row gap-4 flex-wrap">

            <div class="mb-4">
                <label for="title" class="block text-white text-sm font-bold mb-2">Counter 1 text:</label>
                <input type="text" wire:model='title' id="title" name="title" class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            </div>



            <div class="mb-4">
                <label for="title" class="block text-white text-sm font-bold mb-2">Counter 1 count:</label>
                <input type="number" wire:model='title' id="title" name="title" class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            </div>




            <div class="mb-4">
                <label for="title" class="block text-white text-sm font-bold mb-2">Counter 2 text:</label>
                <input type="text" wire:model='title' id="title" name="title" class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            </div>



            <div class="mb-4">
                <label for="title" class="block text-white text-sm font-bold mb-2">Counter 2 count:</label>
                <input type="number" wire:model='title' id="title" name="title" class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            </div>





            <div class="mb-4">
                <label for="title" class="block text-white text-sm font-bold mb-2">Counter 3 text:</label>
                <input type="text" wire:model='title' id="title" name="title" class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            </div>



            <div class="mb-4">
                <label for="title" class="block text-white text-sm font-bold mb-2">Counter 3 count:</label>
                <input type="number" wire:model='title' id="title" name="title" class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            </div>


        </div>



        <div class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-row gap-4 flex-wrap">




        </div>


    </div>
</div>
