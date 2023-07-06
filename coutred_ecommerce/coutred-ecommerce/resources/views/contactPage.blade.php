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
    <section class="contactPage">
      <!-- contain mian start  -->
      <div class="contactMain">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="leftImg">
                <img src="../images/contactPage/contactMain-img.png" alt="" />
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 main">
              <h2>contact</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                iusto consequuntur natus? Officiis consequuntur dolorem deleniti
                non, qui eius hic.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- contact main end -->

      <!-- get in touch us section start  -->
      <div class="getTouch">
        <div class="container">
          <div class="content">
            <h3>get in touch with us</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Temporibus nisi cumque asperiores quos dolore officiis? Impedit
              nostrum dignissimos natus, vero voluptatibus a magnam nam itaque
              unde iusto animi aperiam dicta.
            </p>
          </div>
          <div class="content-2">


          <div class="row row-1">
            <div class="col-lg-6 col-md-6 col-sm-6 colam-1">
              <div class="form">
                <h3>Send Us A Message</h3>
                <form>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">

                        <input
                          type="text"
                          class="form-control"
                          id="firstName"
                          placeholder="Enter First Name"
                        />
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">

                        <input
                          type="text"
                          class="form-control"
                          id="lastName"
                          placeholder="Enter Last Name"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">

                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="Enter Email"
                    />
                  </div>
                  <div class="form-group">

                    <select class="form-control" id="dropdown">
                      <option value="">--Choose an option--</option>
                      <option value="option1">Option 1</option>
                      <option value="option2">Option 2</option>
                      <option value="option3">Option 3</option>
                      <option value="option4">Option 4</option>
                      <option value="option5">Option 5</option>
                    </select>
                  </div>
                  <div class="form-group">

                    <textarea
                      class="form-control"
                      id="message"
                      rows="3"
                      placeholder="Enter Your Message"
                    ></textarea>
                  </div>
                  <button type="submit" class="btn btn1 btn-primary">
                    Submit Now
                  </button>
                </form>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div>


              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.380753807444!2d67.00134127462891!3d24.85084214564373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e03e02fabc1%3A0x96c129db3ee25a57!2sSindh%20Madrasa-tul-Islam%20University%2C%20City%20Campus%2C%20Karachi!5e0!3m2!1sen!2s!4v1683920499539!5m2!1sen!2s"
                width="90%"
                height="350"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
              <div class="box">
                <div class="row">
                    <div class="col-sm-6 icon-1">
                        <i class="fa-solid fa-location-dot"></i>                    </div>
                    <div class="col-sm-6">
                        <div>
                            <h6>Address</h6>
                            <address>
                              UAE. Ireland, Saudia, Canada, <br />
                              UK and USA
                            </address>
                          </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6 icon-2">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <h6>Call Us</h6>
                            <p>
                              Phone: 123456789-0 <br />
                              Office: 00000-12345-0
                            </p>
                          </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6 icon-3">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <h6>For any questions: E-mail to</h6>
                            <p>loremipsumdummy.com</p>
                          </div>
                    </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- get in touch us section end  -->

      <!-- contact page 3rd section start -->

      <div class="thirdSection">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <ul>
                <li>
                  <img src="../images/contactPage/new-product.png" alt="product">
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
                        <img src="../images/contactPage/dependable.png" alt="">
                      <span
                        ><h5>Safe & Trustworthy</h5>
                        <p>Secure payment</p></span
                      >
                    </li>
                    <li>

                    </li>
                  </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <ul>
                    <li>
                        <img src="../images/contactPage/fast-delivery.png" alt="">
                      <span
                        >

                        <h5>Fast Delivery</h5>
                        <p>Global Partner of DHL</p>
                        </span
                      >
                    </li>
                  </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <ul>
                    <li>
                        <img src="../images/contactPage/happy.png" alt="happy">
                      <span
                        ><h5>Friendly Services</h5>
                        <p>7-day Satisfaction Guarantee</p>
                        </span
                      >
                    </li>
                  </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- demo  -->

      <div class="budget-wrap">
        <div class="budget">
          <div class="content">
            <input type="range" min="1" max="100" value="20" data-rangeslider>
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
    <!-- AOS js import -->
    <script src="../js/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- AOS js import -->
    @include('footer')
  </body>
</html>
