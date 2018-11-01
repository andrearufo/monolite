<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://rawgit.com/andrearufo/monospaced.css/0.0.1/dist/monospaced.min.css">

    <title><?php echo $site->title ?></title>

    <meta name="title" content="<?php echo $site->title ?>">
    <meta name="description" content="<?php echo $site->description ?>">

</head>
<body>

    <div class="container">

        <div class="row justify-content-center py-5">
            <div class="col-lg-8">

                <div>
                    <a href="<?php echo $site->url ?>"><?php echo $site->title ?></a>, <?php echo $site->description ?></p>
                </div>

                <hr>

                <div class="my-5">
                    <?php if( $site->isSingle() ) : ?>

                        <?php echo $site->current->content ?>

                    <?php else : ?>

                        <ul>
                            <?php foreach ($site->articles as $article): ?>
                                <li>
                                    <a href="<?php echo $article->permalink ?>"><?php echo $article->title ?></a>, <?php echo $article->modified ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                    <?php endif; ?>
                </div>

                <hr>

                <small><?php echo $site->footer ?></small>

            </div>
        </div>

    </div>

</body>
</html>
