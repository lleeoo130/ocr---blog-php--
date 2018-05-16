<?php
	include ('php/_debug.php');
	include ('php/_connexion.php');
    include ('templates/_header.php');
    include ('get_one_billet.php');
    include ('get_comments.php');
?>

<div class="container">

    <div class="jumbotron">

        <h3 class="display-4"> <?php echo htmlspecialchars($retourRequete[0]['billet_titre']); ?> </h3>
        <hr class="mt-0 mb-4">
        <p>  <?php echo htmlspecialchars($retourRequete[0]['billet_contenu']); ?> </p>

    </div>


    <div class="comment-form border border-success mb-3 p-2">
        <form method="post" action="add_comment.php?billet=<?php echo htmlspecialchars($_GET['billet']); ?>">
            <div class="form-group pseudo">
                <label class="col-form-label col-form-label-sm" for="inputSmall">Pseudo :</label>
                <input class="form-control form-control-sm" type="text" placeholder="Votre pseudo" id="inputSmall" name="pseudo" required>
            </div>
            <div class="form-group commentaire">
                <label class="col-form-label col-form-label-sm" for="inputSmall">Commentaire :</label>
                <input class="form-control form-control-sm" type="text" placeholder="Votre commentaire" id="inputSmall" name="commentaire" required>
            </div>
            <button type="submit" class="btn btn-block btn-primary border border-success">Commenter</button>
        </form>
    </div>


    <?php

        foreach ($retourRequeteCommentaires as $key => $value) {

            echo "

                <blockquote class='blockquote border text-center rounded px-5 mb-1'>
                    <p class='mb-0 float-left text-info'>\"" .htmlspecialchars($value['commentaire_contenu']). "\"</p>
                    <footer class='blockquote-footer mt-2 float-right'>Par <cite title='auteur'>" .htmlspecialchars($value['commentaire_auteur']). "</cite>
                    

                    <p class='text-muted'>Le  <cite title='auteur'>" .htmlspecialchars($value['commentaire_date']). "</cite></p>
                    </footer>
                    <div class='clear'></div>
                </blockquote>

            
            ";
        }

    ?>

</div>




<?php include ('templates/_footer.php'); ?>