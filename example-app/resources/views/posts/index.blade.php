<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1>All posts</h1>
    <ul>
    @foreach($allposts as $post)
        <li>
            Author :{{$post->author}}
            TItle :{{$post->title}}
            Content :{{$post->description}}
            

        </li>
    @endforeach
    </ul>
</body>
</html>