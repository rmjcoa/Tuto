
<body>
	<div class="container-fluid" id="block-login">
		<div class="">
		
			<div class=" formA" >
                <h2 class="text-center text-primary">Votre Information</h2>
				<!-- <form action="" class="form-group"> -->
				<?php echo form_open_multipart("enregistrer",[ 
					"class" => "form-group", 
					"id" => "formulaire",
					]) ; ?>
					<label for="pseudo">Nom</label>
					<input name="pseudo" type="text" id="pseudo" placeholder="Nom" aria-placeholder="Pseudo" class=" mb-2">
					<small class="text-danger"><?php echo form_error('pseudo'); ?></small>
					
                    <label for="pseudo">Prénom</label>
					<input name="prenom" type="text" id="pseudo" placeholder="Prénom" aria-placeholder="Pseudo" class=" mb-2">
					<small class="text-danger"><?php echo form_error('prenom'); ?></small>
                    <label for="pseudo">Email</label>
					<input name="email" type="text" id="email" placeholder="email" aria-placeholder="Email" class=" mb-2">
					<small class="text-danger"><?php echo form_error('email'); ?></small>
					<label for="mdp">Mot de passe</label>
					<input name="mdp" type="password" id="mdp" placeholder="Mot de passe" aria-placeholder="Mot de passe" class="mb-2 ">
					<small class="text-danger"><?php echo form_error('mdp'); ?></small>
					<input type="file" name="userfile">
					<button type="submit" class="btn1  "  >Enregistrer</button>
					<p class="my-2"> Avez Vous un Compte
                        <a href="<?= base_url()?>" class="float-right creer_compte">Connexion</a>
					</p>
				</form>
			</div>
		
		</div>
	</div>
	