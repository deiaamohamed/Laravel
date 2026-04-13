@extends('sharedlayout.app')
@section('content')


<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<form action="/posts" method="POST" class="p-8 space-y-4 max-w-md">
    @csrf
    @method('put')
<input hidden type="text" id="id" name="id" class="mt-0.5 w-full rounded border-gray-300 pe-10 shadow-sm sm:text-sm" value="{{ $post['id'] }}">

    <label for="name" class="block">
        <span class="text-sm font-medium text-gray-700">Name</span>
        <div class="relative">
            <input type="text" id="name" name="name" class="mt-0.5 w-full rounded border-gray-300 pe-10 shadow-sm sm:text-sm" value="{{ $post['title'] }}">
        </div>
    </label>

    <label for="post" class="block">
        <span class="text-sm font-medium text-gray-700">Post</span>
        <div class="relative">
            <input type="text" id="post" name="post" class="mt-0.5 w-full rounded border-gray-300 pe-10 shadow-sm sm:text-sm" value="{{ $post['post'] }}">
        </div>
    </label>

    <button type="submit" class="border-2 border-black bg-white px-5 py-3 font-semibold text-black shadow-[4px_4px_0_0] hover:bg-yellow-300 focus:ring-2 focus:ring-yellow-300 focus:outline-0">
        Update Post
    </button>
</form>
@endsection