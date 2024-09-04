@extends('layouts.context')

@section('content')

<form method="POST" action="{{ route('posts.update',$post->id) }}">
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
        Update
    </button>                
</form>

@endsection