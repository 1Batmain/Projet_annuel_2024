<!-- Modal Connexion -->
 <head>
<link rel="stylesheet" href="/dev/styles.css">
 </head>

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
                <form action="/dev/access/result_login.php" method="post">
                    <!-- Vos champs de formulaire ici -->
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="Entrez votre email">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" placeholder="Entrez votre mot de passe">
                    </div>
				 	<button type="button" class="btn btn-primary my-2" id= "btnCaptcha" onclick = "openModal('captcha')">Verifier le captcha</button>
					<input type = "hidden" name="result_captcha" class="result_captcha" value="false">
                    <div class='text-center mt-3'>
                        <button type="submit" class="btn btn-primary" >Se connecter</button>
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
                <form action="/dev/access/result.php" method="post">
                    <!-- Vos champs de formulaire ici -->
                    <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text"  class="form-control" id="nom" name="nom" required placeholder="Entrez votre Nom">
                    </div>
                    <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" required placeholder="Entrez votre Prénom">
                    </div>
                    <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Entrez votre age">
                    </div>
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="Entrez votre email">
                    </div>
                    <div class="form-group password-container">
                    <label for="mot_de_passe">Mot de passe</label>
                    <div class="input-group">
                        <input type="password" class="form-control passvue" id="mot_de_passe" name="mot_de_passe" placeholder="Entrez votre mot de passe">
                        <div class="input-group-append">
                            <span class="vue password-icon">
                                <i class="feather-eye eye" data-feather="eye"></i>
                                <i class="feather-eye-off eye-off" data-feather="eye-off" style="display: none;"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group password-container">
                    <label for="confirmation_de_mot_de_passe">Confirmation de mot de passe</label>
                    <div class="input-group">
                        <input type="password" class="form-control passvue" id="confirmation_de_mot_de_passe" name="confirmation_de_mot_de_passe" required placeholder="Confirmez le mot de passe">
                        <div class="input-group-append">
                            <span class="vue password-icon">
                                <i class="feather-eye eye" data-feather="eye"></i>
                                <i class="feather-eye-off eye-off" data-feather="eye-off" style="display: none;"></i>
                            </span>
                        </div>
                    </div>
                </div>
                    <br>
                    <div class="form-group">
                    <label for="role">Role</label>
                    <select id="role" class="form-control" name="role">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                    </div>
					<button type="button" class="btn btn-primary my-2" onclick = "openModal('captcha')">Verifier le captcha</button>
					<input type = "hidden" name="result_captcha" class="result_captcha" value="false">
                    <div class='text-center mt-3'>
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/dev/captcha/captcha.php"; ?>

<!-- Inclure Bootstrap JS, jQuery et Popper.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="/dev/js/modal.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="/dev/js/eye.js"></script>
