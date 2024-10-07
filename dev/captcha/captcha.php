<div class="modal fade" id="captchaModal" tabindex="-100" role="dialog" aria-labelledby="captchaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="captchaModalLabel">Vérification CAPTCHA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Conteneur du CAPTCHA -->
        <div class="captcha-container text-center">
          <img src="" id="askimage" alt="captcha image" width="400" height="200" style="border:1px solid #ccc;">
          <br>
          <canvas id="captcha" width="400" height="400" style="border:1px solid #ccc;"></canvas>
          <br>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" onclick="verifierCaptcha()">Vérifier</button>
      </div>
    </div>
  </div>
</div>

<!-- Inclure Bootstrap JS, jQuery et Popper.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Inclure le script du CAPTCHA -->
<script src='/dev/captcha/captcha.js'></script>
