<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/site.css">
    <link rel="shortcut icon" href="public/favicon.ico">
    <title>Index</title>
</head>

<body>
    <?php include('includes/topbar.php') ?>
    <header>
        <?php include('includes/navbar.php') ?>
    </header>
    <section class='main'>

        <h1>Blog <span style="font-size: 0.2em;">is under construction</span></h1>
        <p>In the mean time, here are some pictures of my cats. 
            <em>
                <span style="font-weight: bolder; font-size: 1.75em; background-color: pink; color: red; font-family: serif">
                    THAT'S A LITTLE TRICK CALLED SUBVERSION
                </span>
            </em>
        </p>
        <!-- fire gif from https://giphy.com/stickers/actionvfx-fire-flames-burning-poles-gJijhzjTV2pCn2SePc -->
        <img src="public/images/misc/fire.gif" alt="trail of flames" class='above-line-bg-gif'>
  
        <?php include('includes/cat-gallery.php') ?>

    </section>
</body>

</html>