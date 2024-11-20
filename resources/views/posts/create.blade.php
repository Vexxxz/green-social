<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous defer"></script>
</head>
<body>
    <h1 class="text-start ms-3 mt-3">Create a New Post</h1>

    <form action="{{ route('user_posts.store') }}" method="POST">
        @csrf

        <label for="message" class="ms-3">Message:</label><br>
        <div class="form-floating mt-3 ms-2 me-5">
            <textarea class="form-control" name="message" id="message" rows="5" cols="40" required></textarea><br><br>
        </div>
        <button type="submit" class="btn btn-primary ms-2 mt-3 mb-3">Submit</button>
    </form>
</body>
</html>
