<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

?>
<section class="section" id="clients">
    <div class="container">
        <h2 class="section__title">Нам довіряють</h2>
        <p class="section__lead">
            Мережі банків, магазинів, аптек, ресторанів, готелі та офіси.
        </p>

        <?php if ($clients !== []): ?>
            <div class="carousel" data-carousel
                 role="group" aria-roledescription="карусель" aria-label="Логотипи клієнтів">
                <ul class="carousel__track" data-carousel-track tabindex="0"
                    aria-label="Список логотипів клієнтів">
                    <?php foreach ($clients as $logo): ?>
                        <li class="carousel__item">
                            <img class="carousel__logo"
                                 src="<?= e(asset($logo->src)) ?>"
                                 alt="<?= e($logo->name) ?>"
                                 width="240" height="160" loading="lazy" decoding="async">
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</section>
