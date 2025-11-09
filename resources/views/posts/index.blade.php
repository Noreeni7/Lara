<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <h1>All posts!</h1>

    @foreach ($posts as $post)
    <div>
        <p>{{ $post->title }}</p>
        <h2>{{ $post->body }}</h2>
        <a href=" {{ route('posts.edit', $post->id) }}">Edit</a>

        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
        </form>
    </div>
    @endforeach
</body>

</html>