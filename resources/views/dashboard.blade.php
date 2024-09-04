<x-app-layout>
 
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-blue-600 uppercase tracking-wide italic">
            {{ __('DROP YOUR POST HERE') }}
        </h2>
        <ul class="navbar-nav mr-auto flex space-x-5">
            <li class="nav-item">
                <a href="{{ route('welcome') }}" class="text-blue-600 hover:text-blue-800">new posts</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('posts.all') }}" class="text-blue-600 hover:text-blue-800">all posts</a>
            </li>
        </ul>
    </x-slot>
    


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Post Title</label>
                    <input type="text" name='title'
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Enter post title">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Post Description</label>
                    <textarea type="text"
                        name= 'description' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Enter post description"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-blue-500 border border-blue-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Post
                </button>                
            </form>
        </div>
    </div>
</x-app-layout>
