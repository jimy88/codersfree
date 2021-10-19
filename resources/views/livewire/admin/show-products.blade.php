<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-600">
            Lista de productos
        </h2>

        <x-button-enlace>
            Agregar Productos
        </x-button-enlace>

    </x-slot>


   <div class="container w-full py-12">
        <!-- This example requires Tailwind CSS v2.0+ -->
                    <x-table-responsive>

                        <div class="px-6 py-4">
                            <x-jet-input type="text"
                            wire:model="search"
                            class="w-full"
                            placeholder="Ingrese el nombre del producto que desea buscar"
                            />

                        </div>

                        @if ($products->count())

                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Nombre
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Categoria
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Estado
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Precio
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Editar</span>
                                        </th>
                                    </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">

                            @foreach ($products as $product)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                        <img class="object-cover w-10 h-10 rounded-full" src="{{Storage::url($product->images->first()->url)}}" alt="">
                                        </div>
                                        <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{$product->name}}
                                        </div>

                                        </div>
                                    </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{$product->subcategory->category->name}}
                                    </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">

                                        @switch($product->estatus)
                                            @case(1)
                                            <span class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-200 rounded-full">
                                                Borrador
                                            </span>
                                                @break
                                            @case(2)
                                            <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-200 rounded-full">
                                                Publicado
                                            </span>
                                                @break
                                            @default

                                        @endswitch

                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    {{$product->price}}
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <a href="{{route('admin.products.edit', $product)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                </tr>
                            @endforeach

                            <!-- More people... -->
                            </tbody>
                        </table>
                        @else
                        <div class="px-12 py-4">
                            No ahi ningun registro existente
                        </div>
                        @endif

                        @if ($products->hasPages())
                        <div class="px-6 py-4">
                            {{$products->links()}}
                        </div>
                        @else

                        @endif

                    </x-table-responsive>


    </div>

</div>
