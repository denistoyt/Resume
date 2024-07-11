<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <meta content="notranslate" name="google">
    <!--Start of Social Graph Protocol Meta Data--><meta property="og:locale" content="ru-Ru">
<meta property="og:type" content="website">
<meta property="og:title" content="">
<meta property="og:description" content="">
    <!--End of Social Graph Protocol Meta Data-->
    <!--favicon--><link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <title>ТПК Эрудит</title>
    <link rel="stylesheet" href="css/libs.min.css?v10">
    <link rel="stylesheet" href="wow/animate.css">
    <link rel="stylesheet" href="css/style.min.css?v1102">
  </head>
  <?php
    $IP = $_SERVER['REMOTE_ADDR'];
    $json= @file_get_contents('http://api.sypexgeo.net/json/'.$IP);
    $city = json_decode($json, true);
    $city = $city['city']['name_ru'];
  ?>
  <body><a class="download_link" href="#" download id="download" hidden></a>
    <div class="wrapper">
      <div class="header">
        <div class="container">
          <div class="header__wrapper wow fadeInDown"><a class="header__logo" href="index.php"><img src="img/logo.png" alt="Logo"></a>
            <p>Комплексное снабжение школ и детских садов по всей России</p>
            <div class="header__contacts"><a class="header__phone" href="tel: +7 (343) 300 93 04">+7 (343) 300 93 04</a><span class="header__status">Сейчас работаем</span><a class="header__callback" href="#" data-modal="callback">Позвонить вам?</a></div>
          </div>
        </div>
      </div>
      <main>
        <section class="hero" style="background-image:url(img/hero_bg.png)">
          <div class="container">
            <h1 class="wow fadeInDown">Оснащаем образовательные учреждения всем необходимым</h1>
            <h2 class="wow fadeInDown" data-wow-delay="0.2s"><span>с доставкой по России</span></h2>
            <div class="hero__info wow fadeInDown" data-wow-delay="0.4s"><span class="arrow-left">Более 9 000 наименований:</span>
              <p>от предметных кабинетов и спортзала до пищеблока и пришкольного участка</p>
            </div>
            <div class="hero__cta wow fadeInDown" data-wow-delay="0.6s"><img src="img/hero_cta_catalog.png" alt=""><a class="btn" href="#" data-modal="catalog-modal"> <span>Получить полный каталог</span></a>
              <p>Получите полный каталог по всем направлениям или <a class="scroll-to" href="#" data-to=".get">прикрепите готовый перечень оборудования</a></p>
            </div>
          </div>
        </section>
        <section class="get"><img class="wow fadeInLeft" src="img/get_decor.png" alt="decor">
          <div class="container"><a class="file_upload wow fadeInLeft" href="#" data-wow-delay="0.2s"> <img src="img/file_bg.svg" alt="">
              <p class="wow fadeInLeft" data-wow-delay="0.5s"><img src="img/pdf_ico.png" alt=""><span>PDF </span><span>(2.1 Mb)</span></p></a>
            <form class="get__form wow fadeInRight" enctype="multipart/form-data" data-wow-delay="0.2s"><img class="get__bg_mobile" src="img/get_bg_mobile.png" alt=""><input hidden id="file" name="file"/>
<input hidden name="file_size"/>
<input hidden name="file_name"/>
<input hidden name="file_upload" value="true"/>
              <input type="file" name="test_file" style="display: none;">
              <input type="hidden" name="send_name" value="Форма 'Получить каталог и рассчитать стоимость'">
              <div class="get__form-bg"><img src="img/form_bg.png" alt=""></div>
              <div class="get__form-inner">
                <div class="get__form-header">
                  <h2>Получите полный каталог <span>по всем категориям продукции</span></h2>
                </div>
                <div class="get__form-cta"><img src="img/form_calc_icon.png" alt="">
                  <p>+ Рассчитаем стоимость <br>оборудования по вашему перечню</p>
                </div>
                <input class="default-input" type="text" name="phone" placeholder="Номер телефона">
                <input class="default-input" type="email" name="email" placeholder="Электронная почта"><div class="dropzone dropzone-file-area" id="fileUpload">
