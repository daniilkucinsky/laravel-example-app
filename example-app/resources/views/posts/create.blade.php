<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create post</title>
</head>
<body>
    <h1>Create post</h1>
    <form action="/posts" method="post">
        @csrf
        <label for="author">Author: </label>
        <input type="text" name="author" id="author"><br>
        
        <label for="title">Title: </label>
        <input type="text" name="title" id="title"><br>

        <label for="textarea">Content: </label>
        <textarea name="content" id="textarea"></textarea>
        <input type="submit" value="Save">
    </form>
</body>
</html>
