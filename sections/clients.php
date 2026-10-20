<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

?>
<section class="section" id="clients">
    <div class="container">
        <h2 class="section__title"><?= e(t('Нам довіряють', 'Trusted by')) ?></h2>
        <p class="section__lead">
            <?= e(t(
                'ТРЦ, магазини, банки, ресторани, медичні заклади, автосалони, готелі та офіси компаній.',
                'Shopping malls, shops, banks, restaurants, medical facilities, car dealerships, hotels and corporate offices.',
            )) ?>
        </p>

        <?php if ($clients !== []): ?>
            <div class="carousel" data-carousel
                 role="group" aria-roledescription="<?= e(t('карусель', 'carousel')) ?>"
                 aria-label="<?= e(t('Логотипи клієнтів', 'Client logos')) ?>">
                <ul class="carousel__track" data-carousel-track tabindex="0"
                    aria-label="<?= e(t('Список логотипів клієнтів', 'List of client logos')) ?>">
                    <?php foreach ($clients as $logo): ?>
                        <li class="carousel__item">
                            <?php if ($logo->src !== null): ?>
                                <img class="carousel__logo"
                                     src="<?= e(asset($logo->src)) ?>"
                                     alt="<?= e($logo->name) ?>"
                                     width="240" height="160" loading="lazy" decoding="async">
                            <?php else: ?>
                                <div class="carousel__logo carousel__logo--placeholder">
                                    <span class="carousel__name"><?= e($logo->name) ?></span>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</section>
