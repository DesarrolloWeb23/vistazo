
<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
    <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
        <div class="grid lg:grid-cols-3 grid-cols-1 md:container md:mx-auto">
            <section class="lg:col-span-3 col-1 p-4">
                <div class="flex justify-end">
                    Publica un reflejo de tu día, comparte tus pensamientos, tus ideas, tus proyectos. ¡Deja que el mundo te conozca!
                </div>
            </section>
            <section class="lg:col-span-3 col-1 h-auto p-4">   
                <div class="grid lg:grid-cols-3 grid-cols-1 md:container md:mx-auto">
                    <form class="pt-6 px-9 pb-6 rounded-lg bg-white">
                        <div class="mb-7">
                            <h1 class="text-2xl text-center font-semibold text-gray-900 dark:text-black">;)</h1>
                        </div>
                        @csrf
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" wire:model="description" name="descripcion" id="descripcion" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="descripcion" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Publica para que otros le den un ¡Vistazo!</label>
                        </div>
                        <x-button class="ms-4"  wire:click.prevent="savePost">
                            Postear
                        </x-button>
                    </form>
                </div>
            </section> 
        </div>
    </div>
    <div class="grid auto-rows-min gap-4 md:grid-cols-3">
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <!--tabla para ver los post-->
            <table class="min-w-full
            bg-white dark:bg-gray-800">
                <thead>
                    <tr>
                        <th class="py-3 px-6 text-left">Descripción</th>
                        <th class="py-3 px-6 text-left">Fecha</th>
                        <th class="py-3 px-6 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <div class="flex items
                            center">
                                <span class="font-medium">{{$post->description}}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items
                            center">
                                <span>{{$post->created_at}}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center">
                                <button wire:click="deletePost({{$post->id}})" class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 text-center">
            <h3 class="py-3" >Cantidad de reflejos</h3>
            <p class="absolute inset-0 flex items-center justify-center text-lg font-semibold text-neutral-500 dark:text-neutral-400">{{$countPosts}}</p>
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 text-center">
            <h3 class="py-3">Cantidad de vistazos</h3>
            <p class="absolute inset-0 flex items-center justify-center text-lg font-semibold text-neutral-500 dark:text-neutral-400">{{$profile_views}}</p>
        </div>
    </div>
</div>
