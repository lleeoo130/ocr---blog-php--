<?php
	include ('php/_debug.php');
	include ('php/_connexion.php');
	include ('templates/_header.php');

?>

	<main class="container">
		<h3>Nouveau Billet</h3>


        <form action="add_article.php">

            <div class="form-group">
                <label class="col-form-label col-form-label-lg" for="articleTitle">Titre du billet</label>
                <input  class="form-control form-control-lg" 
                        type="text" 
                        name="title" 
                        placeholder="Titre" 
                        id="articleTitle" required>
            </div>
            <div class="form-group">
                <label class="col-form-label col-form-label-lg" for="articleContent">Votre billet</label>
                <textarea   class="form-control" 
                            id="articleContent" 
                            name="content" 
                            rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label class="col-form-label col-form-label-lg" for="articleAuthor">Votre nom d'auteur</label>
                <input  class="form-control form-control-lg" 
                        type="text" 
                        name="author" 
                        placeholder="Auteur" 
                        id="articleAuthor" required>
            </div>


            <button type="submit" class="btn btn-primary btn-lg mb-3 float-right">Publier</button>
            <div class="clear"></div>
        </form>
	</main>


<?php include ('templates/_footer.php'); ?>