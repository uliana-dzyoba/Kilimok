<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

$highlights = [
    [
        'title' => t('Повний комплекс', 'Complete solution'),
        'text' => t(
            'Перед входом рекомендуємо встановити брудоочисні покриття — решітки та '
                . 'модульні покриття, а всередині приміщення стелимо професійні вологопоглинаючі килими.',
            'Outside the entrance we recommend installing dirt-removal systems — grates and '
                . 'modular tiles — and inside we lay professional moisture-absorbing mats.',
        ),
    ],
    [
        'title' => t('Сучасне обладнання', 'Modern equipment'),
        'text' => t(
            'Прання виконуємо на власній базі: сучасне обладнання та професійна хімія '
                . 'повертають килиму робочі властивості після кожного циклу.',
            'We wash the mats at our own facility: modern equipment and professional detergents '
                . 'restore their performance after every cycle.',
        ),
    ],
    [
        'title' => t('Графік під вас', 'Your schedule'),
        'text' => t(
            'Обміни від 1 разу на місяць до 3 разів на тиждень. Приїжджаємо у зручний '
                . 'для вас день і час — робота закладу не зупиняється.',
            'Exchanges from once a month up to 3 times a week. We come on the day and at the time '
                . 'that suit you — your business keeps running.',
        ),
    ],
];

?>
<section class="section" id="about">
    <div class="container">
        <h2 class="section__title"><?= e(t('Про послугу', 'About the service')) ?></h2>
        <p class="section__lead section__lead--wrap">
            <?php if (SITE_LANG === 'en'): ?>
                Since <?= e((string) $company['since']) ?>, <?= e($company['name']) ?> has been
                successfully operating on the Ukrainian market. Over this time, chains of banks, shops,
                pharmacies, restaurants and many other clients have seen the high quality of our service.
            <?php else: ?>
                З <?= e((string) $company['since']) ?> року по даний час «<?= e($company['name']) ?>»
                успішно працює на українському ринку. За цей час у високій якості наших послуг
                пересвідчилися мережі банків, магазинів, аптек, ресторанів та багато інших замовників.
            <?php endif; ?>
        </p>
        <p class="section__text">
            <?= e(t(
                'Ми пропонуємо замовнику повний комплекс послуг для вирішення проблеми чистоти в '
                    . 'приміщенні. Замість забрудненого килима ви отримуєте чистий, сухий килим — не '
                    . 'купуючи його. Регулярне обслуговування зменшує витрати на прибирання та зберігає підлогу.',
                'We offer a complete service that keeps your premises clean. Instead of a dirty mat, '
                    . 'you get a clean, dry one — without buying it. Regular servicing cuts cleaning '
                    . 'costs and protects your floors.',
            )) ?>
        </p>

        <div class="cards">
            <?php foreach ($highlights as $card): ?>
                <article class="card">
                    <h3 class="card__title"><?= e($card['title']) ?></h3>
                    <p class="card__text"><?= e($card['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
