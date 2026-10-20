<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

$features = [
    [
        'title' => t('Профіль волокон', 'Fibre profile'),
        'text' => t(
            'Килими виготовлені з гуми, поєднаної з нейлоновою тканиною. Секрет «роботи» '
                . 'килимка — у профілі волокон: це сильно скручені нейлонові волокна, які збирають бруд із взуття '
                . 'і затримують його всередині. Завдяки цьому зверху килим продовжує виглядати чистим.',
            'The mats are made of rubber combined with nylon fabric. The secret of how a mat works '
                . 'lies in its fibre profile: tightly twisted nylon fibres scrape dirt off shoes '
                . 'and trap it inside, so the surface of the mat keeps looking clean.',
        ),
    ],
    [
        'title' => t('Нітрилова основа', 'Nitrile backing'),
        'text' => t(
            'Основа килима виготовлена з високоякісної жиростійкої нітрилової гуми, яка '
                . 'виключно стійка до прання. Завдяки цьому він лежить плоско на поверхні й оберігає '
                . 'від ковзання по підлозі.',
            'The backing is made of high-quality, grease-resistant nitrile rubber that withstands '
                . 'repeated washing. It keeps the mat lying flat and prevents it from sliding '
                . 'on the floor.',
        ),
    ],
    [
        'title' => t('Профільована окантовка', 'Profiled edging'),
        'text' => t(
            'Всі килими мають окантовку, яка не дозволяє килиму скручуватись, що дає можливість ходити по '
                . 'ньому, не ризикуючи спіткнутися.',
            'All mats have an edging that stops the mat from curling up, so people can walk over it '
                . 'without tripping.',
        ),
    ],
    [
        'title' => t('Ваш логотип', 'Your logo'),
        'text' => t(
            'Можемо запропонувати килими потрібного вам розміру та з вашим логотипом — '
                . 'вхідна група працює як частина фірмового стилю.',
            'We can supply mats in the size you need and with your logo, '
                . 'making your entrance part of your brand identity.',
        ),
    ],
];

$sizes = ['60 × 85', '85 × 150', '115 × 175', '120 × 240', '150 × 200', '150 × 400'];

?>
<section class="section" id="features">
    <div class="container">
        <h2 class="section__title"><?= e(t('Про килими', 'About our mats')) ?></h2>
        <p class="section__lead">
            <?= e(t('Ми використовуємо професійні килими європейського виробника', 'We use professional mats from the European manufacturer')) ?>
            <a href="https://kleen-tex.eu/pl" target="_blank" rel="noopener">Kleen-Tex</a>.
        </p>

        <div class="cards cards--two">
            <?php foreach ($features as $feature): ?>
                <article class="card">
                    <h3 class="card__title"><?= e($feature['title']) ?></h3>
                    <p class="card__text"><?= e($feature['text']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="sizes">
            <h3 class="sizes__title"><?= e(t('Розміри килимів, см', 'Mat sizes, cm')) ?></h3>
            <ul class="sizes__list">
                <?php foreach ($sizes as $size): ?>
                    <li class="sizes__item"><?= e($size) ?></li>
                <?php endforeach; ?>
            </ul>
            <p class="sizes__note">
                <?= e(t(
                    'Інші розміри — під замовлення. Кількість обмінів може бути від 1 разу на місяць '
                        . 'до 3 разів на тиждень; обмін зробимо у зручний для вас день і час.',
                    'Other sizes are available on request. Exchanges can range from once a month '
                        . 'to 3 times a week; we will swap the mats on the day and at the time that suit you.',
                )) ?>
            </p>
        </div>
    </div>
</section>
