<!DOCTYPE html>
<html>
<head>
    <title>User Posts</title>
</head>
<body>
    <h1>All Posts</h1>

    <a href="{{ route('user_posts.create') }}">Create New Post</a>

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

        {{ $posts->links() }}
    @endif
</body>
</html>
