document.addEventListener('DOMContentLoaded', function () {

    function addExperience() {
        const container = document.getElementById('experiences');

        const div = document.createElement('div');
        div.classList.add('border', 'p-3', 'mb-3');

        div.innerHTML = `
            <div class="row">
                <div class="col-md-6 mb-2">
                    <input type="text" name="poste[]" class="form-control" placeholder="Intitulé du poste" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" name="entreprise[]" class="form-control" placeholder="Entreprise" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="date" name="exp_debut[]" class="form-control" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="date" name="exp_fin[]" class="form-control">
                </div>
                <div class="col-12 mb-2">
                    <textarea name="exp_description[]" class="form-control" placeholder="Description des missions"></textarea>
                </div>
            </div>
            <button type="button" class="btn btn-danger btn-sm remove">Supprimer</button>
        `;

        container.appendChild(div);

        div.querySelector('.remove').addEventListener('click', () => div.remove());
    }

    window.addExperience = addExperience;

    function addFormation() {
        const container = document.getElementById('formations');

        const div = document.createElement('div');
        div.classList.add('border', 'p-3', 'mb-3');

        div.innerHTML = `
            <div class="row">
                <div class="col-md-6 mb-2">
                    <input type="text" name="formation[]" class="form-control" placeholder="Intitulé de la formation" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" name="etablissement[]" class="form-control" placeholder="Établissement" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="date" name="form_debut[]" class="form-control" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="date" name="form_fin[]" class="form-control">
                </div>
                <div class="col-12 mb-2">
                    <textarea name="form_description[]" class="form-control" placeholder="Description"></textarea>
                </div>
            </div>
            <button type="button" class="btn btn-danger btn-sm remove">Supprimer</button>
        `;

        container.appendChild(div);

        div.querySelector('.remove').addEventListener('click', () => div.remove());
    }

    window.addFormation = addFormation;

    function addCompetence() {
        const container = document.getElementById('competences');

        const div = document.createElement('div');
        div.classList.add('row', 'mb-2');

        div.innerHTML = `
            <div class="col-md-6">
                <input type="text" name="competence[]" class="form-control" placeholder="Nom de la compétence" required>
            </div>
            <div class="col-md-4">
                <select name="niveau[]" class="form-control">
                    <option>Débutant</option>
                    <option>Intermédiaire</option>
                    <option>Avancé</option>
                    <option>Expert</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger remove">X</button>
            </div>
        `;

        container.appendChild(div);

        div.querySelector('.remove').addEventListener('click', () => div.remove());
    }

    window.addCompetence = addCompetence;

    const form = document.getElementById('cvForm');

    if (form) {
        form.addEventListener('submit', function (e) {
            let valid = true;

            const nom = document.getElementById('nom');
            const email = document.getElementById('email');

            if (nom.value.trim() === '') {
                nom.classList.add('is-invalid');
                valid = false;
            } else {
                nom.classList.remove('is-invalid');
            }

            if (!email.value.includes('@')) {
                email.classList.add('is-invalid');
                valid = false;
            } else {
                email.classList.remove('is-invalid');
            }

            if (!valid) {
                e.preventDefault();
                alert("Veuillez remplir correctement les champs obligatoires.");
            }
        });
    }

});