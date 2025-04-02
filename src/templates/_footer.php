<footer class="footer">
    <div class="footer__container">
        <span>Блинов &copy; 2025</span>
        <form method="POST">
            <div class="form__group">
                <select class="form__select-color" style="background-color: <?= $backgroundColor ?>"
                        name="background_color" onchange="this.form.submit()">
                    <option <?= $backgroundColor == '#ffffff' ? 'selected' : '' ?> value="#ffffff">⚪</option>
                    <option <?= $backgroundColor == '#232323' ? 'selected' : '' ?> value="#232323">⚫</option>
                    <option <?= $backgroundColor == '#804030' ? 'selected' : '' ?> value="#804030">🟤</option>
                </select>
            </div>
        </form>
        <div class="footer__social">
            <a href="https://vk.com/studiofact" title="VK"><img src="/assets/img/icon-vk.svg" alt="vk-icon"></a>
            <a href="https://t.me/factdigital" title="Telegram"><img src="/assets/img/icon-телеграм.svg"
                                                                     alt="telegram-icon"></a>
        </div>
    </div>
</footer>