<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

?>
<section class="section section--muted" id="gallery">
    <div class="container">
        <h2 class="section__title">Галерея</h2>
        <p class="section__lead">Як це виглядає на об'єктах наших замовників.</p>

        <ul class="gallery">
            <?php foreach ($gallery as $item): ?>
                <li class="gallery__item">
                    <figure class="gallery__figure">
                        <img class="gallery__image"
                             src="<?= e(asset($item->src)) ?>"
                             alt="<?= e($item->alt) ?>"
                             width="800" height="600" loading="lazy" decoding="async">
                        <figcaption class="gallery__caption"><?= e($item->caption) ?></figcaption>
                    </figure>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
