<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

$nav = [
    '#about' => t('Про послугу', 'Service'),
    '#usage' => t('Де застосовують', 'Where to use'),
    '#features' => t('Про килими', 'Our mats'),
    '#gallery' => t('Галерея', 'Gallery'),
    '#clients' => t('Клієнти', 'Clients'),
    '#prices' => t('Ціни', 'Prices'),
    '#contacts' => t('Контакти', 'Contacts'),
];

/** Посилання на іншу мовну версію сайту. */
$otherLang = SITE_LANG === 'en' ? 'uk' : 'en';

?>
<header class="site-header">
    <div class="container site-header__inner">
        <a class="brand" href="#main">
            <img class="brand__mark" src="<?= e(asset('assets/img/logo.svg')) ?>"
                 alt="<?= e($company['name']) ?>" width="180" height="56">
        </a>

        <details class="nav">
            <summary class="nav__toggle" aria-label="<?= e(t('Меню', 'Menu')) ?>">
                <span class="nav__toggle-bars" aria-hidden="true"></span>
                <span class="nav__toggle-text"><?= e(t('Меню', 'Menu')) ?></span>
            </summary>
            <nav class="nav__panel" aria-label="<?= e(t('Основна навігація', 'Main navigation')) ?>">
                <ul class="nav__list">
                    <?php foreach ($nav as $href => $label): ?>
                        <li><a class="nav__link" href="<?= e($href) ?>"><?= e($label) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </details>

        <a class="lang-switch" href="<?= e(LANG_URLS[$otherLang]) ?>"
           hreflang="<?= e($otherLang) ?>" lang="<?= e($otherLang) ?>"
           aria-label="<?= e(t('English version', 'Українська версія')) ?>">
            <?= e(t('EN', 'UA')) ?>
        </a>

        <div class="header__contacts">
            <div class="header__phones">
                <?php foreach ($company['phones'] as $phone): ?>
                    <a class="btn btn--phone" href="<?= e(tel_href($phone)) ?>"><?= e($phone) ?></a>
                <?php endforeach; ?>
            </div>
            <?php include __DIR__ . '/messengers.php'; ?>
        </div>
    </div>
</header>
