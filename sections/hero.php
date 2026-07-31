<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

$pictograms = [
    ['id' => 'icon-mat', 'label' => 'Килими'],
    ['id' => 'icon-wash', 'label' => 'Прання'],
    ['id' => 'icon-truck', 'label' => 'Доставка'],
    ['id' => 'icon-rent', 'label' => 'Оренда'],
];

?>
<section class="hero">
    <div class="container hero__inner">
        <p class="hero__eyebrow">На українському ринку з <?= e((string) $company['since']) ?> року</p>
        <h1 class="hero__title">Оренда змінних брудозахисних килимів</h1>
        <p class="hero__lead">
            Замість забрудненого килима ви отримуєте чистий і сухий — не купуючи його.
            Привозимо, міняємо за графіком та перемо власними силами.
        </p>
        <div class="hero__actions">
            <a class="btn btn--primary" href="<?= e(tel_href($company['phones'][0])) ?>">
                Зателефонувати: <span class="nowrap"><?= e($company['phones'][0]) ?></span>
            </a>
            <a class="btn btn--ghost" href="#prices">Дивитись ціни</a>
        </div>

        <ul class="pictograms">
            <?php foreach ($pictograms as $item): ?>
                <li class="pictogram">
                    <svg class="pictogram__icon" viewBox="0 0 48 48" aria-hidden="true" focusable="false">
                        <use href="#<?= e($item['id']) ?>"></use>
                    </svg>
                    <span class="pictogram__label"><?= e($item['label']) ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<svg class="svg-sprite" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
    <symbol id="icon-mat" viewBox="0 0 48 48">
        <path fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"
              d="M6 34h26l8-8H14z"/>
        <path fill="none" stroke="currentColor" stroke-width="2.5"
              d="M32 34c4.4 0 8-3.6 8-8s-3.6-8-8-8"/>
        <circle cx="32" cy="26" r="3" fill="none" stroke="currentColor" stroke-width="2.5"/>
    </symbol>
    <symbol id="icon-wash" viewBox="0 0 48 48">
        <rect x="9" y="8" width="30" height="32" rx="3" fill="none" stroke="currentColor" stroke-width="2.5"/>
        <circle cx="24" cy="27" r="8" fill="none" stroke="currentColor" stroke-width="2.5"/>
        <circle cx="24" cy="27" r="3" fill="none" stroke="currentColor" stroke-width="2.5"/>
        <circle cx="32" cy="14" r="1.8" fill="currentColor"/>
    </symbol>
    <symbol id="icon-truck" viewBox="0 0 48 48">
        <path fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"
              d="M4 32V16h22v16zM26 32V22h8l6 6v4z"/>
        <circle cx="14" cy="34" r="4" fill="none" stroke="currentColor" stroke-width="2.5"/>
        <circle cx="33" cy="34" r="4" fill="none" stroke="currentColor" stroke-width="2.5"/>
    </symbol>
    <symbol id="icon-rent" viewBox="0 0 48 48">
        <path fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"
              d="M8 40V14l16-8 16 8v26z"/>
        <path fill="none" stroke="currentColor" stroke-width="2.5" d="M18 40V26h12v14"/>
    </symbol>
</svg>
