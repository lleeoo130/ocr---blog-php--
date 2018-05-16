<?php
	include ('php/_debug.php');
	include ('php/_connexion.php');
	include ('templates/_header.php');
	include ('get_billets.php');

?>

	<main class="container">
		<h2>Billets</h2>

		<div class="row" id="articles">

			<?php

				foreach ($articles as $key => $value) {

					echo 	"<div class='bg-primary border m-1 border-dark p-2 rounded col-6 article-item '>
								<div class='stay-top '>
									<h4 class='m-1'>". htmlspecialchars($value['billet_titre']) ."</h4>
									<hr class='mt-0'>
									<p class='text-light'>". htmlspecialchars($value['billet_contenu']) ."</p>
								</div>

								<div class='stay-bottom '>
									<footer class='blockquote-footer float-right mb-1'>Billet écrit par <cite title='Source Title'>" .htmlspecialchars($value['billet_auteur']). "</cite> le <cite title='Source Title'>" .htmlspecialchars($value['billet_date']). "</cite></footer>
									<div class='clear'></div>
									<a href='commentaires.php?billet=". htmlspecialchars($value['billet_id']) ."' class='float-right'><button type='button' class='btn btn-info border-light'>Commentaires</button></a>
								</div>
								
							</div>
					";
				}
			?>

		</div>
		
	</main>


<?php include ('templates/_footer.php'); ?>