<!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Connexion</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    </head>

    <body>

        <main class="main-wrapper">

            <div class="div-title">
                <h1>Mon compte</h1>
            </div>

            <div class="login-form">
                <form action="/account" method="post">
                    @csrf
                    <div class="set-inputs">
                        <label for="email"><h2>Email</h2></label>
                            <input class="focused" type="email" name="email" id="email" autofocus required placeholder="martine@example.com"><br>
                        <label for="password"><h2>Mot de passe</h2></label>
                            <input class="focused" type="password" name="password" id="password" required placeholder="•••••••••••">
                        <a href="#" class="forgotten-link">Mot de passe oublié ?</a>
                        <input class="connexion-btn" type="submit" name="connexion" id="connexion" value="Se connecter">
                    </div>
                </form>
            </div>

            <p class="create-link">Ou <a href="/register">Créer un compte</a></p>

        </main>





    </body>


    </html>
