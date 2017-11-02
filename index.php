<?php
$curPage = 1;
if(isset($_GET['id'])) {
    $curPage = (integer) $_GET["id"];
}
$menu_items = [
    ["text"=>'Главная',"link"=>'?id=1','id'=>1],
    ["text"=>'Автотопливозаправщики',"link"=>'?id=2','id'=>2],
    ["text"=>'Вакуумные автоцистерны',"link"=>'?id=3','id'=>3],
    ["text"=>'АКН',"link"=>'?id=4','id'=>4],
    ["text"=>'Емкости и РГС',"link"=>'?id=5','id'=>5],
    ["text"=>'Контакты',"link"=>'?id=6','id'=>6],
];
$full_text = [
    'АВТОЦИСТЕРНЫ И ЕМКОСТИ (РГС)',
    'АВТОТОПЛИВОЗАПРАВЩИКИ',
    'ВАКУУМНЫЕ АВТОЦИСТЕРНЫ',
    'АКН',
    'ЕМКОСТИ И РГС<br>подземные/наземные',
];
if($curPage > sizeof($menu_items)) {
    $curPage = 1;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Нефтемаш</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1200, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" href="img/logo.png">
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<header>
    <div id="headerWrapper">
        <div class="content" id="header">
            <div id="headerGrid">
                <div>
                    <img src="img/logo.png" alt="">
                    <h2><b>Изготовление емкостного оборудования</b><br>ООО «Нефтемаш»</h2>
                </div>
                <div>
                    <h2 style="font-size: 17px">Расчет заказа за 3 часа<br>Быстрая доставка по всей России</h2>
                </div>
                <div>
                    <h2><span id="number">8 (800) 200-40-80</span><br><a class="email-link" href="mailto:zakaz@metiz-mk.ru">zakaz@metiz-mk.ru</a></h2>
                </div>
            </div>
        </div>
    </div>
    <div id="menuWrapper">
        <div class="content" id="menu">
            <?php foreach($menu_items as $item):?>
                <a href="<?=$item['link'] ?>"><div class="item<?= $item['id'] == $curPage ? " active": "" ?>"><?=$item['text'] ?></div></a>
            <?php endforeach; ?>
        </div>
    </div>
</header>
<?php if($curPage != 6):?>
<div id="mainBlockWrapper" <?= $curPage != 1? "style='background-image: url(img/bg$curPage.jpg);'":"" ?>>
    <h1 class="title"><?= $full_text[$curPage-1]; ?></h1>
    <div class="content" id="mainBlock">

        <div id="mainGrid">
            <div id="advantages">
                <ul>
                    <li><img src="img/icontime.png"> Изготовление от 3-х дней</li>
                    <li><img src="img/icondelevery.png"> Быстрая доставка по всей России</li>
                    <li><img src="img/iconmoney.png"> Напрямую с завода без наценок</li>
                </ul>
            </div>
            <div>
                <div id="applicationForm">
                    <h2>Бесплатный расчёт стоимости за 3 часа</h2>
                    <input type="text" placeholder="Ваше имя"><br>
                    <input type="text" placeholder="Ваше телефон"><br>
                    <input type="text" placeholder="Ваше e-mail"><br>
                    <textarea rows="5" placeholder="Напишите здесь ваш заказ"></textarea><br>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; grid-gap: 10px; margin-bottom: 15px;">
                        <button>Прикрепить заявку</button>
                        <button>Прикрепить реквизиты</button>
                    </div>
                    <button>Отправить</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="partnersBlockWrapper">
    <h1>Наши партнёры</h1>
    <div class="content" id="partnersBlock">
        <div class="img-block"><img src="img/1logo.jpg" alt="partner"></div>
        <div class="img-block"><img src="img/2logo.png" alt="partner"></div>
        <div class="img-block"><img src="img/3logo.png" alt="partner"></div>
        <div class="img-block"><img src="img/4logo.png" alt="partner"></div>
        <div class="img-block"><img src="img/5logo.png" alt="partner"></div>
        <div class="img-block"><img src="img/6logo.png" alt="partner"></div>
        <div class="img-block"><img src="img/7logo.png" alt="partner"></div>
    </div>
</div>
<?php if($curPage == 1): ?>
<div id="ourProductionWrapper">
    <h1>Каталог продукции</h1>
    <div class="content" id="ourProductionGrid">
        <div>
            <img src="img/2production.jpg" alt="aa">
            <p>Автотопливозаправщики <br>(АТЗ)  и бензовозы</p>
            <a href="docs/2doc.pdf"><button>Скачать характеристики</button></a>
        </div>
        <div>
            <img src="img/3production.jpg" alt="aa">
            <p>Вакуумные и<br> илососные машины</p>
            <a href="docs/3doc.pdf"><button>Скачать характеристики</button></a>
        </div>
        <div>
            <img src="img/4production.jpg" alt="aa">
            <p>АКН - агрегат для сбора <br> конденсата нефти</p>
            <a href="docs/4doc.pdf"><button>Скачать характеристики</button></a>
        </div>
        <div>
            <img src="img/5production.jpg" alt="aa">
            <p>Ёмкости (РГС) <br>    подземные и наземные</p>
            <a href="docs/5doc.pdf"><button>Скачать характеристики</button></a>
        </div>

    </div>
</div>
<?php endif; ?>
<div id="shippedProductionWrapper">
    <div id="shippedProduction">
        <h1>Отгруженая продукция</h1>
        <div id="shippedSlider">
            <div class="arrow left-arrow"><i class="fa fa-arrow-circle-o-left fa-4x"></i></div>
            <div id="slides">
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Машина вакуумная МВ-12</h2>
                        <p>Люк зачистки на заднем днище</p>
                        <p>отгружен в г. Туймазы</p>
                        <p>Насос PNR-124</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>АТЗ-7</h2>
                        <p>Автотопливозаправщик АТЗ-7</p>
                        <p>монтаж на шасси: КАМАЗ 6460</p>
                        <p>г. Самара.</p>
                        <p>ООО "СТК-Групп"</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Мерный бак для Цементировочного агрегата ЦА-320</h2>
                        <p>Мерный бак для Цементировочного агрегата ЦА-320</p>
                        <p>06.10.17</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Машина вакуумная-7,5</h2>
                        <p>МВ-7,5</p>
                        <p>г.  Альметьевск</p>
                        <p>для ООО "Булгарнефть"</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>АЦ-10</h2>
                        <p>16.08.17</p>
                        <p>Для перевозки светлых нефтепродуктов</p>
                        <p>на базе КАМАЗ 43118</p>
                        <p>г.  Лениногорск</p>
                        <p>Лениногорское УТТ</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>АЦН-10 для перевозки нефтепродуктов</h2>
                        <p>11.08.17</p>
                        <p>АЦН-10  кол-во 3 шт.</p>
                        <p>ADR (ДОПОГ)</p>
                        <p>СВН-80</p>
                        <p>г.   Альметьевск</p>
                        <p>ПАО "Татнефть"</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>АЦН-8 для перевозки светлых нефтепродуктов</h2>
                        <p>28.11.17</p>
                        <p>АЦН-8</p>
                        <p>По ADR (ДОПОГ)</p>
                        <p>насос СЦЛ-01А</p>
                        <p>5 шт.</p>
                        <p>г.   Альметьевск</p>
                        <p>ПАО "Татнефть"</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Автотопливозаправщик — АТЗ-10</h2>
                        <p>на базе Камаз 43118-3027-46</p>
                        <p>УВТ, насос, пистолет</p>
                        <p>12.06.17</p>
                        <p>Набережные Челны</p>
                        <p>ООО "Мегатрон"</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Автоцистерна вакуумная МВ-10</h2>
                        <p>Насос КО-505А</p>
                        <p>На базе Шасси 4310</p>
                        <p>Республика Башкортостан, г.   Нефтекамск</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Машина Вакуумная МВ-10-ОД</h2>
                        <p>Ассенизатор на шасси КАМАЗ</p>
                        <p>Насос КО-505А</p>
                        <p>Механическое открывание дна</p>
                        <p>г. Самара</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Автоцистерна Вакуумная МВ-12</h2>
                        <p>Объем 12 м3</p>
                        <p>Насос КО-510</p>
                        <p>На шасси КАМАЗ 43118-3027-46</p>
                        <p>ООО АРЗ "Кориб"</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Контейнер для Автомобильного Вакуумного Погрузчика (АВП)</h2>
                        <p>Контейнер для Автомобильного Вакуумного Погрузчика (АВП)</p>
                        <p>отгрузка 29.05.17</p>
                        <p>На шасси КАМАЗ 43118-3027-46</p>
                        <p>ООО АРЗ "Кориб"</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Агрегат для сбора Конденсата Нефти</h2>
                        <p>Автоцистерна вакуумная нефтепромысловая</p>
                        <p>АКН-10</p>
                        <p>10.05.17</p>
                        <p>Республика Татарстан г.  Альметьевск</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Автоцистерна Вакуумная МВ-10</h2>
                        <p>Машина Вакуумная объем цистерны 8 м3</p>
                        <p>Насос КО-505А</p>
                        <p>МВ-8</p>
                        <p>04.05.17</p>
                        <p>Республика Удмуртия, г.  Ижевск</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Автоцистерна Вакуумная МВ-10ОД</h2>
                        <p>На Шасси КАМАЗ</p>
                        <p>Насос КО-505А</p>
                        <p>МВ-8</p>
                        <p>04.05.17</p>
                        <p>Республика Удмуртия, г.  Ижевск</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Автоцистерна Вакуумная МВ-10</h2>
                        <p>МВ-10</p>
                        <p>Насос КО-505А</p>
                        <p>На шасси 43114-1025-15</p>
                        <p>14.04.17</p>
                        <p>Республика Казахстан, г. Уральск</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Автотопливозаправщик АТЗ-15</h2>
                        <p>Насос СВН-80</p>
                        <p>Счетчик ППО 25</p>
                        <p>Пистолет РКТ-20</p>
                        <p>Фильтр ФЖУ 25</p>
                        <p>27.03.17</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Автоцистерна Нефтепромысловая АЦН-8</h2>
                        <p>Насос СЦЛ-00</p>
                        <p>Доработка по ДОПОГ</p>
                        <p>отгрузка 16.02.17</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Автоцистерна АЦ-8</h2>
                        <p>Для перевозки светлых нефтепродуктов</p>
                        <p>Доработка по ДОПОГ</p>
                        <p>отгрузка 10.11.16</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Полуприцеп Цистерна ППЦ-30</h2>
                        <p>Полуприцеп Цистерна объем 30 м3</p>
                        <p>ППЦ-30</p>
                        <p>УВТ, фильтр ФЖУ 25</p>
                        <p>Счетчик ППО 25</p>
                        <p>Оренбургская Область, г.  Бугуруслан</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Автотопливозаправщик — АТЗ-10</h2>
                        <p>вместимость 10 м3</p>
                        <p>Насос СВН-80</p>
                        <p>Счетчик ППО 25</p>
                        <p>Пистолет РКТ-20</p>
                        <p>Фильтр ФЖУ 25</p>
                        <p>04.05.17</p>
                        <p>Республика Татарстан г.  Казань.</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img"></div>
                    <div class="slide-content">
                        <h2>Автоцистерна Нефтепромысловая  АЦН-8</h2>
                        <p>Автоцистерна Нефтепромысловая </p>
                        <p>АЦН-8 м3</p>
                        <p>На базе КАМАЗ 43114</p>
                        <p>Насос СЦЛ-00</p>
                        <p>Доработка по ДОПОГ</p>
                        <p>(Дорожная перевозка опасных грузов)</p>
                    </div>
                </div>
            </div>
            <div class="arrow right-arrow"><i class="fa fa-arrow-circle-o-right  fa-4x"></i></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
    <?php if($curPage != 1):?>
<div id="buttonWallpaper">
    <div class="content" id="buttonContent">
        <a href="<?= "docs/".$curPage."doc.pdf" ?>"><button>
            Скачать характеристики
        </button></a>
    </div>
</div>
    <?php endif;?>
<div id="mountOptionsWrapper">
    <div class="content" id="mountOptions">
        <h1>Варианты монтажа</h1>
        <div id="optionsGrid">
            <div>
                <img src="img/option1.jpg" alt="">
                <h2>Монтаж на шасси<br>вашей техники</h2>
                <p>Вы привозите свою технику и оставляете на нашей базе. В течение 1-2 дней мы установим цистерну и оборудование.</p>
            </div>
            <div>
                <img src="img/option2.jpg" alt="">
                <h2>Доставка<br>продукции</h2>
                <p>Мы организуем доставку цистерны и оборудования до вашего предприятия.</p>
            </div>
            <div>
                <img src="img/option3.jpg" alt="">
                <h2>Покупка техники<br>"КАМАЗ" и монтаж</h2>
                <p>Мы находимся недалеко от завода «КАМАЗ». По вашему поручению мы готовы поставить готовый автомобиль с выбранной Вами надстройкой.</p>
            </div>
        </div>
    </div>
</div>
<div id="productionGalleryWrapper">
    <h1>Наше производство</h1>
    <div class="content" id="advantagesContent">
        <div class="adv-block clear">
            <img src="img/adv1.png">
            <p>Площадь завода – 3 500 м2. Есть открытый и закрытый склад. В штате работает более 50 человек.</p>
        </div>
        <div class="adv-block clear">
            <img src="img/adv2.png">
            <p>Производим более 20 емкостей в месяц. За 2016-ый год произвели более 300 емкостей.</p>
        </div>
        <div class="adv-block clear">
            <img src="img/adv3.png">
            <p>Продукция проходит испытания ОТК и лабораторные испытания, что подтверждено паспортом изделия и сертификатами на металл.</p>
        </div>
    </div>
    <div class="clear"></div>

    <div class="content" id="productionGalleryGrid">
        <div><img src="img/gallery1.JPG" alt=""></div>
        <div><img src="img/gallery2.JPG" alt=""></div>
        <div><img src="img/gallery3.JPG" alt=""></div>
        <div><img src="img/gallery4.JPG" alt=""></div>
        <div><img src="img/gallery5.JPG" alt=""></div>
        <div><img src="img/gallery6.JPG" alt=""></div>
        <div><img src="img/gallery7.JPG" alt=""></div>
        <div><img src="img/gallery8.JPG" alt=""></div>
        <div><img src="img/gallery9.JPG" alt=""></div>
        <div><img src="img/gallery10.JPG" alt=""></div>
        <div><img src="img/gallery11.JPG" alt=""></div>
        <div><img src="img/gallery12.JPG" alt=""></div>
        <div><img src="img/gallery13.JPG" alt=""></div>
        <div><img src="img/gallery14.JPG" alt=""></div>
        <div><img src="img/gallery15.JPG" alt=""></div>
        <div><img src="img/gallery16.JPG" alt=""></div>
    </div>
</div>
<div id="deadlinesWrapper">
    <h1>СРОКИ РАБОТЫ</h1>
    <h2 style="color:rgb(231, 76, 60); ">Средний срок производства партии:</h2>

    <h2>10-15 дней против 20–30 у большинства производителей</h2>
</div>
<div id="ourCertificatesWrapper">
    <h1>Наши сертификаты</h1>
    <div class="content" id="ourCertificates">
        <div><img src="img/cert1.jpg" alt=""></div>
        <div><img src="img/cert2.jpg" alt=""></div>
        <div><img src="img/cert3.jpg" alt=""></div>
    </div>
</div>
<div id="reviewsWrapper">
    <h1>Отзывы клиентов</h1>
    <div class='content' id="reviewsGrid">
        <div><img src="img/1review.jpg" alt=""></div>
        <div><img src="img/2review.jpg" alt=""></div>
        <div><img src="img/3review.jpg" alt=""></div>
        <div><img src="img/4review.jpg" alt=""></div>
        <div><img src="img/5review.jpg" alt=""></div>
        <div><img src="img/6review.jpg" alt=""></div>

    </div>
</div>
<div id="formWrapper">
    <h1><span style="color: rgb(231, 76, 60);">Нужна консультация?</span> Свяжитесь со специалистом!</h1>
    <h2>Бесплатная линия для звонков из России: 8 (800) 500-23-37</h2>
    <div class="content" id="formContent">
        <form>
            <input type="text" placeholder="Ваше имя">
            <input type="number" placeholder="Телефон">
            <button><i class="fa fa-phone"></i> Заказать звонок</button>
        </form>
    </div>
</div>
<?php else: ?>
    <div class="content" id="contactsBlock">
        <div>
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=w4szqFdwqSgD-Mrfe1K-5_Z6KEeAI-iu&amp;width=718&amp;height=457&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
        </div>
        <div>
            <h2>ООО «Нефтемаш»</h2>

            <p id="adress">Республика Татарстан, г. Альметьевск, ул. Объездная, д.5</p>
            <p id="number">
            8 (800) 200-40-80<br>
            факс: 8 (8553) 44-03-27
            </p>
            <p id="linkToMail"><a href="mailto:sale@metiz-mk.ru">sale@metiz-mk.ru</a></p>
        </div>
    </div>
<?php endif; ?>
<footer>
    <div id="footerWrapper">
        <div class="content" id="footer">
            <div id="footerGrid">
                <div>
                    <img src="img/logo.png" alt="">
                    <h2>ООО «Нефтемаш»<br>Изготовление емкостного оборудования</h2>
                </div>
                <div>
                    <h2>Расчет заказа за 50 минут<br>Быстрая доставка по всей России</h2>
                </div>
                <div>
                    <h2><span id="footerNumber">8 (800) 200-40-80</span><br><a class="email-link" href="mailto:zakaz@metiz-mk.ru">zakaz@metiz-mk.ru</a></h2>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>



