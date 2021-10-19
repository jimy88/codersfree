<div>
    <x-jet-dropdown width="96">
        <x-slot name="trigger">
            <span class="relative inline-block cursor-pointer">
                <x-cart color="white" />
                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">99</span>
            </span>

        </x-slot>

        <x-slot name="content">
            <div class="px-4 py-6 ">
                <p class="text-center text-gray-700">
                    No ahi ningun producto agregados al carrito
                </p>
            </div>
        </x-slot>
    </x-jet-dropdown>
</div>
