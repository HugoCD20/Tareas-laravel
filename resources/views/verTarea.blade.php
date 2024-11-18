<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            <div class="p-6 flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <div class="flex-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-800"><strong>{{$task->user->name}}</strong></span>
                            <small class="ml-2 text-sm text-gray-600">Vencimiento: {{$task->due_date}}</small>
                            <small>
                                @if ($task->status == "pendiente")
                                🟠
                                @elseif ($task->status == "en proceso")
                                🟢
                                @else
                                🔴
                                @endif

                            </small>
                        </div>
                        <form action="{{ route('tarea.update', $task->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $task->id }}">
                            @if($task->status != "finalizado")
                            <x-primary-button class="ms-4 cursor-pointer hover:bg-gray-400 hover:text-black">
                                @if($task->status != "pendiente")
                                    {{ __('Finalizar') }}
                                    @else
                                    {{ __('Empezar') }}

                                @endif
                            </x-primary-button>
                            @endif
                        </form>

                    </div>
                    <p class="mt-4 text-lg text-gray-900"><strong>Título:</strong> {{$task->title}}</p>
                    <p class="mt-4 text-lg text-gray-900">{{$task->description}}</p>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
