<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table-auto w-full border-collapse border border-gray-300 shadow-md rounded-md">
                        <!--<h1 class="text-2xl font-bold text-center my-4">Lista de Tareas</h1>-->
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="px-4 py-2 border border-gray-300 text-left"></th>
                                <th class="px-4 py-2 border border-gray-300 text-left">Título</th>
                                <th class="px-4 py-2 border border-gray-300 text-left">Descripción</th>
                                <th class="px-4 py-2 border border-gray-300 text-left">Estado</th>
                                <th class="px-4 py-2 border border-gray-300 text-left">Categoria</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=0; @endphp
                            @foreach ($tasks as $task)
                                @if ($task->task->status == 'finalizado')
                                    <tr class="cursor-pointer bg-gray-100 hover:bg-gray-400"
                                        onclick="window.location='{{ route('tarea.show', $task->task->id) }}';">
                                        <th>{{ $i += 1 }}</th>
                                        <th>{{ $task->task->title }}</th>
                                        <th>{{ $task->task->description }}</th>
                                        <th>{{ $task->task->status }}</th>
                                        <th>{{ $task->category->name }}</th>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
