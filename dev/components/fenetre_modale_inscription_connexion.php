<!-- Modal Connexion -->
<div class="modal fade" id="modalConnexion" tabindex="-1" role="dialog" aria-labelledby="modalConnexionLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <div class="btn-group mx-auto" role="group" aria-label="Bouttons Connexion ou Inscription">
                        <button type="button" class="btn btn-outline-primary " id="btnInscription" onclick="openModal('inscription')">Inscription</button>
                        <button type="button" class="btn btn-outline-primary active" id="btnConnexion" onclick="openModal('connexion')">Connexion</button>
                    </div>
            </div>
            <div class="modal-body">
                <!-- Formulaire de connexion -->
                <form action='access/login.php'>
                    <!-- Vos champs de formulaire ici -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                    </div>
                    <div class='text-center mt-3'>
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Inscription -->
<div class="modal fade" id="modalInscription" tabindex="-1" role="dialog" aria-labelledby="modalInscriptionLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="btn-group mx-auto" role="group" aria-label="Bouttons Connexion ou Inscription">
                    <button type="button" class="btn btn-outline-primary active" id="btnInscription" onclick="openModal('inscription')">Inscription</button>
                    <button type="button" class="btn btn-outline-primary" id="btnConnexion" onclick="openModal('connexion')">Connexion</button>
                </div>
            </div>
            <div class="modal-body">
                <!-- Formulaire d'inscription -->
                <form action='access/register.php'>
                    <!-- Vos champs de formulaire ici -->
                    <div class="form-group">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" class="form-control" id="username" placeholder="Entrez votre nom d'utilisateur">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                    </div>
                    <div class='text-center mt-3'>
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

