<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- slick slider-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- jquery ui-->
    <link href="plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body class="body body--background-dark-2">
    <?php include "header.php";?>
    <div class="container container--margin-y--s">
        <div class="page-navigation page-navigation--margin-bottom--xs">
            <a href="#" class="page-navigation__item">Главная</a>
            <a href="#" class="page-navigation__item">Магазин</a>
        </div>
        <div class="page-titles">
            <h1 class="h1 h1--font-weight--m h1--padding-bottom--xs">Магазин</h1>
            <h3 class="h3">Купить скины CS:GO</h3>
        </div>
        <section class="skins-market">
            <form class="skins-market__filters filters filters--padding-y--s">
                <div class="filters__search-by-name filters__search-by-name--margin-bottom--s filters__item--margin-x--s">
                    <input class="input input-with-icon input--font-size--s input--background-color--dark-2 input--height--s input--padding-x--m input__placeholder--letter-spacing--s" placeholder="Поиск"/>
                    <svg class="input-with-icon__icon"><use xlink:href="/images/sprite.svg#search-icon"></use></svg>
                </div>
                <div class="filters__search-by-price filters__search-by-price--margin-bottom--s filters__item--margin-x--s">
                    <div class="filters__search-by-price-title filters__search-by-price-title--margin-bottom--s">Цена</div>
                    <div class="filters__search-by-value-inputs search-by-value filters__search-by-value--margin-bottom--m">
                        <input class="search-by-value__input input input--background-color--dark-3 input--height--s input--width--s input--padding-x--xs input--font" id="slider-min-value" value="1700"/>
                        <div class="search-by-value__dash"></div>
                        <input class="search-by-value__input input input--background-color--dark-3 input--height--s input--width--s input--padding-x--xs input--font" id="slider-max-value" value="5000"/>
                    </div>
                    <div class="filters__slider-range filters__slider-range--margin-x--m">
                        <div class="filters__slider" id="slider-range"></div>
                        <div class="filters__slider-scale" style="counter-reset: section -1;">
                            <div class="" data-label="0">0</div>
                            <div class="filters__slider-scale-tick"></div>
                            <div class="filters__slider-scale-tick"></div>
                            <div class="filters__slider-scale-tick"></div>
                            <div class="filters__slider-scale-tick"></div>
                            <div class="filters__slider-scale-tick"></div>
                            <div class="filters__slider-scale-tick"></div>
                            <div data-label="0">2500</div>
                            <div class="filters__slider-scale-tick"></div>
                            <div class="filters__slider-scale-tick"></div>
                            <div class="filters__slider-scale-tick"></div>
                            <div class="filters__slider-scale-tick"></div>
                            <div class="filters__slider-scale-tick"></div>
                            <div class="filters__slider-scale-tick"></div>
                            <div class="" data-label="5000">5000</div>
                        </div>
                    </div>
                </div>
                <div class="delimiter delimiter--margin-bottom--xs filters__item--margin-x--s"></div>
                <div class="filters__list filters__list--margin-bottom--s">
                    <div class="filters__list-item">
                        <div class="filters__list-item-title filters__item--margin-x--m">Тип</div>
                        <div class="filters__list-item-content filters__list-item-content--padding--m">
                            <div class="filters__checkboxes-list filters__checkboxes-list--one-column">
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-1"/>
                                    <label class="label-checkbox" for="type-1">Нож</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-2"/>
                                    <label class="label-checkbox" for="type-2">Пулемет</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-3"/>
                                    <label class="label-checkbox" for="type-3">Пистолет</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-4"/>
                                    <label class="label-checkbox" for="type-4">Винтовка</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Дробовик</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Пистолет-пулемет</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Снайперская винтовка</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Подарок</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Именной ярлык</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Патч</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Наклейка</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Ключ</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Коллекционный</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Набор музыки</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Граффити</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Пропуск</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Снайперская винтовка</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Инструмент</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Контейнер</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Агент</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-5"/>
                                    <label class="label-checkbox" for="type-5">Перчатки</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filters__list-item">
                        <div class="filters__list-item-title filters__item--margin-x--m">Раритетность</div>
                        <div class="filters__list-item-content filters__list-item-content--padding--m">
                            <div class="filters__checkboxes-list filters__checkboxes-list--one-column">
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-606"/>
                                    <label class="label-checkbox" for="type-606">Экстраординарного типа</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-7"/>
                                    <label class="label-checkbox" for="type-7">Мастерский</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-8"/>
                                    <label class="label-checkbox" for="type-8">Тайное</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-9"/>
                                    <label class="label-checkbox" for="type-9">Базового класса</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-10"/>
                                    <label class="label-checkbox" for="type-10">Примечательного типа</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-6"/>
                                    <label class="label-checkbox" for="type-6">Экстраординарного типа</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-6"/>
                                    <label class="label-checkbox" for="type-6">Экстраординарного типа</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-6"/>
                                    <label class="label-checkbox" for="type-6">Экстраординарного типа</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-6"/>
                                    <label class="label-checkbox" for="type-6">Экстраординарного типа</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-6"/>
                                    <label class="label-checkbox" for="type-6">Экстраординарного типа</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-6"/>
                                    <label class="label-checkbox" for="type-6">Экстраординарного типа</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-6"/>
                                    <label class="label-checkbox" for="type-6">Экстраординарного типа</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-6"/>
                                    <label class="label-checkbox" for="type-6">Экстраординарного типа</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-6"/>
                                    <label class="label-checkbox" for="type-6">Экстраординарного типа</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-6"/>
                                    <label class="label-checkbox" for="type-6">Экстраординарного типа</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-6"/>
                                    <label class="label-checkbox" for="type-6">Экстраординарного типа</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filters__list-item">
                        <div class="filters__list-item-title filters__item--margin-x--m">Износ</div>
                        <div class="filters__list-item-content filters__list-item-content--padding--m">
                            <div class="filters__checkboxes-list filters__checkboxes-list--one-column">
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-11"/>
                                    <label class="label-checkbox" for="type-11">Прямо с завода</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-12"/>
                                    <label class="label-checkbox" for="type-12">Немного поношенное</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-13"/>
                                    <label class="label-checkbox" for="type-13">После полевых испытаний</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-14"/>
                                    <label class="label-checkbox" for="type-14">Поношенное</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-15"/>
                                    <label class="label-checkbox" for="type-15">Закалённое в боях</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-15"/>
                                    <label class="label-checkbox" for="type-15">Не покрашено</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filters__list-item">
                        <div class="filters__list-item-title filters__item--margin-x--m">Холд</div>
                        <div class="filters__list-item-content filters__list-item-content--padding--s">
                            <div class="filters__checkboxes-list filters__checkboxes-list--two-column">
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-16"/>
                                    <label class="label-checkbox" for="type-16">Без холда</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-17"/>
                                    <label class="label-checkbox" for="type-17">1 день</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-18"/>
                                    <label class="label-checkbox" for="type-18">2 дня</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-19"/>
                                    <label class="label-checkbox" for="type-19">3 дня</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-201"/>
                                    <label class="label-checkbox" for="type-201">4 дня</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-202"/>
                                    <label class="label-checkbox" for="type-202">5 дней</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-203"/>
                                    <label class="label-checkbox" for="type-203">6 дней</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-204"/>
                                    <label class="label-checkbox" for="type-204">7 дней</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-205"/>
                                    <label class="label-checkbox" for="type-205">8 дней</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="filters__list-item">
                        <div class="filters__list-item-title filters__item--margin-x--m">Float</div>
                        <div class="filters__list-item-content filters__list-item-content--padding--m">
                            <div class="search-by-value">
                                <input class="search-by-value__input input input--background-color--dark-3 input--height--s input--width--s input--padding-x--xs input--font" placeholder="0.0000"/>
                                <div class="search-by-value__dash"></div>
                                <input class="search-by-value__input input input--background-color--dark-3 input--height--s input--width--s input--padding-x--xs input--font" placeholder="0.0000"/>
                            </div>
                        </div>
                    </div>
                    <div class="filters__list-item">
                        <div class="filters__list-item-title filters__item--margin-x--m">Фаза</div>
                        <div class="filters__list-item-content filters__list-item-content--padding--m">
                            <div class="filters__checkboxes-list filters__checkboxes-list--two-column filters__checkboxes-list--two-column--height--m">
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-21"/>
                                    <label class="label-checkbox" for="type-21">Без холда</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-22"/>
                                    <label class="label-checkbox" for="type-22">1 день</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-23"/>
                                    <label class="label-checkbox" for="type-23">2 дня</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-24"/>
                                    <label class="label-checkbox" for="type-24">3 дня</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-25"/>
                                    <label class="label-checkbox" for="type-25">4 дня</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-26"/>
                                    <label class="label-checkbox" for="type-26">5 дней</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-27"/>
                                    <label class="label-checkbox" for="type-27">6 дней</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-28"/>
                                    <label class="label-checkbox" for="type-28">7 дней</label>
                                </div>
                                <div class="filters__checkbox">
                                    <input class="input-checkbox" type="checkbox" id="type-29"/>
                                    <label class="label-checkbox" for="type-29">8 дней</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filters__list-item">
                        <div class="filters__checkboxes-list filters__checkboxes-list--padding-top--xs filters__checkboxes-list--two-column filters__checkboxes-list--two-column--height--s filters__item--margin-x--m">
                            <div class="filters__checkbox">
                                <input class="input-checkbox" type="checkbox" id="type-30"/>
                                <label class="label-checkbox" for="type-30">Стикеры</label>
                            </div>
                            <div class="filters__checkbox">
                                <input class="input-checkbox" type="checkbox" id="type-31"/>
                                <label class="label-checkbox" for="type-31">Дорогие стикеры</label>
                            </div>
                            <div class="filters__checkbox">
                                <input class="input-checkbox" type="checkbox" id="type-32"/>
                                <label class="label-checkbox label-checkbox--color--orange" for="type-32">StatTrak™</label>
                            </div>
                            <div class="filters__checkbox">
                                <input class="input-checkbox" type="checkbox" id="type-33"/>
                                <label class="label-checkbox label-checkbox--color--yellow" for="type-33">Сувенирные</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="delimiter filters__item--margin-x--s delimiter--margin-bottom--xl"></div>
                <button class="secondary-button secondary-button--height--xs secondary-button--border-color--grey secondary-button--color--grey secondary-button--font-size--xs secondary-button--font-weight--m secondary-button--margin-x--m secondary-button--margin-bottom--m">Сбросить фильтры</button>
                <div class="filters__categories filters__item--margin-x--s">
                    <div class="filters__categories-title filters__categories-title--margin-bottom-s">Категории</div>
                    <div class="filters__categories-content">
                        <a class="filters__categories-item" href="#">Sticker</a>
                        <a class="filters__categories-item" href="#">Sealed</a>
                        <a class="filters__categories-item" href="#">Graffiti</a>
                        <a class="filters__categories-item" href="#">AK-47</a>
                        <a class="filters__categories-item" href="#">P250</a>
                        <a class="filters__categories-item" href="#">MAC-10</a>
                        <a class="filters__categories-item" href="#">Tec-9</a>
                        <a class="filters__categories-item" href="#">M4A4</a>
                        <a class="filters__categories-item" href="#">P90</a>
                        <a class="filters__categories-item" href="#">AUG</a>
                        <a class="filters__categories-item" href="#">AWP</a>
                        <a class="filters__categories-item" href="#">Sticker</a>
                        <a class="filters__categories-item" href="#">Sealed</a>
                        <a class="filters__categories-item" href="#">Graffiti</a>
                        <a class="filters__categories-item" href="#">AK-47</a>
                        <a class="filters__categories-item" href="#">P250</a>
                        <a class="filters__categories-item" href="#">MAC-10</a>
                        <a class="filters__categories-item" href="#">Tec-9</a>
                        <a class="filters__categories-item" href="#">M4A4</a>
                        <a class="filters__categories-item" href="#">P90</a>
                        <a class="filters__categories-item" href="#">AUG</a>
                        <a class="filters__categories-item" href="#">AWP</a>
                        <a class="filters__categories-item" href="#">Sticker</a>
                        <a class="filters__categories-item" href="#">Sealed</a>
                        <a class="filters__categories-item" href="#">Graffiti</a>
                        <a class="filters__categories-item" href="#">AK-47</a>
                        <a class="filters__categories-item" href="#">P250</a>
                        <a class="filters__categories-item" href="#">MAC-10</a>
                        <a class="filters__categories-item" href="#">Tec-9</a>
                        <a class="filters__categories-item" href="#">M4A4</a>
                        <a class="filters__categories-item" href="#">P90</a>
                        <a class="filters__categories-item" href="#">AUG</a>
                        <a class="filters__categories-item" href="#">AWP</a>
                        <a class="filters__categories-item" href="#">Sticker</a>
                        <a class="filters__categories-item" href="#">Sealed</a>
                        <a class="filters__categories-item" href="#">Graffiti</a>
                        <a class="filters__categories-item" href="#">AK-47</a>
                        <a class="filters__categories-item" href="#">P250</a>
                        <a class="filters__categories-item" href="#">MAC-10</a>
                        <a class="filters__categories-item" href="#">Tec-9</a>
                        <a class="filters__categories-item" href="#">M4A4</a>
                        <a class="filters__categories-item" href="#">P90</a>
                        <a class="filters__categories-item" href="#">AUG</a>
                        <a class="filters__categories-item" href="#">AWP</a>
                    </div>
                </div>
            </form>
            <div class="skins-market__right-block">
                <div class="skins-market__right-block-header">
                    <div class="skins-market__update-button skins-market__right-block-header-item skins-market__right-block-header-item--border-right skins-market__right-block-header-item--padding-x--s">
                        <svg class="skins-market__update-button-icon"><use xlink:href="/images/sprite.svg#update-button"></use></svg>
                    </div>
                    <div class="skins-market__choose-game-button skins-market__right-block-header-item skins-market__right-block-header-item--border-right skins-market__right-block-header-item--padding-x--s">
                        <div class="dropdown dropdown--padding-right--s dropdown--padding-y--s">
                            <a class="dropdown__title">CS:GO</a>
                            <svg class="dropdown__arrow"><use xlink:href="/images/sprite.svg#arrow"></use></svg>
                            <div class="dropdown-menu dropdown__dropdown-menu dropdown-menu--position-top--xs dropdown-menu--min-width--xs dropdown-menu--dropdown--right">
                                <ul>
                                    <li>
                                        <a class="dropdown-menu__item">
                                            <span class="dropdown-menu__text">Dota2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-menu__item">
                                            <span class="dropdown-menu__text">CS:GO</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="skins-market__sort skins-market__right-block-header-item skins-market__right-block-header-item--border-right skins-market__right-block-header-item--padding-x--s">
                        <svg class="skins-market__sort-icon"><use xlink:href="/images/sprite.svg#sort-icon"></use></svg>
                        <div class="skins-market__sort-name skins-market__sort-name--padding-x--s">Цена</div>
                        <svg class="skins-market__sort-icon skins-market__sort-icon--transform--180 skins-market__sort-icon--active"><use xlink:href="/images/sprite.svg#sort-icon"></use></svg>
                    </div>
                    <div class="skins-market__sort skins-market__right-block-header-item skins-market__right-block-header-item--border-right skins-market__right-block-header-item--padding-x--s">
                        <svg class="skins-market__sort-icon"><use xlink:href="/images/sprite.svg#sort-icon"></use></svg>
                        <div class="skins-market__sort-name skins-market__sort-name--padding-x--s">Популярность</div>
                        <svg class="skins-market__sort-icon skins-market__sort-icon--transform--180 skins-market__sort-icon--active"><use xlink:href="/images/sprite.svg#sort-icon"></use></svg>
                    </div>
                    <div class="skins-market__sort skins-market__right-block-header-item skins-market__right-block-header-item--border-right skins-market__right-block-header-item--padding-x--s">
                        <svg class="skins-market__sort-icon"><use xlink:href="/images/sprite.svg#sort-icon"></use></svg>
                        <div class="skins-market__sort-name skins-market__sort-name--padding-x--s">Новые</div>
                        <svg class="skins-market__sort-icon skins-market__sort-icon--transform--180 skins-market__sort-icon--active"><use xlink:href="/images/sprite.svg#sort-icon"></use></svg>

                    </div>
                    <div class="cart-button cart-button--margin-right--s cart-button--margin-left--auto skins-market__right-block-header-item">
                        <div class="cart-button__sum">
                            <div class="cart-button__sum-value"><span>7.53</span> $</div>
                        </div>
                        <div class="cart-button__icon">
                            <svg class="cart-button__icon-img"><use xlink:href="/images/sprite.svg#cart-icon"></use></svg>
                            <div class="cart-button__summary-items">1</div>
                        </div>
                    </div>
                    <div class="cart">
                        <div class="cart__inner cart__inner--padding--s">
                            <div class="cart__with-items cart__with-items--display--block">
                                <div class="cart__note cart__note--padding--s cart__note--margin--bottom--s">
                                    Обмен с заблокированными (Trade Lock) скинами будет отправлен после его разблокировки. Необходимо принять обмен в течении 5 часов в дневное время, иначе обмен отменится и деньги вернуться вам на баланс. Дату и время разблокировки можно отследить в личном кабинете.
                                </div>
                                <div class="cart__skins-list">
                                    <div class="cart__skins-list-item cart__skins-list-item--padding--xs">
                                        <img class="cart__skin-img cart__skin-img--margin-right--s" src="images/skins/fiveSeven.png">
                                        <div class="cart__skin-info cart__skin-info--margin-right--s">
                                            <div class="cart__skin-name cart__skin-name--margin-bottom--xs">★ Navaja Knife | Doppler Sapphire</div>
                                            <div class="cart__skin-characteristics cart__skin-characteristics--margin-bottom--xs">
                                                <span class="skins-market__skin-characteristic skins-market__skin-characteristic--color-orange">ST™</span>
                                                <span class="skins-market__skin-characteristic">Прямо с завода</span>
                                                <span class="skins-market__skin-characteristic">0.0371</span>
                                            </div>
                                            <div class="cart__skin-unhold-date cart__skin-unhold-date--padding--xs">
                                                <svg class="cart__skin-unhold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span class="cart__skin-unhold-text">20 часов до разблокировки</span>
                                            </div>
                                        </div>
                                        <div class="cart__skin-price">1 999 999.40 $</div>
                                        <button class="cart__delete-skin-button">
                                            <svg class="cart__delete-skin-icon cart__delete-skin-icon--padding--s"><use xlink:href="/images/sprite.svg#cart-delete-icon"></use></svg>
                                        </button>
                                    </div>
                                    <div class="cart__skins-list-item cart__skins-list-item--padding--xs">
                                        <img class="cart__skin-img cart__skin-img--margin-right--s" src="images/skins/fiveSeven.png">
                                        <div class="cart__skin-info">
                                            <div class="cart__skin-name cart__skin-name--margin-bottom--xs">Five-SeveN | Urban Hazard</div>
                                            <div class="cart__skin-characteristics cart__skin-characteristics--margin-bottom--xs">
                                                <span class="skins-market__skin-characteristic skins-market__skin-characteristic--color-white">ST™</span>
                                                <span class="skins-market__skin-characteristic">Прямо с завода</span>
                                                <span class="skins-market__skin-characteristic">0.0371</span>
                                            </div>
                                            <div class="cart__skin-unhold-date cart__skin-unhold-date--padding--xs">
                                                <svg class="cart__skin-unhold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span class="cart__skin-unhold-text">24 часа до разблокировки</span>
                                            </div>
                                        </div>
                                        <div class="cart__skin-price">9.53 $</div>
                                        <button class="cart__delete-skin-button">
                                            <svg class="cart__delete-skin-icon cart__delete-skin-icon--padding--s"><use xlink:href="/images/sprite.svg#cart-delete-icon"></use></svg>
                                        </button>
                                    </div>
                                    <div class="cart__skins-list-item cart__skins-list-item--padding--xs">
                                        <img class="cart__skin-img cart__skin-img--margin-right--s" src="images/skins/alpineStalkersPants.png">
                                        <div class="cart__skin-info cart__skin-info--margin-right--s">
                                            <div class="cart__skin-name cart__skin-name--margin-bottom--xs">★ M9 Bayonet | Doppler Sapphire</div>
                                            <div class="cart__skin-characteristics cart__skin-characteristics--margin-bottom--xs">
                                                <span class="skins-market__skin-characteristic skins-market__skin-characteristic--color-pink">ST™</span>
                                                <span class="skins-market__skin-characteristic">Прямо с завода</span>
                                                <span class="skins-market__skin-characteristic">0.0371</span>
                                            </div>
                                        </div>
                                        <div class="cart__skin-price">1.33 $</div>
                                        <button class="cart__delete-skin-button">
                                            <svg class="cart__delete-skin-icon cart__delete-skin-icon--padding--s"><use xlink:href="/images/sprite.svg#cart-delete-icon"></use></svg>
                                        </button>
                                    </div>
                                    <div class="cart__skins-list-item cart__skins-list-item--padding--xs">
                                        <img class="cart__skin-img cart__skin-img--margin-right--s" src="images/skins/alpineStalkersPants.png">
                                        <div class="cart__skin-info cart__skin-info--margin-right--s">
                                            <div class="cart__skin-name cart__skin-name--margin-bottom--xs">Sticker | Natus Vincere (Holo) | Katowice 2015</div>
                                            <div class="cart__skin-unhold-date cart__skin-unhold-date--padding--xs">
                                                <svg class="cart__skin-unhold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span class="cart__skin-unhold-text">2 дня до разблокировки</span>
                                            </div>
                                        </div>
                                        <div class="cart__skin-price">37 987.33 $</div>
                                        <button class="cart__delete-skin-button">
                                            <svg class="cart__delete-skin-icon cart__delete-skin-icon--padding--s"><use xlink:href="/images/sprite.svg#cart-delete-icon"></use></svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="cart__info cart__info--margin--s">
                                    <div class="cart__info-item">
                                        <div class="cart__info-title">Всего предметов:</div>
                                        <div class="cart__info-value cart__info-value--font-size--s">1</div>
                                    </div>
                                    <div class="cart__info-item">
                                        <div class="cart__info-title">Сумма:</div>
                                        <div class="cart__info-value cart__info-value--font-size--m cart__info-value--font-weight--m">7.53 $</div>
                                    </div>
                                </div>
                                <div class="cart__buttons cart__buttons--margin-x--s">
                                    <button class="primary-button primary-button--padding--s primary-button--height--xxs primary-button--font-size--s">Купить</button>
                                    <button class="secondary-button secondary-button--font-size--s secondary-button--height--xxs secondary-button--border-color--orange secondary-button--color--white">Очистить корзину</button>
                                </div>
                            </div>
                            <!--cart__empty--dispaly--flex Когда корзина пуста-->
                            <div class="cart__empty">
                                <div class="cart__empty-title cart__empty-title--margin-bottom--s">Корзина пуста</div>
                                <div class="cart__empty-description">Добавьте предметы из нашего инвентаря</div>
                            </div>
                            <div class="popup-close-button">
                                <svg class="popup-close-icon"><use xlink:href="/images/sprite.svg#popup-close-icon"></use></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skins-market__right-block-content">
                    <div class="skins-market-list">
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-orange">ST™</div>
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.3212</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x15</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/tec9.png">
                                    <a class="skins-market-list__skin-info-bottom-content skins-market-list__skin-in-cart-icon" href="skin-page.php">
                                        <div class="skins-market-list__skin-info-name">Tec-9 <span class="skins-market-list__skin-info-name--color--grey">|</span> Isaac</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">1.24 $</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>1д</span>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">Убрать из корзины</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-white">MW</div>
                                        <div class="skins-market__skin-characteristic">0.0788</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x2</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/p2000.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">P2000 <span class="skins-market-list__skin-info-name--color--grey">|</span> Imperial Dragon</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">1.24 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>1д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic">WW</div>
                                        <div class="skins-market__skin-characteristic">0.4371</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x7</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/desertEagle.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Desert Eagle <span class="skins-market-list__skin-info-name--color--grey">|</span> Directive</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.47 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>6ч</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.0649</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x9</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/glock-18.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Glock-18 <span class="skins-market-list__skin-info-name--color--grey"><span class="skins-market-list__skin-info-name--color--grey">|</span></span> Wasteland Rebel Glock-18 <span class="skins-market-list__skin-info-name--color--grey">|</span> Wasteland Rebel Glock-18 <span class="skins-market-list__skin-info-name--color--grey">|</span> Wasteland Rebe</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">7.53 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="skins-market-list__stickers-list">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                    </div>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-pink">ST™</div>
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.0297</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x4</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/fiveSeven.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name skins-market-list__skin-info-name--color--yellow">Five-SeveN <span class="skins-market-list__skin-info-name--color--grey">|</span> Urban Hazard 12</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">2.00 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-24%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="skins-market-list__stickers-list">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                    </div>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>

                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x36</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/staffOfGun-Yu.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Staff of Gun-Yu</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.27 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x36</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/tauntFiendishSwag.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Taunt: Fiendish Swag!</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.36 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1999</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/alpineStalkersScarf.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Alpine Stalker's Scarf</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">157.07 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>6ч</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/alpineStalkersPants.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Alpine Stalker's Pants</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">114.95 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/weaponOfTheArdalanInterdictor.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Weapon of the Ardalan Interdictor</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">107.84 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>

                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-orange">ST™</div>
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.3212</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x15</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/tec9.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Tec-9 <span class="skins-market-list__skin-info-name--color--grey">|</span> Isaac</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">1.24 $</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>1д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-white">MW</div>
                                        <div class="skins-market__skin-characteristic">0.0788</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x2</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/p2000.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">P2000 <span class="skins-market-list__skin-info-name--color--grey">|</span> Imperial Dragon</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">1.24 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>1д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic">WW</div>
                                        <div class="skins-market__skin-characteristic">0.4371</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x7</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/desertEagle.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Desert Eagle <span class="skins-market-list__skin-info-name--color--grey">|</span> Directive</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.47 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>6ч</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.0649</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x9</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/glock-18.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Glock-18 <span class="skins-market-list__skin-info-name--color--grey"><span class="skins-market-list__skin-info-name--color--grey">|</span></span> Wasteland Rebel Glock-18 <span class="skins-market-list__skin-info-name--color--grey">|</span> Wasteland Rebel Glock-18 <span class="skins-market-list__skin-info-name--color--grey">|</span> Wasteland Rebe</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">7.53 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="skins-market-list__stickers-list">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                    </div>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-pink">ST™</div>
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.0297</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x4</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/fiveSeven.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name skins-market-list__skin-info-name--color--yellow">Five-SeveN <span class="skins-market-list__skin-info-name--color--grey">|</span> Urban Hazard 12</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">2.00 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-24%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="skins-market-list__stickers-list">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                    </div>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>

                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x36</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/staffOfGun-Yu.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Staff of Gun-Yu</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.27 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x36</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/tauntFiendishSwag.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Taunt: Fiendish Swag!</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.36 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1999</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/alpineStalkersScarf.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Alpine Stalker's Scarf</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">157.07 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>6ч</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/alpineStalkersPants.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Alpine Stalker's Pants</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">114.95 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/weaponOfTheArdalanInterdictor.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Weapon of the Ardalan Interdictor</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">107.84 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>

                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-orange">ST™</div>
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.3212</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x15</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/tec9.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Tec-9 <span class="skins-market-list__skin-info-name--color--grey">|</span> Isaac</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">1.24 $</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>1д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-white">MW</div>
                                        <div class="skins-market__skin-characteristic">0.0788</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x2</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/p2000.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">P2000 <span class="skins-market-list__skin-info-name--color--grey">|</span> Imperial Dragon</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">1.24 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>1д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic">WW</div>
                                        <div class="skins-market__skin-characteristic">0.4371</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x7</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/desertEagle.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Desert Eagle <span class="skins-market-list__skin-info-name--color--grey">|</span> Directive</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.47 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>6ч</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.0649</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x9</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/glock-18.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Glock-18 <span class="skins-market-list__skin-info-name--color--grey"><span class="skins-market-list__skin-info-name--color--grey">|</span></span> Wasteland Rebel Glock-18 <span class="skins-market-list__skin-info-name--color--grey">|</span> Wasteland Rebel Glock-18 <span class="skins-market-list__skin-info-name--color--grey">|</span> Wasteland Rebe</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">7.53 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="skins-market-list__stickers-list">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                    </div>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-pink">ST™</div>
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.0297</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x4</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/fiveSeven.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name skins-market-list__skin-info-name--color--yellow">Five-SeveN <span class="skins-market-list__skin-info-name--color--grey">|</span> Urban Hazard 12</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">2.00 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-24%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="skins-market-list__stickers-list">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                    </div>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>

                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x36</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/staffOfGun-Yu.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Staff of Gun-Yu</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.27 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x36</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/tauntFiendishSwag.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Taunt: Fiendish Swag!</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.36 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1999</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/alpineStalkersScarf.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Alpine Stalker's Scarf</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">157.07 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>6ч</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/alpineStalkersPants.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Alpine Stalker's Pants</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">114.95 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/weaponOfTheArdalanInterdictor.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Weapon of the Ardalan Interdictor</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">107.84 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>

                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-orange">ST™</div>
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.3212</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x15</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/tec9.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Tec-9 <span class="skins-market-list__skin-info-name--color--grey">|</span> Isaac</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">1.24 $</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>1д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-white">MW</div>
                                        <div class="skins-market__skin-characteristic">0.0788</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x2</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/p2000.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">P2000 <span class="skins-market-list__skin-info-name--color--grey">|</span> Imperial Dragon</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">1.24 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>1д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic">WW</div>
                                        <div class="skins-market__skin-characteristic">0.4371</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x7</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/desertEagle.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Desert Eagle <span class="skins-market-list__skin-info-name--color--grey">|</span> Directive</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.47 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>6ч</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.0649</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x9</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/glock-18.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Glock-18 <span class="skins-market-list__skin-info-name--color--grey"><span class="skins-market-list__skin-info-name--color--grey">|</span></span> Wasteland Rebel Glock-18 <span class="skins-market-list__skin-info-name--color--grey">|</span> Wasteland Rebel Glock-18 <span class="skins-market-list__skin-info-name--color--grey">|</span> Wasteland Rebe</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">7.53 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="skins-market-list__stickers-list">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                    </div>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-pink">ST™</div>
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.0297</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x4</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/fiveSeven.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name skins-market-list__skin-info-name--color--yellow">Five-SeveN <span class="skins-market-list__skin-info-name--color--grey">|</span> Urban Hazard 12</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">2.00 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-24%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="skins-market-list__stickers-list">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                    </div>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>

                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x36</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/staffOfGun-Yu.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Staff of Gun-Yu</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.27 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x36</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/tauntFiendishSwag.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Taunt: Fiendish Swag!</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.36 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1999</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/alpineStalkersScarf.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Alpine Stalker's Scarf</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">157.07 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>6ч</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/alpineStalkersPants.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Alpine Stalker's Pants</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">114.95 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/weaponOfTheArdalanInterdictor.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Weapon of the Ardalan Interdictor</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">107.84 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>

                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-orange">ST™</div>
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.3212</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x15</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/tec9.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Tec-9 <span class="skins-market-list__skin-info-name--color--grey">|</span> Isaac</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">1.24 $</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>1д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-white">MW</div>
                                        <div class="skins-market__skin-characteristic">0.0788</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x2</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/p2000.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">P2000 <span class="skins-market-list__skin-info-name--color--grey">|</span> Imperial Dragon</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">1.24 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>1д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic">WW</div>
                                        <div class="skins-market__skin-characteristic">0.4371</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x7</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/desertEagle.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Desert Eagle <span class="skins-market-list__skin-info-name--color--grey">|</span> Directive</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.47 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>6ч</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.0649</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x9</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/glock-18.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Glock-18 <span class="skins-market-list__skin-info-name--color--grey"><span class="skins-market-list__skin-info-name--color--grey">|</span></span> Wasteland Rebel Glock-18 <span class="skins-market-list__skin-info-name--color--grey">|</span> Wasteland Rebel Glock-18 <span class="skins-market-list__skin-info-name--color--grey">|</span> Wasteland Rebe</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">7.53 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="skins-market-list__stickers-list">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                    </div>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market__skin-characteristic skins-market__skin-characteristic--color-pink">ST™</div>
                                        <div class="skins-market__skin-characteristic">FN</div>
                                        <div class="skins-market__skin-characteristic">0.0297</div>
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x4</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img" src="/images/skins/fiveSeven.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name skins-market-list__skin-info-name--color--yellow">Five-SeveN <span class="skins-market-list__skin-info-name--color--grey">|</span> Urban Hazard 12</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">2.00 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-24%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="skins-market-list__stickers-list">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker1.png">
                                        <img class="skins-market-list__sticker-img" src="/images/stickers/sticker2.png">
                                    </div>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>

                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x36</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/staffOfGun-Yu.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Staff of Gun-Yu</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.27 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x36</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/tauntFiendishSwag.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Taunt: Fiendish Swag!</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">0.36 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-30%</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1999</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/alpineStalkersScarf.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Alpine Stalker's Scarf</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">157.07 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>6ч</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/alpineStalkersPants.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Alpine Stalker's Pants</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">114.95 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                        <div class="skins-market-list__item">
                            <div class="skins-market-list__item-inner">
                                <div class="skins-market-list__skin-info">
                                    <div class="skins-market-list__skin-info-header">
                                        <div class="skins-market-list__skins-count">
                                            <svg class="skins-market-list__skins-count-icon"><use xlink:href="/images/sprite.svg#skins-count-icon"></use></svg>
                                            <div class="skins-market-list__skins-count-value">x1</div>
                                        </div>
                                    </div>
                                    <img class="skins-market-list__skin-img skins-market-list__skin-img--padding-top--xs" src="/images/skins/weaponOfTheArdalanInterdictor.png">
                                    <a class="skins-market-list__skin-info-bottom-content" href="#">
                                        <div class="skins-market-list__skin-info-name">Weapon of the Ardalan Interdictor</div>
                                        <div class="skins-market-list__skin-info-price-info">
                                            <div class="skins-market-list__skin-info-price">107.84 $</div>
                                            <div class="discount discount--font-size--xs discount--letter-spacing--s discount--padding--xs discount--margin-left--xs">-33%</div>
                                            <div class="skins-market-list__skin-info-hold">
                                                <svg class="skins-market-list__skin-info-hold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                                <span>5д</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="skins-market-list__item-buy-buttons">
                                    <button class="skins-market-list__item-to-cart-button">В корзину</button>
                                    <button class="skins-market-list__item-buy-button">Купить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="skins-market__pagination">
                        <a class="skins-market__pagination-link" href="#">1</a>
                        <a class="skins-market__pagination-link" href="#"><<</a>
                        <a class="skins-market__pagination-link" href="#">3</a>
                        <a class="skins-market__pagination-link" href="#">4</a>
                        <a class="skins-market__pagination-link" href="#">5</a>
                        <a class="skins-market__pagination-link skins-market__pagination-link--color--orange" href="#">6</a>
                        <a class="skins-market__pagination-link" href="#">7</a>
                        <a class="skins-market__pagination-link" href="#">8</a>
                        <a class="skins-market__pagination-link" href="#">9</a>
                        <a class="skins-market__pagination-link" href="#">>></a>
                        <a class="skins-market__pagination-link" href="#">101</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="seo-text-block seo-text-block--height--m seo-text-block--overflow--hidden seo-text-block--font-weight--400 seo-text-block--letter-spacing--s seo-text-block--line-height--m seo-text-block--margin-y--xs">
            <p class="seo-text-block__p-padding-y--s">
                Всем желающим купить скины CS GO стоит обязательно посетить торговую площадку Lis-Skins. У нас представлены тысячи годных товаров на любой вкус и запрос. В магазине ты найдешь только оригинальные предметы, которые можно приобрести здесь и сейчас.
            </p>
            <p class="seo-text-block__p-padding-y--s">
                Скины кс го по низким ценам, доступные стикеры, патчи, агенты и прочий скарб из популярного шутера удобно расположены по категориям. Воспользуйся системой фильтров, чтобы найти необходимый товар.
            </p>
            <h2 class="seo-text-block__p-padding-y--s seo-text-block--color--grey seo-text-block--text-transform--uppercase">
            С ПРИЦЕЛОМ НА КЛИЕНТА
            </h2>
            <p class="seo-text-block__p-padding-y--s">
                У тебя есть ненужные скины CS:GO из стим? Сдай их в магазин Lis-Skins.ru, чтобы обменять на уникальную винтовку M4A1-S, AWP или AK-47, о которой давно мечтал. Мы выкупаем предметы за реальные деньги, которые остаются на твоем личном счете. Можешь вывести на карту, или сразу же заполучить крутой пистолет или ножик. Никаких подводных камней и сложных схем — все предельно прозрачно.
            </p>
            <p class="seo-text-block__p-padding-y--s">
                Нашел дешевые скины в КС ГО на сторонних площадках? У нас они еще доступнее. Регулярные акции, бандлы и выгодные предложения постоянно прилетают на твой email, если подпишешься на наше рассылку.
            </p>
            <p class="seo-text-block__p-padding-y--s">
                Ассортимент постоянно пополняется. Всегда в наличии скины кс го по недорогим ценам, которые гораздо приятнее, чем в Steam. Покупка будет моментально переправлена в твой инвентарь нашим ботом.
            </p>
            <h2 class="seo-text-block__p-padding-y--s seo-text-block--color--grey seo-text-block--text-transform--uppercase">
                ВСЕ В ОДНОМ МЕСТЕ
            </h2>
            <p class="seo-text-block__p-padding-y--s">
                Привлекай своего друга, который до сих пор не знает, где можно купить скины кс го дешево, предварительно рассмотрев их во всех подробностях и прочитав описание. Мы скрупулезно относимся к качеству предоставляемых услуг по продаже и обмену товаров, и не можем позволить себе задержек при проведении сделок.
            </p>
            <p class="seo-text-block__p-padding-y--s">
                А хочешь заработать, сидя в удобном кресле? Зарегистрируйся на сайте Lis-Skins.ru, создай свою реферальную ссылку и отправь своим друзьям. Пусть они тоже знают где купить скины по низким ценам и с максимальной выгодой.
            </p>
            <p class="seo-text-block__p-padding-y--s">
                Больше знакомых — выше гонорар.
            </p>
            <p class="seo-text-block__p-padding-y--s">
                Мы работаем со всеми популярными платежными системами и показываем реальную стоимость предметов. Никаких скрытых комиссий и дополнительных отчислений — все прозрачно.
            </p>
            <p class="seo-text-block__p-padding-y--s">
                Хочешь купить скины CS GO — заходи на Lis-Skins.ru.
            </p>
        </div>
        <button class="collapse-button collapse-button__show collapse-button--margin-x--auto collapse-button--padding-bottom--s collapse-button--padding-top--s">Развернуть</button>
       <!-- popup-window--display--flex popup-window--opacity--1 для того, чтобы показать popup-window -->
        <div class="popup-window">
            <div class="cart cart__position-center">
                <div class="cart__inner cart__inner--padding--s">
                    <div class="cart__with-items cart__with-items--display--block">
                        <div class="cart__note cart__note--padding--s cart__note--margin--bottom--s">
                            Обмен с заблокированными (Trade Lock) скинами будет отправлен после его разблокировки. Необходимо принять обмен в течении 5 часов в дневное время, иначе обмен отменится и деньги вернуться вам на баланс. Дату и время разблокировки можно отследить в личном кабинете.
                        </div>
                        <div class="cart__skins-list">
                            <div class="cart__skins-list-item cart__skins-list-item--disabled cart__skins-list-item--padding--xs">
                                <img class="cart__skin-img cart__skin-img--margin-right--s" src="images/skins/fiveSeven.png">
                                <div class="cart__skin-info cart__skin-info--margin-right--s">
                                    <div class="cart__skin-name cart__skin-name--margin-bottom--xs">★ Navaja Knife | Doppler Sapphire</div>
                                    <div class="cart__skin-characteristics cart__skin-characteristics--margin-bottom--xs">
                                        <span class="skins-market__skin-characteristic skins-market__skin-characteristic--color-orange">ST™</span>
                                        <span class="skins-market__skin-characteristic">Прямо с завода</span>
                                        <span class="skins-market__skin-characteristic">0.0371</span>
                                    </div>
                                    <div class="cart__skin-unhold-date cart__skin-unhold-date--padding--xs">
                                        <svg class="cart__skin-unhold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                        <span class="cart__skin-unhold-text">20 часов до разблокировки</span>
                                    </div>
                                </div>
                                <div class="cart__skin-price">1 999 999.40 $</div>
                                <button class="cart__delete-skin-button">
                                    <svg class="cart__delete-skin-icon cart__delete-skin-icon--padding--s"><use xlink:href="/images/sprite.svg#cart-delete-icon"></use></svg>
                                </button>
                            </div>
                            <div class="cart__skins-list-item cart__skins-list-item--padding--xs">
                                <img class="cart__skin-img cart__skin-img--margin-right--s" src="images/skins/fiveSeven.png">
                                <div class="cart__skin-info">
                                    <div class="cart__skin-name cart__skin-name--margin-bottom--xs">Five-SeveN | Urban Hazard</div>
                                    <div class="cart__skin-characteristics cart__skin-characteristics--margin-bottom--xs">
                                        <span class="skins-market__skin-characteristic skins-market__skin-characteristic--color-white">ST™</span>
                                        <span class="skins-market__skin-characteristic">Прямо с завода</span>
                                        <span class="skins-market__skin-characteristic">0.0371</span>
                                    </div>
                                    <div class="cart__skin-unhold-date cart__skin-unhold-date--padding--xs">
                                        <svg class="cart__skin-unhold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                        <span class="cart__skin-unhold-text">24 часа до разблокировки</span>
                                    </div>
                                </div>
                                <div class="cart__skin-price">9.53 $</div>
                                <button class="cart__delete-skin-button">
                                    <svg class="cart__delete-skin-icon cart__delete-skin-icon--padding--s"><use xlink:href="/images/sprite.svg#cart-delete-icon"></use></svg>
                                </button>
                            </div>
                            <div class="cart__skins-list-item cart__skins-list-item--padding--xs">
                                <img class="cart__skin-img cart__skin-img--margin-right--s" src="images/skins/alpineStalkersPants.png">
                                <div class="cart__skin-info cart__skin-info--margin-right--s">
                                    <div class="cart__skin-name cart__skin-name--margin-bottom--xs">★ M9 Bayonet | Doppler Sapphire</div>
                                    <div class="cart__skin-characteristics cart__skin-characteristics--margin-bottom--xs">
                                        <span class="skins-market__skin-characteristic skins-market__skin-characteristic--color-pink">ST™</span>
                                        <span class="skins-market__skin-characteristic">Прямо с завода</span>
                                        <span class="skins-market__skin-characteristic">0.0371</span>
                                    </div>
                                </div>
                                <div class="cart__skin-price">1.33 $</div>
                                <button class="cart__delete-skin-button">
                                    <svg class="cart__delete-skin-icon cart__delete-skin-icon--padding--s"><use xlink:href="/images/sprite.svg#cart-delete-icon"></use></svg>
                                </button>
                            </div>
                            <div class="cart__skins-list-item cart__skins-list-item--padding--xs">
                                <img class="cart__skin-img cart__skin-img--margin-right--s" src="images/skins/alpineStalkersPants.png">
                                <div class="cart__skin-info cart__skin-info--margin-right--s">
                                    <div class="cart__skin-name cart__skin-name--margin-bottom--xs">Sticker | Natus Vincere (Holo) | Katowice 2015</div>
                                    <div class="cart__skin-unhold-date cart__skin-unhold-date--padding--xs">
                                        <svg class="cart__skin-unhold-icon"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                                        <span class="cart__skin-unhold-text">2 дня до разблокировки</span>
                                    </div>
                                </div>
                                <div class="cart__skin-price">37 987.33 $</div>
                                <button class="cart__delete-skin-button">
                                    <svg class="cart__delete-skin-icon cart__delete-skin-icon--padding--s"><use xlink:href="/images/sprite.svg#cart-delete-icon"></use></svg>
                                </button>
                            </div>
                        </div>
                        <div class="cart__info cart__info--margin--s">
                            <div class="cart__info-item">
                                <div class="cart__info-title">Всего предметов:</div>
                                <div class="cart__info-value cart__info-value--font-size--s">1</div>
                            </div>
                            <div class="cart__info-item">
                                <div class="cart__info-title">Сумма:</div>
                                <div class="cart__info-value cart__info-value--font-size--m cart__info-value--font-weight--m">7.53 $</div>
                            </div>
                        </div>
                        <div class="cart__buttons cart__buttons--margin-x--s">
                            <button class="primary-button primary-button--padding--s primary-button--height--xxs primary-button--font-size--s">Купить</button>
                            <button class="secondary-button secondary-button--font-size--s secondary-button--height--xxs secondary-button--border-color--orange secondary-button--color--white">Очистить корзину</button>
                        </div>
                    </div>
                    <div class="popup-close-button">
                        <svg class="popup-close-icon"><use xlink:href="/images/sprite.svg#popup-close-icon"></use></svg>
                    </div>
                </div>
            </div>
        </div>
