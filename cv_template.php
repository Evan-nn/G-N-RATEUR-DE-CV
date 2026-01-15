<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CV</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            color: #333;
        }
        h1 {
            margin-bottom: 5px;
            color: #0d6efd;
        }
        h2 {
            margin-top: 25px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            color: #0d6efd;
        }
        .section {
            margin-bottom: 20px;
        }
        .item {
            margin-bottom: 10px;
        }
        .date {
            font-size: 11px;
            color: #666;
        }
    </style>
</head>
<body>

<h1><?= htmlspecialchars($_POST['nom'] ?? '') ?></h1>
<p>
    <strong><?= htmlspecialchars($_POST['titre'] ?? '') ?></strong><br>
    <?= htmlspecialchars($_POST['email'] ?? '') ?> |
    <?= htmlspecialchars($_POST['telephone'] ?? '') ?>
</p>

<div class="section">
    <h2>Profil professionnel</h2>
    <p><?= nl2br(htmlspecialchars($_POST['resume'] ?? '')) ?></p>
</div>

<div class="section">
    <h2>Expériences professionnelles</h2>

    <?php if (!empty($_POST['poste'])): ?>
        <?php foreach ($_POST['poste'] as $i => $poste): ?>
            <div class="item">
                <strong><?= htmlspecialchars($poste) ?></strong> –
                <?= htmlspecialchars($_POST['entreprise'][$i] ?? '') ?><br>

                <span class="date">
                    <?= htmlspecialchars($_POST['exp_debut'][$i] ?? '') ?>
                    →
                    <?= htmlspecialchars($_POST['exp_fin'][$i] ?? 'Aujourd’hui') ?>
                </span>

                <p><?= nl2br(htmlspecialchars($_POST['exp_description'][$i] ?? '')) ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucune expérience renseignée.</p>
    <?php endif; ?>
</div>

<div class="section">
    <h2>Formations</h2>

    <?php if (!empty($_POST['formation'])): ?>
        <?php foreach ($_POST['formation'] as $i => $formation): ?>
            <div class="item">
                <strong><?= htmlspecialchars($formation) ?></strong> –
                <?= htmlspecialchars($_POST['etablissement'][$i] ?? '') ?><br>

                <span class="date">
                    <?= htmlspecialchars($_POST['form_debut'][$i] ?? '') ?>
                    →
                    <?= htmlspecialchars($_POST['form_fin'][$i] ?? '') ?>
                </span>

                <p><?= nl2br(htmlspecialchars($_POST['form_description'][$i] ?? '')) ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucune formation renseignée.</p>
    <?php endif; ?>
</div>

<div class="section">
    <h2>Compétences</h2>

    <?php if (!empty($_POST['competence'])): ?>
        <ul>
            <?php foreach ($_POST['competence'] as $i => $competence): ?>
                <li>
                    <?= htmlspecialchars($competence) ?>
                    (<?= htmlspecialchars($_POST['niveau'][$i] ?? '') ?>)
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucune compétence renseignée.</p>
    <?php endif; ?>
</div>

</body>
</html>