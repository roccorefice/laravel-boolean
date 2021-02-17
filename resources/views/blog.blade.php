
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="/">HOME</a>
<a href="about">ABOUT</a>
<a href="blog">BLOG</a>

<section class="posts">
    @foreach ($posts as $post)
        <h2> {{ $post->title }} </h2>
        <p> {{ $post->body }} </p>
    @endforeach
</section>
    
</body>
</html>

