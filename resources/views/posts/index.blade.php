<!DOCTYPE html>
<html>
<head>
    <title>User Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous defer"></script>
</head>
<body>
    <div class="container mt-3 mb-4">
       <h1>Green Social Homepage</h1>
    </div>

    <form action="{{ route('user_posts.create') }}" method="GET">
        <button type="submit" class="btn btn-primary ms-5 mt-3 mb-3">Create Post</button>
    </form>

    @if ($message = Session::get('success'))
        <div class="container ms-5">
            <p style="color: green;">{{ $message }}</p>
        </div>
    @endif

    @if ($posts->isEmpty())
        <p>No posts available.</p>
    @else
            @foreach ($posts as $post)
                <div class="container mb-3 p-3 border rounded ">
                    <p>{{ $post->message }}</p>
                    <p>Likes: {{ $post->likes }}</p>

                    <form action="{{ route('user_posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            @endforeach

        <div class="container mt-4 ps-2 pe-2">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
        
    @endif
</body>
</html>
