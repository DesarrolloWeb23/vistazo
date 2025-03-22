
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
            <h3 class="">Cantidad de vistazos</h3>
            <p class="absolute inset-0 flex items-center justify-center text-lg font-semibold text-neutral-500 dark:text-neutral-400">0</p>
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <h3 class="">Cantidad de reflejos</h3>
            <p class="absolute inset-0 flex items-center justify-center text-lg font-semibold text-neutral-500 dark:text-neutral-400">{{$countPosts}}</p>
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</div>
