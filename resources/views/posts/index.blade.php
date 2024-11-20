<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Green Social</title>
</head>
<body>
    <h1>Homepage Green Social</h1>

    <h2>Posts</h2>
    @if (isset($posts))
        @foreach ($posts as $post)
            <div style="width:90%; border:solid black 1px; margin-bottom: 10px; padding: 10px;">
                {{ $post["message"] }}
            </div>
        @endforeach
    @else
        <div>Posts list is empty.</div>
    @endif
</body>
</html>