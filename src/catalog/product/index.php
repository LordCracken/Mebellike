<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Гостинная "Иррида"</title>
  <!-- Стили -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include '../../blocks/header.php'; ?>
  <!-- Шапка -->
  <div class="container">
    <div class="product-container">
      <div class="menu">
        <nav class="site-nav">
          <a href="../../" class="link site-nav__link">Главная</a> / <a href="../" class="link site-nav__link">Каталог
            товаров</a> / <span class="site-nav__current">Гостинная "Иррида"</span>
        </nav>
        <?php include '../../blocks/menu.php'; ?>
      </div>
      <!-- /.menu -->
      <main class="product">
        <h1 class="product__title">
          Гостинная “Иррида”
        </h1>
        <div class="product__hero">
          <div class="product__img">
            <div class="rating-bar">
              <span class="icon-star-full active-star"></span>
              <span class="icon-star-full active-star"></span>
              <span class="icon-star-full active-star"></span>
              <span class="icon-star-full"></span>
              <span class="icon-star-full"></span>
            </div>
            <div class="prev-arrow"><span class="icon-ctrl left-arrow slider__arrow"></span></div> 
            <div class="next-arrow"><span class="icon-ctrl right-arrow slider__arrow"></span></div> 
            <div class="product__slider">
              <span class="slider__img">
                <img src="img/product.jpg" alt="Товар">
              </span>
              <span class="slider__img">
                <img src="img/product.jpg" alt="Товар">
              </span>
              <span class="slider__img">
                <img src="img/product.jpg" alt="Товар">
              </span>
            </div>
            <div class="product__nav">
              <span class="product-nav__img"><img src="img/product.jpg" alt="Товар"></span>
              <span class="product-nav__img"><img src="img/product.jpg" alt="Товар"></span>
              <span class="product-nav__img"><img src="img/product.jpg" alt="Товар"></span>
            </div>
          </div>
          <!-- /.product__img -->
          <div class="product-hero__text">
            <p class="product-hero__paragraph">
              Не следует, однако забывать, что начало повседневной работы по формированию позиции позволяет оценить
              значение существенных финансовых и административных условий. Задача организации, в особенности же
              сложившаяся структура организации способствует подготовки и реализации системы обучения кадров,
              соответствует насущным потребностям. Значимость этих проблем настолько очевидна, что рамки и место
              обучения
              кадров играет важную роль структура организации способствует подготовки и реализации системы обучения
            </p>
            <div class="product-hero__buying">
              <div class="product__price">
                <span class="product-price__text">Цена за ед.</span>
                <span class="product-price__value">
                  <span class="price__current">
                    89 руб.
                  </span>
                  <span class="price__old">
                    100 руб
                  </span>
                </span>
              </div>
              <div class="amount-counter">
                <span class="amount__text">
                  Количество
                </span>
                <div class="amount__settings">
                  <button class="amount__btn minus-btn">-</button>
                  <input type="text" class="amount">
                  <button class="amount__btn plus-btn">+</button>
                </div>
              </div>
              <div class="buying__buttons">
                <button class="btn primary buy-btn">Купить в один клик</button>
                <button class="btn major cart-btn">В корзину</button>
              </div>
            </div>
          </div>
          <!-- /.product-hero__text -->
        </div>
        <!-- /.product__hero -->
        <div class="product__detail ">
          <div class="lever">
            <span class="product__description turn-on">
              Описание
            </span>
            <span class="product__stats">
              Характеристики
            </span>
          </div>
          <p class="description__text displayed">
            Не следует, однако забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности
            обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития.
            Идейные соображения высшего порядка, а также рамки и место обучения кадров в значительной степени
            обуславливает создание существенных финансовых и административных условий. Задача организации, в особенности
            же консультация с широким активом требуют определения и уточнения модели развития. Задача
          </p>
          <p class="stats__text">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, magni, dolor explicabo architecto ipsam
            recusandae reiciendis ducimus, libero odit similique saepe magnam. Aut corporis, facere nihil esse eligendi
            odio? Quisquam tenetur similique asperiores voluptatem minus temporibus earum consectetur vitae dolorum!
            Dolorum nulla, totam quisquam beatae excepturi, necessitatibus itaque amet consectetur adipisci voluptates
            minus architecto aliquam in.
          </p>
        </div>
        <!-- /.product__secondary-text -->
        <div class="relate-products">
          <h2 class="relate__title">
            Похожие товары
          </h2>
          <div class="relate-cards">
            <div class="relate-card__wrap">
              <a href="#" class="relate-link">
                <div class="relate-card">
                  <div class="relate__img">
                    <img src="img/related/related-product.jpg" alt="Товар">
                  </div>
                  <div class="relate__text">
                    <h3 class="relate-card__title">
                      Кухня “Велес”
                    </h3>
                    <div class="relate-card__stats">
                      <span class="relate-rating">
                        <span class="icon-star-full active-star"></span>
                        <span class="icon-star-full active-star"></span>
                        <span class="icon-star-full active-star"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </span>
                      <span class="relate__prices">
                        <span class="relate-price__actual">89 руб.</span>
                        <span class="relate-price__old">100 руб</span>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- /.relate-card -->
              </a>
            </div>
            <!-- /.relate-card__wrap -->
            <div class="relate-card__wrap">
              <a href="#" class="relate-link">
                <div class="relate-card">
                  <div class="relate__img">
                    <img src="img/related/related-product.jpg" alt="Товар">
                  </div>
                  <div class="relate__text">
                    <h3 class="relate-card__title">
                      Кухня “Велес”
                    </h3>
                    <div class="relate-card__stats">
                      <span class="relate-rating">
                        <span class="icon-star-full active-star"></span>
                        <span class="icon-star-full active-star"></span>
                        <span class="icon-star-full active-star"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </span>
                      <span class="relate__prices">
                        <span class="relate-price__actual">89 руб.</span>
                        <span class="relate-price__old">100 руб</span>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- /.relate-card -->
              </a>
            </div>
            <!-- /.relate-card__wrap -->
            <div class="relate-card__wrap">
              <a href="#" class="relate-link">
                <div class="relate-card">
                  <div class="relate__img">
                    <img src="img/related/related-product.jpg" alt="Товар">
                  </div>
                  <div class="relate__text">
                    <h3 class="relate-card__title">
                      Кухня “Велес”
                    </h3>
                    <div class="relate-card__stats">
                      <span class="relate-rating">
                        <span class="icon-star-full active-star"></span>
                        <span class="icon-star-full active-star"></span>
                        <span class="icon-star-full active-star"></span>
                        <span class="icon-star-full"></span>
                        <span class="icon-star-full"></span>
                      </span>
                      <span class="relate__prices">
                        <span class="relate-price__actual">89 руб.</span>
                        <span class="relate-price__old">100 руб</span>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- /.relate-card -->
              </a>
            </div>
            <!-- /.relate-card__wrap -->
          </div>
          <!-- /.relate-cards -->
        </div>
        <!-- /.relate-products -->
      </main>
      <!-- /.product -->
    </div>
    <!-- /.product-container -->
  </div>
  <!-- /.container -->

  <?php include '../../blocks/footer.php'; ?>
  <!-- Подвал -->

  <!-- Скрипты -->
  <!-- Библиотеки -->
  <script src="../../js/jquery-3.4.1.min.js"></script>
  <script src="../../js/jquery.validate.min.js"></script>
  <script src="https://unpkg.com/imask"></script>
  <script src="../../js/wow.min.js"></script>
  <script src="../../js/slick.min.js"></script>
  <!-- Интерфейс -->
  <script src="js/slider.js"></script>
  <script src="js/ui.js"></script>
  <script src="../../js/modal.js"></script>
  <script src="../../js/forms.js"></script>

</body>

</html>