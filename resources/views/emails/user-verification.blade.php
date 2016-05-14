<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
<div>
    <h3>Bonjour, et merci de vous être inscrit</h3>
    <hr>
    <label>Validation de compte</label>
    <hr>
    <p>Cliquez sur le lien suivant pour valider votre compte :
        <a href="{{ $link = url('verification', $user->verification_token) . '?email=' . urlencode($user->email) }}"> {{ $link }}</a>
    </p>
    <p>
        Signé : l'administrateur
    </p>

</div>
</body>
</html>
