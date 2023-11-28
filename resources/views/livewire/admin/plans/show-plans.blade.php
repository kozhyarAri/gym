<div>
    <a class="p-2 rounded-lg bg-white hover:bg-slate-100 transition-all" href="{{ route('admin.plans.add') }}">Add Plan</a>
    <div class="relative overflow-x-auto shadow sm:rounded-lg mt-5">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ناو
                    </th>
                    <th scope="col" class="px-6 py-3">
                        نرخ
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $row)
                    <tr class="bg-white border-b  ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            {{ $row->plan_name }}
                        </th>
                        <td class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap ">
                            {{ number_format($row->price, 2, '.', ',') }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('admin.plans.edit', ['id'=>$row->id]) }}"
                                class="font-medium text-blue-600 hover:underline"><i class="fa-regular fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <nav class="my-2" aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px text-base h-10 justify-center items-center text-center">
                <li>
                    <a href="{{ $data->previousPageUrl() }}"
                        class="flex items-center justify-center px-4 h-10 ml-0 leading-tight {{ $data->currentPage() === 1 ? 'text-gray-300' : 'text-gray-500' }} bg-white border {{ $data->currentPage() === 1 ? 'border-gray-300' : 'border-gray-300' }} rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                </li>
                @for ($i = 1; $i <= $data->lastPage(); $i++)
                    <li>
                        <a href="{{ $data->url($i) }}"
                            class="flex items-center justify-center px-4 h-10 leading-tight {{ $data->currentPage() === $i ? 'text-blue-600 bg-blue-50 border-blue-300' : 'text-gray-500 bg-white border-gray-300' }} hover:bg-gray-100 hover:text-gray-700">{{ $i }}</a>
                    </li>
                @endfor
                <li>
                    <a href="{{ $data->nextPageUrl() }}"
                        class="flex items-center justify-center px-4 h-10 leading-tight {{ $data->currentPage() === $data->lastPage() ? 'text-gray-300' : 'text-gray-500' }} bg-white border {{ $data->currentPage() === $data->lastPage() ? 'border-gray-300' : 'border-gray-300' }} rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                </li>
            </ul>
        </nav> --}}

    </div>
</div>
