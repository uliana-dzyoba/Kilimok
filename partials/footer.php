<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

?>
<footer class="site-footer" id="contacts">
    <div class="container">
        <h2 class="section__title"><?= e(t('Контакти', 'Contacts')) ?></h2>
        <p class="section__lead">
            <?= e(t(
                'За детальнішою інформацією про ціну, умови співпраці та інше звертайтесь до менеджера.',
                'For more details on prices, terms of cooperation and anything else, please contact our manager.',
            )) ?>
        </p>

        <div class="contacts">
            <div class="contacts__block">
                <h3 class="contacts__label"><?= e(t('Телефони', 'Phones')) ?></h3>
                <ul class="contacts__list">
                    <?php foreach ($company['phones'] as $phone): ?>
                        <li>
                            <a class="contacts__link contacts__link--strong"
                               href="<?= e(tel_href($phone)) ?>"><?= e($phone) ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="contacts__block">
                <h3 class="contacts__label"><?= e(t('Пошта', 'Email')) ?></h3>
                <ul class="contacts__list">
                    <li>
                        <a class="contacts__link" href="mailto:<?= e($company['email']) ?>">
                            <?= e($company['email']) ?>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="contacts__block">
                <h3 class="contacts__label"><?= e(t('Адреса', 'Address')) ?></h3>
                <ul class="contacts__list">
                    <li>
                        <a class="contacts__link" href="<?= e($company['mapUrl']) ?>"
                           target="_blank" rel="noopener">
                            <?= e($company['addressFull']) ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <p class="site-footer__legal">
            © <?= e((string) $company['since']) ?>–<?= e(date('Y')) ?>
            «<?= e($company['name']) ?>» · <?= e($company['site']) ?>
        </p>
    </div>
</footer>
