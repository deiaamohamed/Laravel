@extends('sharedlayout.app')
@section('content')

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<form action="/posts" method="POST" enctype="multipart/form-data" class="p-8 space-y-4 max-w-md">
    @csrf

    <label class="block">
        <span class="text-sm font-medium text-gray-700"> Headliner </span>
        <select name="u_id" class="mt-0.5 w-full rounded border-gray-300 shadow-sm sm:text-sm">
            <option value="">select user</option>
            @foreach($user as $us)
                <option value="{{ $us->id }}">{{ $us->name }}</option>
            @endforeach
        </select>
    </label>

    <label for="name" class="block">
        <span class="text-sm font-medium text-gray-700">Title</span>
        <input type="text" id="name" name="name" class="mt-0.5 w-full rounded border-gray-300 shadow-sm sm:text-sm">
    </label>

    <label for="post" class="block">
        <span class="text-sm font-medium text-gray-700">Post</span>
        <input type="text" id="post" name="post" class="mt-0.5 w-full rounded border-gray-300 shadow-sm sm:text-sm">
    </label>

    <label for="image" class="block">
        <span class="text-sm font-medium text-gray-700">Cover Image</span>
        <input type="file" id="image" name="image" class="mt-0.5 w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-black file:text-white hover:file:bg-gray-700">
    </label>

    <button type="submit" class="border-2 border-black bg-white px-5 py-3 font-semibold text-black shadow-[4px_4px_0_0] hover:bg-yellow-300">
        Add Post
    </button>
</form>

@if($errors->any())
<div class="p-4 mb-4 text-sm text-red-800 rounded-md bg-red-100" role="alert">          
     @foreach($errors->all() as $err)
        <span class="font-medium">{{ $err }}</span><br>
    @endforeach
</div>
@endif
@endsection