<div class="dz-default dz-message">
<p>Прикрепить документы</p><img src="img/paper-clip-outline.png" alt=""></div>
</div>
                <button class="btn" type="submit" disabled><span> <b>Получить каталог </b>и рассчитать стоимость</span></button>
                <p class="get__acception">Нажимая на кнопку, вы соглашаетесь с <a href="#" data-modal="policy">условиями обработки информации</a></p>
              </div>
            </form>
          </div>
        </section>
        <section class="expert">
          <div class="container"><img class="expert__bg wow fadeIn" src="img/expert_bg.jpg" alt=""><img class="expert__decor wow fadeInLeft" src="img/expert_decor.png" alt="" data-wow-delay="0.2s">
            <div class="expert__wrapper wow fadeInDown" data-wow-delay="0.4s">
              <h2 class="expert__header">Эксперты по оснащению <span>школ и детских садов</span></h2>
              <div class="expert__about"><span class="arrow-left">Вам нужно только утвердить перечень, 
                  <p>всем остальным занимаемся мы</p></span></div>
              <div class="expert__info"><span>Евгений</span><span>Специалист по работе с клиентами</span></div>
            </div>
          </div>
        </section>
        <div class="catalog">
          <div class="container">
            <div class="catalog__info">
              <h2 class="wow fadeInDown">Каталоги ТПК «Эрудит»</h2>
              <div class="catalog__text-info wow fadeInDown" data-wow-delay="0.2s">
                <div class="hover_info">
                  <div class="hover_info__icon"><i><img src="img/info_icon.png" alt=""></i></div>
                </div>
                <p>Вся продукция сертифицирована и соответствует государственным стандартам</p>
              </div>
            </div>
            <div class="catalog__tabs wow fadeInDown" data-wow-delay="0.4s">
              <ul>
                <li><a href="#tab_1">Помещения</a></li>
                <li><a href="#tab_2">Направления</a></li>
              </ul>
              <div class="catalog__tab" id="tab_1">
                <div class="catalog__grid">
                  <div class="catalog__grid-item">
                    <div class="catalog__item" data-name="1. Физика каталог ТПК Эрудит.pdf">
                      <div class="catalog__item-hover">
                        <p>Демонстрационное и лабораторное оборудование, специализированная мебель, наглядности, интерактивное оборудование</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Физика</span>
                      </div><img src="img/class_1.png" alt=""><span>Физика</span>
                    </div>
                    <div class="catalog__item" data-name="2. Химия каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Демонстрационное и лабораторное оборудование, реагенты, модели и макеты, специализированная мебель, наглядности, интерактивное оборудование</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Химия</span>
                      </div><img src="img/class_2.png" alt=""><span>Химия</span>
                    </div>
                    <div class="catalog__item" data-name="3. ОБЖ каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средства, демонстрационное оборудование и приборы, модели и тренажеры, методические пособия</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">ОБЖ</span>
                      </div><img src="img/class_3.png" alt=""><span>ОБЖ</span>
                    </div>
                    <div class="catalog__item" data-name="4. Биология каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средства, демонстрационное и лабораторное оборудование, методические пособия</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Биология</span>
                      </div><img src="img/class_4.png" alt=""><span>Биология</span>
                    </div>
                    <div class="catalog__item" data-name="5. Столовая и пищеблок каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Нейтральное, тепловое, холодильное, электромеханическое, посудомоечное оборудование, посуда, обеденные зоны</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Столовая и пищеблок</span>
                      </div><img src="img/class_5.png" alt=""><span>Столовая и пищеблок</span>
                    </div>
                    <div class="catalog__item" data-name="6. Спортивный комплекс каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Всё для игровых видов спорта, ОФП, зимние виды спорта, мебель для раздевалок, спортивная форма</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Спортивный комплекс</span>
                      </div><img src="img/class_6.png" alt=""><span>Спортивный<br>комплекс</span>
                    </div>
                    <div class="catalog__item" data-name="7. Технология мальчики каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средства, всё для слесароного и столярного дела, 3D-оборудование, робототехника</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Технология мальчики</span>
                      </div><img src="img/class_7.png" alt=""><span>Технология мальчики</span>
                    </div>
                    <div class="catalog__item" data-name="8. Технология девочки каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средства, Всё для кройки и шитья, всё для кулинарии,  3D-оборудование, робототехника</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Технология девочки</span>
                      </div><img src="img/class_8.png" alt=""><span>Технология девочки</span>
                    </div>
                  </div>
                  <div class="catalog__grid-item">
                    <div class="catalog__item" data-name="9. Пришкольный участок каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Площадки для Workout, уличные тренажеры, полоса препятствий, игровые площадки, благоустройство территории</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Пришкольный участок</span>
                      </div><img src="img/class_9.png" alt=""><span>Пришкольный участок</span>
                    </div>
                    <div class="catalog__item" data-name="10. Актовый зал каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Звуковое, световое и мультимедийное оборудование, кресла, музыкальные инструменты</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Актовый зал</span>
                      </div><img src="img/class_10.png" alt=""><span>Актовый зал</span>
                    </div>
                    <div class="catalog__item" data-name="11. Медицинский кабинет каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средства, медицинские инструменты, диагностическое оборудование, дезинфекция, медосмотр.</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Медицинский комплекс</span>
                      </div><img src="img/class_11.png" alt=""><span>Медицинский кабинет</span>
                    </div>
                    <div class="catalog__item" data-name="12. Лингафонный кабинет каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средства, програмное обеспечение</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Лингафонный кабинет</span>
                      </div><img src="img/class_12.png" alt=""><span>Лингафонный<br>кабинет</span>
                    </div>
                    <div class="catalog__item" data-name="13. Кабинет психолога каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средства, методические материалы, диагностика, развивающие игры</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Кабинет психолога</span>
                      </div><img src="img/class_13.png" alt=""><span>Кабинет психолога</span>
                    </div>
                    <div class="catalog__item" data-name="14. Кабинет логопеда каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средства, методические материалы, диагностика, коррекция</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Кабинет логопеда</span>
                      </div><img src="img/class_14.png" alt=""><span>Кабинет логопеда</span>
                    </div>
                    <div class="catalog__item" data-name="15. Сенсорная комната каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мягкие модули, тактильные наборы, фиброоптические изделия, ароматерапия, песочная терапия, световое и звуковое оборудование</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Сенсорная комната</span>
                      </div><img src="img/class_15.png" alt=""><span>Сенсорная комната</span>
                    </div>
                    <div class="catalog__item" data-name="16. Компьютерный кабинет каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средсва обучения, нагляднсть</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Компьютерный кабинет</span>
                      </div><img src="img/class_16.png" alt=""><span>Компьютерный<br>кабинет</span>
                    </div>
                  </div>
                  <div class="catalog__grid-item">
                    <div class="catalog__item" data-name="17. Иностранный язык каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средсва, наглядности, методические пособия</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Иностранный язык</span>
                      </div><img src="img/class_17.png" alt=""><span>Иностранный язык</span>
                    </div>
                    <div class="catalog__item" data-name="18. Кабинет музыки каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>: Мебель, технические средсва, музыкальные инструменты, методические пособия</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Кабинет музыки</span>
                      </div><img src="img/class_18.png" alt=""><span>Кабинет музыки</span>
                    </div>
                    <div class="catalog__item" data-name="19. Информатика каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средсва обучения, нагляднсть</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Информатика</span>
                      </div><img src="img/class_19.png" alt=""><span>Информатика</span>
                    </div>
                    <div class="catalog__item" data-name="20. Математика каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средсва обучения, демонстрационное оборудование и приборы, методические пособия</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Математика</span>
                      </div><img src="img/class_20.png" alt=""><span>Математика</span>
                    </div>
                    <div class="catalog__item" data-name="21. История и обществознание каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средсва обучения, наглядности, электронные средства обучения</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">История и обществознание</span>
                      </div><img src="img/class_21.png" alt=""><span>История<br>и обществознание</span>
                    </div>
                    <div class="catalog__item" data-name="22. Русский язык и литература каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средсва обучения, наглядности, электронные средства обучения</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Русский язык и литература</span>
                      </div><img src="img/class_22.png" alt=""><span>Русский язык<br>и литература</span>
                    </div>
                    <div class="catalog__item" data-name="23. География каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средсва обучения, демонстрационное оборудование и приборы, методические пособия</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">География</span>
                      </div><img src="img/class_23.png" alt=""><span>География</span>
                    </div>
                    <div class="catalog__item" data-name="24. ИЗО каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средсва обучения, демонстрационное оборудование и приборы, методические пособия</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">ИЗО</span>
                      </div><img src="img/class_24.png" alt=""><span>ИЗО</span>
                    </div>
                  </div>
                  <div class="catalog__grid-item">
                    <div class="catalog__item" data-name="25_Начальная_школа_каталог_ТПК_Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель, технические средсва обучения, методические пособия, наглядности</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Начальная школа</span>
                      </div><img src="img/class_25.png" alt=""><span>Начальная школа</span>
                    </div>
                    <div class="catalog__item" data-name="26. Библиотека каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Мебель и системы хранения,, технические средсва, печатная продукция</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Библиотека</span>
                      </div><img src="img/class_26.png" alt=""><span>Библиотека</span>
                    </div>
                    <div class="catalog__item" data-name="27. Серверная  каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Оборудование для серверной</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Серверная</span>
                      </div><img src="img/class_27.png" alt=""><span>Серверная</span>
                    </div>
                    <div class="catalog__item" data-name="28. Внеурочная деятельность каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Студия дизайна, издательский центр, школьная телестудия, шахматный кружок, стрелковая секция, робототехника, 3D-оборудование</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Внеурочная деятельность</span>
                      </div><img src="img/class_28.png" alt=""><span>Внеурочная<br>деятельность</span>
                    </div>
                    <div class="catalog__item" data-name="29. Входная зона и гардероб каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Модульная мебель, интерактивные панели и стойки, банкетки, гардеробные системы</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Входная зона, гардероб</span>
                      </div><img src="img/class_29.png" alt=""><span>Входная зона<br>и гардероб</span>
                    </div>
                    <div class="catalog__item" data-name="30. Коридоры и рекреации каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Модульная мебель, интерактивные панели и стойки, банкетки, шахматные зоны</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Коридоры и рекреации</span>
                      </div><img src="img/class_30.png" alt=""><span>Коридоры<br>и рекреации</span>
                    </div>
                    <div class="catalog__item" data-name="31. Музей каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Демонстрационная мебель, мебель для коворкинга, интерактивные панели, столы и стойки, технические средства</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Школьный музей</span>
                      </div><img src="img/class_31.png" alt=""><span>Музей</span>
                    </div>
                    <div class="catalog__item" data-name="32. Административные кабинеты каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Офисная мебель, технические средства</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Кабинет руководителя</span>
                      </div><img src="img/class_32.png" alt=""><span>Административные<br>кабинеты</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="catalog__tab" id="tab_2">
                <div class="catalog__grid">
                  <div class="catalog__grid-item">
                    <div class="catalog__item" data-name="1. Мебель каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Доски аудиторные, парты и стулья, шкафы и стеллажи, специализированная мебель, обеденные зоны, банкетки, гардероб</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Школьная мебель</span>
                      </div><img src="img/direction_1.png" alt=""><span>Мебель</span>
                    </div>
                    <div class="catalog__item" data-name="2. ТСО каталог ТПК Эрудит.pdf">
                      <div class="catalog__item-hover">
                        <p>Компьютеры, интерактивные доски и панели, проекторы, документ камеры, принтеры</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Технические средства обучения</span>
                      </div><img src="img/direction_2.png" alt=""><span>Технические средства обучения</span>
                    </div>
                    <div class="catalog__item" data-name="3. Робототехника каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Lego, Амперка, Tetrix</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Робототехника</span>
                      </div><img src="img/direction_3.png" alt=""><span>Роботехника</span>
                    </div>
                    <div class="catalog__item" data-name="4. Доступная среда каталог ТПК Эрудит">
                      <div class="catalog__item-hover">
                        <p>Таблички Брайля, пандусы, поручни, мебель для инвалидов, противоскользящие ленты и покрытия</p><a class="btn" href="#" data-modal="catalog-modal"> <span>Скачать каталог</span></a><span class="catalog__item-name">Доступная среда</span>
                      </div><img src="img/direction_4.png" alt=""><span>Доступная среда</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="catalog-download wow fadeInDown">
          <div class="container"><img class="catalog-download__arrow" src="img/catalog_download_arrow.png" alt=""><img class="catalog-download__decor wow fadeIn" src="img/catalog_download_decor.png" alt="" data-wow-delay="0.2s">
            <h2 class="wow fadeInLeft" data-wow-delay="0.4s">Скачайте специальный <span>каталог детского сада</span></h2><a class="btn wow fadeInDown" href="#" data-modal="catalog-modal" data-wow-delay="0.4s"> <span>Скачать каталог</span></a><a class="file_upload wow fadeInRight" href="#" data-wow-delay="0.5s"><img src="img/file_bg.svg" alt="">
              <p class="wow fadeInRight" data-wow-delay="0.7s"><img src="img/pdf_ico.png" alt=""><span>PDF </span><span>(2.1 Mb)</span></p></a>
          </div>
        </section>
        <section class="recommendations">
          <div class="container">
            <form class="recommendations__form" action="#">
              <input type="hidden" name="send_name" value="Получить данные учреждений">
              <div class="recommendations__bg wow fadeIn"><img src="img/recomendations_bg.png" alt=""></div>
              <div class="recommendations__wrapper">
                <h2 class="wow fadeInDown" data-wow-delay="0.2s">Работали с 5 учреждениями <span>в г.<?=$city?></span></h2>
                <div class="recommendations__info wow fadeInDown" data-wow-delay="0.4s"><span class="arrow-left">Мы готовы предоставить вам данные </span>учреждений, <br>с которыми уже работали в вашем регионе. <br>Вы можете обратиться к ним и получить <br>рекомендации о работе с нами.</div>
                <div class="recommendations__inputs wow fadeInDown" data-wow-delay="0.6s">
                  <input class="default-input" type="text" name="name" placeholder="Имя">
                  <input class="default-input" type="text" name="phone" placeholder="Номер телефона">
                  <input class="default-input" type="email" name="email" placeholder="Email">
                </div>
                <button class="btn wow fadeInDown" type="submit" disabled data-wow-delay="0.6"><span>Получить данные учреждений</span></button>
              </div>
            </form>
          </div>
        </section>
        <section class="steps">
          <div class="container">
            <h2 class="wow fadeInDown">Посмотрите, из каких этапов<span class="wow fadeInDown" data-wow-delay="0.2s">состоит процедура снабжения</span></h2>
            <div class="steps__wrapper">
              <div class="steps__item wow fadeInDown" data-wow-delay="0.1s"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 779 475"><path d="M110 83h247.088c3.762 14.385 16.847 25 32.412 25 15.564 0 28.65-10.615 32.412-25H669a4 4 0 014 4v255a4 4 0 01-4 3.999H110a4 4 0 01-4-4V87a4 4 0 014-4z" fill="#f1f1f1"/><path d="M117 90h233.155c6.292 15.26 21.314 26 38.845 26 17.53 0 32.553-10.74 38.845-26H661a4 4 0 014 4v241a4 4 0 01-4 4H117a4 4 0 01-4-4V94a4 4 0 014-4z" fill="#fff"/></svg>
