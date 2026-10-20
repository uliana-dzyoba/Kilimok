<?php

declare(strict_types=1);

define('KILIMOK', true);
defined('SITE_LANG') || define('SITE_LANG', 'uk');

require __DIR__ . '/lib/bootstrap.php';

/** @var array<string,mixed> $company */
$company = require __DIR__ . '/data/company.php';
/** @var array<string,mixed> $prices */
$prices = require __DIR__ . '/data/prices.php';
/** @var list<GalleryItem> $gallery */
$gallery = require __DIR__ . '/data/gallery.php';
/** @var list<ClientLogo> $clients */
$clients = require __DIR__ . '/data/clients.php';

?>
<!DOCTYPE html>
<html lang="<?= e(SITE_LANG) ?>">
<?php include __DIR__ . '/partials/head.php'; ?>
<body>
<a class="skip-link" href="#main"><?= e(t('Перейти до вмісту', 'Skip to content')) ?></a>
<?php include __DIR__ . '/partials/header.php'; ?>

<main id="main">
    <?php include __DIR__ . '/sections/hero.php'; ?>
    <?php include __DIR__ . '/sections/about.php'; ?>
    <?php include __DIR__ . '/sections/usage.php'; ?>
    <?php include __DIR__ . '/sections/features.php'; ?>
    <?php include __DIR__ . '/sections/gallery.php'; ?>
    <?php include __DIR__ . '/sections/clients.php'; ?>
    <?php include __DIR__ . '/sections/prices.php'; ?>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>

<script src="<?= e(asset('assets/js/carousel.js')) ?>" defer></script>
<script src="<?= e(asset('assets/js/modal.js')) ?>" defer></script>
</body>
</html>
