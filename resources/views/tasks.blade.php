<x-layout>
    <div class="min-h-full">
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900">
                    TASQUES
                </h1>
            </div>
            <div class="bg-white pb-20 pt-12 h-full bg-gray-100">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="pr-4">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <p class="text-sm text-gray-700">Llista amb les tasques dels usuaris. </p>
                            </div>
                            <div class="sm:flex-none mt-4 sm:mt-0">
                                <a href="/crearTasques" class="bg-green-500 text-white font-semibold text-xs px-2.5 py-2.5 rounded-full">Afegir tasca</a>
                            </div>
                        </div>
                        </div>
                        <div class="mt-8 flow-root">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-green-700 sm:pl-0">Id</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-green-700">Title</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-green-700">Description</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-green-700">Completed</th>
                                        </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                        @foreach ($tasks as $task)
                                        <tr>
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ $task->id }}</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $task->title }}</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $task->description }}</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $task->completed }}</td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-layout>
