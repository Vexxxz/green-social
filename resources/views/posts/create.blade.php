<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>Create a New Post</h1>

    <form action="{{ route('user_posts.store') }}" method="POST">
        @csrf

        <label for="message">Message:</label><br>
        <textarea name="message" id="message" rows="5" cols="40" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
