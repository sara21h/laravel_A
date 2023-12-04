<x-layout>
    <form action="{{ route('crear.tasques') }}" method="get">
            @csrf
    <div class="py-20 flex items-center justify-center flex-col">

        <div class="mx-auto my-4">
            <label for="id" class="block text-sm font-medium leading-6 text-green-700">Id</label>
            <div class="mt-2">
                <input type="number" name="id" id="id" class="block w-8/10 rounded border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset
                 ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 px-4" placeholder="Id de la tasca" />
            </div>
        </div>

        <div class="mx-auto my-10">
            <label for="name" class="block text-sm font-medium leading-6 text-green-700">Title</label>
            <div class="mt-2">
                <input type="text" name="name" id="name" class="block w-8/10 rounded border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset
                 ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 px-4" placeholder="Nom de la tasca " />
            </div>
        </div>

        <div class="mx-auto my-10">
            <label for="description" class="block text-sm font-medium leading-6 text-green-700">Description</label>
            <div class="mt-2">
                <input type="text" name="description" id="description" class="block w-8/10 rounded border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset
                 ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 px-4" placeholder="Petita descripció.. " />
            </div>
        </div>

        <div class="mx-auto my-10">
            <label for="completed" class="block text-sm font-medium leading-6 text-green-700">Completed</label>
            <div class="mt-2">
                <input type="number" name="completed" id="completed" class="block w-8/10 rounded border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset
                 ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 px-4" placeholder="Està completada? " />
            </div>
        </div>

        <div class="mx-auto my-10">
            <button type="submit" class="bg-green-500 text-white font-semibold text-xs px-4 py-2 rounded-full">Confirmar</button>
        </div>

    </div>
    </form>
</x-layout>