<!--        Успешный платеж, если необходима ошибка то вместо popup-window__icon-success класс popup-window__icon-attention -->
        <div class="popup-window">
            <div class="popup-window__content popup-window__content--flex-direction--column popup-window__content--width--s popup-window__content--padding--m">
                <div class="popup-window__icon popup-window__icon-success popup-window__icon--margin-bottom--m"></div>
                <div class="popup-window__title popup-window__title--margin-bottom--s">Платеж успешно проведен</div>
                <div class="popup-window__description popup-window__description--margin-bottom--s">Скины успешно куплены. Перейдите в личный кабинет, чтобы получить купленные вещи.</div>
                <button class="primary-button primary-button--padding--s primary-button--font-size--s primary-button--height--s">Перейти в личный кабинет</button>
                <div class="popup-close-button">
                    <svg class="popup-close-icon"><use xlink:href="/images/sprite.svg#popup-close-icon"></use></svg>
                </div>
            </div>
        </div>
        <div class="popup-window">
            <div class="popup-window__content popup-window__content--flex-direction--column popup-window__content--width--s popup-window__content--padding--m">
                <div class="popup-window__icon popup-window__icon-attention popup-window__icon--margin-bottom--m"></div>
                <div class="popup-window__title popup-window__title--margin-bottom--s">Вставьте Trade URL</div>
                <div class="popup-window__description popup-window__description--margin-bottom--s">
                    <div class="popup-window__description--text--red">Ошибка</div>
                    Укажите вашу ссылку обмена. Узнать ее можно <a class="popup-window__link" href="#">здесь</a>.
                </div>
