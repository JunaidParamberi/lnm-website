<div>

    <div>
        <div class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label for="title" class="block text-white text-sm font-bold mb-2">Banner Title:</label>
                <input type="text" wire:model='title' id="title" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            </div>

            <div class='mb-4'>
                <label for="type" class="block text-white text-sm font-bold mb-2">Banner Type:</label>
                <select wire:model='type' id="type" name="type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Select a type</option>
                    <option value="image">Image</option>
                    <option value="video">Video</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-white text-sm font-bold mb-2">Banner Content:</label>
                <textarea id="content" wire:model='content' name="content" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                @error('content')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            </div>
            <div class="mb-4">
                <label for="image" class="block text-white text-sm font-bold mb-2">Banner Image:</label>
                <input type="file" wire:model='image' id="image" name="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('image')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            </div>
            <div>
                @if ($updateMode)
                    <button wire:click="update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>

                @else
                    



<button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click="store" wire:loading.attr="disabled" class="btn btn-primary">
    <!-- Default Text when not loading -->
    <span wire:loading.remove>Save</span>

    <!-- Loading Indicator -->
    <span wire:loading>
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        Saving...
    </span>
</button>


                @endif
                     </div>


            @if (session()->has('message'))
                <div class="bg-green-500 text-white px-4 py-2 rounded">
                    {{ session('message') }}
                </div>




            @endif
            </div>

        <div class="mt-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Title</th>
                        <th scope="col" class="px-6 py-3">Content</th>
                        <th scope="col" class="px-6 py-3">Type</th>
                        <th scope="col" class="px-6 py-3">Image</th>
                        <th scope="col" class="px-6 py-3">Action</th>

                    </tr>
                </thead>
                <tbody>
                   @foreach ($banners as $banner)
                   <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td  scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $banner->title }}</td>
                        <td  scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $banner->content }}</td>

                        <td  scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $banner->type }}</td>
                        @if($banner->type == 'video')
                        <td  scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><video autoplay muted loop id="myVideo" style="width: 100%; height: 100%; object-fit: cover;">
                            <source src="{{ asset('storage/'.$banner->image) }}" type="video/mp4">
                        </video></td>
                        @else

                        <td  scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><img src="{{ asset('storage/'.$banner->image) }}" alt="{{ $banner->title }}" class="w-auto h-20"></td>
                        @endif
                        <td  scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <button wire:click="edit({{ $banner->id }})" class="bg-blue-500 hover:bg-blue-700 dark:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</button>
                            <button wire:confirm wire:click="delete({{ $banner->id }})" class="bg-red-500 hover:bg-red-700 dark:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
                        </td>
                    </tr>

                   @endforeach
                </tbody>
            </table>
    </div>
</div>
