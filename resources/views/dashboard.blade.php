<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-around">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </div>
            <div class="container flex justify-center lg:justify-end">
                <div class="pr-3">
                    <form action="">
                        <div class="relative">
                            <input type="text" placeholder="search..." name="search" class="w-80 rounded">
                            <button class="absolute left-72 bottom-3 rotate-45"><svg class="w-6 h-6" fill="none" stroke="#777" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg></button>
                        </div>     
                    </form>
                </div>     
            </div>
        </div>
    </x-slot>
    <section class="px-20 mx-auto md:grid md:grid-cols-3">
        <div>

        </div>
        <div>
           <livewire:load-more-posts-data/>
           
        </div>
        
        <div>

        </div>
    </section>
</x-app-layout>
