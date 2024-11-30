<h1>Create New Comment for Post: {{ $post->title }}</h1>

<form action="{{ route('comments.store', $post) }}" method="POST">
    @csrf
    <textarea name="content" rows="4" required></textarea>
    <button type="submit">Create Comment</button>
</form>
