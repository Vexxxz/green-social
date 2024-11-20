<!DOCTYPE html>
<html>
<head>
    <title>User Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous defer"></script>
</head>
<body>
    <div class="container">
       <h1>Green Social Homepage</h1>
    </div>

    <form action="{{ route('user_posts.create') }}" method="GET">
        <button type="submit" class="btn btn-primary ms-5 mt-3">Create Post</button>
    </form>

    @if ($message = Session::get('success'))
        <p style="color: green;">{{ $message }}</p>
    @endif

    @if ($posts->isEmpty())
        <p>No posts available.</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>
                    <p>{{ $post->message }}</p>
                    <p>Likes: {{ $post->likes }}</p>

                    <form action="{{ route('user_posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>

        {{ $posts->links('pagination::bootstrap-4') }}
    @endif
</body>
</html>
