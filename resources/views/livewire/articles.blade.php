<div class="row">
    <div class="col-sm-7 col-md-8 col-lg-9 col-xl-10 mb-3">
        <input type="text" wire:model="search" placeholder="Busqueda..." class="form-control bg-dark text-white">
    </div>
    <div class="col-sm-5 col-md-4 col-lg-3 col-xl-2 text-end mb-3">
        <livewire:create-post />
    </div>
    <div class="col-12">
        @if ($posts->count())
            <div class="table-responsive-xl">
                <table class="table table-dark table-hover align-middle">
                    <thead>
                        <tr>
                            <th wire:click="order('id')" scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{-- Icons sort --}}
                                @if ($sort == 'id')
                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-down float-right"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-up float-right"></i>
                                    @endif
                                @else
                                    <i class="fas fa-sort"></i>
                                @endif
                                #
                            </th>
                            <th wire:click="order('title')" scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{-- Icons sort --}}
                                @if ($sort == 'title')
                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-down float-right"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-up float-right"></i>
                                    @endif
                                @else
                                    <i class="fas fa-sort"></i>
                                @endif
                                Title
                            </th>
                            <th wire:click="order('content')" scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{-- Icons sort --}}
                                @if ($sort == 'content')
                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-down float-right"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-up float-right"></i>
                                    @endif
                                @else
                                    <i class="fas fa-sort"></i>
                                @endif
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
            </div>
        @else
            <div class="bg-dark text-white p-3">No se encontraron Registros</div>
        @endif
    </div>
</div>