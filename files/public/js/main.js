/*
    Reply — the four behaviours the design needs. No dependencies, no build.

    1. Scroll reveals for [data-reveal] elements.
    2. The mobile menu: open/close, Escape, outside click.
    3. A data-scrolled flag on the header so it takes its hairline and wash.
    4. The resolution ticker: start the conversation only once the band is on
       screen, so nobody ever arrives to a half-finished animation.

    Everything here degrades to "already finished": with JavaScript off nothing
    is hidden, and with prefers-reduced-motion the ticker paints its completed
    state immediately.
*/
(function () {
    'use strict';

    var root = document.documentElement;
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

    /* ---------------------------------------------------------------- 1 */

    function initReveals() {
        var targets = document.querySelectorAll('[data-reveal]');

        if (!targets.length) {
            return;
        }

        if (reduceMotion.matches || !('IntersectionObserver' in window)) {
            targets.forEach(function (el) {
                el.classList.add('is-visible');
            });
            return;
        }

        var observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { rootMargin: '0px 0px -8% 0px', threshold: 0.05 }
        );

        targets.forEach(function (el) {
            observer.observe(el);
        });
    }

    /* ---------------------------------------------------------------- 2 */

    function initMenu() {
        var button = document.querySelector('[data-menu-button]');
        var panel = document.querySelector('[data-menu-panel]');

        if (!button || !panel) {
            return;
        }

        function setOpen(open) {
            root.classList.toggle('menu-open', open);
            button.setAttribute('aria-expanded', open ? 'true' : 'false');
            panel.setAttribute('aria-hidden', open ? 'false' : 'true');
        }

        function isOpen() {
            return root.classList.contains('menu-open');
        }

        button.addEventListener('click', function (event) {
            event.stopPropagation();
            setOpen(!isOpen());
        });

        document.addEventListener('click', function (event) {
            if (isOpen() && !panel.contains(event.target) && !button.contains(event.target)) {
                setOpen(false);
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && isOpen()) {
                setOpen(false);
                button.focus();
            }
        });

        // Following a link should never leave the panel open behind the page.
        panel.addEventListener('click', function (event) {
            if (event.target.closest('a')) {
                setOpen(false);
            }
        });

        setOpen(false);
    }

    /* ---------------------------------------------------------------- 3 */

    function initHeaderState() {
        var header = document.getElementById('header');

        if (!header) {
            return;
        }

        function sync() {
            if (window.scrollY > 8) {
                header.setAttribute('data-scrolled', '');
            } else {
                header.removeAttribute('data-scrolled');
            }
        }

        sync();
        window.addEventListener('scroll', sync, { passive: true });
    }

    /* ---------------------------------------------------------------- 4 */

    function initTicker() {
        var tickers = document.querySelectorAll('[data-ticker]');

        if (!tickers.length) {
            return;
        }

        // Reduced motion (or no observer) gets the finished conversation.
        if (reduceMotion.matches || !('IntersectionObserver' in window)) {
            tickers.forEach(function (el) {
                el.classList.add('is-running');
            });
            return;
        }

        var observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-running');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.35 }
        );

        tickers.forEach(function (el) {
            observer.observe(el);
        });
    }

    function boot() {
        initReveals();
        initMenu();
        initHeaderState();
        initTicker();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', boot);
    } else {
        boot();
    }
})();
