<?php include 'header.php' ?>

    <h1 class="text-center">Exercice 4</h1>

    <?php if (isset($_GET['language']) && isset($_GET['server'])) { ?>
        <p class="text-center">Langage : <?= htmlspecialchars($_GET['language']) ?> et serveur : <?= htmlspecialchars($_GET['server']) ?></p>
    <?php }

include 'footer.php' ?>