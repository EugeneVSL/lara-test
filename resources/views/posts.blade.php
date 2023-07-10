
<x-layout>

    @foreach ($posts as $post)

        <article>

            <h2><a href="posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <h4>{{ $post->excerpt }}</h4>

        </article>

    @endforeach;

</x-layout>
        