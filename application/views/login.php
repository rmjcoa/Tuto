

	<div class="container-fluid" id="block-login">

			<div class="  formA">
				
				<div><span class="fab fa-facebook-messenger   icon-messenger"></span></div>
				<?php 
				   if($this->session->tempdata("error")) {
		
					echo "<p class='alert alert-danger'>".$this->session->tempdata("error")."</p>";
				   }
				 ?>

				<?php echo form_open("connexion",[ 
					"class" => "form-group", 
					"id" => "formulaire",
					]) ; ?>
					<input name="email" type="text" id="email" placeholder="Entrer Email" aria-placeholder="Email" class="  mb-3">
					<small class="text-danger"><?php echo form_error('email'); ?></small>
					<input name="mdp" type="password" id="mdp" placeholder="Mot de passe" aria-placeholder="Mot de passe" class="  mb-3">
					<small class="text-danger"><?php echo form_error('mdp'); ?></small>
					<button type="submit" class="btn1  "  >Se connecter</button>
					<div class="mdp_oublier">
						<a href="#" class="text-center">Mot de passe oublié ?</a>
					</div>
					 <hr>
				 
					<div class="row">
					<div class="col-6">
						<div class="icheck-primary ml-1">
							<label for="remember">
								Pas du compte?
							</label>
						</div>
					</div>

					<div class="col-6">
						<a href="<?= base_url()?>inscription"  class="float-right creer_compte">Créer un compte</a>
					</div>
	
					
				</form>
			</div>
		

	</div>
	