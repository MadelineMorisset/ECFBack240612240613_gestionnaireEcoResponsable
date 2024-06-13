<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/resetCss.css">
    <link rel="stylesheet" href="./assets/css/variable.css">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/23c1a897ea.js" crossorigin="anonymous"></script>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--  FONT - Lora : Title (https://fonts.google.com/specimen/Lora?stroke=Serif) -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <!-- FONT - Josefin Sans : Text (https://fonts.google.com/specimen/Josefin+Sans?stroke=Sans+Serif&subset=latin&stylecount=12&noto.script=Latn) -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <title>Gestionnaire Éco-Responsable</title>
</head>

<body>
    <?php include("./header.php") ?>

    <main class="mainBody">
        <div class="container">
            <h1 class="title h1">Se connecter</h1>
            <form class="loginForm form">
                <section class="formSection">
                    <label for="pseudo" class="textForm label">Login</label>
                    <input type="text" name="pseudo" required class="inputLogin text">
                </section>
                <section class="formSection">
                    <label for="password" class="textForm label">Pass</label>
                    <input type="password" name="password" required class="inputLogin text">
                    <!-- <a href="forgottenPassword.php" class="forgottenPw">Mot de passe oublié ?</a> -->
                </section>
                <section class="connectionSection">
                    <button type="submit" class="connection textForm">Valider</button>
                </section>
            </form>
        </div>

        <div class="container">
            <h1 class="title h1">Créer un compte</h1>
            <form class="signupForm form">
                <section class="formSection">
                    <label for="pseudo" class="textForm label">Login</label>
                    <input type="text" name="pseudo" required class="inputLogin text">
                </section>
                <section class="formSection">
                    <label for="email" class="textForm label">Email</label>
                    <input type="email" name="email" required class="inputLogin text">
                </section>
                <section class="formSection">
                    <label for="password" class="textForm label">Pass</label>
                    <input type="password" name="password" required class="inputLogin text">
                </section>
                <section class="connectionSection">
                    <button type="submit" class="connection textForm">Valider</button>
                </section>
            </form>
        </div>
    </main>
</body>

</html>