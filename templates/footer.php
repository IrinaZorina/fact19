</body>
<script>
    // Определение времени пользователя и установка темы
    document.addEventListener('DOMContentLoaded', function() {
        const date = new Date();
        const hours = date.getHours();
        const theme = (hours >= 8 && hours < 21) ? 'day-theme' : 'night-theme';
        console.log(theme);
        // Устанавливаем cookie на 1 час
        document.cookie = `site_theme=${theme}; path=/; max-age=3600`;

        // Если текущая тема не совпадает с cookie - обновляем страницу
        if (!document.cookie.includes(`site_theme=${theme}`)) {
            location.reload();
        }
    });
</script>
</html>