<svg xmlns="http://www.w3.org/2000/svg" width="502" height="473" viewBox="0 0 502 473"><g><g><g ><path fill="#5d5d5d" fill-opacity=".06" d="M110 81h109.088c3.762 14.384 16.847 25 32.412 25 15.565 0 28.65-10.616 32.412-25H392a4 4 0 0 1 4 4v255a4 4 0 0 1-4 4H110a4 4 0 0 1-4-4V85a4 4 0 0 1 4-4z"/></g><path fill="#f1f1f1" d="M110 81h109.088c3.762 14.384 16.847 25 32.412 25 15.565 0 28.65-10.616 32.412-25H392a4 4 0 0 1 4 4v255a4 4 0 0 1-4 4H110a4 4 0 0 1-4-4V85a4 4 0 0 1 4-4z"/></g><g><path fill="#fff" d="M117 88h95.155c6.293 15.26 21.315 26 38.845 26 17.53 0 32.552-10.74 38.845-26H384a4 4 0 0 1 4 4v241a4 4 0 0 1-4 4H117a4 4 0 0 1-4-4V92a4 4 0 0 1 4-4z"/></g></g></svg><span class="steps__item-num">1</span>
                <div class="steps__item-wrapper"><span class="steps__step-num">01</span>
                  <div class="steps__item-header">Первое общение и выявление потребностей</div>
                  <p class="steps__item-result">Результат этапа  — <span>Составлен бланк просчёта,который будет <br>передан в отдел снабжения.</span></p>
                </div>
              </div>
              <div class="steps__item wow fadeInDown" data-wow-delay="0.2s"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 779 475"><path d="M110 83h247.088c3.762 14.385 16.847 25 32.412 25 15.564 0 28.65-10.615 32.412-25H669a4 4 0 014 4v255a4 4 0 01-4 3.999H110a4 4 0 01-4-4V87a4 4 0 014-4z" fill="#f1f1f1"/><path d="M117 90h233.155c6.292 15.26 21.314 26 38.845 26 17.53 0 32.553-10.74 38.845-26H661a4 4 0 014 4v241a4 4 0 01-4 4H117a4 4 0 01-4-4V94a4 4 0 014-4z" fill="#fff"/></svg>        
