<div>
    <x-table>
        <div>
            <input type="text" wire:model="search" placeholder="Busqueda...">
        </div>
        @if($posts->count())
        <table class="min-w-full">
            <thead class="bg-white border-b">
                <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        #
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Title
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Content
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Edit
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $post->id }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $post->title }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $post->content }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Edit
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            No se encontraron Registros
        @endif
    </x-table>
</div>