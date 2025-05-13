<?php // Page dynamically changes based on the given ID
include(__DIR__.'/common/header.php');
require_once(__DIR__.'/../backend/php/birdFunctions.php');

$birdId = $_GET['id'] ?? null;
$bird = $birdId ? getBird($birdId) : null;
?>

<main class="container my-5">
	<?php if ($bird): ?>
		<!-- Bird Name and Scientific Name -->
		<h1><?= htmlspecialchars($bird['name']) ?></h1>
		<h5 class = "text-muted fst-italic mb-4"><?= htmlspecialchars($bird['scientific_name']) ?></h5>

		<!-- Bird Image -->
		<div class = "col-md-5">
			<img src="<?= htmlspecialchars($bird['image_url']) ?>" class = "img-fluid rounded" alt = "Image of <?= htmlspecialchars($bird['name']) ?>">
		</div>

		<!-- Description -->
		<h3 class = "mt-5">Description</h3>
		<p class = "lead"><?= htmlspecialchars($bird['description']) ?></p>

		<!-- Mating Dance Video -->
		<h3 class = "mt-5">Mating Dance</h3>
		<div class = "ratio ratio-16x9">
			<iframe src="<?= htmlspecialchars($bird['video_url']) ?>" title = "Mating Dance Video" allowfullscreen></iframe>
		</div>
	<?php else: ?>
		<h1>Error 404: Bird not Found</h1>
	<?php endif; ?>
</main>
<?php include(__DIR__.'/common/footer.php');?>