<!--                если trade-url верный добавляем класс input&#45;&#45;background-color&#45;&#45;green, неверный - input&#45;&#45;background-color&#45;&#45;red-->
                <input class="input input--height--s input--background-color--dark-1 input--padding-x--xs input--font-size--s input--width--100per input--margin-bottom--s" placeholder="https://steamcommunity.com/tradeoffer/new/?partner=....">
                <button class="primary-button primary-button--padding--s primary-button--font-size--s primary-button--height--s">Сохранить</button>
                <div class="popup-close-button">
                    <svg class="popup-close-icon"><use xlink:href="/images/sprite.svg#popup-close-icon"></use></svg>
                </div>
            </div>
        </div>
        <div class="popup-window">
            <div class="skin-preview skin-preview--position--relative skin-preview--background skin-preview--padding--s">
                <div class="skin-preview__left-block skin-preview__left-block--margin-right--l">
                    <div class="skin-preview__image-block skin-preview__image-block--padding--m skin-preview__image-block--margin-bottom--l">
                        <div class="skin-preview__unhold skin-preview__unhold--margin-bottom--s">
                            <svg class="skin-preview__unhold-icon skin-preview__unhold-icon--margin-right--xs"><use xlink:href="/images/sprite.svg#hold-icon"></use></svg>
                            <span class="skin-preview__unhold-text">20 часов до разблокировки</span>
                        </div>
                        <img class="skin-preview__skin-img skin-preview__skin-img--margin-bottom--s " src="images/skins/awp.png">
                        <div class="skin-preview__links">
                            <a class="skin-preview__links-item" href="#">
                                <span class="skin-preview__links-text skin-preview__links-text--margin-right--xs">Осмотреть в игре</span>
                                <svg class="skin-preview__links-icon"><use xlink:href="/images/sprite.svg#skin-links-icon"></use></svg>
                            </a>
                            <a class="skin-preview__links-item" href="#">
                                <span class="skin-preview__links-text skin-preview__links-text--margin-right--xs">Скриншот</span>
                                <svg class="skin-preview__links-icon"><use xlink:href="/images/sprite.svg#skin-links-icon"></use></svg>
                            </a>
                        </div>
                    </div>
                    <div class="skin-preview__price-block skin-preview__price-block--margin-bottom--l">
                        <div class="skin-preview__last-price skin-preview__last-price--margin-bottom--s">3.79 $</div>
                        <div class="skin-preview__price-block-bottom">
                            <div class="skin-preview__price skin-preview__price--margin-right--s">2.85 $</div>
                            <div class="discount discount--font-size--m discount--letter-spacing--m discount--padding--m discount--display--inline-block">-30%</div>
                        </div>
                    </div>
                    <div class="skin-preview__buttons-block">
                        <button class="primary-button primary-button--font-size--s primary-button--height--s">Купить</button>
                        <button class="secondary-button secondary-button--height--s secondary-button--border-color--orange secondary-button--color--white secondary-button--font-size--s">Добавить в корзину</button>
                    </div>
                </div>
                <div class="skin-preview__right-block skin-preview__right-block--width--500px">
                    <div class="skin-preview__two-columns-block skin-preview__two-columns-block--margin-bottom-s">
                        <div class="skin-preview__name-block skin-preview__name-block--margin-right--auto">
                            <div class="skin-preview__description skin-preview__description--font-weight--s skin-preview__description--font-size--s skin-preview__description--margin-bottom--s">После полевых испытаний</div>
                            <div class="skin-preview__title skin-preview__title--margin-bottom--s">AWP | Atheris</div>
                            <div class="skin-preview__description skin-preview__description--font-weight--m skin-preview__description--font-size--m">AWP | Древесная гадюка</div>
                        </div>
                    </div>
                    <div class="horizontal-stickers-list horizontal-stickers-list--justify-content--flex-end horizontal-stickers-list--margin-bottom--l">
                        <div class="horizontal-stickers-list__sticker">
                            <img class="horizontal-stickers-list__sticker-img horizontal-stickers-list__sticker-img--size--m" src="images/stickers/sticker2.png" />
                            <div class="horizontal-stickers-list__percent horizontal-stickers-list__percent--font-size--s">100%</div>
                        </div>
                        <div class="horizontal-stickers-list__sticker">
                            <img class="horizontal-stickers-list__sticker-img horizontal-stickers-list__sticker-img--size--m" src="images/stickers/sticker2.png" />
                            <div class="horizontal-stickers-list__percent horizontal-stickers-list__percent--font-size--s">100%</div>
                        </div>
                        <div class="horizontal-stickers-list__sticker">
                            <img class="horizontal-stickers-list__sticker-img horizontal-stickers-list__sticker-img--size--m" src="images/stickers/sticker2.png" />
                            <div class="horizontal-stickers-list__percent horizontal-stickers-list__percent--font-size--s">100%</div>
                        </div>
                        <div class="horizontal-stickers-list__sticker">
                            <img class="horizontal-stickers-list__sticker-img horizontal-stickers-list__sticker-img--size--m" src="images/stickers/sticker2.png" />
                            <div class="horizontal-stickers-list__percent horizontal-stickers-list__percent--font-size--s">100%</div>
                        </div>
                    </div>
                    <div class="skin-preview__characteristics skin-preview__characteristics--margin-right--s">
                        <div class="skin-preview__characteristics-text skin-preview__characteristics-text--color-grey skin-preview__characteristics-text--font-weight--m skin-preview__characteristics-text--margin-bottom--l">
                            Характеристики скина
                        </div>
                        <div class="skin-preview__float-line skin-preview__float-line--size--m">
                            <div class="skin-preview__blue-line skin-preview__blue-line--size--m skin-preview__float-line-item skin-preview__float-line-item--size--m"></div>
                            <div class="skin-preview__green-line skin-preview__green-line--size--m skin-preview__float-line-item skin-preview__float-line-item--size--m"></div>
                            <div class="skin-preview__yellow-line skin-preview__yellow-line--size--m skin-preview__float-line-item skin-preview__float-line-item--size--m"></div>
                            <div class="skin-preview__orange-line skin-preview__orange-line--size--m skin-preview__float-line-item skin-preview__float-line-item--size--m"></div>
                            <div class="skin-preview__red-line skin-preview__float-line-item skin-preview__float-line-item--size--m"></div>
                            <svg class="skin-preview__cursor skin-preview__cursor--size--m"><use xlink:href="/images/sprite.svg#skin-preview-cursor"></use></svg>
                        </div>
                        <div class="skin-preview__characteristics-list">
                            <div class="skin-preview__characteristics-item">
                                <div class="skin-preview__characteristics-text skin-preview__characteristics-text--color-grey skin-preview__characteristics-text--font-weight--s skin-preview__characteristics-text--margin-right--auto">
                                    Float
                                </div>
                                <div class="skin-preview__characteristics-text skin-preview__characteristics-text--color-white skin-preview__characteristics-text--font-weight--s">
                                    0.359382
                                </div>
                            </div>
                            <div class="skin-preview__characteristics-item">
                                <div class="skin-preview__characteristics-text skin-preview__characteristics-text--color-grey skin-preview__characteristics-text--font-weight--s skin-preview__characteristics-text--margin-right--auto">
                                    Тип
                                </div>
                                <div class="skin-preview__characteristics-text skin-preview__characteristics-text--color-white skin-preview__characteristics-text--font-weight--s">
                                    Снайперская винтовка
                                </div>
                            </div>
                            <div class="skin-preview__characteristics-item">
                                <div class="skin-preview__characteristics-text skin-preview__characteristics-text--color-grey skin-preview__characteristics-text--font-weight--s skin-preview__characteristics-text--margin-right--auto">
                                    Раритетность
                                </div>
                                <div class="skin-preview__characteristics-text skin-preview__characteristics-text--color-white skin-preview__characteristics-text--font-weight--s">
                                    Запрещённое
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup-close-button">
                    <svg class="popup-close-icon"><use xlink:href="/images/sprite.svg#popup-close-icon"></use></svg>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php";?>
</body>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- Slick -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- jquery-ui -->
<script src="plugins/jquery-ui/jquery-ui.js"></script>
<script src="script.js"></script>
</body>
</html>