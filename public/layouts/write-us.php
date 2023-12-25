<section class="write-us">
    <div class="container">
        <div class="write-us__form-block">
            <div class="write-us__wrapper">
                <h2 class="h2">Напишите нам</h2>
                <form class="write-us__form" method="post" action="http://<?= $_SERVER['SERVER_NAME'] ?>post/user-message.php">
                    <input class="write-us__email" type="email" name="email" placeholder="Email">
                    <input class="write-us__name" type="text" name="name" placeholder="Имя" required maxlength="32">
                    <input class="write-us__name" type="text" name="city" placeholder="Город проживания" required maxlength="32">
                    <textarea class="write-us__text" name="message" rows="4" placeholder="Ваше сообщение" required maxlength="384"></textarea>
                    <button class="btn" type="submit">Отправить</button>
                </form>
            </div>
        </div>
        <div class="write-us__appeal">
            <p class="write-us__appeal-txt">Дорогой гость, если у тебя есть какие-то пожелания или притензии по улучшению качества обслуживания или просто хочешь оставить свой комментарий, то заполни форму. Мы обязательно ответим тебе, или опубликуем его на нашем сайте.</p>
            <p class="write-us__appeal-sign">Директор гостиницы</p>
        </div>
    </div>
</section>
