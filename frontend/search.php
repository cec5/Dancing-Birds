<?php
include(__DIR__.'/common/header.php');
require_once(__DIR__.'/../backend/php/birdFunctions.php');

$searchTerm = $_GET['name'] ?? '';
$birds = searchBirds($searchTerm);
?>

<main class="container my-5">
    <h1>Search Birds</h1>
    
    <!-- Search Form -->
    <form method="GET" class="my-4">
        <div class="input-group">
            <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($searchTerm) ?>">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <!-- Results Table -->
    <?php if (count($birds) > 0): ?>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Scientific Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($birds as $bird): ?>
                    <tr>
                        <td>
                            <a href="bird.php?id=<?= $bird['id'] ?>">
                                <?= htmlspecialchars($bird['name']) ?>
                            </a>
                        </td>
                        <td><?= htmlspecialchars($bird['scientific_name']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-warning">No birds found matching your search</div>
    <?php endif; ?>
</main>
<?php include(__DIR__.'/common/footer.php'); ?>
