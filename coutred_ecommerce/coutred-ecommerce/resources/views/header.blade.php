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
    <link rel="stylesheet" type="text/css" href="{{ url('/style/header.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/style/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/style/bootstrap.min.css') }}" />


  </head>
  <body>
<section class="navBar">
    <div class="firstRow">
      <div class="container">
        <div class="row">
        <div class="col-lg-6">
          <a href="mailto:info@example.com">
          <i class="fa-regular fa-envelope"></i>
          <span>Email: info@example.com</span> </a>
        </div>
        <div class="col-lg-6">
          <div class="row left ">
            <div class="col-lg-6 col-md-6 col-sm-6 ">
              <ul>
                <li> <a href="#">  Marketplace </a></li>
                <li> | </li>
                <li> <a href="#">  Help & Faq </a></li>
              </ul>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-6 ">
                <ul>
                  <li > <a href="#">  <img src="../images/mainpage/flag.png" alt=""> </a></li>
                  <li>|</li>
                  <li> <a href="#"> Sign in or Register </a></li>
                </ul>
                                </div>
          </div>

        </div>
      </div>
      </div>
    </div>
    <div class="container">
      <div class="secondRow">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-control">
              <input
                type="text"
                class="input"
                placeholder="What are you looking for?"
              />
              <span class="btn"
                ><i class="fa-solid fa-magnifying-glass"></i
              ></span>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 colum2">
            <div class="header_info">
              <ul>
                <li>
                  <i class="fa-solid fa-square-phone"></i>
                  <span
                    >Call us free<a href="tel:512-963-6343"
                      >512-963-6343</a
                    ></span
                  >
                </li>
                <li class="">
                  <a href="#">  <i class="fa-regular fa-heart"></i>  </a>
                </li>
                <li>
                  <i class="fa-solid fa-basket-shopping"></i>
                  <span>
                    YOUR CARD<a href="tel:409-960-9664"
                      >{{ Cart::getTotalQuantity()}} Products</a
                    ></span
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="thirdRow">
        <div class="row">
          <div class="col-lg-5">
            <div class="navleft">
              <ul>
                <li><a href="#" class="active">HOME</a></li>
                <li><a href="#">WHAT'S NEW</a></li>
                <li><a href="#">CLOTHING</a></li>
                <li><a href="#">ITALIAN</a></li>
                <li><a href="#">INTIMATES</a></li>
                <li><a href="#">SWIM</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 logo-parent">
            <div class="logo">
              <img src="../images/mainpage/logo.png" alt="logo" />
            </div>
          </div>
          <div class="col-lg-5">
            <div class="navright">
              <ul>
                <li><a href="#">JEWELLERY</a></li>
                <li><a href="#">ACCESSORIES</a></li>
                <li><a href="#">SHOES</a></li>
                <li><a href="#">BRIGHTHON</a></li>
                <li><a href="#">JONNY WAS</a></li>
                <li><a href="#">SALE</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  </body>
  </html>
