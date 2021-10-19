<style>
    #navigation-menu{
        height: calc(100vh - 4rem);
    }

    .navigation-link:hover .navigation-submenu{
        display:  block !important;
    }
</style>

<header class="sticky top-0 z-50 bg-trueGray-700" x-data="dropdown()">
    <div class="container flex items-center h-16">
        <a
        x-on:click="show()"
        class="flex flex-col items-center justify-center h-full mx-2 font-semibold text-white bg-white bg-opacity-25 cursor-pointer">
            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <span>
                <p class="mb-3 text-lg font-bold text-center text-tryeGray-500">
                    Categorias
                </p>
            </span>
        </a>

        <a href="/" class="px-4">
            <x-jet-application-mark class="block w-auto h-9 "/>
        </a>

        <div class="flex-1 ">
            @livewire('search')
        </div>


        <div class="relative mx-6">
            @auth
                <x-jet-dropdown align="right" width="48" >
                    <x-slot name="trigger">
                            <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>

                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>

            @else

            <x-jet-dropdown align="right" width="48">

                <x-slot name="trigger">
                    <i class="text-2xl text-white cursor-pointer fas fa-user-circle"></i>
                </x-slot>

                <x-slot name="content">

                    <x-jet-dropdown-link href="{{ route('login') }}">
                        {{ __('Login') }}
                    </x-jet-dropdown-link>

                    <x-jet-dropdown-link href="{{ route('register') }}">
                        {{ __('Register') }}
                    </x-jet-dropdown-link>

                </x-slot>


            </x-jet-dropdown>

            @endauth
        </div>


        @livewire('dropdown-cart')



    </div>


    <nav id="navigation-menu"
        x-show="open"
    class="absolute w-full bg-opacity-25 bg-trueGray-500 ">
        <div class="container h-full">
            <div
            x-on:click.away="close()"

            class="relative grid h-full grid-cols-4">
                <ul class="bg-white ">
                    @foreach ($categories as $category )
                        <li class="navigation-link text-trueGray-500 hover:bg-orange-500 hover:text-white">
                            <a href="" class="flex items-center px-2 py-2 text-sm">

                                <span class="flex justify-center w-9">
                                    {!!$category->icon!!}
                                </span>
                                {{$category->name}}
                            </a>

                            <div class="absolute top-0 right-0 hidden w-3/4 h-full bg-trueGray-300 navigation-submenu">
                                <x-navigation-subcategories :category="$category" />
                            </div>
                        </li>

                    @endforeach

                </ul>

                <div class="col-span-3 bg-gray-200">


                </div>

            </div>

        </div>

    </nav>

</header>


<script>
    function  dropdown(){
        return {
            open: false,
            show(){
                if(this.open){
                    //se cierra el menu
                    this.open = false;
                    document.getElementsByTagName('html')[0].style.overflow = 'auto'
                }else{
                    //esta abriendo el menu
                    this.open = true;
                    document.getElementsByTagName('html')[0].style.overflow = 'hidden'
                }
            },
            close(){
                this.open = false;
                    document.getElementsByTagName('html')[0].style.overflow = 'auto'
            }
        }
    }

</script>
