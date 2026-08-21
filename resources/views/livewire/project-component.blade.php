<div>

    <div>
        <div class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                <div class="mb-4">
                    <label for="title" class="block text-white text-sm font-bold mb-2">Project Title:</label>
                    <input type="text" wire:model='title' id="title" name="title" class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                    @error('title')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                </div>


                <div class="mb-4">
                    <label for="title" class="block text-white text-sm font-bold mb-2">Project location:</label>
                    <input type="text" wire:model='location' id="title" name="title" class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                    @error('location')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                </div>




                <div class="mb-4">
                    <label for="title" class="block text-white text-sm font-bold mb-2">Project Year:</label>
                    <input type="text" wire:model='year' id="title" name="title" class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                    @error('year')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                </div>



                <div class="mb-4">
                    <label for="title" class="block text-white text-sm font-bold mb-2">Short description:</label>
                    <textarea type="text" wire:model='short_description' id="title" name="title" class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </textarea>
                    @error('short_description')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                </div>



                <div class="mb-4">
                    <label for="title" class="block text-white text-sm font-bold mb-2">Description:</label>
                    <textarea type="text" wire:model='description' id="title" name="title" class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </textarea>
                    @error('description')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                </div>


                <div class="mb-4">
                    <label for="title" class="block text-white text-sm font-bold mb-2">Project Image:</label>
                    <input type="file" wire:model='image' id="title" name="title" class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                    @error('image')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                </div>



                @if ($updateMode)
                <button wire:click="update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>

            @else
                <button wire:click="store" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>

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
                            <th scope="col" class="px-6 py-3">Location</th>
                            <th scope="col" class="px-6 py-3">Year</th>
                            <th scope="col" class="px-6 py-3">Short Description</th>
                            <th scope="col" class="px-6 py-3">Description</th>
                            <th scope="col" class="px-6 py-3">Image</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <td class="px-6 py-4">{{ $project->title }}</td>
                            <td class="px-6 py-4">{{ $project->location }}</td>
                            <td class="px-6 py-4">{{ $project->year }}</td>
                            <td class="px-6 py-4">{{ $project->short_description }}</td>
                            <td class="px-6 py-4">{{ $project->description }}</td>
                            <td class="px-6 py-4"><img src="{{ asset('storage/'.$project->image) }}" alt="" class="w-20 h-20"></td>
                            <td class="px-6 py-4">
                                <button wire:click="edit({{ $project->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</button>
                                <button wire:confirm wire:click="delete({{ $project->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


        </div>
    </div>
</div>
