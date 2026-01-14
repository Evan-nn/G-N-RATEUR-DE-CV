<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Générateur de CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Générateur de CV</h2>

    <form action="preview.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <label>Nom complet</label>
                <input type="text" name="nom" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
        </div>

        <div class="mt-3">
            <label>Profil professionnel</label>
            <textarea name="profil" class="form-control" rows="3"></textarea>
        </div>

        <div class="mt-3">
            <label>Expériences</label>
            <textarea name="experience" class="form-control" rows="4"></textarea>
        </div>

        <div class="mt-4 text-center">
            <button class="btn btn-primary">Prévisualiser</button>
        </div>
    </form>
</div>

</body>
</html>