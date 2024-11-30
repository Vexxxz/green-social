<!DOCTYPE html>
<html>
<head>
    <title>Create New Comment</title>
</head>
<body>
    <h1>Create New Comment for Post: {{ $post->title }}</h1>

    <form action="{{ route('comments.store', $post) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="content">Comment Content:</label>
            <textarea name="content" id="content" rows="4" required></textarea>
        </div>

        <button type="submit">Create Comment</button>
    </form>
</body>
</html>
