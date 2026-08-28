/**
 * Starred Projects - 统一前端公共逻辑与主题管理
 */

(function () {
    // 立即执行：根据本地存储或系统偏好设置暗黑/明亮主题，避免白屏闪烁 (FOUC)
    const savedTheme = localStorage.getItem('starred_theme');
    const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
    const initialTheme = savedTheme || (prefersDark ? 'dark' : 'light');
    document.documentElement.setAttribute('data-theme', initialTheme);

    const savedLayout = localStorage.getItem('starred_layout') || 'boxed';
    document.documentElement.setAttribute('data-layout', savedLayout);
})();

window.StarredCommon = {
    // 常见编程语言专属色值表
    languageColors: {
        'Python': '#3572A5',
        'TypeScript': '#3178c6',
        'JavaScript': '#f1e05a',
        'Go': '#00ADD8',
        'Rust': '#dea584',
        'C++': '#f34b7d',
        'C': '#555555',
        'C#': '#178600',
        'Java': '#b07219',
        'PHP': '#4F5D95',
        'Ruby': '#701516',
        'Shell': '#89e051',
        'HTML': '#e34c26',
        'CSS': '#563d7c',
        'Vue': '#41b883',
        'Swift': '#F05138',
        'Kotlin': '#A97BFF',
        'Dart': '#00B4AB',
        'Lua': '#000080',
        'Markdown': '#083fa1',
        'Dockerfile': '#384d54',
        'Fluent': '#8b5cf6',
        'Other': '#94a3b8'
    },

    getLanguageColor(lang) {
        return this.languageColors[lang] || '#94a3b8';
    },

    // 主题管理
    getTheme() {
        return document.documentElement.getAttribute('data-theme') || 'light';
    },

    setTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('starred_theme', theme);
        window.dispatchEvent(new CustomEvent('starred-theme-changed', { detail: { theme } }));
    },

    toggleTheme() {
        const next = this.getTheme() === 'dark' ? 'light' : 'dark';
        this.setTheme(next);
        return next;
    },

    // 布局管理
    getLayout() {
        return document.documentElement.getAttribute('data-layout') || 'boxed';
    },

    setLayout(layout) {
        document.documentElement.setAttribute('data-layout', layout);
        localStorage.setItem('starred_layout', layout);
        window.dispatchEvent(new CustomEvent('starred-layout-changed', { detail: { layout } }));
    },

    toggleLayout() {
        const next = this.getLayout() === 'boxed' ? 'fluid' : 'boxed';
        this.setLayout(next);
        return next;
    },

    // 格式化数字（千分位）
    formatNumber(num) {
        if (num === null || num === undefined) return '0';
        return Number(num).toLocaleString();
    },

    // 格式化日期时间
    formatDate(dateStr) {
        if (!dateStr) return '';
        return dateStr.replace('T', ' ').replace('Z', '').slice(0, 19);
    },

    // 复制到剪贴板
    async copyText(text) {
        try {
            await navigator.clipboard.writeText(text);
            return true;
        } catch (e) {
            const el = document.createElement('textarea');
            el.value = text;
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
            return true;
        }
    }
};