<svg xmlns="http://www.w3.org/2000/svg" width="502" height="473" viewBox="0 0 502 473"><g><g><g ><path fill="#5d5d5d" fill-opacity=".06" d="M110 81h109.088c3.762 14.384 16.847 25 32.412 25 15.565 0 28.65-10.616 32.412-25H392a4 4 0 0 1 4 4v255a4 4 0 0 1-4 4H110a4 4 0 0 1-4-4V85a4 4 0 0 1 4-4z"/></g><path fill="#f1f1f1" d="M110 81h109.088c3.762 14.384 16.847 25 32.412 25 15.565 0 28.65-10.616 32.412-25H392a4 4 0 0 1 4 4v255a4 4 0 0 1-4 4H110a4 4 0 0 1-4-4V85a4 4 0 0 1 4-4z"/></g><g><path fill="#fff" d="M117 88h95.155c6.293 15.26 21.315 26 38.845 26 17.53 0 32.552-10.74 38.845-26H384a4 4 0 0 1 4 4v241a4 4 0 0 1-4 4H117a4 4 0 0 1-4-4V92a4 4 0 0 1 4-4z"/></g></g></svg><span class="steps__item-num">2</span>
                <div class="steps__item-wrapper"><span class="steps__step-num">02</span>
                  <div class="steps__item-header">Составление коммерческого предложения</div>
                  <p class="steps__item-result">Результат этапа  — <span>Коммерческое предложение с позициями, <br>их описанием и характеристиками, <br>с фотографиями и ценами.</span></p>
                </div>
              </div>
              <div class="steps__item wow fadeInDown" data-wow-delay="0.1s"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 779 475"><path d="M110 83h247.088c3.762 14.385 16.847 25 32.412 25 15.564 0 28.65-10.615 32.412-25H669a4 4 0 014 4v255a4 4 0 01-4 3.999H110a4 4 0 01-4-4V87a4 4 0 014-4z" fill="#f1f1f1"/><path d="M117 90h233.155c6.292 15.26 21.314 26 38.845 26 17.53 0 32.553-10.74 38.845-26H661a4 4 0 014 4v241a4 4 0 01-4 4H117a4 4 0 01-4-4V94a4 4 0 014-4z" fill="#fff"/></svg>        
<svg xmlns="http://www.w3.org/2000/svg" width="502" height="473" viewBox="0 0 502 473"><g><g><g ><path fill="#5d5d5d" fill-opacity=".06" d="M110 81h109.088c3.762 14.384 16.847 25 32.412 25 15.565 0 28.65-10.616 32.412-25H392a4 4 0 0 1 4 4v255a4 4 0 0 1-4 4H110a4 4 0 0 1-4-4V85a4 4 0 0 1 4-4z"/></g><path fill="#f1f1f1" d="M110 81h109.088c3.762 14.384 16.847 25 32.412 25 15.565 0 28.65-10.616 32.412-25H392a4 4 0 0 1 4 4v255a4 4 0 0 1-4 4H110a4 4 0 0 1-4-4V85a4 4 0 0 1 4-4z"/></g><g><path fill="#fff" d="M117 88h95.155c6.293 15.26 21.315 26 38.845 26 17.53 0 32.552-10.74 38.845-26H384a4 4 0 0 1 4 4v241a4 4 0 0 1-4 4H117a4 4 0 0 1-4-4V92a4 4 0 0 1 4-4z"/></g></g></svg><span class="steps__item-num">3</span>
                <div class="steps__item-wrapper"><span class="steps__step-num">03</span>
                  <div class="steps__item-header">Обсуждение КП и подготовка документации</div>
                  <p class="steps__item-result">Результат этапа  — <span>Готовые документы: счёт, спецификация<br>и товарная накладная. Подписание договора.</span></p>
                </div>
              </div>
              <div class="steps__item wow fadeInDown" data-wow-delay="0.2s"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 779 475"><path d="M110 83h247.088c3.762 14.385 16.847 25 32.412 25 15.564 0 28.65-10.615 32.412-25H669a4 4 0 014 4v255a4 4 0 01-4 3.999H110a4 4 0 01-4-4V87a4 4 0 014-4z" fill="#f1f1f1"/><path d="M117 90h233.155c6.292 15.26 21.314 26 38.845 26 17.53 0 32.553-10.74 38.845-26H661a4 4 0 014 4v241a4 4 0 01-4 4H117a4 4 0 01-4-4V94a4 4 0 014-4z" fill="#fff"/></svg>        
<svg xmlns="http://www.w3.org/2000/svg" width="502" height="473" viewBox="0 0 502 473"><g><g><g ><path fill="#5d5d5d" fill-opacity=".06" d="M110 81h109.088c3.762 14.384 16.847 25 32.412 25 15.565 0 28.65-10.616 32.412-25H392a4 4 0 0 1 4 4v255a4 4 0 0 1-4 4H110a4 4 0 0 1-4-4V85a4 4 0 0 1 4-4z"/></g><path fill="#f1f1f1" d="M110 81h109.088c3.762 14.384 16.847 25 32.412 25 15.565 0 28.65-10.616 32.412-25H392a4 4 0 0 1 4 4v255a4 4 0 0 1-4 4H110a4 4 0 0 1-4-4V85a4 4 0 0 1 4-4z"/></g><g><path fill="#fff" d="M117 88h95.155c6.293 15.26 21.315 26 38.845 26 17.53 0 32.552-10.74 38.845-26H384a4 4 0 0 1 4 4v241a4 4 0 0 1-4 4H117a4 4 0 0 1-4-4V92a4 4 0 0 1 4-4z"/></g></g></svg><span class="steps__item-num">4</span>
                <div class="steps__item-wrapper"><span class="steps__step-num">04</span>
                  <div class="steps__item-header">Комплектация товара</div>
                  <p class="steps__item-result">Результат этапа  — <span>Товар проверен на целостность <br>и работоспособность. Груз дополнительно <br>комплектуется в жесткую упаковку.</span></p>
                </div>
              </div>
              <div class="steps__item wow fadeInDown" data-wow-delay="0.1s"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 779 475"><path d="M110 83h247.088c3.762 14.385 16.847 25 32.412 25 15.564 0 28.65-10.615 32.412-25H669a4 4 0 014 4v255a4 4 0 01-4 3.999H110a4 4 0 01-4-4V87a4 4 0 014-4z" fill="#f1f1f1"/><path d="M117 90h233.155c6.292 15.26 21.314 26 38.845 26 17.53 0 32.553-10.74 38.845-26H661a4 4 0 014 4v241a4 4 0 01-4 4H117a4 4 0 01-4-4V94a4 4 0 014-4z" fill="#fff"/></svg>        
