<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <span>{{ session('success') }}</span>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($posts as $post)
                    <div class="flex itmes-center">
                        <a href="{{ route('posts.edit', $post) }}" class="bg-indigo-50 px-4 py-2 block">Editer
                            {{ $post->title }}</a>
                        <a href="#" class="bg-gray-600 px-4 py-2 block" onclick="event.preventDefault
                        document.getElementById('destroy-post-form').submit();
                        ">Supprimer
                            {{ $post->title }}
                            <form method="post" action="{{ route('posts.destroy', $post) }}" id="destroy-post-form">
                                @csrf
                                @method('delete')
                            </form>
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
