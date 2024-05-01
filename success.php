<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Pen's Life - Form confirmation</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="mobile-version.css" media="screen and (max-width: 500px)" />

    <script src="https://kit.fontawesome.com/f61418b52c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet" />
</head>
<body>
<main class="main-success-form">
    <div class="form-success">
        <div class="background-arrow-success"></div>
        <h2 class='success-message'>Merci pour votre message !</h2>
        <div class="success-recap">
            <p>Pour récapituler :</p>
                <li><strong>Nom :</strong> <?php echo htmlspecialchars($_GET['name']); ?></li>
                <li><strong>Email :</strong> <?php echo htmlspecialchars($_GET['email']); ?></li>
                <li><strong>Message :</strong> <?php echo htmlspecialchars($_GET['message']); ?></li>
            </ul>
        </div>
        <div class="container-cta container-cta-form">
            <a href="index.html#landing-section" class="cta cta-form">RETOUR PAGE D'ACCUEIL</a>
        </div>
    </div>
</main>
</body>
</html>
