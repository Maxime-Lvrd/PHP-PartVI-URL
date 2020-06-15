<?php include 'header.php' ?>

    <h1 class="text-center">Exercice 1</h1>

    <?php if(isset($_GET['lastname']) && isset($_GET['firstname'])) { ?>
        <p class="text-center">Bonjour <?= htmlspecialchars($_GET['firstname']) . ' ' . htmlspecialchars($_GET['lastname']) ?> </p>
        <?php }
       
include 'footer.php' ?>