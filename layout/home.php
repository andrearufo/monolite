<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">

    <style media="screen">
        header{
            text-align: center;
            padding-top: 4rem;
        }

        header > .title{
            font-size: 140%;
        }

        .card{
            display: block;
            margin-bottom: 1rem;
            color: inherit;
            border: 0.1rem solid #e1e1e1;
            padding: 1rem;
            border-radius: .4rem;
        }

        footer{
            text-align: center;
            font-size: 80%;
            padding-bottom: 4rem;
        }
    </style>

    <title><?php echo $site->title ?></title>

    <meta name="title" content="<?php echo $site->title ?>">
    <meta name="description" content="<?php echo $site->description ?>">

</head>
<body>

    <div class="container">

        <header>
            <div class="title">
                <a href="<?php echo $site->url ?>">
                    <?php echo $site->title ?>
                </a>
            </div>

            <p><?php echo $site->description ?></p>
        </header>

        <hr>

        <?php if( $site->isSingle() ) : ?>

            <?php echo $site->current->content ?>

        <?php else : ?>

            <?php foreach ($site->articles as $article): ?>
                <a class="card" href="<?php echo $article->permalink ?>">
                    <?php echo $article->title ?>
                    <br>
                    <small><?php echo $article->modified ?></small>
                </a>
            <?php endforeach; ?>

        <?php endif; ?>

        <hr>

        <footer><?php echo $site->footer ?></footer>

    </div>

</body>
</html>
