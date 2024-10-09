<!-- Modal Captcha -->
<div class="modal fade" id="modalCaptcha" tabindex="-100" role="dialog" aria-labelledby="captchaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="captchaModalLabel">Vérification CAPTCHA</h5>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Conteneur du CAPTCHA -->
        <div class="captcha-container text-center">
		<h1>Sélectionner la partie du corps entrainé sur cet image </h1>>
          <img src="" id="askimage" alt="captcha image" width="400" height="200" style="border:1px solid #ccc;">
          <br>
          <canvas id="captcha" width="400" height="400" style="border:1px solid #ccc;"></canvas>
          <br>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeCaptcha()">Fermer</button>
      </div>
    </div>
  </div>
</div>
<!-- Inclure le script du CAPTCHA -->
<script src='/dev/captcha/captcha.js'></script>
