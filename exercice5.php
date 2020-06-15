<?php include 'header.php' ?>

    <h1 class="text-center">Exercice 5</h1>

    <?php if (isset($_GET['week'])) { ?>
        <p class="text-center">Nous sommes en semaines <?= htmlspecialchars($_GET['week']) ?></p>
        <?php } ?>

        <p class="text-center">Ternaire : <?= isset($_GET['week']) ? $_GET['week'] : 'aucun paramètre' ?></p>
        <p class="text-center">Ternaire 2 : <?= $_GET['week'] ?? 'aucun paramètre' ?></p>
   
<?php include 'footer.php' ?>