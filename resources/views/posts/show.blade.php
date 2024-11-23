<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous defer"></script>
</head>
<body>
    <div class="container mt-3">
        <h1 class="mb-4">View Post</h1>

        @isset($post)
            <p class="border rounded p-3 mb-5">{{ $post->message }}</p>
            <h3>Comments</h3>
            <hr>
        @else
            <p>Post Not Found.</p>
        @endisset
    </div>
</body>
</html>
