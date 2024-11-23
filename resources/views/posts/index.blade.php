<!DOCTYPE html>
<html>
<head>
    <title>User Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous defer"></script>
</head>
<body>
    <div class="container-fluid fixed-top bg-white ps-3 pt-2">
       <h1>Green Social Homepage</h1>
    </div>

    <div class="container" style="margin-top: 90px">
        <form action="{{ route('posts.create') }}" method="GET">
            <button type="submit" class="btn btn-primary mb-3">Create Post</button>
        </form>
    
        @if ($message = Session::get('success'))
                <p class="text-success">{{ $message }}</p>
        @endif
        @if ($posts->isEmpty())
            <p>No posts available.</p>
        @else
            @foreach ($posts as $post)
                <div class="container mb-3 p-3 border rounded ">
                    <p>{{ $post->message }}</p>
                    <p>Likes: {{ $post->likes }}</p>

                    <div class="row">
                        <form class="col-2" action="{{ route('posts.show', $post->id) }}" method="GET" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-primary">View Post</button>
                        </form>
                        <div class="col-3 offset-7 text-end">
                            <form action="{{ route('posts.edit', $post->id) }}" method="GET" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="container">
                {{ $posts->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
</body>
</html>
