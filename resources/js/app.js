// ── Dark / Light mode ─────────────────────────────────────────────────────────
const HSThemeAppearance = {
    init() {
        const defaultTheme = 'default';
        const theme = localStorage.getItem('hs_theme') || defaultTheme;
        if (document.documentElement.classList.contains('dark')) return;
        this.setAppearance(theme, false, false);
    },
    setAppearance(theme, saveInStore = true, dispatchEvent = true) {
        if (saveInStore) localStorage.setItem('hs_theme', theme);

        const resolved =
            theme === 'auto'
                ? window.matchMedia('(prefers-color-scheme: dark)').matches
                    ? 'dark'
                    : 'default'
                : theme;

        document.documentElement.classList.remove('dark', 'default', 'auto');
        document.documentElement.classList.add(resolved === 'dark' ? 'dark' : 'default');

        if (dispatchEvent) {
            window.dispatchEvent(new CustomEvent('on-hs-appearance-change', { detail: theme }));
        }
    },
    getAppearance() {
        const stored = localStorage.getItem('hs_theme') || 'default';
        if (stored === 'auto') {
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'default';
        }
        return stored;
    },
};

// Initialise immediately (before first paint) to avoid flash
HSThemeAppearance.init();

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    if ((localStorage.getItem('hs_theme') || 'default') === 'auto') {
        HSThemeAppearance.setAppearance('auto', false);
    }
});

document.addEventListener('DOMContentLoaded', () => {
    // ── Theme toggle button ─────────────────────────────────────────────────
    document.querySelectorAll('[data-hs-theme-click-value]').forEach((btn) => {
        btn.addEventListener('click', () => {
            HSThemeAppearance.setAppearance(btn.dataset.hsThemeClickValue);
        });
    });

    // Expose for inline toggle button
    window.__toggleTheme = () => {
        const current = HSThemeAppearance.getAppearance();
        HSThemeAppearance.setAppearance(current === 'dark' ? 'default' : 'dark');
    };

    // Keep theme icon in sync
    const syncThemeIcon = () => {
        const isDark = document.documentElement.classList.contains('dark');
        document.querySelectorAll('[data-theme-icon-sun]').forEach((el) => {
            el.style.display = isDark ? 'none' : 'block';
        });
        document.querySelectorAll('[data-theme-icon-moon]').forEach((el) => {
            el.style.display = isDark ? 'block' : 'none';
        });
    };
    syncThemeIcon();
    window.addEventListener('on-hs-appearance-change', syncThemeIcon);

    // ── Mobile nav collapse ─────────────────────────────────────────────────
    document.querySelectorAll('[data-collapse-toggle]').forEach((btn) => {
        const targetId = btn.dataset.collapseToggle;
        const target = document.getElementById(targetId);
        if (!target) return;

        btn.addEventListener('click', () => {
            const isOpen = target.dataset.open === 'true';
            target.dataset.open = isOpen ? 'false' : 'true';
            target.classList.toggle('hidden', isOpen);
            // Swap hamburger / close icons
            btn.querySelectorAll('[data-collapse-icon]').forEach((icon) => {
                icon.classList.toggle('hidden');
            });
        });
    });

    // ── Feature tabs ────────────────────────────────────────────────────────
    const tabBtns = document.querySelectorAll('.tab-nav-btn');
    const tabPanels = document.querySelectorAll('.tab-panel');

    function activateTab(index) {
        tabBtns.forEach((b, i) => b.classList.toggle('active', i === index));
        tabPanels.forEach((p, i) => p.classList.toggle('active', i === index));
    }

    tabBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => activateTab(index));
    });

    // Activate the first tab by default
    if (tabBtns.length > 0) activateTab(0);

    // ── FAQ accordion ───────────────────────────────────────────────────────
    document.querySelectorAll('.faq-item').forEach((item) => {
        const trigger = item.querySelector('.faq-trigger');
        const answer = item.querySelector('.faq-answer');
        if (!trigger || !answer) return;

        trigger.addEventListener('click', () => {
            const isOpen = item.classList.contains('open');
            // Close all others
            document.querySelectorAll('.faq-item.open').forEach((openItem) => {
                openItem.classList.remove('open');
                openItem.querySelector('.faq-answer').classList.remove('open');
            });
            if (!isOpen) {
                item.classList.add('open');
                answer.classList.add('open');
            }
        });
    });

    // ── Announcement banner dismiss ─────────────────────────────────────────
    document.getElementById('dismiss-announcement')?.addEventListener('click', () => {
        document.getElementById('announcement-banner')?.classList.add('hidden-banner');
    });
});
