<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Ubuntu:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/media.css" />
    <script src="./js/modal.js" defer="defer"></script>
    <script src="./js/scroll.js" defer="defer"></script>
    <script src="./js/lists.js" defer="defer"></script>
    <title>Берегиня</title>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="block__header">
          <div class="block__adress">
            <p class="adress">
              Адрес завода: 140127, Московская область, Раменский р-н, пос.
              санатория «Раменское»
            </p>
          </div>
          <div class="block__contact">
            <div class="span__block">
              <img src="./img/icon/whatsapp1.svg" alt="img" class="what" />
              <p class="numb">8 (903) 578-85-77</p>
            </div>
            <div class="span__block_teleg">
              <img src="./img/icon/telegram2.svg" alt="img" class="what" />
              <p class="adress__teleg">@bereginya.ru</p>
            </div>
            <div class="span__block_not">
              <img src="./img/icon/interface.svg" alt="img" class="what" />
              <a class="adress__email">info@bereginya.ru — написать письмо</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section class="promo">
        <div class="container">
          <div class="modal__bg_email">
            <div class="wrapp__email">
              <div class="modal__email">
                <h3 class="tile__modal_email">Мы вам напишем</h3>
                <p class="text_mod_email">
                  Оставьте ваши данные и мы свяжемся с вами. Мы не занимаемся
                  рассылкой рекламных сообщений, а так же<br />не передаем
                  контактные данные третьим лицам
                </p>
                <a href="#" class="close_email_mod"></a>
                <div class="input_name_block">
                  <input
                    type="text"
                    class="modal_email_un"
                    placeholder="Ваше имя"
                  />
                  <input
                    type="text"
                    class="modal_email_un"
                    placeholder="Ваша e-mail"
                  />
                  <input
                    type="text"
                    class="modal_email_un"
                    placeholder="Ваш телефон"
                  />
                </div>
                <!-- /.input_name_block -->
                <div class="massenge">
                  <input
                    type="text"
                    class="mes_input"
                    placeholder="Опишите свою проблему ..."
                  />
                </div>
                <!-- /.massenge -->
                <div class="btn__ckeckid">
                  <a href="" class="btn_panel_bran">Перезвоните мне</a>
                  <div class="check_box">
                    <label class="label"
                      ><input type="checkbox" class="checkbox" />
                      <span class="fake"></span>
                      <span class="text_chek_panel"
                        ><span class="text__check">Согласие на обработку </span
                        ><span class="text__check_sub"
                          >персональных данных</span
                        ></span
                      ></label
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block__promo">
            <div class="block__logo">
              <div class="burger__menu"><a href="#" class="buger"></a></div>
              <a href="#" class="logo__ind"><div class="logo"></div></a>
            </div>
            <div class="block__link">
              <a href="#" class="link">История компании </a
              ><a href="#" class="link">Доставка </a
              ><a href="#" class="link__not">Контакты</a>
            </div>
            <div class="block__phone">
              <a href="#" class="search"></a>
              <input
                type="text"
                class="search__active"
                placeholder="Найдётся всё..."
              />
              <div class="call">
                <img
                  src="./img/icon/interface2.svg"
                  alt="img"
                  class="call__icon"
                />
                <a class="numb__call">8 (903) 578-85-77</a>
                <a href="#" class="requestcall">заказать звонок</a>
              </div>
            </div>
          </div>
          <div class="block__promo__info">
            <!-- главный блок -->
            <div class="line">
              <!-- этот див сделал для отделения текста от бутылок -->
              <div class="icon__time">
                <!--подблок (колонка) -->
                <h2 class="title__time">
                  Берегиня — это<br /> здоровье, энергия<br />и вдохновение
                </h2>
                <!--контентная часть (сверху и с низу)-->
                <div class="icons">
                  <img
                    src="./img/icon/wall-clock1.svg"
                    alt="icon"
                    class="time"
                  />
                  <p class="time__text">Для бодрого пробуждения</p>
                </div>
                <div class="icons_dish">
                  <img
                    src="./img/icon/wall-clock1.svg"
                    alt="icon"
                    class="time"
                  />
                  <p class="time__text">Во время тренировки</p>
                </div>
              </div>
              <div class="block__eat">
                <!--подблок (колонка)-->
                <p class="text__eat">
                  Благодаря вулканическим минералам жизнь бьет <br />ключом.
                  Неважно – офлайн или онлайн. В ритме города <br />или стихии.
                  Дома, на море, на газоне, под колонкой, на<br />балконе.
                  Неважно, в 30 или в 130! Когда ты полон<br />здоровья, истории
                  начинаются снова и снова
                </p>
                <div class="icon_eat">
                  <img src="./img/icon/eat.svg" alt="eat" class="time" />
                  <p class="time__text">Вместо вредного перекуса</p>
                </div>
                <div class="icons_car">
                  <img src="./img/icon/car.svg" alt="icon" class="time" />
                  <p class="time__text">В дороге</p>
                </div>
              </div>
            </div>
            <!-- главный блок конец -->
            <div class="bottle">
              <!-- главный бутылочный блок -->
              <img src="./img/Бутылки.png" alt="" class="bottle__img" />
            </div>
            <div class="round"><a href="#" class="down"></a></div>
            <div class="window_close">
              <div class="drop__wrapp">
                <div class="drop_close">
                  <a href="#" class="close__burger"></a>
                  <div class="dropdown_box">
                    <div class="box__link">
                      <a href="./branding.html" class="link__page"
                        >Брендирование воды</a
                      >
                    </div>
                  </div>
                  <div class="dropdown_box">
                    <div class="box__link">
                      <a href="./spill.html" class="link__page_cont"
                        >Контрактный розлив</a
                      >
                    </div>
                  </div>
                  <div class="dropdown_box">
                    <div class="box__link">
                      <a href="./line.html" class="link__page_pump"
                        >Вода на розлив</a
                      >
                    </div>
                  </div>
                  <div class="dropdown_box">
                    <div class="box__link">
                      <a href="./catalog.html" class="link__page"
                        >Напитки оптом</a
                      >
                      <span class="gren_round">%</span>
                    </div>
                  </div>
                  <div class="dropdown_box">
                    <div class="box__link">
                      <a href="./catalog.html" class="link__page">Вода оптом</a>
                      <span class="gren_round_two">%</span>
                    </div>
                  </div>
                  <div class="dropdown_box">
                    <div class="box__link">
                      <a href="./production.html" class="link__page_plast"
                        >Изготовление ПЭТ тары</a
                      >
                    </div>
                  </div>
                  <div class="dropdown_box">
                    <div class="box__link">
                      <a href="#" class="link__page_wat">Бренды</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wrapp_window">
            <div class="modal_window">
              <div class="wind">
                <div class="close__modal">
                  <h3 class="title__wind">Мы вам перезвоним</h3>
                  <a href="#" class="close_btn"></a>
                </div>
                <p class="text__wind">
                  Оставьте ваши данные и мы свяжемся с вами. Мы не занимаемся
                  рассылкой рекламных сообщений, а так же не<br />передаем
                  контактные данные третьим лицам
                </p>
                <form action="#" class="form_bran_modal">
                  <div class="cont_input">
                    <input
                      type="text"
                      class="panel_bran"
                      placeholder="Ваше имя"
                    />
                    <input
                      type="text"
                      class="panel_bran"
                      placeholder="Ваш телефон"
                    />
                  </div>
                  <!-- /.cont_input -->
                  <div class="btn__ckeckid">
                    <a href="#" class="btn_panel_bran">Перезвоните мне</a>
                    <div class="check_box">
                      <label class="label"
                        ><input type="checkbox" class="checkbox" />
                        <span class="fake"></span>
                        <span class="text_chek_panel"
                          ><span class="text__check"
                            >Согласие на обработку </span
                          ><span class="text__check_sub"
                            >персональных данных</span
                          ></span
                        ></label
                      >
                    </div>
                  </div>
                </form>
                <!-- /.form_bran_panel -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="plan__products">
        <div class="container">
          <div class="text__plant">
            <h2 class="title__plant">Продукция завода</h2>
            <p class="text_section">
              Существует три основных вида природных питьевых вод: лечебные,
              лечебно-столовые и столовые (питьевые).<br />Лечебные воды
              обладают выраженным лечебным действием на организм человека и
              используются<br />исключительно в медицинских целях.
              Лечебно-столовые воды применяются как лечебное и
              профилактическое<br />средство при конкретных заболеваниях.
            </p>
          </div>
          <div class="card__plant">
            <div class="sup__card">
              <div class="card__product">
                <div class="circle">
                  <img src="./img/Component3.png" alt="img" class="bereg" />
                </div>
                <a href="#" class="btn__product">Питьевая вода</a>
              </div>
              <div class="card__product">
                <div class="circle">
                  <img src="./img/Component3.png" alt="img" class="bereg" />
                </div>
                <a href="#" class="btn__product">Берегиня-1</a>
              </div>
              <div class="card__product">
                <div class="circle">
                  <img src="./img/Component1.png" alt="img" class="drink" />
                </div>
                <a href="#" class="btn__product">Газированные напитки</a>
              </div>
              <div class="card__product">
                <div class="circle">
                  <img src="./img/Component2.png" alt="img" class="bott" />
                </div>
                <a href="#" class="btn__product padd"
                  >Ассортимент<br />питьевых вод</a
                >
              </div>
              <div class="card__product">
                <div class="circle">
                  <img src="./img/Component1.png" alt="img" class="drink" />
                </div>
                <a href="#" class="btn__product">Газированные напитки</a>
              </div>
              <div class="card__product_card_sett">
                <div class="circle">
                  <img src="./img/Component2.png" alt="img" class="bott" />
                </div>
                <a href="#" class="btn__product padd"
                  >Ассортимент<br />питьевых вод</a
                >
              </div>
              <div class="card__product">
                <div class="circle">
                  <img src="./img/Component3.png" alt="img" class="bereg" />
                </div>
                <a href="#" class="btn__product">Питьевая вода</a>
              </div>
              <div class="card__product">
                <div class="circle">
                  <img src="./img/Component3.png" alt="img" class="bereg" />
                </div>
                <a href="#" class="btn__product">Берегиня-1</a>
              </div>
            </div>
            <div class="sub__card">
            </div>
          </div>
          <div class="benefits">
            <h2 class="title__benifits">Преимущества воды “Берегиня”</h2>
            <div class="panel">
              <div class="block__left">
                <div class="panel__icons">
                  <img
                    src="./img/icon/mountains1.svg"
                    alt="img"
                    class="panel__img"
                  />
                  <p class="text__panel box_text_panel">Настоящая <br />горная вода</p>
                </div>
                <!-- /.panel__icons -->
                <div class="panel__icons sett__icon">
                  <img
                    src="./img/icon/water-cycle1.svg"
                    alt="img"
                    class="panel__img"
                  />
                  <p class="text__panel">Идеально<br />сбалансировання</p>
                </div>
                <!-- /.panel__icons -->
              </div>
              <!-- /.block__left -->
              <div class="block__img_panel">
                <img
                  src="./img/stakan_na_glavnoy1.png"
                  alt="img"
                  class="glass"
                />
              </div>
              <!-- /.block__img_panel -->
              <div class="block__right_panel">
                <div class="panel__icons">
                  <img
                    src="./img/icon/waterproof-fabric1.svg"
                    alt="img"
                    class="panel__img"
                  />
                  <p class="text__panel text__sett">
                    Натуральный <br />природний состав
                  </p>
                </div>
                <!-- /.panel__icons -->
                <div class="panel__icons sett__icon">
                  <img
                    src="./img/icon/leaf1.svg"
                    alt="img"
                    class="panel__img"
                  />
                  <p class="text__panel">Идеально<br />сбалансировання</p>
                </div>
                <!-- /.panel__icons -->
              </div>
              <!-- /.block__right_panel -->
            </div>
          </div>
          <!-- /.benefits -->
        </div>
      </section>
      <!-- /.plan__products -->

      <section class="catalog">
        <div class="container">
          <h2 class="title__catalog">Каталог</h2>
          <div class="filter">
            <div class="btn__filter">
              <a href="#" class="btn__sorting">Объем</a>
              <div class="wrapp_vol_List">
                <div class="volume__list">
                  <div class="type__btn_vol">
                    <a href="#" class="btn_vol">Объем</a>
                  </div>
                  <div class="type__list_volume_big">
                    <p class="text_list_vol">19 литров</p>
                  </div>
                  <div class="type__list_volume">
                    <p class="text_list_vol">5 литров</p>
                  </div>
                  <div class="type__list_volume">
                    <p class="text_list_vol">5 литров</p>
                  </div>
                  <div class="type__list_volume">
                    <p class="text_list_vol">5 литров</p>
                  </div>
                  <div class="type__list_volume">
                    <p class="text_list_vol">5 литров</p>
                  </div>
                  <div class="type__list_volume">
                    <p class="text_list_vol">5 литров</p>
                  </div>
                  <div class="type__list_volume">
                    <p class="text_list_vol">5 литров</p>
                  </div>
                </div>
              </div>
              <a href="#" class="btn__sorting_center sett__typ">Тип </a
              ><a href="#" class="btn__sorting_center sett_category">Категория </a
              ><a href="#" class="btn__sorting_center sett_touch">Назначение </a
              ><a href="#" class="btn__sorting_center sett_sorting">Бренд </a
              ><a href="#" class="btn__sorting_right">Сортировка</a>
              <div class="wrapp_sor_List">
                <div class="sortin__list">
                  <div class="type__btn_sort">
                    <a href="#" class="btn_sor">Сортировка</a>
                  </div>
                  <div class="type__list_sort_big">
                    <p class="text_list_sort">по возрастанию цены</p>
                  </div>
                  <div class="type__list_sort">
                    <p class="text_list_sort">по возрастанию цены</p>
                  </div>
                  <div class="type__list_sort">
                    <p class="text_list_sort">по возрастанию цены</p>
                  </div>
                  <div class="type__list_sort">
                    <p class="text_list_sort">по возрастанию цены</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.filter -->
          <div class="card__catalog">
            <div class="strip_sup">
              <div class="card__botlle">
                <div class="sup__info__card">
                  <p class="round__hot"></p>
                  <p class="round_percent">%</p>
                  <img
                    src="./img/card__catalog.png"
                    alt="img"
                    class="card_botlle"
                  />
                  <p class="text__catalog__card">
                    EsonStyle (ЕсонСтайл) - фитнес<br />резинки
                  </p>
                  <p class="grey__text__catalog">
                    Природная питьевая вода высшего<br />качества,
                    озонированная, рекомендована<br />детям от 3-х лет
                  </p>
                </div>
                <!-- /.sup__info__card -->
                <div class="sub__info__card">
                  <div class="money">
                    <span class="money__discount">220 ₽ </span
                    ><span class="money__nodiscount">399 ₽</span>
                  </div>
                  <!-- /.money -->
                  <div class="btn__money">
                    <p class="plus">+</p>
                    <p class="minus">-</p>
                    <p class="counter">0</p>
                    <a href="#" class="btn__cart"></a>
                  </div>
                  <!-- /.btn__money -->
                </div>
                <!-- /.sub__info__card -->
              </div>
              <!-- /.card__botlle -->
              <div class="card__botlle">
                <div class="sup__info__card">
                  <p class="round__hot"></p>
                  <p class="round_percent">%</p>
                  <img
                    src="./img/card__catalog.png"
                    alt="img"
                    class="card_botlle"
                  />
                  <p class="text__catalog__card">
                    EsonStyle (ЕсонСтайл) - фитнес<br />резинки
                  </p>
                  <p class="grey__text__catalog">
                    Природная питьевая вода высшего<br />качества,
                    озонированная, рекомендована<br />детям от 3-х лет
                  </p>
                </div>
                <!-- /.sup__info__card -->
                <div class="sub__info__card">
                  <div class="money">
                    <span class="money__discount">220 ₽ </span
                    ><span class="money__nodiscount">399 ₽</span>
                  </div>
                  <!-- /.money -->
                  <div class="btn__money">
                    <p class="plus">+</p>
                    <p class="minus">-</p>
                    <p class="counter">0</p>
                    <a href="#" class="btn__cart"></a>
                  </div>
                  <!-- /.btn__money -->
                </div>
                <!-- /.sub__info__card -->
              </div>
              <!-- /.card__botlle -->
              <div class="card__botlle">
                <div class="sup__info__card">
                  <p class="round__hot"></p>
                  <p class="round_percent">%</p>
                  <img
                    src="./img/card__catalog.png"
                    alt="img"
                    class="card_botlle"
                  />
                  <p class="text__catalog__card">
                    EsonStyle (ЕсонСтайл) - фитнес<br />резинки
                  </p>
                  <p class="grey__text__catalog">
                    Природная питьевая вода высшего<br />качества,
                    озонированная, рекомендована<br />детям от 3-х лет
                  </p>
                </div>
                <!-- /.sup__info__card -->
                <div class="sub__info__card">
                  <div class="money">
                    <span class="money__discount">220 ₽ </span
                    ><span class="money__nodiscount">399 ₽</span>
                  </div>
                  <!-- /.money -->
                  <div class="btn__money">
                    <p class="plus">+</p>
                    <p class="minus">-</p>
                    <p class="counter">0</p>
                    <a href="#" class="btn__cart"></a>
                  </div>
                  <!-- /.btn__money -->
                </div>
                <!-- /.sub__info__card -->
              </div>
              <!-- /.card__botlle -->
              <div class="card__botlle">
                <div class="sup__info__card">
                  <p class="round__hot"></p>
                  <p class="round_percent">%</p>
                  <img
                    src="./img/card__catalog.png"
                    alt="img"
                    class="card_botlle"
                  />
                  <p class="text__catalog__card">
                    EsonStyle (ЕсонСтайл) - фитнес<br />резинки
                  </p>
                  <p class="grey__text__catalog">
                    Природная питьевая вода высшего<br />качества,
                    озонированная, рекомендована<br />детям от 3-х лет
                  </p>
                </div>
                <!-- /.sup__info__card -->
                <div class="sub__info__card">
                  <div class="money">
                    <span class="money__discount">220 ₽ </span
                    ><span class="money__nodiscount">399 ₽</span>
                  </div>
                  <!-- /.money -->
                  <div class="btn__money">
                    <p class="plus">+</p>
                    <p class="minus">-</p>
                    <p class="counter">0</p>
                    <a href="#" class="btn__cart"></a>
                  </div>
                  <!-- /.btn__money -->
                </div>
                <!-- /.sub__info__card -->
              </div>
              <!-- /.card__botlle -->
              <div class="card__botlle">
                <div class="sup__info__card">
                  <p class="round__hot"></p>
                  <p class="round_percent">%</p>
                  <img
                    src="./img/card__catalog.png"
                    alt="img"
                    class="card_botlle"
                  />
                  <p class="text__catalog__card">
                    EsonStyle (ЕсонСтайл) - фитнес<br />резинки
                  </p>
                  <p class="grey__text__catalog">
                    Природная питьевая вода высшего<br />качества,
                    озонированная, рекомендована<br />детям от 3-х лет
                  </p>
                </div>
                <!-- /.sup__info__card -->
                <div class="sub__info__card">
                  <div class="money">
                    <span class="money__discount">220 ₽ </span
                    ><span class="money__nodiscount">399 ₽</span>
                  </div>
                  <!-- /.money -->
                  <div class="btn__money">
                    <p class="plus">+</p>
                    <p class="minus">-</p>
                    <p class="counter">0</p>
                    <a href="#" class="btn__cart"></a>
                  </div>
                  <!-- /.btn__money -->
                </div>
                <!-- /.sub__info__card -->
              </div>
              <!-- /.card__botlle -->

              <div class="card__botlle">
                <div class="sup__info__card">
                  <p class="round__hot"></p>
                  <p class="round_percent">%</p>
                  <img
                    src="./img/card__catalog.png"
                    alt="img"
                    class="card_botlle"
                  />
                  <p class="text__catalog__card">
                    EsonStyle (ЕсонСтайл) - фитнес<br />резинки
                  </p>
                  <p class="grey__text__catalog">
                    Природная питьевая вода высшего<br />качества,
                    озонированная, рекомендована<br />детям от 3-х лет
                  </p>
                </div>
                <!-- /.sup__info__card -->
                <div class="sub__info__card">
                  <div class="money">
                    <span class="money__discount">220 ₽ </span
                    ><span class="money__nodiscount">399 ₽</span>
                  </div>
                  <!-- /.money -->
                  <div class="btn__money">
                    <p class="plus">+</p>
                    <p class="minus">-</p>
                    <p class="counter">0</p>
                    <a href="#" class="btn__cart"></a>
                  </div>
                  <!-- /.btn__money -->
                </div>
                <!-- /.sub__info__card -->
              </div>
              <!-- /.card__botlle -->
              <div class="card__botlle">
                <div class="sup__info__card">
                  <p class="round__hot"></p>
                  <p class="round_percent">%</p>
                  <img
                    src="./img/card__catalog.png"
                    alt="img"
                    class="card_botlle"
                  />
                  <p class="text__catalog__card">
                    EsonStyle (ЕсонСтайл) - фитнес<br />резинки
                  </p>
                  <p class="grey__text__catalog">
                    Природная питьевая вода высшего<br />качества,
                    озонированная, рекомендована<br />детям от 3-х лет
                  </p>
                </div>
                <!-- /.sup__info__card -->
                <div class="sub__info__card">
                  <div class="money">
                    <span class="money__discount">220 ₽ </span
                    ><span class="money__nodiscount">399 ₽</span>
                  </div>
                  <!-- /.money -->
                  <div class="btn__money">
                    <p class="plus">+</p>
                    <p class="minus">-</p>
                    <p class="counter">0</p>
                    <a href="#" class="btn__cart"></a>
                  </div>
                  <!-- /.btn__money -->
                </div>
                <!-- /.sub__info__card -->
              </div>
              <!-- /.card__botlle -->
              <div class="card__botlle">
                <div class="sup__info__card">
                  <p class="round__hot"></p>
                  <p class="round_percent">%</p>
                  <img
                    src="./img/card__catalog.png"
                    alt="img"
                    class="card_botlle"
                  />
                  <p class="text__catalog__card">
                    EsonStyle (ЕсонСтайл) - фитнес<br />резинки
                  </p>
                  <p class="grey__text__catalog">
                    Природная питьевая вода высшего<br />качества,
                    озонированная, рекомендована<br />детям от 3-х лет
                  </p>
                </div>
                <!-- /.sup__info__card -->
                <div class="sub__info__card">
                  <div class="money">
                    <span class="money__discount">220 ₽ </span
                    ><span class="money__nodiscount">399 ₽</span>
                  </div>
                  <!-- /.money -->
                  <div class="btn__money">
                    <p class="plus">+</p>
                    <p class="minus">-</p>
                    <p class="counter">0</p>
                    <a href="#" class="btn__cart"></a>
                  </div>
                  <!-- /.btn__money -->
                </div>
                <!-- /.sub__info__card -->
              </div>
              <!-- /.card__botlle -->
              <div class="card__botlle">
                <div class="sup__info__card">
                  <p class="round__hot"></p>
                  <p class="round_percent">%</p>
                  <img
                    src="./img/card__catalog.png"
                    alt="img"
                    class="card_botlle"
                  />
                  <p class="text__catalog__card">
                    EsonStyle (ЕсонСтайл) - фитнес<br />резинки
                  </p>
                  <p class="grey__text__catalog">
                    Природная питьевая вода высшего<br />качества,
                    озонированная, рекомендована<br />детям от 3-х лет
                  </p>
                </div>
                <!-- /.sup__info__card -->
                <div class="sub__info__card">
                  <div class="money">
                    <span class="money__discount">220 ₽ </span
                    ><span class="money__nodiscount">399 ₽</span>
                  </div>
                  <!-- /.money -->
                  <div class="btn__money">
                    <p class="plus">+</p>
                    <p class="minus">-</p>
                    <p class="counter">0</p>
                    <a href="#" class="btn__cart"></a>
                  </div>
                  <!-- /.btn__money -->
                </div>
                <!-- /.sub__info__card -->
              </div>
              <!-- /.card__botlle -->
              <div class="card__botlle side_sett">
                <div class="sup__info__card">
                  <p class="round__hot"></p>
                  <p class="round_percent">%</p>
                  <img
                    src="./img/card__catalog.png"
                    alt="img"
                    class="card_botlle"
                  />
                  <p class="text__catalog__card">
                    EsonStyle (ЕсонСтайл) - фитнес<br />резинки
                  </p>
                  <p class="grey__text__catalog">
                    Природная питьевая вода высшего<br />качества,
                    озонированная, рекомендована<br />детям от 3-х лет
                  </p>
                </div>
                <!-- /.sup__info__card -->
                <div class="sub__info__card">
                  <div class="money">
                    <span class="money__discount">220 ₽ </span
                    ><span class="money__nodiscount">399 ₽</span>
                  </div>
                  <!-- /.money -->
                  <div class="btn__money">
                    <p class="plus">+</p>
                    <p class="minus">-</p>
                    <p class="counter">0</p>
                    <a href="#" class="btn__cart"></a>
                    <div class="wrapp_backet">
                      <div class="side__basket">
                        <a href="#" class="basket__catalog"></a>
                        <span class="span_numb_bask">4</span>
                      </div>
                    </div>
                    <!-- /.wrapp_backet -->
                  </div>
                  <!-- /.btn__money -->
                </div>
                <!-- /.sub__info__card -->
              </div>
              <!-- /.card__botlle -->
            </div>
            
            <div class="full">
              <a class="btn__full_catalog">Полный каталог</a>
            </div>
          </div>
          <!-- /.card__catalog -->
          <div class="bg_modal">
            <div class="modal__catalog_wrapp">
              <div class="modal__catalog">
                <div class="wrapp_close">
                  <h3 class="mod__cat">Быстрый заказ</h3>
                  <a href="#" class="close__modal_wind"></a>
                </div>
                <div class="basket__strip">
                  <div class="block_mod_img">
                    <img
                      src="./img/icon/botmod.svg"
                      alt="img"
                      class="bott_mod"
                    />
                  </div>
                  <!-- /.block_mod_img -->
                  <div class="text_mod_strip">
                    <h3 class="title_prod_mod">
                      EsonStyle (ЕсонСтайл)<br />- фитнес резинки
                    </h3>
                    <p class="text_mod_prod">
                      Природная питьевая вода высшего<br />качества,
                      озонированная, рекомендована<br />детям от 3-х лет
                    </p>
                  </div>
                  <!-- /.text_mod_strip -->
                  <div class="counter_mod">
                    <p class="round_lite"></p>
                    <p class="round_lite_proc">%</p>
                    <p class="counter sett_left">0</p>
                    <p class="plus__modal">+</p>
                    <p class="minus__modal">-</p>
                    <div class="money sett__money">
                      <span class="money__discount">220 ₽ </span
                      ><span class="money__nodiscount">399 ₽</span>
                    </div>
                    <!-- /.money -->
                    <a href="#" class="close__strip"></a>
                  </div>
                  <!-- /.counter_mod -->
                </div>
                <!-- /.basket__strip -->
                <div class="basket__strip">
                  <div class="block_mod_img">
                    <img
                      src="./img/icon/botmod.svg"
                      alt="img"
                      class="bott_mod"
                    />
                  </div>
                  <!-- /.block_mod_img -->
                  <div class="text_mod_strip">
                    <h3 class="title_prod_mod">
                      EsonStyle (ЕсонСтайл)<br />- фитнес резинки
                    </h3>
                    <p class="text_mod_prod">
                      Природная питьевая вода высшего<br />качества,
                      озонированная, рекомендована<br />детям от 3-х лет
                    </p>
                  </div>
                  <!-- /.text_mod_strip -->
                  <div class="counter_mod">
                    <p class="round_lite"></p>
                    <p class="round_lite_proc">%</p>
                    <p class="counter sett_left">0</p>
                    <p class="plus__modal">+</p>
                    <p class="minus__modal">-</p>
                    <div class="money sett__money">
                      <span class="money__discount">220 ₽ </span
                      ><span class="money__nodiscount">399 ₽</span>
                    </div>
                    <!-- /.money -->
                    <a href="#" class="close__strip"></a>
                  </div>
                  <!-- /.counter_mod -->
                </div>
                <!-- /.basket__strip -->
                <div class="basket__strip">
                  <div class="block_mod_img">
                    <img
                      src="./img/icon/botmod.svg"
                      alt="img"
                      class="bott_mod"
                    />
                  </div>
                  <!-- /.block_mod_img -->
                  <div class="text_mod_strip">
                    <h3 class="title_prod_mod">
                      EsonStyle (ЕсонСтайл)<br />- фитнес резинки
                    </h3>
                    <p class="text_mod_prod">
                      Природная питьевая вода высшего<br />качества,
                      озонированная, рекомендована<br />детям от 3-х лет
                    </p>
                  </div>
                  <!-- /.text_mod_strip -->
                  <div class="counter_mod">
                    <p class="round_lite"></p>
                    <p class="round_lite_proc">%</p>
                    <p class="counter sett_left">0</p>
                    <p class="plus__modal">+</p>
                    <p class="minus__modal">-</p>
                    <div class="money sett__money">
                      <span class="money__discount">220 ₽ </span
                      ><span class="money__nodiscount">399 ₽</span>
                    </div>
                    <!-- /.money -->
                    <a href="#" class="close__strip"></a>
                  </div>
                  <!-- /.counter_mod -->
                </div>
                <!-- /.basket__strip -->
                <div class="basket__strip">
                  <div class="block_mod_img">
                    <img
                      src="./img/icon/botmod.svg"
                      alt="img"
                      class="bott_mod"
                    />
                  </div>
                  <!-- /.block_mod_img -->
                  <div class="text_mod_strip">
                    <h3 class="title_prod_mod">
                      EsonStyle (ЕсонСтайл)<br />- фитнес резинки
                    </h3>
                    <p class="text_mod_prod">
                      Природная питьевая вода высшего<br />качества,
                      озонированная, рекомендована<br />детям от 3-х лет
                    </p>
                  </div>
                  <!-- /.text_mod_strip -->
                  <div class="counter_mod">
                    <p class="round_lite"></p>
                    <p class="round_lite_proc">%</p>
                    <p class="counter sett_left">0</p>
                    <p class="plus__modal">+</p>
                    <p class="minus__modal">-</p>
                    <div class="money sett__money">
                      <span class="money__discount">220 ₽ </span
                      ><span class="money__nodiscount">399 ₽</span>
                    </div>
                    <!-- /.money -->
                    <a href="#" class="close__strip"></a>
                  </div>
                  <!-- /.counter_mod -->
                </div>
                <!-- /.basket__strip -->
              </div>
              <!-- /.modal__catalog -->
              <div class="form__modal">
                <form action="#" class="form_bran_pan">
                  <div class="cont_input">
                    <input
                      type="text"
                      class="panel_bran"
                      placeholder="Ваше имя"
                    />
                    <input
                      type="text"
                      class="panel_bran"
                      placeholder="Ваш телефон"
                    />
                  </div>
                  <!-- /.cont_input -->
                  <div class="btn__ckeckid">
                    <a href="" class="btn_panel_bran_open">Перезвоните мне</a>
                    <div class="check_box">
                      <label class="label"
                        ><input type="checkbox" class="checkbox" />
                        <span class="fake"></span>
                        <span class="text_chek_panel"
                          ><span class="text__check"
                            >Согласие на обработку </span
                          ><span class="text__check_sub"
                            >персональных данных</span
                          ></span
                        ></label
                      >
                    </div>
                  </div>
                </form>
                <!-- /.form_bran_panel -->
              </div>
            </div>
            <!-- /.modal__catalog_wrapp -->
          </div>
          <div class="bg__modal_two">
            <div class="modal_thank">
              <a href="#" class="close_thank"></a>
              <img
                src="./img/icon/shoppingcartBig.svg"
                alt=""
                class="cart_thank"
              />
              <p class="text_thank">
                Спасибо, Ваш товар добавлен<br />в корзину!
              </p>
              <div class="block_btn_thank">
                <a href="" class="proceed">Продолжить покупки</a>
                <a href="" class="issue">Оформить заказ</a>
              </div>
            </div>
          </div>
          <div class="modal__free_bg">
            <div class="wrapp__free">
              <div class="modal__free">
                <span class="on"></span>
                <p class="text_on">Заявка принята</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.catalog -->
      <section class="our__service">
        <div class="container">
          <div class="block_panel-cont">
            <div class="wrapp__panel">
              <div class="block__panel_our">
                <div class="block__content">
                  <div class="text__content">
                    <h2 class="title__our">Вулканическое происхождение</h2>
                    <p class="text__our">
                      Слабоминерализованная вода заволжского водоносного горизонта
                      имеет сульфанный<br />натриево-магниево-кальциевый состав со
                      слабощелочной реакцией среды (pH 7,3 - 7,5) и<br />минерализацией
                      в диапазоне 3,5 - 3,8 г/дм3.
                    </p>
                    <div class="panel__tabs">
                      <div class="tab set__tab__one">
                        <p class="namb__title">1500</p>
                        <p class="text__tab">Лет в недрах</p>
                      </div>
                      <div class="tab">
                        <p class="namb__title">8-10 км</p>
                        <p class="text__tab">глубина скважин</p>
                      </div>
                      <div class="tab sett-tab">
                        <p class="namb__title">60</p>
                        <p class="text__tab">минералов в составе</p>
                      </div>
                    </div>
                    <!-- /.panel__tabs -->
                  </div>
                  <!-- /.text__content -->
                </div>
                <!-- /.block__content -->
                <div class="block__img__panel"></div>
                <!-- /.block__img__panel -->
              </div>
              <!-- /.block__panel_our -->
            </div>
          </div>
          <!-- /.block_panel-cont -->
          <div class="our__servic">
            <h2 class="title__card__prod">Наши услуги</h2>
            <div class="card__our">
              <div class="strip__one">
                <a class="link_site" href="./spill.html"
                  ><div class="card__our__prod">
                    <div class="img__prod">
                      <img
                        src="./img/icon/water-bottle1.svg"
                        alt=""
                        class="prod__img"
                      />
                      <span class="back_round">%</span>
                    </div>
                    <div class="cont__prod">
                      <h4 class="title__prod">Брендирование воды</h4>
                      <p class="text__prod">
                        Фирменные бутылки с водой - это проверенный<br />способ
                        повысить свой профессиональный имидж и<br />бренд.
                      </p>
                    </div>
                  </div>
                  <!-- /.card__our__prod --></a
                >
                <div class="card__our__prod">
                  <div class="img__prod">
                    <img
                      src="./img/icon/water1.svg"
                      alt=""
                      class="prod__img"
                    />
                  </div>
                  <div class="cont__prod">
                    <h4 class="title__prod">Контрактный розлив</h4>
                    <p class="text__prod">
                      Планируете наладить контрактное производство<br />напитков
                      на мощностях партнеров? Тогда это<br />предложение для
                      вас.
                    </p>
                  </div>
                </div>
                <!-- /.card__our__prod -->
                <div class="card__our__prod">
                  <div class="img__prod">
                    <img src="./img/icon/pump1.svg" alt="" class="prod__img" />
                  </div>
                  <div class="cont__prod">
                    <h4 class="title__prod">Вода на розлив</h4>
                    <p class="text__prod">
                      Так как в этом случае нет нужды устанавливать<br />дорогостоящее
                      и сложное в обслуживании<br />водоочистное оборудование.
                    </p>
                    <div class="link__stripe">
                      <a href="#" class="prod">Артезианская </a
                      ><a href="#" class="prod strip">СТМ</a>
                    </div>
                  </div>
                </div>
                <!-- /.card__our__prod -->
                <div class="card__our__prod">
                  <div class="img__prod">
                    <img
                      src="./img/icon/plastic1.svg"
                      alt=""
                      class="prod__img"
                    />
                  </div>
                  <div class="cont__prod">
                    <h4 class="title__prod">Изготовление ПЭТ тары</h4>
                    <p class="text__prod">
                      Бутылки из прозрачного зеленого стекла для вина и<br />других
                      жидкостей оптом и под заказ. Винная<br />бутылка 0,75
                      литра (зеленое стекло).
                    </p>
                    <div class="link__strip__two">
                      <a href="#" class="strip__prod">Бутылки оптом </a
                      ><a href="#" class="strip__prod">19 литров </a
                      ><a href="#" class="strip__prod">5 литров</a>
                    </div>
                  </div>
                </div>
                <!-- /.card__our__prod -->
                <div class="card__our__prod sett__marg">
                  <div class="img__prod">
                    <img
                      src="./img/icon/water1.svg"
                      alt=""
                      class="prod__img"
                    />
                  </div>
                  <div class="cont__prod">
                    <h4 class="title__prod">Вода оптом</h4>
                    <p class="text__prod">
                      Бутылки из прозрачного зеленого стекла для вина и<br />других
                      жидкостей оптом и под заказ. Винная<br />бутылка 0,75
                      литра (зеленое стекло).
                    </p>
                    <div class="prod__center">
                      <div class="left__strip">
                        <a href="#" class="strip__prod">Минеральная </a
                        ><a href="#" class="strip__prod">Газированная </a
                        ><a href="#" class="strip__prod">Артезианская</a>
                      </div>
                      <div class="right__strip">
                        <a href="#" class="strip__prod">Элитная </a
                        ><a href="#" class="strip__prod">5 литров </a
                        ><a href="#" class="strip__prod">19 литров</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card__our__prod -->
                <div class="card__our__prod">
                  <div class="img__prod">
                    <img
                      src="./img/icon/water1.svg"
                      alt=""
                      class="prod__img"
                    />
                  </div>
                  <div class="cont__prod">
                    <h4 class="title__prod">Контрактный розлив</h4>
                    <p class="text__prod">
                      Бутылки из прозрачного зеленого стекла для вина и<br />других
                      жидкостей оптом и под заказ. Винная<br />бутылка 0,75
                      литра (зеленое стекло).
                    </p>
                    <div class="prod__center">
                      <div class="left__strip">
                        <a href="#" class="strip__prod">Лимонад </a
                        ><a href="#" class="strip__prod">Квас</a>
                      </div>
                      <div class="right__strip">
                        <a href="#" class="strip__prod">Морс </a
                        ><a href="#" class="strip__prod">Безалкогольные</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card__our__prod -->
                <div class="card__our__prod sett__mard_b">
                  <div class="img__prod">
                    <img
                      src="./img/icon/water-bottle1.svg"
                      alt=""
                      class="prod__img"
                    />
                    <span class="back_round">%</span>
                  </div>
                  <div class="cont__prod">
                    <h4 class="title__prod">Вода на розлив</h4>
                    <p class="text__prod">
                      Бутылки из прозрачного зеленого стекла для вина и<br />других
                      жидкостей оптом и под заказ. Винная<br />бутылка 0,75
                      литра
                    </p>
                    <div class="link__stripe">
                      <a href="#" class="prod">Берегиня</a>
                    </div>
                  </div>
                </div>
                <!-- /.card__our__prod -->
              </div>
              <!-- /.strip__one -->
              
              </div>
            </div>
            <!-- /.card__our -->
          </div>
          <!-- /.our__servic -->
        </div>
      </section>
      <!-- /.our__service -->

      <section class="factory__showing">
        <div class="container">
          <div class="block__ifo">
            <h1 class="title__show">Завод минеральных вод «Берегиня»</h1>
            <div class="wrapp__ifo">
              <div class="block__ifo__left">
                <p class="text_ifo_block">
                  Завод минеральных вод «Берегиня» был введен в эксплуатацию в
                  1995 году на месте<br />высоко минерализированной скважины №
                  3/78 глубиной 600 метров — уникального<br />природного
                  источника, геологический возраст которого — 400-345 млн. лет
                  —<br />соответствует Девонскому периоду Палеозойской эры. На
                  базе данного<br />месторождения с 1937 года успешно
                  функционирует санаторий «Раменское»,<br />специализирующийся
                  на лечении различных заболеваний с применением<br />бальнеологических
                  процедур.
                </p>
                <img src="./img/Rectangle106.png" alt="img" class="ifo__img" />
              </div>
              <!-- /.block__ifo__left -->
              <div class="block__ifo__right">
                <p class="text_ifo_block">
                  Вода из этого месторождения является основой для производства
                  минеральных и<br />лечебно-столовых вод «Берегиня» и
                  «Берегиня-1» с различной степенью<br />минерализации. Впервые
                  в Подмосковье для практического использования получена<br />минеральная
                  вода в большом количестве при самоизливе, не требующая<br />принудительной
                  подачи. На том же месте в 2005 году введена в эксплуатацию<br />артезианская
                  скважина ГВК-1 (46211725) глубиной 100 м.
                </p>
                <div class="sup__img__ifo">
                  <img
                    src="./img/Rectangle107.png"
                    alt=""
                    class="ifo_sup_img"
                  />
                  <img
                    src="./img/Rectangle108.png"
                    alt=""
                    class="ifo_sup_img"
                  />
                </div>
                <div class="sub__img__ifo">
                  <img
                    src="./img/Rectangle109.png"
                    alt=""
                    class="ifo_sub_img"
                  />
                  <img
                    src="./img/Rectangle110.png"
                    alt=""
                    class="ifo_sub_img"
                  />
                </div>
              </div>
              <!-- /.block__ifo__right -->
            </div>
            <p class="text__all">
              Технология приготовления питьевой воды имеет значительное
              преимущество перед существующими технологиями, применяемыми на
              городских водозаборных станциях, т.к.<br />не предусматривает
              использование химических реагентов. Подземные воды, каптируемые
              скважинами (глубиной 600 м и 98,5 м), с целью окисления
              присутствующих в них<br />железа и удаления газов, улучшения
              органолептических показателей и удаления патогенных
              микроорганизмов подвергаются очистке на кварцевых, угольных
              фильтрах и<br />фильтрах обезжелезования с последующей обработкой
              бактерицидными лампами,и розливаются в 0,6л, 1л, 1,5л, 2л и 19 л
              тару в соответствии с Санитарно-гигиеническими<br />требованиями
              РФ. На последней ступени подготовки воды перед непосредственным
              розливом используются фильтры тонкой очистки толщиной 1 микрон.<br />Все
              стадии производства проходят контроль в Российских и Московских
              органах стандартизации, лицензирования и сертификации.
            </p>
          </div>
          <div class="block__card__factory">
            <div class="card__factory">
              <p class="text__factory">Санаторий «Раменское»</p>
              <div class="wrapp_med">
                <a href="" class="btn__factory">Подробнее</a>
              </div>
            </div>
            <!-- /.card__factory -->
            <div class="card__factory__one">
              <p class="text__factory">Скважина завода «Берегиня»</p>
              <div class="wrapp_med">
                <a href="" class="btn__factory">Подробнее</a>
              </div>
            </div>
            <!-- /.card__factory -->
            <div class="card__factory__two">
              <p class="text__factory">
                Цех по производству воды в <br />бутылках 0,6л - 1,5л
              </p>
              <div class="wrapp_med">
                <a href="" class="btn__factory">Подробнее</a>
              </div>
            </div>
            <!-- /.card__factory -->
            <div class="card__factory__free">
              <p class="text__factory">
                Цех по производству воды в <br />бутылях 5л
              </p>
              <div class="wrapp_med">
                <a href="" class="btn__factory">Подробнее</a>
              </div>
            </div>
            <!-- /.card__factory -->
            <div class="card__factory__four">
              <p class="text__factory">
                Цех по производству воды в <br />бутылях 19л
              </p>
              <div class="wrapp_med">
                <a href="" class="btn__factory">Подробнее</a>
              </div>
            </div>
            <!-- /.card__factory -->
            <div class="card__factory_five">
              <p class="text__factory">
                Артезианская скважина завода <br />«Берегиня» ГВК № 1
              </p>
              <div class="wrapp_med">
                <a href="" class="btn__factory">Подробнее</a>
              </div>
            </div>
            <!-- /.card__factory -->
          </div>
          <!-- /.block__card__factory -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.factory__showing -->

      <section class="our__clients">
        <div class="container">
          <div class="panel__people__wrapp">
            <h1 class="title__people">Отзывы наших клиентов</h1>
            <div class="panel__people">
              <div class="panel__people__left">
                <div class="left__people">
                  <img src="./img/Igor.png" alt="img" class="people" />
                  <img
                    src="./img/icon/123.svg"
                    alt="icon"
                    class="icon__people"
                  />
                </div>
                <!-- /.left__people -->
                <div class="info__people">
                  <h2 class="title__people_panel">Игорь Рыбаков</h2>
                  <p class="sub__text__people">
                    совладелец корпорации Технониколь и<br />сооснователь
                    Рыбаков Фонд.
                  </p>
                  <p class="all__people__text sett__text_peop">
                    В особенности же постоянный количественный рост и сфера
                    нашей<br />активности влечет за собой процесс внедрения и
                    модернизации<br />системы обучения кадров, соответствует
                    насущным потребностям.
                  </p>
                  <p class="all__people__text">
                    Значимость этих проблем настолько очевидна, что начало<br />повседневной
                    работы по формированию позиции требуют<br />определения и
                    уточнения соответствующий условий активизации.
                  </p>
                </div>
                <!-- /.info__people -->
              </div>
              <!-- /.panel__people__left -->
              <div class="wrapp_bg">
                <div class="panel__people__right bg__sett">
                  <div class="block__people__Left">
                    <div class="block__oscar">
                      <div class="oscar__img">
                        <img
                          src="./img/icon/1234.svg"
                          alt="icon"
                          class="icon__oscar"
                        />
                      </div>
                      <p class="text__youtube">
                        Смотреть видеоотзыв<br />на youtube.com
                      </p>
                      <div class="content__oscar">
                        <h3 class="title_pos">Оскар Хартман</h3>
                        <p class="text__pos">
                          серийный предприниматель, сооснователь<br />проектов
                          KupiVIP.ru, Carprice, CarFix
                        </p>
                        <div class="youtube__shape">
                          <div class="shape__one">
                            <div class="shape__two">
                              <div class="shape__free">
                                <a href="#" class="play__shape"></a>
                              </div>
                              <!-- /.shape__free -->
                            </div>
                            <!-- /.shape__two -->
                          </div>
                          <!-- /.shape__one -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.panel__people__right -->
              </div>
              <!-- /.wrapp_bg -->
            </div>
            <!-- /.panel__people -->
          </div>
          <!-- /.panel__people -->
        </div>
      </section>
      <!-- /.our__clients -->

      <section class="news">
        <div class="container">
          <h1 class="new__title">Интересные статьи</h1>
          <div class="block__card__news">
            <a href="./typography.html"
              ><div class="card__news">
                <div class="block__img__new">
                  <img
                    src="./img/Rectangle28.png"
                    alt="img"
                    class="new__img"
                  />
                </div>
                <div class="new__cont__card">
                  <p class="title__new__cont">
                    Горячая вода — секрет вечной<br />молодости
                  </p>
                  <p class="text__cont__new">
                    Человеческий организм на 75 – 80% состоит из<br />воды. Она
                    продлевает жизнь и восстанавливает<br />здоровье.
                  </p>
                </div>
              </div></a
            >
            <div class="card__news">
              <div class="block__img__new">
                <img src="./img/Rectangle29.png" alt="img" class="new__img" />
              </div>
              <div class="new__cont__card">
                <p class="title__new__cont">
                  Горячая вода — секрет вечной<br />молодости
                </p>
                <p class="text__cont__new">
                  Человеческий организм на 75 – 80% состоит из<br />воды. Она
                  продлевает жизнь и восстанавливает<br />здоровье.
                </p>
              </div>
            </div>
            <div class="card__news">
              <div class="block__img__new">
                <img src="./img/Rectangle30.png" alt="img" class="new__img" />
              </div>
              <div class="new__cont__card">
                <p class="title__new__cont">
                  Горячая вода — секрет вечной<br />молодости
                </p>
                <p class="text__cont__new">
                  Человеческий организм на 75 – 80% состоит из<br />воды. Она
                  продлевает жизнь и восстанавливает<br />здоровье.
                </p>
              </div>
            </div>
            <div class="card__news">
              <div class="block__img__new">
                <img src="./img/Rectangle31.png" alt="img" class="new__img" />
              </div>
              <div class="new__cont__card">
                <p class="title__new__cont">
                  Горячая вода — секрет вечной<br />молодости
                </p>
                <p class="text__cont__new">
                  Человеческий организм на 75 – 80% состоит из<br />воды. Она
                  продлевает жизнь и восстанавливает<br />здоровье.
                </p>
              </div>
            </div>
            <div class="card__news">
              <div class="block__img__new">
                <img src="./img/Rectangle32.png" alt="img" class="new__img" />
              </div>
              <div class="new__cont__card">
                <p class="title__new__cont">
                  Горячая вода — секрет вечной<br />молодости
                </p>
                <p class="text__cont__new">
                  Человеческий организм на 75 – 80% состоит из<br />воды. Она
                  продлевает жизнь и восстанавливает<br />здоровье.
                </p>
              </div>
            </div>
            <div class="card__news">
              <div class="block__img__new">
                <img src="./img/Rectangle34.png" alt="img" class="new__img" />
              </div>
              <div class="new__cont__card">
                <p class="title__new__cont">
                  Горячая вода — секрет вечной<br />молодости
                </p>
                <p class="text__cont__new">
                  Человеческий организм на 75 – 80% состоит из<br />воды. Она
                  продлевает жизнь и восстанавливает<br />здоровье.
                </p>
              </div>
            </div>
          </div>
          <!-- /.block__card__news -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.news -->
    </main>

    <footer class="footer">
      <div class="container">
        <div class="block__social__info">
          <div class="about__company">
            <h4 class="about__title">О компании</h4>
            <div class="links__social">
              <div class="left__social">
                <a href="#" class="link_soc">Каталог </a
                ><a href="#" class="link_soc">Акции </a
                ><a href="#" class="link_soc">Услуги</a>
              </div>
              <!-- /.left__social -->
              <div class="right__social">
                <a href="#" class="link_soc">О нас </a
                ><a href="#" class="link_soc">Новости </a
                ><a href="#" class="link_soc">Контакты</a>
              </div>
              <!-- /.right__social -->
              <div class="free__social">
                <a href="#" class="link_soc">Доставка и оплата </a
                ><a href="#" class="link_soc">Гарантии и возврат </a
                ><a href="#" class="link_soc">Вакансии</a>
              </div>
            </div>
            <!-- /.links__social -->
          </div>
          <!-- /.about__company -->
          <div class="about__company">
            <h4 class="about__title">Наши услуги</h4>
            <div class="links__social">
              <div class="left__social">
                <a href="#" class="link_soc">Брендирование воды </a
                ><a href="#" class="link_soc">Контрактный розлив </a
                ><a href="#" class="link_soc">Вода на розлив </a
                ><a href="#" class="link_soc">Бренды</a>
              </div>
              <!-- /.left__social -->
              <div class="right__social">
                <a href="#" class="link_soc">Изготовление пэт тары </a
                ><a href="#" class="link_soc">Напитки оптом </a
                ><a href="#" class="link_soc">Вода оптом</a>
              </div>
              <!-- /.right__social -->
            </div>
            <!-- /.links__social -->
          </div>
          <!-- /.about__company -->
        <div class="wrapp_block_med">
          <div class="info__company">
            <p class="text__company">
              © 2016—2019,<br />ООО «Берегиня», официальный<br />сайт, лицензия
              Минкомсвязи<br />№ 144842 от 8 июня 2016 г.
            </p>
          </div>
          <!-- /.info__company -->
          <div class="wrapp_med_soc">
            <div class="social__media">
              <a href="#" class="media"></a> <a href="#" class="media__face"></a>
              <a href="#" class="media__inst"></a>
              <a href="#" class="media__you"></a>
              <a href="#" class="media__ok"></a>
            </div>
            <!-- /.social__media -->
          </div>
          <!-- /.wrapp_med_soc -->
        </div>
        </div>
        <!-- /.block__social__info -->
        <div class="sub__footer">
          <div class="wrapp__sub">
            <div class="logo__footer">
              <img
                src="./img/icon/Logofooter.svg"
                alt="img"
                class="logo_foot"
              />
            </div>
            <div class="input__block">
              <input type="text" class="input__footer" />
            </div>
            <div class="sub__footer_adress">
              <img
                src="./img/icon/Group3.svg"
                alt="icon"
                class="adress__footer"
              />
              <p class="text__adress__footer">
                Московская область,<br /><strong>Раменский р-н, пос.</strong
                ><br /><strong>санатория «Раменское»</strong>
              </p>
            </div>
            <div class="call__footer">
              <img
                src="./img/icon/interface3.svg"
                alt="img"
                class="call__icon__footer"
              />
              <p class="numb__call_footer sett__footer">8 (903) 578-85-77</p>
            </div>
          </div>
        </div>
        <!-- /.sub__footer -->
      </div>
      <!-- /.container -->
    </footer>
  </body>
</html>
