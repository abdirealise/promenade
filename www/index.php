<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>D&W</title>
        <link rel="stylesheet" href="/assets/css/bulma.min.css">
    </head>
    <body>
        <section class="hero is-medium is-info is-bold">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                        Discover & Workout
                    </h1>
                    <h2 class="subtitle">
                        Your local development environment
                    </h2>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Environment</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><?php echo apache_get_version(); ?></li>
                                <li>PHP <?php echo phpversion(); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Quick Links</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><a href="http://localhost/phpinfo.php">Infos</a></li>
                                <li><a href="http://localhost/test_db.php">Test</a></li>
                                <li><a href="http://localhost/formulaire.php">Formulaire</a></li>
                                <li><a href="http://localhost:9000">phpMyAdmin</a></li>
                                <li><a href="http://localhost/afficherPromenades.php">Promenades</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
