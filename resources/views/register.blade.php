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
        <h1>Créer mon compte</h1>
    </div>

    <div class="register-form">
        <form action="/account" method="post">
            @csrf
            <div class="set-inputs">
                <div class="name-flex">
                    <div class="name-block">
                        <label for="firstname"><h2>Prénom</h2></label>
                            <input class="focused name-blocks capitalize" type="text" name="firstname" id="firstname" autofocus required placeholder="Martine">
                    </div>

                    <div class="name-block">
                        <label for="lastname"><h2>Nom</h2></label>
                            <input class="focused name-blocks capitalize" type="text" name="lastname" id="lastname" required capitalize placeholder="Dubois">
                    </div>
                </div>

                <label for="email"><h2>Email</h2></label>
                    <input class="focused" type="email" name="email" id="email" autofocus required placeholder="martine@example.com"><br>
                <label for="password"><h2>Mot de passe</h2></label>
                    <input class="focused" type="password" name="password" id="password" required placeholder="•••••••••••">
                <label for="password"><h2>Confirmer mot de passe</h2></label>
                    <input class="focused" type="password" name="password" id="password" required>
                <input class="connexion-btn" type="submit" name="connexion" id="connexion" value="S'inscrire">
            </div>
        </form>
    </div>

    <p class="create-link">Ou <a href="/login">Se connecter</a></p>

</main>





</body>


</html>
