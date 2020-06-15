<?php include 'header.php' ?>

<h1 class="text-center">Exercice 2</h1>

<?php if(isset($_GET['age'])) { ?>
        <p class="text-center">Vous avez <?= htmlspecialchars($_GET['age']) ?></p>
<?php } else { ?>
        <p class="text-center">L'age n'est pas renseigné.</p> 
<?php }

include 'footer.php' ?>