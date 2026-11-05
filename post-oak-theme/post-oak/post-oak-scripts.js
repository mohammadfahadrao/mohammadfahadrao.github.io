/**
 * Post Oak Financial Services
 * Enterprise Modular Architecture
 * 
 * SOLID Principles: Single Responsibility, Loosely Coupled Component Pattern
 */
(function(window, document) {
  'use strict';

  // Component 1: Theme Manager (Dark / Light Executive Mode)
  class ThemeManager {
    constructor() {
      this.STORAGE_KEY = 'post_oak_theme';
      this.toggleBtn = null;
    }

    init() {
      this.toggleBtn = document.querySelector('.theme-switch-btn');
      const savedTheme = localStorage.getItem(this.STORAGE_KEY) || 'dark';
      this.applyTheme(savedTheme);

      if (this.toggleBtn) {
        this.toggleBtn.addEventListener('click', () => {
          const current = document.documentElement.getAttribute('data-theme') || 'dark';
          const next = current === 'dark' ? 'light' : 'dark';
          this.applyTheme(next);
        });
      }
    }

    applyTheme(theme) {
      if (theme === 'light') {
        document.documentElement.setAttribute('data-theme', 'light');
        if (this.toggleBtn) {
          this.toggleBtn.innerHTML = '<span class="theme-switch-icon">&#9680;</span> Dark Mode';
        }
      } else {
        document.documentElement.removeAttribute('data-theme');
        if (this.toggleBtn) {
          this.toggleBtn.innerHTML = '<span class="theme-switch-icon">&#9681;</span> Light Mode';
        }
      }
      localStorage.setItem(this.STORAGE_KEY, theme);
    }
  }

  // Component 2: Hero Rotator (Requirement #2: Bottom-Left Smooth Transition)
  class HeroRotator {
    constructor() {
      this.el = null;
      this.timer = null;
      this.phrases = [
        "Financial Services Reimagined.",
        "Asset Management. Reimagined.",
        "Commercial Banking. Reimagined.",
        "Investment Banking. Reimagined.",
        "Investment Research. Reimagined.",
        "Private Banking. Reimagined.",
        "Wealth Management. Reimagined."
      ];
      this.index = 0;
    }

    init() {
      this.el = document.querySelector('.hero-rotating-text');
      if (!this.el) return;

      this.timer = setInterval(() => this.next(), 3200);
    }

    next() {
      this.el.style.opacity = '0';
      this.el.style.transform = 'translateY(-14px)';

      setTimeout(() => {
        this.index = (this.index + 1) % this.phrases.length;
        this.el.textContent = this.phrases[this.index];
        this.el.style.transform = 'translateY(14px)';
        void this.el.offsetWidth; // Force repaint
        this.el.style.opacity = '1';
        this.el.style.transform = 'translateY(0)';
      }, 450);
    }
  }

  // Component 3: GPU Particle Engine (Zero CPU waste with IntersectionObserver)
  class ParticleEngine {
    constructor() {
      this.canvas = null;
      this.ctx = null;
      this.particles = [];
      this.active = false;
      this.rafId = null;
    }

    init() {
      this.canvas = document.querySelector('.hero-canvas');
      if (!this.canvas) return;
      this.ctx = this.canvas.getContext('2d');
      this.resize();

      window.addEventListener('resize', () => this.resize(), { passive: true });

      // Build pool
      for (let i = 0; i < 60; i++) {
        this.particles.push({
          x: Math.random() * this.canvas.width,
          y: Math.random() * this.canvas.height,
          vx: (Math.random() - 0.5) * 0.22,
          vy: (Math.random() - 0.5) * 0.22,
          r: Math.random() * 1.5 + 0.5,
          alpha: Math.random() * 0.35 + 0.1
        });
      }

      // Zero-latency: Pause animation when hero leaves viewport
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            this.start();
          } else {
            this.stop();
          }
        });
      }, { threshold: 0.1 });

      observer.observe(this.canvas);
    }

    resize() {
      this.canvas.width = window.innerWidth;
      this.canvas.height = window.innerHeight;
    }

    start() {
      if (this.active) return;
      this.active = true;
      const loop = () => {
        if (!this.active) return;
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        for (let p of this.particles) {
          p.x += p.vx;
          p.y += p.vy;
          if (p.x < 0) p.x = this.canvas.width;
          if (p.x > this.canvas.width) p.x = 0;
          if (p.y < 0) p.y = this.canvas.height;
          if (p.y > this.canvas.height) p.y = 0;

          this.ctx.beginPath();
          this.ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
          this.ctx.fillStyle = `rgba(255, 255, 255, ${p.alpha})`;
          this.ctx.fill();
        }
        this.rafId = requestAnimationFrame(loop);
      };
      this.rafId = requestAnimationFrame(loop);
    }

    stop() {
      this.active = false;
      if (this.rafId) cancelAnimationFrame(this.rafId);
    }
  }

  // Component 4: Header Controller (RAF Throttled)
  class HeaderController {
    constructor() {
      this.header = null;
      this.lastY = 0;
      this.ticking = false;
    }

    init() {
      this.header = document.querySelector('.site-header');
      if (!this.header) return;

      window.addEventListener('scroll', () => {
        this.lastY = window.scrollY;
        if (!this.ticking) {
          window.requestAnimationFrame(() => {
            if (this.lastY > 40) {
              this.header.classList.add('scrolled');
            } else {
              this.header.classList.remove('scrolled');
            }
            this.ticking = false;
          });
          this.ticking = true;
        }
      }, { passive: true });
    }
  }

  // Component 5: Tab Switcher (ARIA Accessible)
  class TabManager {
    constructor() {
      this.buttons = [];
      this.panels = [];
    }

    init() {
      this.buttons = document.querySelectorAll('.gov-tab-btn');
      this.panels = document.querySelectorAll('.gov-tab-panel');
      if (!this.buttons.length) return;

      this.buttons.forEach(btn => {
        btn.addEventListener('click', () => {
          const tabId = btn.getAttribute('data-tab');
          this.buttons.forEach(b => b.classList.remove('active'));
          btn.classList.add('active');

          this.panels.forEach(p => {
            if (p.id === `tab-${tabId}`) {
              p.style.display = 'grid';
            } else {
              p.style.display = 'none';
            }
          });
        });
      });
    }
  }

  // Component 6: Safe Anchor Smooth Navigator
  class SmoothNavigator {
    init() {
      document.addEventListener('click', (e) => {
        const link = e.target.closest('a[href^="#"]');
        if (!link) return;
        const hash = link.getAttribute('href');
        if (!hash || hash === '#' || hash === '#!' || hash.startsWith('#/')) return;

        let target = null;
        try {
          target = document.querySelector(hash);
        } catch(err) {
          return;
        }
        if (!target) return;

        e.preventDefault();
        const header = document.querySelector('.site-header');
        const headerH = header ? header.offsetHeight : 0;
        const targetY = target.getBoundingClientRect().top + window.scrollY - headerH;
        window.scrollTo({ top: targetY, behavior: 'smooth' });
      });
    }
  }

  // Central Application Container
  
  // Component 7: Culture Video Player (Trafigura / Vitol Brand Film)
  class CulturePlayer {
    init() {
      const trigger = document.querySelector('.culture-play-trigger');
      const container = document.querySelector('.culture-video-aspect');
      if (!trigger || !container) return;

      trigger.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();

        const existingIframe = container.querySelector('iframe.culture-video-frame');
        if (existingIframe) return;

        const iframe = document.createElement('iframe');
        iframe.className = 'culture-video-frame';
        iframe.src = 'https://www.youtube-nocookie.com/embed/aPWYVSpo_5k?autoplay=1&rel=0&modestbranding=1';
        iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; fullscreen';
        iframe.allowFullscreen = true;
        iframe.style.cssText = 'position:absolute;inset:0;width:100%;height:100%;border:none;z-index:25;border-radius:12px;';

        const closeBtn = document.createElement('button');
        closeBtn.innerHTML = '&#10005; CLOSE FILM';
        closeBtn.style.cssText = 'position:absolute;top:16px;right:16px;z-index:30;background:rgba(0,0,0,0.85);color:#fff;border:1px solid rgba(61,186,120,0.6);padding:8px 16px;border-radius:4px;font-size:11px;letter-spacing:2px;cursor:pointer;font-weight:600;';

        closeBtn.addEventListener('click', (ev) => {
          ev.stopPropagation();
          iframe.remove();
          closeBtn.remove();
          const overlay = container.querySelector('.culture-overlay');
          if (overlay) overlay.style.display = 'flex';
        });

        const overlay = container.querySelector('.culture-overlay');
        if (overlay) overlay.style.display = 'none';

        container.appendChild(iframe);
        container.appendChild(closeBtn);
      });
    }
  }

  class Application {
    constructor() {
      this.components = [
        new ThemeManager(),
        new HeroRotator(),
        new ParticleEngine(),
        new HeaderController(),
        new TabManager(),
        new SmoothNavigator(),
        new CulturePlayer()
      ];
    }

    boot() {
      this.components.forEach(c => c.init());
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    const app = new Application();
    app.boot();
  });

})(window, document);
