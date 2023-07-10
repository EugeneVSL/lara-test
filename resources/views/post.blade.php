<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>

    <link rel="stylesheet" href="../css/app.css">
</head>
<body>

    <article>

        <h2>{{ $post->title }}</a></h2>
        {!! $post->body !!}

    </article>

    <a href="/lara-test/">Go Back</a>

    <script src="../js/script.js"></script>

</body>

</html>