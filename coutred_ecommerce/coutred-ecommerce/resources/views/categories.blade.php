<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coutured</title>
    <link rel="stylesheet" type="text/css" href="../slick/slick.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css" />

    <link rel="stylesheet" type="text/css" href="{{ url('/style/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/style/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/style/bootstrap.min.css') }}" />

  </head>
  <body>
    @include('header')
    <section class="Categories">
        <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="left-side">
            <h6>categories</h6>
            <ul>
              <li>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                    disabled
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Whats New
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                    disabled
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Clothing
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                    disabled
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    disabled checkbox
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                    disabled
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    disabled checkbox
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                    disabled
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    disabled checkbox
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                    disabled
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    disabled checkbox
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                    disabled
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    disabled checkbox
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                    disabled
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    disabled checkbox
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                    disabled
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    disabled checkbox
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                    disabled
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    disabled checkbox
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                    disabled
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    disabled checkbox
                  </label>
                </div>
              </li>
            </ul>
          </div>

<!-- filter section start  -->
<div class="filter-section">
<div class="price">
  <h2>Price</h2>
</div>
<div class="d-flex">
  <div class="wrapper">
    <div class="slider">
      <div class="progress"></div>
    </div>
    <div class="range-input">
      <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
      <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
    </div>
  </div>
  <div class="price-input">
    <div class="field">
      <span>Min</span>
      <input type="number" class="input-min" value="2500">
    </div>
    <div class="separator">-</div>
    <div class="field">
      <span>Max</span>
      <input type="number" class="input-max" value="7500">
    </div>
  </div>
</div>

<div class="filter">
  <a href="#">Filter</a>
</div>

</div>
<!-- filter section end  -->

        </div>
        <div class="col-lg-9 col-md-9 col-sm-6">
             <!-- features products section start -->
<section class="feature-products">
    <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img class="img-1" src="../images/catogoriesPage/img-1.jpg">
                        <img class="img-2" src="../images/catogoriesPage/img-2.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                </div>
                <div class="product-content">
                    <div class="price">$65.99</div>
                    <div>
                    <ul class="rating">
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star disable"></li>
                    </ul>
                </div>

                    <div class="image"><img src="../images/catogoriesPage/p1.png" alt="shop"></div>

                </div>
                <h3 class="title"><a href="#">Product Name</a></h3>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img class="img-1" src="../images/catogoriesPage/img-3.jpg">
                        <img class="img-2" src="../images/catogoriesPage/img-4.jpg">
                    </a>
                    <span class="product-hot-label">hot</span>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                </div>
                <div class="product-content">
                    <div class="price">$85.99</div>

                    <div>
                    <ul class="rating">
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star disable"></li>
                        <li class="fas fa-star disable"></li>
                    </ul>
                </div>
                <div class="image"><img src="../images/catogoriesPage/p1.png" alt="shop"></div>

                </div>
                <h3 class="title"><a href="#">Product Name</a></h3>

            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img class="img-1" src="../images/catogoriesPage/img-4.jpg">
                        <img class="img-2" src="../images/catogoriesPage/img-3.jpg">
                    </a>
                    <span class="product-hot-label">-30%</span>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                </div>
                <div class="product-content">
                    <div class="price">$85.99</div>

                    <div>
                    <ul class="rating">
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star disable"></li>
                        <li class="fas fa-star disable"></li>

                    </ul>
                </div>
                <div class="image"><img src="../images/catogoriesPage/p1.png" alt="shop"></div>

                </div>
                <h3 class="title"><a href="#">Product Name</a></h3>

            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img class="img-1" src="../images/catogoriesPage/img-2.jpg">
                        <img class="img-2" src="../images/catogoriesPage/img-1.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                </div>
                <div class="product-content">
                    <div class="price">$65.99</div>

                    <div>
                    <ul class="rating">
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star disable"></li>
                    </ul>
                </div>
                <div class="image"><img src="../images/catogoriesPage/p1.png" alt="shop"></div>

                </div>
                <h3 class="title"><a href="#">Product Name</a></h3>

            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="../html/catogoriesPage.html" class="image">
                        <img class="img-1" src="../images/catogoriesPage/img-1.jpg">
                        <img class="img-2" src="../images/catogoriesPage/img-2.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                </div>
                <div class="product-content">
                    <div class="price">$65.99</div>
                    <div>
                    <ul class="rating">
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star disable"></li>
                    </ul>
                </div>

                    <div class="image"><img src="../images/catogoriesPage/p1.png" alt="shop"></div>

                </div>
                <h3 class="title"><a href="#">Product Name</a></h3>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img class="img-1" src="../images/catogoriesPage/img-3.jpg">
                        <img class="img-2" src="../images/catogoriesPage/img-4.jpg">
                    </a>
                    <span class="product-hot-label">hot</span>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                </div>
                <div class="product-content">
                    <div class="price">$85.99</div>

                    <div>
                    <ul class="rating">
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star disable"></li>
                        <li class="fas fa-star disable"></li>
                    </ul>
                </div>
                <div class="image"><img src="../images/catogoriesPage/p1.png" alt="shop"></div>

                </div>
                <h3 class="title"><a href="#">Product Name</a></h3>

            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img class="img-1" src="../images/catogoriesPage/img-4.jpg">
                        <img class="img-2" src="../images/catogoriesPage/img-3.jpg">
                    </a>
                    <span class="product-hot-label">-30%</span>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                </div>
                <div class="product-content">
                    <div class="price">$85.99</div>

                    <div>
                    <ul class="rating">
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star disable"></li>
                        <li class="fas fa-star disable"></li>

                    </ul>
                </div>
                <div class="image"><img src="../images/catogoriesPage/p1.png" alt="shop"></div>

                </div>
                <h3 class="title"><a href="#">Product Name</a></h3>

            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img class="img-1" src="../images/catogoriesPage/img-2.jpg">
                        <img class="img-2" src="../images/catogoriesPage/img-1.jpg">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                </div>
                <div class="product-content">
                    <div class="price">$65.99</div>

                    <div>
                    <ul class="rating">
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star disable"></li>
                    </ul>
                </div>
                <div class="image"><img src="../images/catogoriesPage/p1.png" alt="shop"></div>

                </div>
                <h3 class="title"><a href="#">Product Name</a></h3>

            </div>
        </div>
    </div>
</div>
</section>
        </div>
      </div>
    </div>
    </section>

    <!-- scripts files and links  -->

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>

    <!-- slick slider import  -->
    <script type="text/javascript" src="../slick/slick.min.js"></script>
    <script
      src="https://kit.fontawesome.com/39a7056870.js"
      crossorigin="anonymous"
    ></script>
    <!-- AOS js import -->
    <script src="../js/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});

    </script>
      @include('footer')

      <script src="../js/bootstrap.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script
        type="text/javascript"
        src="//code.jquery.com/jquery-1.11.0.min.js"
      ></script>
      <script
        type="text/javascript"
        src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
      ></script>

      <!-- slick slider import  -->
      <script type="text/javascript" src="../slick/slick.min.js"></script>
      <script
        src="https://kit.fontawesome.com/39a7056870.js"
        crossorigin="anonymous"
      ></script>
      <script>
        $(".multiple-items").slick({
          infinite: true,
          arrows: true,
          dots: false,
          slidesToShow: 4,
          autoplay: true,
          slidesToScroll: 1,
        });

        $(".multiple-client").slick({
          infinite: true,
          arrows: false,
          slidesToShow: 1,
          dots: true,
          autoplay: true,
          slidesToScroll: 1,
        });
      </script>
  </body>
</html>
