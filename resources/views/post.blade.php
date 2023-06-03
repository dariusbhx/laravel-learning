<!doctype html>

<title>My Blog</title>

<link rel="stylesheet" href="/app.css">

<body>
    <article>
            <h1><?= $post->title; ?></h1>
            <p>
                <a href="3"><?= $post->category->name; ?></a>
            </p>
            <div><?= $post->excerpt; ?></div>
            
        </article><br>

    <a href="/">Go back</a>
</body>