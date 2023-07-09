<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="../css/app.css">
</head>
<body>

    <?php foreach ($posts as $post) : ?>

        <article>

            <h2><a href="posts/<?= $post->slug; ?>"><?php echo $post->title; ?></a></h2>
            <h4><?php echo $post->excerpt; ?></h4>

        </article>

    <?php endforeach; ?>

    <script src="../js/script.js"></script>

</body>

</html>