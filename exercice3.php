<?php include 'header.php' ?>

    <h1 class="text-center">Exercice 3</h1>

<?php if (isset($_GET['startDate']) && isset($_GET['endDate'])) { ?>
    <p class="text-center">Les dates de début et de fin sont : <?= htmlspecialchars($_GET['startDate']) ?> et <?= htmlspecialchars($_GET['endDate']) ?></p>
    <?php }
 include 'footer.php' ?>