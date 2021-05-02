<x-layout>            

    @foreach ($posts as $post) 
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    <!-- <\?= $post->title; ?> -->
                    <!-- ^ this is the same as <//?php echo $post->title; ?>
                    .blade allows us to shorten this even more to 
                    \{\{ $post->title \}\} -->
                    {{ $post->title }}
                </a>
            </h1>

            <div>

                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>




