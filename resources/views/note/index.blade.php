<x-app-layout>
    <section class="w-full px-[50px] h-screen">
        
        <h1 class="px-[50px] font-bold text-2xl">All Notes</h1>
        <hr/>
        <main class="w-full mt-4 flex gap-4 flex-wrap justify-center">
            {{-- indivial Note --}}
            @foreach ($notes as $note )
                <article class="flex flex-col gap-3 w-[30%] p-4 bg-white rounded-lg box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1) border-[1px] border-gray-300">
                    <h2 class="text-2xl font-bold">Lorem ipsum dolor sit amet consectetur.</h2>
                    <p>{{ Str::words($note->note, 35, '...') }}</p>
                    <div class="flex gap-2 border-t-2 border-gray-300 py-3">
                        <a href={{ route('note.show', $note) }} class="px-5 py-2 bg-blue-500 text-white rounded-lg">View</a>
                        <a href={{ route('note.edit', $note) }} class="px-5 py-2 bg-yellow-500 text-white rounded-lg">Edit</a>
                        <form method="POST" action={{ route('note.destroy', $note) }}>
                            @csrf
                            @method('DELETE')
                            <button class="px-5 py-2 bg-red-500 text-white rounded-lg">Delete</button>
                        </form>
                        
                    </div>
                </article>
                
            @endforeach
            {{ $notes->links() }}
        </main>
    </section>
</x-app-layout>
