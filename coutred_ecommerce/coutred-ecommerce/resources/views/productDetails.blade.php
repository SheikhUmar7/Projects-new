<!DOCTYPE html>
<html>
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
    <div class="productDetails">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 left-col">
            <div class="slider slider-single">
              <div class="product-image">
                <img
                  src="../images/catogoriesPage/img-1.jpg"
                  alt="shoe image"
                />
              </div>
              <div class="product-image">
                <img
                  src="../images/catogoriesPage/img-2.jpg"
                  alt="shoe image"
                />
              </div>
              <div class="product-image">
                <img
                  src="../images/catogoriesPage/img-3.jpg"
                  alt="product image"
                />
              </div>
              <div class="product-image">
                <img
                  src="../images/catogoriesPage/img-4.jpg"
                  alt="product image"
                />
              </div>
              <div class="product-image">
                <img
                  src="../images/catogoriesPage/img-1.jpg  "
                  alt="product image"
                />
              </div>
            </div>
            <div class="slider slider-nav">
              <div class="small-img">
                <img
                  src="../images/catogoriesPage/img-1.jpg"
                  alt="product image"
                />
              </div>
              <div class="small-img">
                <img
                  src="../images/catogoriesPage/img-2.jpg"
                  alt="product image"
                />
              </div>
              <div class="small-img">
                <img
                  src="../images/catogoriesPage/img-3.jpg"
                  alt="shoe image"
                />
              </div>
              <div class="small-img">
                <img
                  src="../images/catogoriesPage/img-4.jpg"
                  alt="shoe image"
                />
              </div>
              <div class="small-img">
                <img
                  src="../images/catogoriesPage/img-1.jpg"
                  alt="shoe image"
                />
              </div>
            </div>
          </div>
          <div class="col-lg-6 right-col">
            <div class="card-wrapper">
              <div class="card">
                <!-- card left -->
                <div class="product-imgs">
                  <!-- card right -->
                  <div class="product-content">
                    <h2 class="product-title">Product Details</h2>
                    <div class="product-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <span>4.7(21)</span>
                    </div>

                    <div class="product-price">
                      <p class="new-price">Price: <span>$249.00</span></p>
                    </div>

                    <div class="product-detail">
                      <h2>about this item:</h2>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Illo eveniet veniam tempora fuga tenetur placeat
                        sapiente architecto illum soluta consequuntur,
                        aspernatur quidem at sequi ipsa!
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Consequatur, perferendis eius. Dignissimos, labore
                        suscipit. Unde.
                      </p>
                      <ul>
                        <li>Color: <span>Black</span></li>
                        <li>Available: <span>in stock</span></li>
                        <li>Category: <span>Clothes</span></li>
                      </ul>

                    </div>

                    <div class="purchase-info">
                      <input type="number" min="0" value="1" />
                      <button type="button" class="btn">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                      </button>
                      <button type="button" class="btn">ADD TO Wishlist</button>
                    </div>

                    <div class="social-links">
                      <a href="#">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#">
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="#">
                        <i class="fab fa-instagram"></i>
                      </a>
                      <a href="#">
                        <i class="fab fa-whatsapp"></i>
                      </a>
                      <a href="#">
                        <i class="fab fa-pinterest"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- features products section start -->
    <section class="feature-products">
      <div class="container">
        <div class="heading">
          <h6>featured products</h6>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="product-grid">
              <div class="product-image">
                <a href="#" class="image">
                  <img class="img-1" src="../images/catogoriesPage/img-1.jpg" />
                  <img class="img-2" src="../images/catogoriesPage/img-2.jpg" />
                </a>
                <ul class="product-links">
                  <li>
                    <a href="#"><i class="fa fa-heart"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-random"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                  </li>
                </ul>
                <a href="#" class="product-view"
                  ><i class="fa fa-search"></i
                ></a>
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

                <div class="image">
                  <img src="../images/productDetails/p1.png" alt="shop" />
                </div>
              </div>
              <h3 class="title"><a href="#">Product Name</a></h3>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="product-grid">
              <div class="product-image">
                <a href="#" class="image">
                  <img class="img-1" src="../images/catogoriesPage/img-3.jpg" />
                  <img class="img-2" src="../images/catogoriesPage/img-4.jpg" />
                </a>
                <span class="product-hot-label">hot</span>
                <ul class="product-links">
                  <li>
                    <a href="#"><i class="fa fa-heart"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-random"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                  </li>
                </ul>
                <a href="#" class="product-view"
                  ><i class="fa fa-search"></i
                ></a>
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
                <div class="image">
                  <img src="../images/productDetails/p1.png" alt="shop" />
                </div>
              </div>
              <h3 class="title"><a href="#">Product Name</a></h3>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="product-grid">
              <div class="product-image">
                <a href="#" class="image">
                  <img class="img-1" src="../images/catogoriesPage/img-4.jpg" />
                  <img class="img-2" src="../images/catogoriesPage/img-3.jpg" />
                </a>
                <span class="product-hot-label">-30%</span>
                <ul class="product-links">
                  <li>
                    <a href="#"><i class="fa fa-heart"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-random"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                  </li>
                </ul>
                <a href="#" class="product-view"
                  ><i class="fa fa-search"></i
                ></a>
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
                <div class="image">
                  <img src="../images/productDetails/p1.png" alt="shop" />
                </div>
              </div>
              <h3 class="title"><a href="#">Product Name</a></h3>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="product-grid">
              <div class="product-image">
                <a href="#" class="image">
                  <img class="img-1" src="../images/catogoriesPage/img-2.jpg" />
                  <img class="img-2" src="../images/catogoriesPage/img-1.jpg" />
                </a>
                <ul class="product-links">
                  <li>
                    <a href="#"><i class="fa fa-heart"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-random"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                  </li>
                </ul>
                <a href="#" class="product-view"
                  ><i class="fa fa-search"></i
                ></a>
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
                <div class="image">
                  <img src="../images/productDetails/p1.png" alt="shop" />
                </div>
              </div>
              <h3 class="title"><a href="#">Product Name</a></h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- contact page 3rd section start -->

    <div class="thirdSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <ul>
              <li>
                <img
                  src="../images/contactPage/new-product.png"
                  alt="product"
                />
                <span
                  ><h5>Rich in Variety</h5>
                  <p>1000+ New Items Everyday</p></span
                >
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <ul>
              <li>
                <img src="../images/contactPage/dependable.png" alt="" />
                <span
                  ><h5>Safe & Trustworthy</h5>
                  <p>Secure payment</p></span
                >
              </li>
              <li></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <ul>
              <li>
                <img src="../images/contactPage/fast-delivery.png" alt="" />
                <span>
                  <h5>Fast Delivery</h5>
                  <p>Global Partner of DHL</p>
                </span>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <ul>
              <li>
                <img src="../images/contactPage/happy.png" alt="happy" />
                <span
                  ><h5>Friendly Services</h5>
                  <p>7-day Satisfaction Guarantee</p>
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- javascript start  -->
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

    <script>
      $(".slider-single").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        adaptiveHeight: true,
        infinite: false,
        useTransform: true,
        speed: 400,
        cssEase: "cubic-bezier(0.77, 0, 0.18, 1)",
      });

      $(".slider-nav")
        .on("init", function (event, slick) {
          $(".slider-nav .slick-slide.slick-current").addClass("is-active");
        })
        .slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          dots: false,
          focusOnSelect: false,
          infinite: false,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 5,
              },
            },
            {
              breakpoint: 640,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
              },
            },
            {
              breakpoint: 420,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
              },
            },
          ],
        });

      $(".slider-single").on(
        "afterChange",
        function (event, slick, currentSlide) {
          $(".slider-nav").slick("slickGoTo", currentSlide);
          var currrentNavSlideElem =
            '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
          $(".slider-nav .slick-slide.is-active").removeClass("is-active");
          $(currrentNavSlideElem).addClass("is-active");
        }
      );

      $(".slider-nav").on("click", ".slick-slide", function (event) {
        event.preventDefault();
        var goToSingleSlide = $(this).data("slick-index");

        $(".slider-single").slick("slickGoTo", goToSingleSlide);
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
