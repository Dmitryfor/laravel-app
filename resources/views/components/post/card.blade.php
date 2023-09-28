<x-card>

    <x-card-body>

        <h2 class="h5"><a href="{{ route('posts.show', $post['id']) }}">{{ $post['title'] }}</a></h2>

        <p>{{ $post['content'] }}</p>

        <div class="small text-muted">{{ now()->format('d.m.Y') }}</div>

    </x-card-body>

</x-card>