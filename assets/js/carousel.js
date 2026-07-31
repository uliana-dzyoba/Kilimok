/**
 * Карусель логотипів. Розкладку (3–6 логотипів у слайді) задає CSS через --per-view;
 * скрипт лише додає кнопки, крапки й автопрокрутку. Без JS трек залишається
 * горизонтально прокручуваним списком.
 */
(function () {
    'use strict';

    var AUTOPLAY_MS = 4000;
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

    function initCarousel(root) {
        var track = root.querySelector('[data-carousel-track]');
        if (!track) {
            return;
        }

        var items = Array.prototype.slice.call(track.children);
        if (items.length === 0) {
            return;
        }

        var controls = document.createElement('div');
        controls.className = 'carousel__controls';

        var prev = makeButton('‹', 'Попередні логотипи клієнтів');
        var next = makeButton('›', 'Наступні логотипи клієнтів');
        var dots = document.createElement('ul');
        dots.className = 'carousel__dots';

        controls.append(prev, dots, next);
        root.append(controls);
        root.classList.add('carousel--enhanced');

        var timer = null;
        var pageCount = 1;

        function perView() {
            var value = parseInt(getComputedStyle(root).getPropertyValue('--per-view'), 10);
            return value > 0 ? value : 1;
        }

        function currentPage() {
            var page = Math.round(track.scrollLeft / Math.max(track.clientWidth, 1));
            return Math.min(Math.max(page, 0), pageCount - 1);
        }

        function goToPage(page) {
            track.scrollTo({
                left: page * track.clientWidth,
                behavior: reduceMotion.matches ? 'auto' : 'smooth'
            });
        }

        function buildDots() {
            var count = Math.max(Math.ceil(items.length / perView()), 1);
            if (count === pageCount && dots.children.length === count) {
                return;
            }

            pageCount = count;
            dots.textContent = '';

            for (var i = 0; i < pageCount; i++) {
                var li = document.createElement('li');
                var dot = document.createElement('button');
                dot.type = 'button';
                dot.className = 'carousel__dot';
                dot.dataset.page = String(i);
                dot.setAttribute('aria-label', 'Слайд ' + (i + 1) + ' з ' + pageCount);
                li.append(dot);
                dots.append(li);
            }

            dots.hidden = pageCount < 2;
            controls.hidden = pageCount < 2;
        }

        function syncState() {
            var page = currentPage();

            Array.prototype.forEach.call(dots.querySelectorAll('.carousel__dot'), function (dot, i) {
                dot.setAttribute('aria-current', i === page ? 'true' : 'false');
            });

            prev.disabled = page === 0;
            next.disabled = page >= pageCount - 1;
        }

        function step(delta) {
            var page = currentPage() + delta;

            if (page >= pageCount) {
                page = 0;
            } else if (page < 0) {
                page = pageCount - 1;
            }

            goToPage(page);
        }

        function stopAutoplay() {
            if (timer !== null) {
                window.clearInterval(timer);
                timer = null;
            }
        }

        function startAutoplay() {
            stopAutoplay();

            if (reduceMotion.matches || pageCount < 2 || document.hidden) {
                return;
            }

            timer = window.setInterval(function () {
                step(1);
            }, AUTOPLAY_MS);
        }

        prev.addEventListener('click', function () {
            step(-1);
            startAutoplay();
        });

        next.addEventListener('click', function () {
            step(1);
            startAutoplay();
        });

        dots.addEventListener('click', function (event) {
            var dot = event.target.closest('.carousel__dot');
            if (dot) {
                goToPage(Number(dot.dataset.page));
                startAutoplay();
            }
        });

        track.addEventListener('scroll', debounce(syncState, 100), { passive: true });
        track.addEventListener('keydown', function (event) {
            if (event.key === 'ArrowRight') {
                event.preventDefault();
                step(1);
            } else if (event.key === 'ArrowLeft') {
                event.preventDefault();
                step(-1);
            }
        });

        root.addEventListener('pointerenter', stopAutoplay);
        root.addEventListener('pointerleave', startAutoplay);
        root.addEventListener('focusin', stopAutoplay);
        root.addEventListener('focusout', function (event) {
            if (!root.contains(event.relatedTarget)) {
                startAutoplay();
            }
        });

        document.addEventListener('visibilitychange', function () {
            if (document.hidden) {
                stopAutoplay();
            } else {
                startAutoplay();
            }
        });

        reduceMotion.addEventListener('change', startAutoplay);

        var relayout = debounce(function () {
            buildDots();
            goToPage(0);
            syncState();
            startAutoplay();
        }, 150);

        if (typeof ResizeObserver === 'function') {
            new ResizeObserver(relayout).observe(root);
        } else {
            window.addEventListener('resize', relayout);
        }

        buildDots();
        syncState();
        startAutoplay();
    }

    function makeButton(glyph, label) {
        var btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'carousel__btn';
        btn.setAttribute('aria-label', label);
        btn.textContent = glyph;
        return btn;
    }

    function debounce(fn, wait) {
        var id = null;
        return function () {
            window.clearTimeout(id);
            id = window.setTimeout(fn, wait);
        };
    }

    document.querySelectorAll('[data-carousel]').forEach(initCarousel);
})();
