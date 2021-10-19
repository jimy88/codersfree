<div wire:init="loadPosts">
    @if (count($products))
    <div class="glider-contain">
        <div class="glider-{{$category->id}}">
            @foreach ($products as $product)
            <li class=" bg-white rounded-lg shadow {{$loop->last ? '' : 'mr-2'}}">
                <article>
                    <figure>
                        <img class="object-cover object-center h-48 w-46" src="{{Storage::url($product->images->first()->url)}}">
                    </figure>

                    <div class="px-6 py-4">
                        <h1>
                            <a href="" class="text-lg font-semibold ">
                                {{Str::limit($product->name, 15)}}
                            </a>
                        </h1>

                        <p class="font-bold text-trueGray-700">US$ {{$product->price}} </p>
                    </div>
                </article>

            </li>
            @endforeach
        </div>

        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
    </div>
    @else
    <div class="flex items-center justify-center ">
        <div class="w-32 h-32 border-b-2 border-gray-900 rounded-full animate-spin"></div>
    </div>
    @endif
</div>
