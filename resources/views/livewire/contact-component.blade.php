<div>

    <div >
        <div class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mx-10 mt-4 mb-4">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">


                <div class="mt-4">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="py-3 px-2 border-b border-gray-200 dark:border-gray-700">Name</th>
                                <th class="py-3 px-2 border-b border-gray-200 dark:border-gray-700">Email</th>
                                <th class="py-3 px-2 border-b border-gray-200 dark:border-gray-700">Phone</th>
                                <th class="py-3 px-2 border-b border-gray-200 dark:border-gray-700">Message</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-100 dark:divide-gray-700">
                            @foreach ($contact_list as $contact)
                            <tr>
                                <td class="py-3 px-2 whitespace-nowrap">{{ $contact->name }}</td>
                                <td class="py-3 px-2 whitespace-nowrap">{{ $contact->email }}</td>
                                <td class="py-3 px-2 whitespace-nowrap">{{ $contact->phone }}</td>
                                <td class="py-3 px-2 whitespace-nowrap">{{ $contact->message }}</td>
                                <td class="py-3 px-2 whitespace-nowrap">
                                       </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

            </div>
        </div>
    </div>
</div>
