/* products.js — Animations & Interactions */

document.addEventListener('DOMContentLoaded', () => {

    // ── Scroll progress bar ──────────────────────────
    const prog = document.getElementById('prog');
    const fab  = document.querySelector('.fab');

    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        const total    = document.body.scrollHeight - window.innerHeight;
        prog.style.transform = `scaleX(${scrolled / total})`;

        // Show FAB after scrolling past hero
        if (fab) {
            fab.classList.toggle('visible', scrolled > 400);
        }
    }, { passive: true });


    // ── Scroll-reveal for product cards ─────────────
    const cards = document.querySelectorAll('.product-card');

    const cardObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, i * 90);
                cardObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    cards.forEach(card => cardObserver.observe(card));


    // ── Animated counters (hero stats) ──────────────
    const counters = document.querySelectorAll('[data-count]');

    function animateCounter(el) {
        const target = parseInt(el.dataset.count, 10);
        const suffix = el.dataset.suffix || '';
        const duration = 1800;
        const steps    = 60;
        const increment = target / steps;
        let current = 0;

        const timer = setInterval(() => {
            current = Math.min(current + increment, target);
            el.textContent = Math.round(current) + suffix;
            if (current >= target) clearInterval(timer);
        }, duration / steps);
    }

    const heroObserver = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting) {
            counters.forEach((el, i) => {
                setTimeout(() => animateCounter(el), 400 + i * 200);
            });
            heroObserver.disconnect();
        }
    }, { threshold: 0.4 });

    const hero = document.querySelector('.hero');
    if (hero) heroObserver.observe(hero);


    // ── Category filter ──────────────────────────────
    const filterBtns = document.querySelectorAll('.filter-btn');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;

            cards.forEach(card => {
                const match = filter === 'all' || card.dataset.category === filter;

                if (match) {
                    card.style.display = 'grid';
                    // Force reflow then fade in
                    requestAnimationFrame(() => {
                        card.style.opacity    = '';
                        card.style.transform  = '';
                        if (!card.classList.contains('visible')) {
                            setTimeout(() => card.classList.add('visible'), 50);
                        }
                    });
                } else {
                    card.style.opacity   = '0';
                    card.style.transform = 'translateY(16px)';
                    setTimeout(() => { card.style.display = 'none'; }, 380);
                }
            });
        });
    });

});