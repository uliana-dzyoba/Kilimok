<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

/** @var list<int> $frequencies обмінів у місяць */
$frequencies = $prices['exchangesPerMonth'];
/** @var array<int,string> $freqLabel */
$freqLabel = $prices['frequencyLabel'];

/** «12 обмінів» / «12 exchanges» — з правильним відмінком. */
$exchanges = static function (int $count): string {
    return $count . "\u{00A0}" . (SITE_LANG === 'en'
        ? ($count === 1 ? 'exchange' : 'exchanges')
        : plural($count, 'обмін', 'обміни', 'обмінів'));
};

/** «12 обмінів у місяць». */
$monthLabel = static function (int $count) use ($exchanges): string {
    return $exchanges($count) . t(' у місяць', ' per month');
};

/** Стисла версія для карток на мобільному: «2× на тиждень · 8 обмінів/міс». */
$shortLabel = static function (int $count) use ($freqLabel, $exchanges): string {
    return $freqLabel[$count] . ' · ' . $exchanges($count) . t('/міс', '/mo');
};

?>
<section class="section" id="prices">
    <div class="container">
        <h2 class="section__title"><?= e(t('Вартість послуг', 'Prices')) ?></h2>
        <p class="section__lead">
            <?= e(t(
                'Ціна вказана за місяць користування килимом залежно від кількості обмінів на тиждень.',
                'Prices are per month of mat use, depending on how often the mat is exchanged.',
            )) ?>
        </p>

        <div class="table-wrap">
            <table class="pricing">
                <caption class="pricing__caption">
                    <?= e(t('Вартість користування килимом, грн за місяць', 'Mat rental price, UAH per month')) ?>
                </caption>
                <thead>
                    <tr>
                        <th scope="col" class="pricing__corner"><?= e(t('Розмір килима, см', 'Mat size, cm')) ?></th>
                        <?php foreach ($frequencies as $count): ?>
                            <th scope="col">
                                <span class="pricing__freq"><?= e($freqLabel[$count]) ?></span>
                                <span class="pricing__freq-note"><?= e($monthLabel($count)) ?></span>
                            </th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($prices['sizes'] as $size): ?>
                        <tr>
                            <th scope="row" class="pricing__size"><?= e($size->label()) ?></th>
                            <?php foreach ($frequencies as $count): ?>
                                <?php $value = $size->priceFor($count); ?>
                                <td class="pricing__cell"
                                    data-label="<?= e($shortLabel($count)) ?>">
                                    <?= $value === null ? '—' : e(price($value)) ?>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <ul class="notes">
            <?php foreach ($prices['notes'] as $note): ?>
                <li class="notes__item"><?= e($note) ?></li>
            <?php endforeach; ?>
        </ul>

        <p class="prices__cta">
            <span class="btn btn--primary"><?= e(t('Замовити послугу:', 'Order now:')) ?></span>
            <?php foreach ($company['phones'] as $phone): ?>
                <a class="btn btn--primary" href="<?= e(tel_href($phone)) ?>">
                    <span class="nowrap"><?= e($phone) ?></span>
                </a>
            <?php endforeach; ?>
            <?php include __DIR__ . '/../partials/messengers.php'; ?>
        </p>
    </div>
</section>
