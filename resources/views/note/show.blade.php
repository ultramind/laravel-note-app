<x-app-layout>
    <main class="w-full h-screen flex justify-center">
        <div class="w-[60%] flex flex-col gap-4">
            <h1 class="text-2xl font-semibold">Create Note</h1>
            <article class="flex flex-col p-4 bg-white rounded-lg box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1) border-[1px] border-gray-300">
                <form action="" class="flex flex-col gap-4">
                    
                    
                    <div class="flex gap-2 py-3 justify-between items-center">
                        <div class="flex gap-3">
                            <a href={{ route('note.edit', $note) }} class="px-5 py-2 bg-blue-500 text-white rounded-lg">Edit</a>
                            <form method="POST" action={{ route('note.destroy', $note) }}>
                                @csrf
                                @method('DELETE')
                                <button class="px-5 py-2 bg-red-500 text-white rounded-lg">Delete</button>
                            </form>
                        </div>
                        <span>{{ $note->created_at }}</span>

                    </div>
                    <p>{{ $note->note }}</p>
                </form>
            </article>
        </div>
    </main>
</x-app-layout>