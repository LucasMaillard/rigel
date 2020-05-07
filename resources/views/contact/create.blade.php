<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact</title>


        <!-- Styles -->
        <?php echo View::make('parts.style') ?>
        <?php echo View::make('parts.header') ?>
    </head>
    <body>
		<div class="contact">

			<form action="/contact" method="POST" class="">
				<label for="form" class="">
					Nous contacter :
				</label>

				<label class="" for="name">Nom :</label>
				<div class="">
					<input type="text" name="name" placeholder="Ex: Kevin Laloutre" class="">
					<span class=""></span>
				</div>

				<label class="" for="email">Adresse email :</label>
				<div class="">
					<input type="text" name="email" placeholder="Ex: kevin.laloutre@gmail.com" class="">
					<span class=""></span>
				</div>

				<label class="" for="message">Message :</label>
				<div class="">
					<textarea name="message" id="message" placeholder="Votre message" class=""></textarea>
					<span class=""></span>
				</div>

				
			@csrf
			
				<div class="">
					<button type="submit" class=""> Envoyer</button>
				</div>
			</form>
	</div>

    </body>