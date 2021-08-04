
<div class="mx-32 mt-12">
    <h2 class="text-3xl font-bold mb-1">
        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a> {{-- Recuperation des valeurs id, title et body --}}
    </h2>
    <p class="text-xl font-sans text-gray-600">{{ $post->created_at->toFormattedDateString() }}</p>
    
    <p class="mt-6">
        {{ $post->body }}
    </p>
</div> 

    