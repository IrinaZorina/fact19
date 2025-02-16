<script>
    document.addEventListener('DOMContentLoaded', function() {
        // 1. Определяем текущую тему по времени
        const currentHour = new Date().getHours();
        const isDayTime = currentHour >= 8 && currentHour < 20;
        const newTheme = isDayTime ? 'day-theme' : 'night-theme';

        // 2. Парсим куки
        let savedTheme = null;
        const cookieName = 'site_theme=';
        const decodedCookie = decodeURIComponent(document.cookie);
        const cookieArray = decodedCookie.split(';');

        // 3. Ищем только нужную куку
        for(let i = 0; i < cookieArray.length; i++) {
            let cookie = cookieArray[i].trim();
            if (cookie.indexOf(cookieName) === 0) {
                savedTheme = cookie.substring(cookieName.length);
                break;
            }
        }

        // 4. Логика установки/обновления
        if (!savedTheme) {
            // Первый вход - устанавливаем куку
            document.cookie = `site_theme=${newTheme}; path=/; max-age=3600`;
            document.body.classList.add(newTheme);
        } else if (savedTheme !== newTheme) {
            // Время изменилось - обновляем
            document.cookie = `site_theme=${newTheme}; path=/; max-age=3600`;
            document.body.classList.replace(savedTheme, newTheme);
        } else {
            // Тема актуальна - просто применяем
            document.body.classList.add(savedTheme);
        }
    });
</script>
</body>
</html>