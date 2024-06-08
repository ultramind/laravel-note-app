<x-app-layout>
    <main class="w-full h-screen flex justify-center">
        <div class="w-[60%] flex flex-col gap-4">
            <h1 class="text-2xl font-semibold">Edit Note</h1>
            <article class="flex flex-col p-4 bg-white rounded-lg box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1) border-[1px] border-gray-300">
                <form action={{ route('note.update', $note) }} class="flex flex-col gap-3" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your Note</label>
                    <textarea id="message" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your thoughts here..." name="note">
                        {{ $note->note }}
                    </textarea>
                    <div class="flex gap-2 py-3">
                        <button class="px-5 py-2 bg-yellow-500 text-white rounded-lg">Update</button>
                        <a href={{ route('note.index') }} class="px-5 py-2 bg-red-500 text-white rounded-lg">Cancel</a>
                    </div>
                </form>
            </article>
        </div>
    </main>
</x-app-layout>