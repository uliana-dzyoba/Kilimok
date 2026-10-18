<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

$pictograms = [
    ['id' => 'icon-mat', 'label' => 'Килими', 'modal' => 'modal-mats'],
    ['id' => 'icon-wash', 'label' => 'Прання', 'modal' => 'modal-wash'],
    ['id' => 'icon-truck', 'label' => 'Доставка', 'modal' => 'modal-delivery'],
    ['id' => 'icon-rent', 'label' => 'Оренда', 'href' => '#prices'],
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
            <span class="btn btn--primary">Зателефонувати:</span>
            <?php foreach ($company['phones'] as $phone): ?>
                <a class="btn btn--primary" href="<?= e(tel_href($phone)) ?>">
                    <span class="nowrap"><?= e($phone) ?></span>
                </a>
            <?php endforeach; ?>
            <a class="btn btn--ghost" href="#prices">Дивитись ціни</a>
        </div>

        <ul class="pictograms">
            <?php foreach ($pictograms as $item): ?>
                <li class="pictogram">
                    <?php if (isset($item['href'])): ?>
                        <a class="pictogram__trigger" href="<?= e($item['href']) ?>">
                            <svg class="pictogram__icon" viewBox="0 0 48 48" aria-hidden="true" focusable="false">
                                <use href="#<?= e($item['id']) ?>"></use>
                            </svg>
                            <span class="pictogram__label"><?= e($item['label']) ?></span>
                        </a>
                    <?php else: ?>
                        <button type="button" class="pictogram__trigger"
                                data-modal-target="<?= e($item['modal']) ?>" aria-haspopup="dialog">
                            <svg class="pictogram__icon" viewBox="0 0 48 48" aria-hidden="true" focusable="false">
                                <use href="#<?= e($item['id']) ?>"></use>
                            </svg>
                            <span class="pictogram__label"><?= e($item['label']) ?></span>
                        </button>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<dialog id="modal-mats" class="modal" aria-labelledby="modal-mats-title">
    <div class="modal__panel">
        <div class="modal__head">
            <h2 class="modal__title" id="modal-mats-title">Килими</h2>
            <button type="button" class="modal__close" data-modal-close aria-label="Закрити">&times;</button>
        </div>
        <div class="modal__body">
            <img class="modal__image" src="<?= e(asset('assets/img/mats-overview.jpg')) ?>"
                 alt="Приклади брудозахисних килимів: брендовані килими з логотипом на вході, текстура ворсу, килими у вестибюлі та ліфтовому холі, попереджувальні килими, вхідні групи магазинів"
                 loading="lazy">
        </div>
    </div>
</dialog>

<dialog id="modal-wash" class="modal" aria-labelledby="modal-wash-title">
    <div class="modal__panel">
        <div class="modal__head">
            <h2 class="modal__title" id="modal-wash-title">Прання</h2>
            <button type="button" class="modal__close" data-modal-close aria-label="Закрити">&times;</button>
        </div>
        <div class="modal__body">
            <p class="modal__text">
                Перемо килими у власній пральні за графіком, узгодженим із замовником.
                Це заглушка тексту — реальний опис послуги додамо пізніше.
            </p>
        </div>
    </div>
</dialog>

<dialog id="modal-delivery" class="modal" aria-labelledby="modal-delivery-title">
    <div class="modal__panel">
        <div class="modal__head">
            <h2 class="modal__title" id="modal-delivery-title">Доставка</h2>
            <button type="button" class="modal__close" data-modal-close aria-label="Закрити">&times;</button>
        </div>
        <div class="modal__body">
            <p class="modal__text">
                Доставляємо чисті килими та забираємо забруднені власним транспортом
                по Києву та області. Це заглушка тексту — реальний опис послуги додамо пізніше.
            </p>
        </div>
    </div>
</dialog>

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
