<?php include 'header.php' ?>

    <h1 class="text-center">Exercice 6</h1>
    
    <?php if (isset($_GET['building']) && isset($_GET['room'])) { ?>
        <p class="text-center">Rendez-vous batiment <?= htmlspecialchars($_GET['building']) ?>, chambre <?= htmlspecialchars($_GET['room']) ?> ! :)</p>
        <?php }

include 'footer.php' ?>