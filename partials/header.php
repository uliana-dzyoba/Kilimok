<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

$nav = [
    '#about' => 'Про послугу',
    '#usage' => 'Де застосовують',
    '#features' => 'Про килими',
    '#gallery' => 'Галерея',
    '#clients' => 'Клієнти',
    '#prices' => 'Ціни',
    '#contacts' => 'Контакти',
];

?>
<header class="site-header">
    <div class="container site-header__inner">
        <a class="brand" href="#main">
            <img class="brand__mark" src="<?= e(asset('assets/img/logo.svg')) ?>"
                 alt="<?= e($company['name']) ?>" width="180" height="56">
        </a>

        <details class="nav">
            <summary class="nav__toggle" aria-label="Меню">
                <span class="nav__toggle-bars" aria-hidden="true"></span>
                <span class="nav__toggle-text">Меню</span>
            </summary>
            <nav class="nav__panel" aria-label="Основна навігація">
                <ul class="nav__list">
                    <?php foreach ($nav as $href => $label): ?>
                        <li><a class="nav__link" href="<?= e($href) ?>"><?= e($label) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </details>

        <a class="btn btn--phone" href="<?= e(tel_href($company['phones'][0])) ?>">
            <?= e($company['phones'][0]) ?>
        </a>
    </div>
</header>
