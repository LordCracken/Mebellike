<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Каталог</title>
  <!-- Стили -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include '../blocks/header.php'; ?>
  <!-- Шапка -->
  <div class="container">
    <div class="catalog-container">
      <div class="menu">
        <nav class="site-nav">
          <a href="../" class="link site-nav__link">Главная</a> / <span class="site-nav__current">Каталог товаров</span>
        </nav>
        <?php include '../blocks/menu.php'; ?>
      </div>
      <!-- /.menu -->
      <!-- Меню -->
      <main class="catalog">
        <h1 class="catalog__title">
          Каталог товаров
        </h1>
        <div class="sort">
          <div class="sort-wrap">
            <span class="sort__text">Сортировать по:</span>
            <div class="sort__buttons">
              <button class="sort__btn">Названию</button>
              <button class="sort__btn">Цене</button>
              <button class="sort__btn">Новинки</button>
            </div>
          </div>
          <!-- /.sort-wrap -->
        </div>
        <div class="catalog__cards">
          <div class="card-wrap">
            <div class="catalog__product">
              <div class="product__img">
                <a class="img-link" href="product/"><img src="img/products/catalog-product-img.jpg" alt="Товар"
                    class="img"></a>
              </div>
              <div class="product__text">
                <h2 class="product__title">
                  Кухня “Велес”
                </h2>
                <div class="product__stats">
                  <span class="rating">
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </span>
                  <span class="price">
                    <span class="actual-price">89 руб.</span>
                    <span class="old-price">100 руб</span>
                  </span>
                </div>
                <div class="additional">
                  <div class="buying">
                    <div class="buy__counter">
                      <div class="amount-counter">
                        <button class="btn amount-btn minus-btn">
                          -
                        </button>
                        <input type="text" pattern="^[0-9]+$" value="0" class="amount">
                        <button class="btn amount-btn plus-btn">
                          +
                        </button>
                      </div>
                      <button class="btn btn-cart major">
                        <span class="icon-briefcase"></span>
                      </button>
                    </div>
                  </div>
                  <button class="btn btn-buy">Купить в один клик</button>
                </div>
                <!-- /.additional -->
              </div>
              <!-- /.product__text -->
            </div>
            <!-- /.catalog__product -->
          </div>
          <!-- /.card-wrap -->
          <div class="card-wrap">
            <div class="catalog__product">
              <div class="product__img">
                <a class="img-link" href="product/"><img src="img/products/catalog-product-img.jpg" alt="Товар"
                    class="img"></a>
              </div>
              <div class="product__text">
                <h2 class="product__title">
                  Кухня “Велес”
                </h2>
                <div class="product__stats">
                  <span class="rating">
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </span>
                  <span class="price">
                    <span class="actual-price">89 руб.</span>
                    <span class="old-price">100 руб</span>
                  </span>
                </div>
                <div class="additional">
                  <div class="buying">
                    <div class="buy__counter">
                      <div class="amount-counter">
                        <button class="btn amount-btn minus-btn">
                          -
                        </button>
                        <input type="text" pattern="^[0-9]+$" value="0" class="amount">
                        <button class="btn amount-btn plus-btn">
                          +
                        </button>
                      </div>
                      <button class="btn btn-cart major">
                        <span class="icon-briefcase"></span>
                      </button>
                    </div>
                  </div>
                  <button class="btn btn-buy">Купить в один клик</button>
                </div>
                <!-- /.additional -->
              </div>
              <!-- /.product__text -->
            </div>
            <!-- /.catalog__product -->
          </div>
          <!-- /.card-wrap -->
          <div class="card-wrap">
            <div class="catalog__product">
              <div class="product__img">
                <a class="img-link" href="product/"><img src="img/products/catalog-product-img.jpg" alt="Товар"
                    class="img"></a>
              </div>
              <div class="product__text">
                <h2 class="product__title">
                  Кухня “Велес”
                </h2>
                <div class="product__stats">
                  <span class="rating">
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </span>
                  <span class="price">
                    <span class="actual-price">89 руб.</span>
                    <span class="old-price">100 руб</span>
                  </span>
                </div>
                <div class="additional">
                  <div class="buying">
                    <div class="buy__counter">
                      <div class="amount-counter">
                        <button class="btn amount-btn minus-btn">
                          -
                        </button>
                        <input type="text" pattern="^[0-9]+$" value="0" class="amount">
                        <button class="btn amount-btn plus-btn">
                          +
                        </button>
                      </div>
                      <button class="btn btn-cart major">
                        <span class="icon-briefcase"></span>
                      </button>
                    </div>
                  </div>
                  <button class="btn btn-buy">Купить в один клик</button>
                </div>
                <!-- /.additional -->
              </div>
              <!-- /.product__text -->
            </div>
            <!-- /.catalog__product -->
          </div>
          <!-- /.card-wrap -->
          <div class="card-wrap">
            <div class="catalog__product">
              <div class="product__img">
                <a class="img-link" href="product/"><img src="img/products/catalog-product-img.jpg" alt="Товар"
                    class="img"></a>
              </div>
              <div class="product__text">
                <h2 class="product__title">
                  Кухня “Велес”
                </h2>
                <div class="product__stats">
                  <span class="rating">
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </span>
                  <span class="price">
                    <span class="actual-price">89 руб.</span>
                    <span class="old-price">100 руб</span>
                  </span>
                </div>
                <div class="additional">
                  <div class="buying">
                    <div class="buy__counter">
                      <div class="amount-counter">
                        <button class="btn amount-btn minus-btn">
                          -
                        </button>
                        <input type="text" pattern="^[0-9]+$" value="0" class="amount">
                        <button class="btn amount-btn plus-btn">
                          +
                        </button>
                      </div>
                      <button class="btn btn-cart major">
                        <span class="icon-briefcase"></span>
                      </button>
                    </div>
                  </div>
                  <button class="btn btn-buy">Купить в один клик</button>
                </div>
                <!-- /.additional -->
              </div>
              <!-- /.product__text -->
            </div>
            <!-- /.catalog__product -->
          </div>
          <!-- /.card-wrap -->
          <div class="card-wrap">
            <div class="catalog__product">
              <div class="product__img">
                <a class="img-link" href="product/"><img src="img/products/catalog-product-img.jpg" alt="Товар"
                    class="img"></a>
              </div>
              <div class="product__text">
                <h2 class="product__title">
                  Кухня “Велес”
                </h2>
                <div class="product__stats">
                  <span class="rating">
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </span>
                  <span class="price">
                    <span class="actual-price">89 руб.</span>
                    <span class="old-price">100 руб</span>
                  </span>
                </div>
                <div class="additional">
                  <div class="buying">
                    <div class="buy__counter">
                      <div class="amount-counter">
                        <button class="btn amount-btn minus-btn">
                          -
                        </button>
                        <input type="text" pattern="^[0-9]+$" value="0" class="amount">
                        <button class="btn amount-btn plus-btn">
                          +
                        </button>
                      </div>
                      <button class="btn btn-cart major">
                        <span class="icon-briefcase"></span>
                      </button>
                    </div>
                  </div>
                  <button class="btn btn-buy">Купить в один клик</button>
                </div>
                <!-- /.additional -->
              </div>
              <!-- /.product__text -->
            </div>
            <!-- /.catalog__product -->
          </div>
          <!-- /.card-wrap -->
          <div class="card-wrap">
            <div class="catalog__product">
              <div class="product__img">
                <a class="img-link" href="product/"><img src="img/products/catalog-product-img.jpg" alt="Товар"
                    class="img"></a>
              </div>
              <div class="product__text">
                <h2 class="product__title">
                  Кухня “Велес”
                </h2>
                <div class="product__stats">
                  <span class="rating">
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </span>
                  <span class="price">
                    <span class="actual-price">89 руб.</span>
                    <span class="old-price">100 руб</span>
                  </span>
                </div>
                <div class="additional">
                  <div class="buying">
                    <div class="buy__counter">
                      <div class="amount-counter">
                        <button class="btn amount-btn minus-btn">
                          -
                        </button>
                        <input type="text" pattern="^[0-9]+$" value="0" class="amount">
                        <button class="btn amount-btn plus-btn">
                          +
                        </button>
                      </div>
                      <button class="btn btn-cart major">
                        <span class="icon-briefcase"></span>
                      </button>
                    </div>
                  </div>
                  <button class="btn btn-buy">Купить в один клик</button>
                </div>
                <!-- /.additional -->
              </div>
              <!-- /.product__text -->
            </div>
            <!-- /.catalog__product -->
          </div>
          <!-- /.card-wrap -->
          <div class="card-wrap">
            <div class="catalog__product">
              <div class="product__img">
                <a class="img-link" href="product/"><img src="img/products/catalog-product-img.jpg" alt="Товар"
                    class="img"></a>
              </div>
              <div class="product__text">
                <h2 class="product__title">
                  Кухня “Велес”
                </h2>
                <div class="product__stats">
                  <span class="rating">
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </span>
                  <span class="price">
                    <span class="actual-price">89 руб.</span>
                    <span class="old-price">100 руб</span>
                  </span>
                </div>
                <div class="additional">
                  <div class="buying">
                    <div class="buy__counter">
                      <div class="amount-counter">
                        <button class="btn amount-btn minus-btn">
                          -
                        </button>
                        <input type="text" pattern="^[0-9]+$" value="0" class="amount">
                        <button class="btn amount-btn plus-btn">
                          +
                        </button>
                      </div>
                      <button class="btn btn-cart major">
                        <span class="icon-briefcase"></span>
                      </button>
                    </div>
                  </div>
                  <button class="btn btn-buy">Купить в один клик</button>
                </div>
                <!-- /.additional -->
              </div>
              <!-- /.product__text -->
            </div>
            <!-- /.catalog__product -->
          </div>
          <!-- /.card-wrap -->
          <div class="card-wrap">
            <div class="catalog__product">
              <div class="product__img">
                <a class="img-link" href="product/"><img src="img/products/catalog-product-img.jpg" alt="Товар"
                    class="img"></a>
              </div>
              <div class="product__text">
                <h2 class="product__title">
                  Кухня “Велес”
                </h2>
                <div class="product__stats">
                  <span class="rating">
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </span>
                  <span class="price">
                    <span class="actual-price">89 руб.</span>
                    <span class="old-price">100 руб</span>
                  </span>
                </div>
                <div class="additional">
                  <div class="buying">
                    <div class="buy__counter">
                      <div class="amount-counter">
                        <button class="btn amount-btn minus-btn">
                          -
                        </button>
                        <input type="text" pattern="^[0-9]+$" value="0" class="amount">
                        <button class="btn amount-btn plus-btn">
                          +
                        </button>
                      </div>
                      <button class="btn btn-cart major">
                        <span class="icon-briefcase"></span>
                      </button>
                    </div>
                  </div>
                  <button class="btn btn-buy">Купить в один клик</button>
                </div>
                <!-- /.additional -->
              </div>
              <!-- /.product__text -->
            </div>
            <!-- /.catalog__product -->
          </div>
          <!-- /.card-wrap -->
          <div class="card-wrap">
            <div class="catalog__product">
              <div class="product__img">
                <a class="img-link" href="product/"><img src="img/products/catalog-product-img.jpg" alt="Товар"
                    class="img"></a>
              </div>
              <div class="product__text">
                <h2 class="product__title">
                  Кухня “Велес”
                </h2>
                <div class="product__stats">
                  <span class="rating">
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </span>
                  <span class="price">
                    <span class="actual-price">89 руб.</span>
                    <span class="old-price">100 руб</span>
                  </span>
                </div>
                <div class="additional">
                  <div class="buying">
                    <div class="buy__counter">
                      <div class="amount-counter">
                        <button class="btn amount-btn minus-btn">
                          -
                        </button>
                        <input type="text" pattern="^[0-9]+$" value="0" class="amount">
                        <button class="btn amount-btn plus-btn">
                          +
                        </button>
                      </div>
                      <button class="btn btn-cart major">
                        <span class="icon-briefcase"></span>
                      </button>
                    </div>
                  </div>
                  <button class="btn btn-buy">Купить в один клик</button>
                </div>
                <!-- /.additional -->
              </div>
              <!-- /.product__text -->
            </div>
            <!-- /.catalog__product -->
          </div>
          <!-- /.card-wrap -->
          <div class="card-wrap">
            <div class="catalog__product">
              <div class="product__img">
                <a class="img-link" href="product/"><img src="img/products/catalog-product-img.jpg" alt="Товар"
                    class="img"></a>
              </div>
              <div class="product__text">
                <h2 class="product__title">
                  Кухня “Велес”
                </h2>
                <div class="product__stats">
                  <span class="rating">
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </span>
                  <span class="price">
                    <span class="actual-price">89 руб.</span>
                    <span class="old-price">100 руб</span>
                  </span>
                </div>
                <div class="additional">
                  <div class="buying">
                    <div class="buy__counter">
                      <div class="amount-counter">
                        <button class="btn amount-btn minus-btn">
                          -
                        </button>
                        <input type="text" pattern="^[0-9]+$" value="0" class="amount">
                        <button class="btn amount-btn plus-btn">
                          +
                        </button>
                      </div>
                      <button class="btn btn-cart major">
                        <span class="icon-briefcase"></span>
                      </button>
                    </div>
                  </div>
                  <button class="btn btn-buy">Купить в один клик</button>
                </div>
                <!-- /.additional -->
              </div>
              <!-- /.product__text -->
            </div>
            <!-- /.catalog__product -->
          </div>
          <!-- /.card-wrap -->
          <div class="card-wrap">
            <div class="catalog__product">
              <div class="product__img">
                <a class="img-link" href="product/"><img src="img/products/catalog-product-img.jpg" alt="Товар"
                    class="img"></a>
              </div>
              <div class="product__text">
                <h2 class="product__title">
                  Кухня “Велес”
                </h2>
                <div class="product__stats">
                  <span class="rating">
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </span>
                  <span class="price">
                    <span class="actual-price">89 руб.</span>
                    <span class="old-price">100 руб</span>
                  </span>
                </div>
                <div class="additional">
                  <div class="buying">
                    <div class="buy__counter">
                      <div class="amount-counter">
                        <button class="btn amount-btn minus-btn">
                          -
                        </button>
                        <input type="text" pattern="^[0-9]+$" value="0" class="amount">
                        <button class="btn amount-btn plus-btn">
                          +
                        </button>
                      </div>
                      <button class="btn btn-cart major">
                        <span class="icon-briefcase"></span>
                      </button>
                    </div>
                  </div>
                  <button class="btn btn-buy">Купить в один клик</button>
                </div>
                <!-- /.additional -->
              </div>
              <!-- /.product__text -->
            </div>
            <!-- /.catalog__product -->
          </div>
          <!-- /.card-wrap -->
          <div class="card-wrap">
            <div class="catalog__product">
              <div class="product__img">
                <a class="img-link" href="product/"><img src="img/products/catalog-product-img.jpg" alt="Товар"
                    class="img"></a>
              </div>
              <div class="product__text">
                <h2 class="product__title">
                  Кухня “Велес”
                </h2>
                <div class="product__stats">
                  <span class="rating">
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full active-star"></span>
                    <span class="icon-star-full"></span>
                    <span class="icon-star-full"></span>
                  </span>
                  <span class="price">
                    <span class="actual-price">89 руб.</span>
                    <span class="old-price">100 руб</span>
                  </span>
                </div>
                <div class="additional">
                  <div class="buying">
                    <div class="buy__counter">
                      <div class="amount-counter">
                        <button class="btn amount-btn minus-btn">
                          -
                        </button>
                        <input type="text" class="amount">
                        <button class="btn amount-btn plus-btn">
                          +
                        </button>
                      </div>
                      <button class="btn btn-cart major">
                        <span class="icon-briefcase"></span>
                      </button>
                    </div>
                  </div>
                  <button class="btn btn-buy">Купить в один клик</button>
                </div>
                <!-- /.additional -->
              </div>
              <!-- /.product__text -->
            </div>
            <!-- /.catalog__product -->
          </div>
          <!-- /.card-wrap -->
        </div>
        <!-- /.catalog__cards -->
        <button class="btn major show-more">Показать ещё</button>
      </main>
      <!-- /.catalog -->
    </div>
    <!-- /.catalog-container -->
  </div>
  <!-- /.container -->

  <?php include '../blocks/footer.php'; ?>
  <!-- Подвал -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/ui.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/forms.js"></script>
</body>

</html>