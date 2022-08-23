<section class="special pb" id="special">
    <div class="special__container">
        <div class="special__kids">
            <div data-watch data-watch-once class="special__kid _fade-down">
                <picture>
                    <source srcset="img/kid-1.webp" type="image/webp">
                    <img loading="lazy" src="img/kid-1.png" alt=""/></picture>
            </div>
            <div data-watch data-watch-once class="special__kid _fade-down">
                <picture>
                    <source srcset="img/kid-2.webp" type="image/webp">
                    <img loading="lazy" src="img/kid-2.png" alt=""/></picture>
            </div>
        </div>
    </div>
    <div class="special__wrapper">
        <div class="special__container">
            <div class="special__body pt-s pb-s">
                <div class="special__column">
                    <h2 data-watch data-watch-once class="special__title title _fade-down">Мы отказались
                        от:</h2>
                    <ul class="special__list">
                        @foreach($data->we_abandoned as $item)
                            <li data-watch data-watch-once
                                class="special__item _fade-down _watcher-view">{{ $item['item'] }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="special__column special__column_plus">
                    <h2 data-watch data-watch-once class="special__title title _fade-down">Мы выбираем:</h2>
                    <ul class="special__list">
                        @foreach($data->we_choose as $item)
                            <li data-watch data-watch-once
                                class="special__item _fade-down _watcher-view">{{ $item['item'] }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
