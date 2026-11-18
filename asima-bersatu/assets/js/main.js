/* ASIMA Bersatu — tema frontend */
(function () {
  'use strict';

  document.documentElement.classList.add('js');

  /* ---------- Header & menu mobile ---------- */
  var header = document.getElementById('siteHeader');
  var toggle = document.querySelector('.menu-toggle');
  var nav = document.getElementById('asima-primary-nav');

  function onScroll() {
    if (header) header.classList.toggle('is-scrolled', window.scrollY > 8);
  }
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });

  function closeMenu() {
    if (!nav || !toggle) return;
    nav.classList.remove('is-open');
    toggle.setAttribute('aria-expanded', 'false');
  }

  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var open = nav.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });

    nav.addEventListener('click', function (event) {
      if (event.target.closest('a')) closeMenu();
    });

    document.addEventListener('click', function (event) {
      if (!nav.contains(event.target) && !toggle.contains(event.target)) closeMenu();
    });

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape') closeMenu();
    });

    window.addEventListener('resize', function () {
      if (window.innerWidth > 900) closeMenu();
    });
  }

  /* ---------- Slider berita utama ---------- */
  var slider = document.getElementById('asimaHeroSlides');
  if (slider) {
    var slides = Array.prototype.slice.call(slider.querySelectorAll('.hero__slide'));
    var dots = Array.prototype.slice.call(document.querySelectorAll('#heroDots .hero__dot'));
    var bar = document.getElementById('heroProgress');
    var prev = document.getElementById('heroPrev');
    var next = document.getElementById('heroNext');
    var hero = document.querySelector('.hero');
    var DURATION = 7000;
    var current = 0;
    var timer = null;

    function paintBar() {
      if (!bar) return;
      bar.style.transition = 'none';
      bar.style.width = '0%';
      void bar.offsetWidth;
      bar.style.transition = 'width ' + DURATION + 'ms linear';
      bar.style.width = '100%';
    }

    function goTo(index) {
      if (!slides.length) return;
      slides[current].classList.remove('is-active');
      slides[current].setAttribute('aria-hidden', 'true');
      if (dots[current]) {
        dots[current].classList.remove('is-active');
        dots[current].setAttribute('aria-selected', 'false');
      }
      current = (index + slides.length) % slides.length;
      slides[current].classList.add('is-active');
      slides[current].setAttribute('aria-hidden', 'false');
      if (dots[current]) {
        dots[current].classList.add('is-active');
        dots[current].setAttribute('aria-selected', 'true');
      }
      paintBar();
    }

    function start() {
      stop();
      if (slides.length < 2) return;
      timer = window.setInterval(function () { goTo(current + 1); }, DURATION);
      paintBar();
    }

    function stop() {
      if (timer) window.clearInterval(timer);
      timer = null;
      if (bar) {
        var width = window.getComputedStyle(bar).width;
        bar.style.transition = 'none';
        bar.style.width = width;
      }
    }

    if (prev) prev.addEventListener('click', function () { goTo(current - 1); start(); });
    if (next) next.addEventListener('click', function () { goTo(current + 1); start(); });

    dots.forEach(function (dot, index) {
      dot.addEventListener('click', function () { goTo(index); start(); });
    });

    if (hero) {
      hero.addEventListener('mouseenter', stop);
      hero.addEventListener('mouseleave', start);
      hero.addEventListener('focusin', stop);
      hero.addEventListener('focusout', function (event) {
        if (!hero.contains(event.relatedTarget)) start();
      });
    }

    var startX = 0;
    slider.addEventListener('touchstart', function (event) {
      startX = event.touches[0].clientX;
    }, { passive: true });
    slider.addEventListener('touchend', function (event) {
      var diff = startX - event.changedTouches[0].clientX;
      if (Math.abs(diff) > 50) {
        goTo(diff > 0 ? current + 1 : current - 1);
        start();
      }
    }, { passive: true });

    if (slides.length > 1) start();
  }

  /* ---------- Reveal saat scroll ---------- */
  var revealItems = document.querySelectorAll('[data-reveal]');
  if ('IntersectionObserver' in window && revealItems.length) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });

    revealItems.forEach(function (item) { observer.observe(item); });
  } else {
    revealItems.forEach(function (item) { item.classList.add('is-visible'); });
  }
})();