<svg xmlns="http://www.w3.org/2000/svg" width="502" height="473" viewBox="0 0 502 473"><g><g><g ><path fill="#5d5d5d" fill-opacity=".06" d="M110 81h109.088c3.762 14.384 16.847 25 32.412 25 15.565 0 28.65-10.616 32.412-25H392a4 4 0 0 1 4 4v255a4 4 0 0 1-4 4H110a4 4 0 0 1-4-4V85a4 4 0 0 1 4-4z"/></g><path fill="#f1f1f1" d="M110 81h109.088c3.762 14.384 16.847 25 32.412 25 15.565 0 28.65-10.616 32.412-25H392a4 4 0 0 1 4 4v255a4 4 0 0 1-4 4H110a4 4 0 0 1-4-4V85a4 4 0 0 1 4-4z"/></g><g><path fill="#fff" d="M117 88h95.155c6.293 15.26 21.315 26 38.845 26 17.53 0 32.552-10.74 38.845-26H384a4 4 0 0 1 4 4v241a4 4 0 0 1-4 4H117a4 4 0 0 1-4-4V92a4 4 0 0 1 4-4z"/></g></g></svg>     <span class="steps__item-num">5</span>
                <div class="steps__item-wrapper"><span class="steps__step-num">05</span>
                  <div class="steps__item-header">Отправка товара и доставка</div>
                  <p class="steps__item-result">Результат этапа  — <span>Вы получаете номер отслеживания груза <br>и ориентировочную дату доставки.</span></p>
                </div>
              </div>
              <div class="steps__item wow fadeInDown" data-wow-delay="0.2s"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 779 475"><path d="M110 83h247.088c3.762 14.385 16.847 25 32.412 25 15.564 0 28.65-10.615 32.412-25H669a4 4 0 014 4v255a4 4 0 01-4 3.999H110a4 4 0 01-4-4V87a4 4 0 014-4z" fill="#f1f1f1"/><path d="M117 90h233.155c6.292 15.26 21.314 26 38.845 26 17.53 0 32.553-10.74 38.845-26H661a4 4 0 014 4v241a4 4 0 01-4 4H117a4 4 0 01-4-4V94a4 4 0 014-4z" fill="#fff"/></svg>        
