<?php
    $statement = $connection->prepare("SELECT * FROM zeitzonen ORDER BY stadt ASC");
    $statement->execute();
    $zeitzonen = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['stadt'])): ?>
    <?php 
        $stadt = $_POST['stadt'];
        $statement = $connection->prepare("SELECT * FROM zeitzonen WHERE stadt = :stadt");
        $statement->bindParam(':stadt', $stadt, PDO::PARAM_STR);
        $statement->execute();
        $zeitzonen = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="row mt-3">
        <?php foreach ($zeitzonen as $zone): ?>
            <?php 
                date_default_timezone_set($zone['zeitzone']);
                $currentTime = date('H:i');
            ?>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="../media/zeitzonen/<?= htmlspecialchars($zone['cover']); ?>" class="card-img-top" alt="<?= htmlspecialchars($zone['stadt']); ?>">
                    <div class="card-body shadow-sm">
                        <h5 class="card-title"><?= htmlspecialchars($zone['stadt']); ?></h5>
                        <p class="card-text">Zeitzone: <?= htmlspecialchars($zone['zeitzone']); ?></p>
                        <p class="card-text"><strong><?= $currentTime ?></> Uhr</strong></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<style>
    .card img {
        height: 200px;
        width: 100%;
        object-fit: fill;
    }
</style>