<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Création de CV</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-light">

<div class="container my-5">
    <h1 class="text-center mb-4">Générateur de CV</h1>

    <form id="cvForm" method="post" action="export.php">

        <div class="card mb-4">
            <div class="card-header fw-bold">Informations générales</div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nom Prénom</label>
                        <input type="text" id="nom" name="nom" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Titre professionnel</label>
                        <input type="text" id="titre" name="titre" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone" class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Résumé professionnel</label>
                    <textarea id="resume" name="resume" class="form-control" rows="3"></textarea>
                </div>

            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header fw-bold d-flex justify-content-between">
                Expériences professionnelles
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="addExperience()">
                    + Ajouter
                </button>
            </div>
            <div class="card-body" id="experiences"></div>
        </div>

        <div class="card mb-4">
            <div class="card-header fw-bold d-flex justify-content-between">
                Formations
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="addFormation()">
                    + Ajouter
                </button>
            </div>
            <div class="card-body" id="formations"></div>
        </div>

        <div class="card mb-4">
            <div class="card-header fw-bold d-flex justify-content-between">
                Compétences
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="addCompetence()">
                    + Ajouter
                </button>
            </div>
            <div class="card-body" id="competences"></div>
        </div>

        <div class="text-center">
            <button class="btn btn-success btn-lg">
                Générer le CV
            </button>
        </div>

    </form>
</div>

<script src="assets/js/cv.js"></script>

</body>
</html>