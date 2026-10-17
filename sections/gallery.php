<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

/** Фото в одному слайді — під цю кількість зверстана сітка .gallery у style.css. */
const GALLERY_PER_SLIDE = 6;

?>
<section class="section section--muted" id="gallery">
    <div class="container">
        <h2 class="section__title">Галерея</h2>
        <p class="section__lead">Як це виглядає на об'єктах наших замовників.</p>

        <?php if ($gallery !== []): ?>
            <div class="carousel carousel--gallery" data-carousel data-carousel-interval="6000"
                 role="group" aria-roledescription="карусель" aria-label="Фото з об'єктів">
                <ul class="carousel__track" data-carousel-track tabindex="0"
                    aria-label="Слайди з фото">
                    <?php foreach (array_chunk($gallery, GALLERY_PER_SLIDE) as $slide): ?>
                        <li class="carousel__item">
                            <ul class="gallery">
                                <?php foreach ($slide as $item): ?>
                                    <li class="gallery__item">
                                        <img class="gallery__image"
                                             src="<?= e(asset($item->src)) ?>"
                                             alt="<?= e($item->alt) ?>"
                                             loading="lazy" decoding="async">
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</section>
