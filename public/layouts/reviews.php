<section class="reviews">
    <div class="container">
        <div class="reviews__body">
            <h2 class="h2">Отзывы клиентов</h2>
            <div class="swiper slider-swiper">
                <div class="swiper-wrapper">
                    <?php
                        $reviews_query = mysqli_query($mysqli, "SELECT * FROM reviews WHERE is_published = 1");
                        $reviews = mysqli_fetch_all($reviews_query, MYSQLI_ASSOC);
                        foreach ($reviews as $review) :
                    ?>
                        <div class="swiper-slide">
                            <article class="reviews-card feedback">
                                <p class="feedback__txt"><?= $review["message"] ?></p>
                                <p class="feedback__name"><?= $review["name"] ?></p>
                                <div class="feedback__footer">
                                    <p class="feedback__city"><?= $review["city"] ?></p>
                                    <time class="feedback__date" datetime="<?= $review["date"] ?>"><?= date('d.m.Y', strtotime($review["date"])) ?></time>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="swiper-btn-prev"></div>
        <div class="swiper-btn-next"></div>
    </div>
</section>
