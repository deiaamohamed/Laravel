<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<article class="border-2 border-black bg-white shadow-[4px_4px_0_0,8px_8px_0_0]">
  <div class="bg-yellow-300 p-3">
    <div class="flex items-center justify-between">
      <strong class="text-xs/none font-bold uppercase">{{ $post['id'] }}</strong>

      <div class="flex gap-1">
        <div class="size-3 border-2 border-black bg-white"></div>
        <div class="size-3 border-2 border-black bg-white"></div>
      </div>
    </div>
  </div>

  <div class="border-t-2 border-black p-4 sm:p-6">
        <h2 class="text-lg font-semibold text-black">{{ $post->user->name }}</h2>

    <h3 class="text-lg font-semibold text-black">{{ $post['title'] }}</h3>

    <p class="mt-2 text-sm text-pretty">
        {{ $post['post'] }}
    </p>
 <div class="mt-4 flex flex-wrap gap-2">
    <p class="inline-flex items-center rounded-full border-2 border-black bg-white px-3 py-1 text-xs font-bold text-black">
        <span class="mr-2 flex items-center gap-1.5">
            <span class="size-2 rounded-full border border-black bg-red-500"></span>
            <span class="uppercase tracking-tight">Created:</span>
        </span>
        {{ $post->created_at->diffForHumans() }}
    </p>

    <p class="inline-flex items-center rounded-full border-2 border-black bg-white px-3 py-1 text-xs font-bold text-black">
        <span class="mr-2 flex items-center gap-1.5">
            <span class="size-2 rounded-full border border-black bg-cyan-400"></span>
            <span class="uppercase tracking-tight">Updated:</span>
        </span>
        {{ $post->updated_at->diffForHumans() }}
    </p>
</div>
  </div>
</article>
