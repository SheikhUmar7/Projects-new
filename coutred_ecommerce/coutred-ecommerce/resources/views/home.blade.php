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
    <!-- nav bar  -->

@include('header')
{{-- @include('section') --}}


{{-- @include('new.data') --}}





    <!-- nav bar end  -->
    <div class="mainPage">
      <!-- /* welcome section  */ -->

      <section class="welcomeSection">
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="../images/mainpage/welcome-bg.jpg"
                class="d-block w-100"
                alt="..."
              />
              <div class="carousel-caption d-none d-md-block">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12"></div>
                    <div class="col-lg-6 col-md-6 col-sm-12 main">
                      <h6>welcome to</h6>
                      <h5>Coutured By Bjork</h5>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Tenetur magnam nam consequuntur id delectus error
                        autem officiis aut sint! Adipisci.
                      </p>
                      <ul class="slidbtn">
                        <li><a href="#" class="btn-common">shop now</a></li>
                        <li>
                          <a href="#" class="btn-common whtibtn"
                            >VIEW COLLECTION</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="image leftImg">
                  <img src="../images/mainpage/welcome-1.png" alt="" />
                </div>
              </div>
            </div>

            <div class="carousel-item">

              <img
                src="../images/mainpage/welcome-bg.jpg"
                class="d-block w-100"
                alt="..."
              />
              <div class="carousel-caption d-none d-md-block">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12"></div>
                    <div class="col-lg-6 col-md-6 col-sm-12 main">
                      <h6>welcome to</h6>
                      <h5>Coutured By Bjork</h5>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Tenetur magnam nam consequuntur id delectus error
                        autem officiis aut sint! Adipisci.
                      </p>
                      <ul class="slidbtn">
                        <li><a href="#" class="btn-common">shop now</a></li>
                        <li>
                          <a href="#" class="btn-common whtibtn"
                            >VIEW COLLECTION</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="image leftImg">
                  <img src="../images/mainpage/welcome-1.png" alt="" />
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>

      <!-- whats new -->
      <section class="whats-new">
        <div class="container">
          <h6 class="topHeading">Whats News</h6>
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
              <div class="multiple-items">
                <div class="image">
                  <div class="myProduct">
                    <img
                      src="../images/mainpage/news-1.jpg"
                      alt="Avatar"
                      class="image"
                    />
                    <div class="middle">
                      <div class="text">
                        <h3>Lorem, ipsum</h3>
                        <p>
                          Lorem ipsum dolor sit amet. Lorem, ipsum dolor sit
                          amet consectetur adipisicing elit. Doloremque, minima?
                        </p>
                        <h4>$149</h4>
                        <a href="#"
                          >Add to card
                          <i class="fa-sharp fa-solid fa-cart-shopping"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <div class="myProduct">
                    <img
                      src="../images/mainpage/news-2.jpg"
                      alt="Avatar"
                      class="image"
                    />
                    <div class="middle">
                      <div class="text">
                        <h3>Lorem, ipsum</h3>
                        <p>
                          Lorem ipsum dolor sit amet. Lorem, ipsum dolor sit
                          amet consectetur adipisicing elit. Doloremque, minima?
                        </p>
                        <h4>$149</h4>
                        <a href="#">Add to card
                          <i class="fa-sharp fa-solid fa-cart-shopping"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <div class="myProduct">
                    <img
                      src="../images/mainpage/news-3.jpg"
                      alt="Avatar"
                      class="image"
                    />
                    <div class="middle">
                      <div class="text">
                        <h3>Lorem, ipsum</h3>
                        <p>
                          Lorem ipsum dolor sit amet. Lorem, ipsum dolor sit
                          amet consectetur adipisicing elit. Doloremque, minima?
                        </p>
                        <h4>$149</h4>
                        <a href="#"
                          >Add to card
                          <i class="fa-sharp fa-solid fa-cart-shopping"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <div class="myProduct">
                    <img
                      src="../images/mainpage/news-4.jpg"
                      alt="Avatar"
                      class="image"
                    />
                    <div class="middle">
                      <div class="text">
                        <h3>Lorem, ipsum</h3>
                        <p>
                          Lorem ipsum dolor sit amet. Lorem, ipsum dolor sit
                          amet consectetur adipisicing elit. Doloremque, minima?
                        </p>
                        <h4>$149</h4>
                        <a href="#"
                          >Add to card
                          <i class="fa-sharp fa-solid fa-cart-shopping"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <div class="myProduct">
                    <img
                      src="../images/mainpage/news-1.jpg"
                      alt="Avatar"
                      class="image"
                    />
                    <div class="middle">
                      <div class="text">
                        <h3>Lorem, ipsum</h3>
                        <p>
                          Lorem ipsum dolor sit amet. Lorem, ipsum dolor sit
                          amet consectetur adipisicing elit. Doloremque, minima?
                        </p>
                        <h4>$149</h4>
                        <a href="#"
                          >Add to card
                          <i class="fa-sharp fa-solid fa-cart-shopping"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <div class="myProduct">
                    <img
                      src="../images/mainpage/news-2.jpg"
                      alt="Avatar"
                      class="image"
                    />
                    <div class="middle">
                      <div class="text">
                        <h3>Lorem, ipsum</h3>
                        <p>
                          Lorem ipsum dolor sit amet. Lorem, ipsum dolor sit
                          amet consectetur adipisicing elit. Doloremque, minima?
                        </p>
                        <h4>$149</h4>
                        <a href="#"
                          >Add to card
                          <i class="fa-sharp fa-solid fa-cart-shopping"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button
              type="button"
              class="btn-common btn btn-secondary btn-lg btn-3"
            >
              View All
            </button>
          </div>
        </div>
      </section>

      <!-- Shop Categories -->

      <section class="Shop-Categories">
        <div class="container">
          <h6 class="topHeading">Shop Categories</h6>

          <!-- Gallery -->
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 mb-lg-0">
              <div class="myShop">
                <img
                  src="../images/mainpage/shop-1.jpg"
                  class="w-100"
                  alt="shop"
                />
                <div class="text">
                  <a href="#"><h2>Lorem.</h2></a>
                </div>
              </div>
            </div>

            <div class="col-lg-7 col-md-12 mb-lg-0">
              <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                  <div class="myShop">
                    <img
                      src="../images/mainpage/shop-2.jpg"
                      class="w-100"
                      alt="shop"
                    />
                    <div class="text">
                      <a href="#"><h2>Lorem.</h2></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 mb-4 mb-lg-0">
                  <div class="myShop">
                    <img
                      src="../images/mainpage/shop-3.jpg"
                      class="w-100"
                      alt="shop"
                    />
                    <div class="text">
                      <a href="#"><h2>Lorem.</h2></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 mt-4 mb-lg-0">
                  <div class="myShop">
                    <img
                      src="../images/mainpage/shop-5.jpg"
                      class="w-100"
                      alt="shop"
                    />
                    <div class="text">
                      <a href="#"><h2>Lorem.</h2></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 mt-4 mb-lg-0">
                  <div class="myShop">
                    <img
                      src="../images/mainpage/shop-4.jpg"
                      class="w-100"
                      alt="shop"
                    />
                    <div class="text">
                      <a href="#"><h2>Lorem.</h2></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="text-center">
              <button
                type="button"
                class="btn-common btn btn-secondary btn-lg btn-3"
              >
                View All
              </button>
            </div>
          </div>
        </div>
        <!-- Gallery -->
      </section>

      <!-- Shop Categories END-->

      <!-- Shop Collections -->
      <section class="shop-collection">
        <div class="container">
          <div class="headings">
            <h5 class="topHeading">Shop Collections</h5>
            <h6><span>VIEW THE PRODUCTS</span></h6>
          </div>
          <div class="tabs">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="pills-home-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-home"
                  type="button"
                  role="tab"
                  aria-controls="pills-home"
                  aria-selected="true"
                >
                  Italian silk
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="pills-profile-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-home"
                  type="button"
                  role="tab"
                  aria-controls="pills-profile"
                  aria-selected="false"
                >
                  Italian
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="pills-contact-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-home"
                  type="button"
                  role="tab"
                  aria-controls="pills-contact"
                  aria-selected="false"
                >
                  Intimates
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="pills-home-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-home"
                  type="button"
                  role="tab"
                  aria-controls="pills-home"
                  aria-selected="true"
                >
                  Swim
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="pills-Jewelry-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-home"
                  type="button"
                  role="tab"
                  aria-controls="pills-home"
                  aria-selected="true"
                >
                  Jewelry
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="pills-home-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-home"
                  type="button"
                  role="tab"
                  aria-controls="pills-home"
                  aria-selected="true"
                >
                  Accessories
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="pills-home-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-home"
                  type="button"
                  role="tab"
                  aria-controls="pills-home"
                  aria-selected="true"
                >
                  Shoes
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="pills-home-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-home"
                  type="button"
                  role="tab"
                  aria-controls="pills-home"
                  aria-selected="true"
                >
                  Brighton
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="pills-home-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-home"
                  type="button"
                  role="tab"
                  aria-controls="pills-home"
                  aria-selected="true"
                >
                  Johnny Was
                </button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div
                class="tab-pane fade show active"
                id="pills-home"
                role="tabpanel"
                aria-labelledby="pills-home-tab"
              >
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="myProduct">
                      <img
                        src="../images/mainpage/shop-6.jpg"
                        alt="Avatar"
                        class="image"
                      />
                      <div class="middle">
                        <div class="text">
                          <h3>Lorem, ipsum</h3>
                          <p>
                            Lorem ipsum dolor sit amet. Lorem, ipsum dolor sit
                            amet consectetur adipisicing elit. Doloremque,
                            minima?
                          </p>
                          <h4>$149</h4>
                          <a href="#"
                            >Add to card
                            <i class="fa-sharp fa-solid fa-cart-shopping"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="myProduct">
                      <img
                        src="../images/mainpage/shop-7.jpg"
                        alt="Avatar"
                        class="image"
                      />
                      <div class="middle">
                        <div class="text">
                          <h3>Lorem, ipsum</h3>
                          <p>
                            Lorem ipsum dolor sit amet. Lorem, ipsum dolor sit
                            amet consectetur adipisicing elit. Doloremque,
                            minima?
                          </p>
                          <h4>$149</h4>
                          <a href="#"
                            >Add to card
                            <i class="fa-sharp fa-solid fa-cart-shopping"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="myProduct">
                      <img
                        src="../images/mainpage/shop-8.jpg"
                        alt="Avatar"
                        class="image"
                      />
                      <div class="middle">
                        <div class="text">
                          <h3>Lorem, ipsum</h3>
                          <p>
                            Lorem ipsum dolor sit amet. Lorem, ipsum dolor sit
                            amet consectetur adipisicing elit. Doloremque,
                            minima?
                          </p>
                          <h4>$149</h4>
                          <a href="#"
                            >Add to card
                            <i class="fa-sharp fa-solid fa-cart-shopping"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="myProduct">
                      <img
                        src="../images/mainpage/shop-9.jpg"
                        alt="Avatar"
                        class="image"
                      />
                      <div class="middle">
                        <div class="text">
                          <h3>Lorem, ipsum</h3>
                          <p>
                            Lorem ipsum dolor sit amet. Lorem, ipsum dolor sit
                            amet consectetur adipisicing elit. Doloremque,
                            minima?
                          </p>
                          <h4>$149</h4>
                          <a href="#"
                            >Add to card
                            <i class="fa-sharp fa-solid fa-cart-shopping"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Shop Collections end-->

      <!-- About us section  -->

      <section class="about-us">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 g-0 img-1">
            <img src="../images/mainpage/about-1.png" alt="image" />
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 g-0 img-2">
            <img src="../images/mainpage/about-2.png" alt="image" />
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 g-0 img-3">
            <h6>ABOUT US</h6>
            <h2 class="topHeading">About Coutured</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus
              veniam atque voluptates excepturi. Eos porro ipsam modi nostrum
              harum. Suscipit dolores hic animi ad eaque velit architecto earum
              dolorum libero? Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Quaerat ducimus tenetur recusandae eum vitae exercitationem
              esse quidem deserunt consequuntur ipsum!
            </p>
            <button class="btn-common btn btn-secondary btn-lg">
              READ MORE
            </button>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 g-0 img-4">
            <div class="img1">
              <img src="../images/mainpage/about-3.png" alt="image" />
            </div>
            <div class="img2">
              <img src="../images/mainpage/about-4.png" alt="image" />
            </div>
          </div>
        </div>
      </section>
      <!-- About us section end -->

      <!-- Testimonials SECTION  -->
      <section class="Testimonials">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 g-0">
            <div class="one">
              <div class="img-1">
                <img src="../images/mainpage/Testimonials-1.jpg" alt="image" />
              </div>
              <div class="img-2">
                <img
                  src="../images/mainpage/Testimonials-2.jpg.png"
                  alt="image"
                />
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 g-0">
            <div class="two">
              <h2 class="topHeading"><span class="Test">“</span> Testimonials</h2>
              <div class="multiple-client">
                <div>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Magni adipisci alias iure tempora. Rem alias doloribus quis
                    doloremque! Ex, accusantium. Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Et ex temporibus ut molestias
                    aliquid, repudiandae libero deserunt odio repellat quam
                    facilis eveniet minus, exercitationem quis consequuntur
                    porro obcaecati. Molestiae, dolor.
                  </p>
                  <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4">
                      <img
                        src="../images/mainpage/Testimonials-2.jpg.png"
                        alt="image"
                      />
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 g-0">
                      <h5>moly-hina</h5>
                      <h6>company Name</h6>
                    </div>
                  </div>
                </div>
                <div>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Magni adipisci alias iure tempora. Rem alias doloribus quis
                    doloremque! Ex, accusantium. Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Et ex temporibus ut molestias
                    aliquid, repudiandae libero deserunt odio repellat quam
                    facilis eveniet minus, exercitationem quis consequuntur
                    porro obcaecati. Molestiae, dolor.
                  </p>
                  <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4">
                      <img
                        src="../images/mainpage/Testimonials-2.jpg.png"
                        alt="image"
                      />
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 g-0">
                      <h5>moly-hina</h5>
                      <h6>company Name</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonials SECTION  -->
      <!-- shop instagram -->

      <section class="shop-instagram">
        <div class="container">
          <div class="inta-logo">
            <img src="../images/mainpage/insta-logo.png" alt="insta-logo" />
            <h6>shop the Gram</h6>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
              <img
                src="../images/mainpage/insta-1.jpg"
                class="w-100 mb-4"
                alt="shop"
              />
            </div>

            <div class="col-lg-3 mb-4 mb-lg-0">
              <img
                src="../images/mainpage/insta-2.jpg"
                class="w-100 mb-4"
                alt="shop"
              />
            </div>

            <div class="col-lg-3 mb-4 mb-lg-0">
              <img
                src="../images/mainpage/insta-3.jpg"
                class="w-100 mb-4"
                alt="shop"
              />
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
              <img
                src="../images/mainpage/insta-4.jpg"
                class="w-100 mb-4"
                alt="shop"
              />
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
              <img
                src="../images/mainpage/insta-5.jpg"
                class="w-100 mb-4"
                alt="shop"
              />
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
              <img
                src="../images/mainpage/insta-6.jpg"
                class="w-100 mb-4"
                alt="shop"
              />
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
              <img
                src="../images/mainpage/insta-7.jpg"
                class="w-100 mb-4"
                alt="shop"
              />
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
              <img
                src="../images/mainpage/insta-8.jpg"
                class="w-100 mb-4"
                alt="shop"
              />
            </div>
          </div>
        </div>
      </section>
      <!-- shop instagram end-->

      <!-- news latter  -->
      <section class="news-latter">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 g-0">
            <div class="news-subscribe">
              <h2>Subscribe to our NewsLatters</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Provident sed obcaecati quae quam tempora consectetur Lorem,
                ipsum. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Maxime, adipisci.
              </p>
              <div class="form-control">
                <input
                  type="text"
                  class="input"
                  placeholder="Enter e-mail adress"
                />
                <button class="btn">Subscribe</button>
              </div>

              <div class="apps">
                <h6>Download our app:</h6>
                <img src="../images/mainpage/news-1.png" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 g-0">
            <img src="../images/mainpage/newslatter-2.jpg" alt="" />
          </div>
        </div>
      </section>
      <!-- news latter end -->
    </div>
    <!-- footer Section-->

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
