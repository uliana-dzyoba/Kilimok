<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

$pictograms = [
    ['id' => 'icon-mat', 'label' => t('Килими', 'Mats'), 'modal' => 'modal-mats'],
    ['id' => 'icon-wash', 'label' => t('Прання', 'Washing'), 'modal' => 'modal-wash'],
    ['id' => 'icon-truck', 'label' => t('Доставка', 'Delivery'), 'modal' => 'modal-delivery'],
    ['id' => 'icon-rent', 'label' => t('Оренда', 'Rental'), 'href' => '#prices'],
];

?>
<section class="hero">
    <div class="container hero__inner">
        <p class="hero__eyebrow">
            <?= e(t('На українському ринку з ', 'On the Ukrainian market since ')
                . $company['since'] . t(' року', '')) ?>
        </p>
        <h1 class="hero__title">
            <?= e(t('Оренда змінних брудозахисних килимів', 'Rental of replaceable dirt-trapping mats')) ?>
        </h1>
        <p class="hero__lead">
            <?= e(t(
                'Замовляючи послугу ви користуєтесь професійним брудоочисним килимом і повним сервісом з обслуговування. '
                    . 'Замість забрудненого килима ви отримуєте чистий і сухий — не купуючи його. '
                    . 'Привозимо, міняємо за графіком та перемо власними силами.',
                'By ordering the service you get a professional dirt-removing mat and full maintenance service. '
                    . 'Instead of a dirty mat, you get a clean and dry one — without buying it. '
                    . 'We deliver, swap on schedule and do all the washing ourselves.',
            )) ?>
        </p>
        <div class="hero__actions">
            <span class="btn btn--primary"><?= e(t('Зателефонувати:', 'Call us:')) ?></span>
            <?php foreach ($company['phones'] as $phone): ?>
                <a class="btn btn--primary" href="<?= e(tel_href($phone)) ?>">
                    <span class="nowrap"><?= e($phone) ?></span>
                </a>
            <?php endforeach; ?>
            <a class="btn btn--ghost" href="#prices"><?= e(t('Дивитись ціни', 'See prices')) ?></a>
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
            <h2 class="modal__title" id="modal-mats-title"><?= e(t('Килими', 'Mats')) ?></h2>
            <button type="button" class="modal__close" data-modal-close aria-label="<?= e(t('Закрити', 'Close')) ?>">&times;</button>
        </div>
        <div class="modal__body">
            <img class="modal__image" src="<?= e(asset('assets/img/mats-overview.jpg')) ?>"
                 alt="<?= e(t(
                     'Приклади брудозахисних килимів: брендовані килими з логотипом на вході, текстура ворсу, килими у вестибюлі та ліфтовому холі, попереджувальні килими, вхідні групи магазинів',
                     'Examples of dirt-trapping mats: branded logo mats at entrances, pile texture, mats in a lobby and an elevator hall, warning mats, shop entrances',
                 )) ?>"
                 loading="lazy">
        </div>
    </div>
</dialog>

<dialog id="modal-wash" class="modal" aria-labelledby="modal-wash-title">
    <div class="modal__panel">
        <div class="modal__head">
            <h2 class="modal__title" id="modal-wash-title"><?= e(t('Прання', 'Washing')) ?></h2>
            <button type="button" class="modal__close" data-modal-close aria-label="<?= e(t('Закрити', 'Close')) ?>">&times;</button>
        </div>
        <div class="modal__body">
            <p class="modal__text">
                <?= e(t(
                    'Прання килимів підприємство здійснює власним обладнанням.',
                    'The company washes the mats using its own equipment.',
                )) ?>
            </p>
        </div>
    </div>
</dialog>

<dialog id="modal-delivery" class="modal" aria-labelledby="modal-delivery-title">
    <div class="modal__panel">
        <div class="modal__head">
            <h2 class="modal__title" id="modal-delivery-title"><?= e(t('Доставка', 'Delivery')) ?></h2>
            <button type="button" class="modal__close" data-modal-close aria-label="<?= e(t('Закрити', 'Close')) ?>">&times;</button>
        </div>
        <div class="modal__body">
            <p class="modal__text">
                <?= e(t(
                    'Доставка килимів здійснюється власним транспортом.',
                    'The mats are delivered by our own vehicles.',
                )) ?>
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
