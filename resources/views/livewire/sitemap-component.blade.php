<div>


        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Section</th>
                            <th scope="col" class="px-6 py-3">Toggle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sitemaps as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->section }}</td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input wire:click='toggle({{$item->id}})' type="checkbox" {{ $item->is_active ? 'checked' : '' }}>
                                </td>
                            </tr>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
</div>