<svg xmlns="http://www.w3.org/2000/svg" width="502" height="473" viewBox="0 0 502 473"><g><g><g ><path fill="#5d5d5d" fill-opacity=".06" d="M110 81h109.088c3.762 14.384 16.847 25 32.412 25 15.565 0 28.65-10.616 32.412-25H392a4 4 0 0 1 4 4v255a4 4 0 0 1-4 4H110a4 4 0 0 1-4-4V85a4 4 0 0 1 4-4z"/></g><path fill="#f1f1f1" d="M110 81h109.088c3.762 14.384 16.847 25 32.412 25 15.565 0 28.65-10.616 32.412-25H392a4 4 0 0 1 4 4v255a4 4 0 0 1-4 4H110a4 4 0 0 1-4-4V85a4 4 0 0 1 4-4z"/></g><g><path fill="#fff" d="M117 88h95.155c6.293 15.26 21.315 26 38.845 26 17.53 0 32.552-10.74 38.845-26H384a4 4 0 0 1 4 4v241a4 4 0 0 1-4 4H117a4 4 0 0 1-4-4V92a4 4 0 0 1 4-4z"/></g></g></svg><span class="steps__item-num">6</span>
                <div class="steps__item-wrapper"><span class="steps__step-num">06</span>
                  <div class="steps__item-header">Получение товара, его выгрузка и монтаж</div>
                  <p class="steps__item-result">Результат этапа  — <span>Оборудование в установленном виде и готовое <br>к использованию. Подписание закрывающих <br>документов.</span></p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="info">
          <div class="container">
            <div class="response">
              <div class="response__decor wow fadeInLeft" data-wow-delay="0.1s"><img src="img/info_response_decor.png" alt=""></div>
              <div class="response__msg wow fadeInRight" data-wow-delay="0.2s">
                <h3>Берем на себя оформление всей <span>необходимой документации</span></h3>
                <p>Процесс оформления документации занимает минимум времени. Для каждого региона существуют согласованные управлением образования шаблоны контрактов и договоров</p>
              </div>
            </div>
            <div class="delivery">
              <div class="delivery__main">
                <h2 class="wow fadeInBottom" data-wow-delay="0.1s">Доставим оборудование<span class="wow fadeInBottom" data-wow-delay="0.2s">по всей России</span></h2>
                <p class="delivery__note arrow-left wow fadeInBottom" data-wow-delay="0.21s">Доставляем даже в самые труднодоступные районы</p>
                <div class="delivery__info wow fadeInLeft" data-wow-delay="0.22s"><img src="img/delivery_box.png" alt="">
                  <p><span>Доставку выполняем в срок</span><span>Просчитываем несколько вариантов доставки и выбираем самый быстрый</span></p>
                </div>
              </div>
              <div class="delivery__aside wow fadeInRight" data-wow-delay="0.1s">
                <div class="delivery__aside-bg"><img src="img/delivery_aside_bg.png" alt=""></div>
                <div class="hover_info">
                  <div class="hover_info__icon"><i><img src="img/info_icon.png" alt=""></i></div>
                </div>
                <p>Малогабаритный груз доставляем бесплатно</p>
              </div>
            </div>
            <div class="attention">
              <h2 class="wow fadeInBottom" data-wow-delay="0.1s">Внимание к деталям<span class="wow fadeInBottom" data-wow-delay="0.2s">и ответственность за весь процесс</span></h2>
              <div class="attention__list">
                <div class="attention__item wow fadeInLeft" data-wow-delay="0.1s"><span>01</span>
                  <div class="attention__text">Проверяем укомплектованный <br>товар перед отправкой по 4-м <br>параметрам<i>
                      <div class="attention__hover-trigger"><img src="img/info_icon.png" alt="">
                        <div class="attention__hover-content">
                          <h4>4 критерия проверки</h4>
                          <ul>
                            <li><span>1</span>
                              <p>Целостность упаковки (отсутствие вмятин, наличие заводских пломб)</p>
                            </li>
                            <li><span>2</span>
                              <p>Целостность самого товара (отсутствие сколов, царапин)</p>
                            </li>
                            <li><span>3</span>
                              <p>Работоспособность товара (техническая исправность)</p>
                            </li>
                            <li><span>4</span>
                              <p>Комплектность (наличие всех составных элементов)</p>
                            </li>
                          </ul>
                        </div>
                      </div></i></div>
                </div>
                <div class="attention__item wow fadeInLeft" data-wow-delay="0.2s"><span>02</span>
                  <div class="attention__text">Фотографируем товар <br>перед отправкой <br>и присылаем вам</div>
                </div>
                <div class="attention__item wow fadeInLeft" data-wow-delay="0.25s"><span>03</span>
                  <div class="attention__text">Предоставляем трек-номер <br>для отслеживания груза</div>
                </div>
                <div class="attention__item wow fadeInLeft" data-wow-delay="0.3s"><span>04</span>
                  <div class="attention__text">Предоставляем гарантию <br>на всю продукцию</div>
                </div>
              </div>
            </div>
            <div class="repair wow fadeInBottom">
              <div class="repair__decor-top"></div>
              <div class="repair__decor-bottom"></div>
              <div class="repair__inner">
                <div class="repair__img"><img class="repair__before" src="img/repair_main.jpg" alt=""><img class="repair__after" src="img/repair_after.png" alt=""></div><a class="repair__btn" href="#"><img src="img/reload_ico.png" alt=""></a>
                <div class="repair__text">
                  <p>Если товар придёт <br>с повреждениями, <span>то мы заменим его за свой счёт.</span></p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="q-block wow fadeIn">
          <div class="container"><img class="q-block__main-img" src="img/q_block_main.png" alt="">
            <h2 class="wow fadeInDown" data-wow-delay="0.2s">Подберите оборудование за 5 шагов</h2>
            <h3 class="wow fadeInDown" data-wow-delay="0.3s">Ответьте на 5 вопросов и получите расчёт стоимости оборудования с доставкой и монтажом</h3>
            <div class="q-block__wrapper">
              <div class="q-block__main-info wow fadeInLeft" data-wow-delay="0.4s"><span>Марина</span>
                <p>Менеджер</p>
              </div>
              <form class="q-block__form wow fadeInRight" action="#" data-wow-delay="0.4s">
                <input type="hidden" name="send_name" value="Тестер: 'Подберите оборудование за 5 шагов'">
                <input type="hidden" name="quiz" value="quiz">
                <div class="q-block__form-bg"><img src="img/q_block_bg_decor.png" alt=""></div>
                <div class="q-block__question">
                  <p>По каким направлениям нам подготовить для Вас КП? </p><span class="q-block__status">Осталось 5 вопросов из 5</span>
                  <div class="q-block__answers">
                    <label class="radio-container"><span>Мебель</span>
                      <input type="radio" name="q_1" value="Мебель" checked><span class="checkmark"></span>
                    </label>
                    <label class="radio-container"><span>Компьютерное, интерактивное оборудование</span>
                      <input type="radio" name="q_1" value="Компьютерное, интерактивное оборудование"><span class="checkmark"></span>
                    </label>
                    <label class="radio-container"><span>Спортинвентарь</span>
                      <input type="radio" name="q_1" value="Спортинвентарь"><span class="checkmark"></span>
                    </label>
                    <label class="radio-container"><span>Учебное оборудование для кабинетов</span>
                      <input type="radio" name="q_1" value="Учебное оборудование для кабинетов"><span class="checkmark"></span>
                    </label>
                    <label class="radio-container"><span>Другое </span>
                      <input type="radio" name="q_1" value="Другое"><span class="checkmark"></span>
                    </label>
                  </div><a class="q-block__next" href="#">Далее</a>
                </div>
                <div class="q-block__question" style="display: none;">
                  <p>Когда Вы планируете осуществить покупку?</p><span class="q-block__status">Осталось 4 вопросов из 5</span>
                  <div class="q-block__answers">
                    <label class="radio-container"><span>В текущем месяце</span>
                      <input type="radio" name="q_2" value="В текущем месяце" checked><span class="checkmark"></span>
                    </label>
                    <label class="radio-container"><span>В текущем квартале</span>
                      <input type="radio" name="q_2" value="В текущем квартале"><span class="checkmark"></span>
                    </label>
                    <label class="radio-container"><span>Сроки не известны</span>
                      <input type="radio" name="q_2" value="Сроки не известны"><span class="checkmark"></span>
                    </label>
                  </div><a class="q-block__next" href="#">Далее</a>
                </div>
                <div class="q-block__question" style="display: none;">
                  <p>В какой бюджет нам следует уложиться при подготовке КП?</p><span class="q-block__status">Осталось 3 вопросов из 5</span>
                  <div class="q-block__answers">
                    <label class="radio-container"><span>До 50 000 рублей</span>
                      <input type="radio" name="q_3" value="До 50 000 рублей" checked><span class="checkmark"></span>
                    </label>
                    <label class="radio-container"><span>До 100 000 рублей</span>
                      <input type="radio" name="q_3" value="До 100 000 рублей"><span class="checkmark"></span>
                    </label>
                    <label class="radio-container"><span>До 300 000 рублей</span>
                      <input type="radio" name="q_3" value="До 300 000 рублей"><span class="checkmark"></span>
                    </label>
                    <label class="radio-container"><span>До 600 000 рублей</span>
                      <input type="radio" name="q_3" value="До 600 000 рублей"><span class="checkmark"></span>
                    </label>
                    <label class="radio-container"><span>Бюджет неизвестен</span>
                      <input type="radio" name="q_3" value="Бюджет неизвестен"><span class="checkmark"></span>
                    </label>
                  </div><a class="q-block__next" href="#">Далее</a>
                </div>
                <div class="q-block__question" style="display: none;">
                  <p>По какой модели оплаты Вам комфортнее работать?</p><span class="q-block__status">Осталось 2 вопросов из 5</span>
                  <div class="q-block__answers">
                    <label class="radio-container"><span>Предоплата</span>
                      <input type="radio" name="q_4" value="Предоплата" checked><span class="checkmark"></span>
                    </label>
                    <label class="radio-container"><span>Частичная оплата</span>
                      <input type="radio" name="q_4" value="Частичная оплата"><span class="checkmark"></span>
                    </label>
                    <label class="radio-container"><span>Не принципиально</span>
                      <input type="radio" name="q_4" value="Не принципиально"><span class="checkmark"></span>
                    </label>
                  </div><a class="q-block__next" href="#">Далее</a>
                </div>
                <div class="q-block__question" style="display: none;">
                  <p>В какой срок необходимо поставить товар?</p><span class="q-block__status">Осталось 1 вопросов из 5</span>
                  <div class="q-block__answers">
                    <label class="radio-container"><span>10 календарных дней</span>
                      <input type="radio" name="q_5" value="10 календарных дней" checked><span class="checkmark"></span>
                    </label>
                    <label class="radio-container"><span>30 календарных дней</span>
                      <input type="radio" name="q_5" value="30 календарных дней"><span class="checkmark"></span>
                    </label>
                    <label class="radio-container"><span>60 календарных дней</span>
                      <input type="radio" name="q_5" value="60 календарных дней"><span class="checkmark"></span>
                    </label>
                  </div><a class="q-block__next" href="#">Далее</a>
                </div>
                <div class="q-block__question" style="display: none;">
                  <p>Получить расчет стоимости оборудования с доставкой и монтажем</p>
                  <input class="default-input" type="email" name="email" placeholder="Email">
                  <input class="default-input" type="text" name="phone" placeholder="Номер телефона">
                  <button class="btn" disabled type="submit"><span>Отправить</span></button>
                </div>
              </form>
            </div>
          </div>
        </section>
        <section class="accept wow fadeIn">
          <div class="container">
            <h2 class="wow fadeInDown" data-wow-delay="0.2s">Наши специалисты <br>осуществляют сборку мебели</h2>
            <h3 class="wow fadeInDown" data-wow-delay="0.3s">и монтаж оборудования</h3>
            <h4 class="wow fadeInDown" data-wow-delay="0.4s">и в готовом виде сдают комиссии под отчет</h4>
            <p class="accept__ico wow fadeInDown" data-wow-delay="0.4s"><img src="img/accept_ico.svg" alt=""><span>Вам останется только принять работу</span></p>
          </div>
        </section>
        <section class="work-model">
          <div class="container">
            <h2 class="wow fadeInDown">Образовательные учреждения ценят нас<span class="wow fadeInDown" data-wow-delay="0.1s">за комфортную модель работы</span></h2>
            <div class="work-model__list">
              <div class="work-model__item wow fadeInLeft" data-wow-delay="0.1s">
                <div class="work-model__img"><img src="img/work_model_1.png" alt=""></div>
                <p>Работаем с частичной <br>оплатой и пост оплатой</p>
              </div>
              <div class="work-model__item wow fadeInLeft" data-wow-delay="0.15s">
                <div class="work-model__img"><img src="img/work_model_2.png" alt=""></div>
                <p>Предлагаем цены на уровне <br>с производителями <br>за счет дилерской скидки</p>
              </div>
              <div class="work-model__item wow fadeInLeft" data-wow-delay="0.2s">
                <div class="work-model__img"><img src="img/work_model_3.png" alt=""></div>
                <p>Информируем, на какой <br>стадии находится заказ</p>
              </div>
              <div class="work-model__item wow fadeInLeft" data-wow-delay="0.25s">
                <div class="work-model__img"><img src="img/work_model_4.png" alt=""></div>
                <p>Отправляем оригиналы  <br>документов первым <br>классом в день <br>подписания контракта</p>
              </div>
            </div>
          </div>
        </section>
        <section class="consult wow fadeIn">
          <p>Эрудит</p>
          <div class="container"><img class="consult__mobile-decor" src="img/consult_mobile_decor.png" alt=""><img class="consult__mobile-decor-man" src="img/consult_mobile_decor_man.png" alt="">
            <h2 class="wow fadeInDown" data-wow-delay="0.1s">Наши менджеры <br>проконсультируют вас<span>по любому вопросу</span></h2>
            <p class="arrow-left consult__info wow fadeInDown" data-wow-delay="0.25s">В компании сформирована база знаний по каждой категории товаров <span>и менеджер проходит ежемесячное обучение по продукту</span></p><a class="btn wow fadeInLeft" href="#" data-modal="consult-modal" data-wow-delay="0.25s"><img src="img/comment_ico.png" alt=""><span>Проконсультироваться с менеджером</span></a>
          </div>
        </section>
        <section class="team">
          <div class="container">
            <div class="qoute wow fadeIn"><img class="wow fadeIn" src="img/qoute_mobile_man.png" alt="" data-wow-delay="0.1s"><img class="qoute__mobile-arrow" src="img/qoute_mobile_arrow.png" alt="">
              <div class="qoute__bg"><img src="img/team_quote_bg.png" alt=""></div>
              <div class="qoute__inner wow fadeInBottom" data-wow-delay="0.2s">
                <p>Наша миссия – создание комфортной образовательной среды для учащихся и педагогов. </p>
                <p>Наши ежедневные усилия направлены на улучшение технического оснащения образовательных учреждений России. </p>
                <p>Мы искренне верим, что наша деятельность способствует росту успеваемости учащихся, повышению престижа российских школ и поднятию качества образования в нашей стране на новый уровень.</p>
                <div class="qoute__by wow fadeInBottom" data-wow-delay="0.25s">
                  <p><span>С уважением,</span><span>Директор ТПК «Эрудит»</span></p><span><img src="img/sign.png" alt=""></span>
                  <p><span>Дмитрий Черников</span></p>
                </div>
              </div>
            </div>
            <div class="team__header wow fadeInBottom">
              <h2>Каждый член нашей команды<span>— эксперт в своей области</span></h2>
            </div>
            <div class="team__features">
              <div class="team__feature wow fadeInLeft" data-wow-delay="0.1s"><i class="team__feature-icon"><img src="img/team_icon_1.png" alt=""></i>
                <div class="team__feature-inner">
                  <p>Вникаем в ваши требования <br>и берём всю работу на себя</p>
                </div>
              </div>
              <div class="team__feature wow fadeInLeft" data-wow-delay="0.15s"><i class="team__feature-icon"><img src="img/team_icon_2.png" alt=""></i>
                <div class="team__feature-inner">
                  <p>Подбираем наиболее <br>выгодные для вас варианты</p>
                </div>
              </div>
              <div class="team__feature wow fadeInLeft" data-wow-delay="0.2s"><i class="team__feature-icon"><img src="img/team_icon_3.png" alt=""></i>
                <div class="team__feature-inner">
                  <p>Консультируем <br>по любому вопросу</p>
                </div>
              </div>
            </div>
            <div class="team__wrapper wow fadeIn" data-wow-delay="0.1s">
              <div class="team__member"><img src="img/team_member_1.png" alt="">
                <div class="team__member-info"><span>Кирилл</span><span>Коммерческий <br>директор</span></div>
              </div>
              <div class="team__member"><img src="img/team_member_2.png" alt="">
                <div class="team__member-info"><span>Егор</span><span>Руководитель <br>отдела снабжения</span></div>
              </div>
              <div class="team__member"><img src="img/team_member_3.png" alt="">
                <div class="team__member-info"><span>Илья</span><span>Менеджер</span></div>
              </div>
              <div class="team__member"><img src="img/team_member_4.png" alt="">
                <div class="team__member-info"><span>Марина</span><span>Менеджер</span></div>
              </div>
              <div class="team__member"><img src="img/team_member_5.png" alt="">
                <div class="team__member-info"><span>Евгений</span><span>Менеджер</span></div>
              </div>
              <div class="team__member"><img src="img/team_member_6.png" alt="">
                <div class="team__member-info"><span>Иван</span><span>Специалист<br>отдела снабжения</span></div>
              </div>
            </div>
          </div>
        </section>
        <section class="comments">
          <div class="container">
            <h2 class="wow fadeInDown">Почитайте, что о нас<span>говорят другие учреждения</span></h2>
            <p class="comments__tip wow fadeInDown" data-wow-delay="0.1s">Нажмите на картинку, чтобы прочитать отзыв подробнее</p>
            <div class="comments__list wow fadeInDown" data-wow-delay="0.15s"><a class="comments__item" href="img/comment_1.png" data-fancybox><img src="img/comment_1.png" alt=""></a><a class="comments__item" href="img/comment_2.jpg" data-fancybox><img src="img/comment_2.jpg" alt=""></a><a class="comments__item" href="img/comment_3.jpg" data-fancybox><img src="img/comment_3.jpg" alt=""></a><a class="comments__item" href="img/comment_4.jpg" data-fancybox><img src="img/comment_4.jpg" alt=""></a><a class="comments__item" href="img/comment_5.jpg" data-fancybox><img src="img/comment_5.jpg" alt=""></a><a class="comments__item" href="img/comment_6.jpg" data-fancybox><img src="img/comment_6.jpg" alt=""></a></div>
          </div>
        </section>
        <section class="offer">
          <div class="container"><img class="wow fadeIn" src="img/offer_decor.png" alt=""><a class="file_upload wow fadeInLeft" href="#" data-wow-delay="0.1s"><img src="img/file_bg.svg" alt="">
              <p class="wow fadeInLeft" data-wow-delay="0.2s"><img src="img/doc_ico.png" alt=""><span>DOC </span><span>(2.1 Mb)</span></p></a>
            <div class="offer__main">
              <div class="offer__bg wow fadeInLeft" data-wow-delay="0.1s"><img src="img/offer_form_decor.png" alt=""></div>
              <div class="offer__inner wow fadeInLeft" data-wow-delay="0.2s">
                <h3>Оставьте заявку <br>на подготовку <span>коммерческого предложения</span></h3>
                <div class="offer__cta"><img src="img/offer_ico.png" alt=""><span>и  мы вышлем его в 3-х вариантах</span></div>
                <p class="offer__point-text"><span>Вы получите:</span><span>— Коммерческие предложение с подробной информацией о товаре: описание, картинка товара, актуальная и финальная цена. В это КП включена доставка, выгрузка и монтаж</span></p><a class="btn" href="#" data-modal="offer-modal"><span>Получить коммерческое предложение</span></a>
                <p class="offer__note">После отправки заявки, с вами в течение 7 минут свяжется менеджер для дальнейшего обсуждения</p>
              </div>
            </div>
          </div>
        </section>
      </main>
      <footer class="footer">
        <div class="container">
          <div class="footer__map wow fadeIn">
            <div id="map"></div>
            <div class="footer__map-info wow fadeInRight" data-wow-delay="0.1s">
              <div class="footer__map-inner wow fadeInLeft" data-wow-delay="0.15s">
                <div class="footer__map-item"><span>телефон</span><a href="tel:8 (343) 300 93 04">8 (343) 300 93 04</a></div>
                <div class="footer__map-item"><span>E-mail</span><a href="mailto:info@erudit-snab.ru">info@erudit-snab.ru</a></div>
                <div class="footer__map-item"><span>Адресс</span><a href="tel:8 (343) 300 93 04">620078, г Екатеринбург, <br>ул Коминтерна 16 оф 216</a></div>
              </div>
            </div>
          </div>
          <div class="footer__inner wow fadeInUp"><a class="footer__logo" href="index.php"><img src="img/logo.png" alt=""></a>
            <div class="footer__info"><span>ОГРН: 318665800057551</span><span>ИНН: 664602742322</span><a href="#" target="_blank" data-modal="policy">Политика конфиденциальности</a></div>
            <div class="footer__deployed"><span>Разработка сайта  —</span><a href="http://timetofirst.ru/?utm_source=school_equip" target="_blank">«Время Первых»</a></div>
          </div>
        </div>
      </footer>
      <div class="default-modal callback">
        <div class="default-modal__content">
          <div class="default-modal__close" data-modal-close><img src="img/close_modal_ico.png" alt=""></div>
          <div class="default-modal__inner">
            <div class="default-modal__form">
              <h2> <span>Заполните форму</span></h2>
              <h3>и наш специалист свяжется с вами через 10 минут</h3>
              <form class="callback__form">
                <input type="hidden" name="send_name" value="Модальное окно 'Позвонить вам?'">
                <input class="default-input" type="text" name="name" placeholder="Имя">
                <input class="default-input" type="text" name="phone" placeholder="Номер телефона">
                <button class="btn" type="submit" disabled> <span>Заказать консультацию</span></button>
                <p>Нажимая на кнопку, вы соглашаетесь с <a href="#" data-modal="policy">условиями обработки информации</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="default-modal catalog-modal">
        <div class="default-modal__content">
          <div class="default-modal__close" data-modal-close><img src="img/close_modal_ico.png" alt=""></div>
          <div class="default-modal__inner"><a class="file_upload" href="#"><img src="img/file_bg.svg" alt="">
              <p><img src="img/pdf_ico.png" alt=""><span>PDF </span><span>(2.1 Mb)</span></p></a>
            <div class="default-modal__form">
              <h2>Чтобы скачать каталог<span>заполните форму ниже</span></h2>
              <form class="catalog-modal__form">
                <input type="hidden" name="catalog_name" value="">
                <input type="hidden" name="f_name" value="">
                <input type="hidden" name="send_name" value="Модальное окно 'Скачать каталог'">
                <input class="default-input" type="text" name="phone" placeholder="Номер телефона">
                <input class="default-input" type="email" name="email" placeholder="Электронная почта">
                <button class="btn" type="submit" disabled> <span>Скачать каталог</span></button>
                <p>Нажимая на кнопку, вы соглашаетесь с <a href="#" data-modal="policy">условиями обработки информации</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="default-modal consult-modal">
        <div class="default-modal__content">
          <div class="default-modal__close" data-modal-close><img src="img/close_modal_ico.png" alt=""></div>
          <div class="default-modal__inner">
            <div class="default-modal__form">
              <h2>Заполните форму<span>и мы перезвоним вам в течение 5-ти минут</span></h2>
              <form class="consult-modal__form">
                <input type="hidden" name="send_name" value="Модальное окно 'Заказать консультацию'">
                <input class="default-input" type="text" name="phone" placeholder="Номер телефона">
                <input class="default-input" type="email" name="email" placeholder="Электронная почта">
                <button class="btn" type="submit" disabled> <span>Заказать консультацию</span></button>
                <p>Нажимая на кнопку, вы соглашаетесь с <a href="#" data-modal="policy">условиями обработки информации</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="default-modal offer-modal">
        <div class="default-modal__content">
          <div class="default-modal__close" data-modal-close><img src="img/close_modal_ico.png" alt=""></div>
          <div class="default-modal__inner"><a class="file_upload" href="#"><img src="img/file_bg.svg" alt="">
              <p><img src="img/doc_ico.png" alt=""><span>DOC </span><span>(3 шт.)</span></p></a>
            <div class="default-modal__form">
              <h2>Заполните форму<span>и мы перезвоним вам в течение 5-ти минут</span></h2>
              <form class="offer-modal__form">
                <input type="hidden" name="send_name" value="Модальное окно 'Получить коммерческое предложение'">
                <input class="default-input" type="text" name="phone" placeholder="Номер телефона">
                <input class="default-input" type="email" name="email" placeholder="Электронная почта">
                <button class="btn" type="submit" disabled> <span>Получить коммерческое предложение</span></button>
                <p>Нажимая на кнопку, вы соглашаетесь с <a href="#" data-modal="policy">условиями обработки информации</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="default-modal policy">
        <div class="default-modal__content">
          <div class="default-modal__close" data-modal-close><img src="img/close_modal_ico.png" alt=""></div>
          <div class="default-modal__inner">
            <h2>Политики конфиденциальности</h2>
            <p>1. Общие положения</p>
            <p>Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных Михайлова Ивана Сергеевича (далее – Оператор).</p>
            <ul>
              <li>Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.</li>
              <li>Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта https://mysite.ru.</li>
            </ul>
            <p>1. Общие положения</p>
            <p>Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных Михайлова Ивана Сергеевича (далее – Оператор).</p>
            <ul>
              <li>Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.</li>
              <li>Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта https://mysite.ru.</li>
            </ul>
            <p>1. Общие положения</p>
            <p>Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных Михайлова Ивана Сергеевича (далее – Оператор).</p>
            <ul>
              <li>Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.</li>
              <li>Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта https://mysite.ru.</li>
            </ul>
            <p>1. Общие положения</p>
            <p>Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных Михайлова Ивана Сергеевича (далее – Оператор).</p>
            <ul>
              <li>Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.</li>
              <li>Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта https://mysite.ru.</li>
            </ul>
            <p>1. Общие положения</p>
            <p>Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных Михайлова Ивана Сергеевича (далее – Оператор).</p>
            <ul>
              <li>Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.</li>
              <li>Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта https://mysite.ru.</li>
            </ul>
            <p>1. Общие положения</p>
            <p>Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных Михайлова Ивана Сергеевича (далее – Оператор).</p>
            <ul>
              <li>Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.</li>
              <li>Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта https://mysite.ru.</li>
            </ul>
          </div>
        </div>
      </div>
    </div><script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=<your API-key>" type="text/javascript"></script>
    <script src="js/libs.min.js?v10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script><script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="js/script.min.js?v11"></script>
  </body>
</html>