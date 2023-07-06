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
  <style>
    <style type="text/css">
.puffer{padding-top: 0%; background-color: #a79a89;}

.banner{ background: #e4dacd; width:100%; margin: 0 auto; justify-content: center; text-align: center; z-index: 5; padding: 0px 0px; height: 131px;}
.banner p{ clear: both; color: #fff; font-size: 62px; font-family: sans-serif; padding-top: 25px; color: black; font-weight: 700}
.inhalt{ }
.puffer{padding-top: 0%; background-color: #a79a89;}

.banner-c{ background: #f1f0f0; width:100%; margin: 0 auto; justify-content:  center; z-index: 5; padding: 14px 0px; height: 52px;  border-top: 3px solid #bd9341;}
/* .banner-c p{ clear: both; color: #fff; font-size: 62px; font-family: sans-serif; padding-top: 25px; color: black; font-weight: 700} */
.inhalt-c{ }
#navigation_background {top: 0px !important;}
.nav_wrapper.sticky_nav {top: 0px !important;}
.cm-templates-navigation-container {top: 0px !important;}
//
.card {
    border: none;
    border-radius: 5;
    width: 550px !important;
    margin: -107 auto;

}

.signup {
    display: flex;
    flex-flow: column;
    justify-content: center;
    padding: 10px 50px
}

a{
    text-decoration:none !important;
}

h5 {
    color: #000;
    margin-bottom: 3px;
    font-weight: bold
}

small {
    color: rgba(0, 0, 0, 0.3)
}

input {
    width: 100%;
    display: block;
    margin-bottom: 7px
}

.form-control {
    border: 1px solid rgba(0, 0, 0, .075);
    border-radius: 4px;
    /* background-color: rgba(0, 0, 0, .075); */
    letter-spacing: 1px
}

.form-control:focus {
    border: 0.5px solid #bd9341;
    border-radius: 4px;
    box-shadow: none;
    /* background-color: rgba(0, 0, 0, .075); */
    color: #000;
    letter-spacing: 1px
}

.btn {
    display: block;
    width: 100%;
    border-radius: 30px;
    border: none;
   background: #bd9341;

}
.btn-o {
    display: block;
    width: 15%;
    border-radius: 10px;
    border: none;
   background: #bd9341 !important;
   text-align: center;
   padding: 12px;
   margin-left: 85%;


}
.btn:hover
{
    color: rgba(0, 0, 0, .075) !important;
}

.text-left {
    color: rgba(0, 0, 0, 0.678);
    font-weight: 400
}



span.text-center {
    color: rgba(0, 0, 0, 0.3)
}

.fab {
    padding: 15px;
    font-size: 23px
}


.b-p{
    margin-top: 5%;
}
hr.solid {
  border-top: 2px solid #02300d;
margin-left: 10%;
margin-right: 10%;
}
.login-d{
    color: #bd9341 !important;
    font-weight: 500;

}
.pay{
    background: rgba(128, 128, 128, 0.171);
}
.new{
    margin-right: 10%;
}
.bb{
     background: #b5b5b48e;
     padding: 10%;
}
.col-v{
    width: 83%;
}
.t-b{
   border-radius: 2%;
   padding: 10px;
   border-color: gray;
}
</style>

<body>
    @include('header')
    <div class="puffer">
        <div class="banner">
        <div class="inhalt">
        <p>SECURE CHECKOUT<br/></p>
        </div></div></div>
        <br>
        <div class="container"><h3>CHECKOUT PAGE</h3>
            <br>
            <div class="puffer-c">
                <div class="banner-c">
                <div class="inhalt-c">
                <p>Returning customer? Click here to login<br/></p>
                </div></div></div>
                <br>
            <h6>BILLING DETAIL</h6>
            <br>
            <div class="row">
                <div class="col-6  col-sm-6">
                    <div class="row">
                        <div class="col-6 col-sm-6">
                            <div class="form-group">
                                <a href="#"><p class="text-left pt-2 ml-1">Full Name</p></a>
                                <input type="text" class="form-control" ></div>

                        </div>
                        <div class="col-6 col-sm-6">
                            <a href="#"><p class="text-left pt-2 ml-1">Last Name</p></a>
                                <input type="text" class="form-control" ></div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-12">
                                <div class="form-group">
                                    <a href="#"><p class="text-left pt-2 ml-1">Company Name</p></a>
                                    <input type="text" class="form-control" ></div>

                            </div>

                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6">
                                    <div class="form-group">
                                        <a href="#"><p class="text-left pt-2 ml-1">Email Address</p></a>
                                        <input type="text" class="form-control" ></div>

                                </div>
                                <div class="col-6 col-sm-6">
                                    <a href="#"><p class="text-left pt-2 ml-1">Phone</p></a>
                                        <input type="text" class="form-control" ></div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-sm-12">
                                        <div class="form-group">
                                            <a href="#"><p class="text-left pt-2 ml-1">Country Name</p></a>
                                            <input type="text" class="form-control" ></div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-sm-6">
                                            {{-- <div class="form-group">
                                                <select class="form-select" aria-label="Default select example">
                                                    <a href="#"><p class="form-control text-left pt-2 ml-1">Country</p></a>
                                                </select>


                                            </div> --}}

                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-sm-12">
                                                <div class="form-group">
                                                    <a href="#"><p class="text-left pt-2 ml-1">Address</p></a>
                                                    <input type="text" class="form-control" ></div>

                                            </div>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-6 col-sm-12">
                                                <div class="form-group">

                                                    <input type="text" class="form-control" ></div>

                                            </div>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-6 col-sm-12">
                                                <div class="form-group">
                                                    <a href="#"><p class="text-left pt-2 ml-1">Town\ City</p></a>
                                                    <input type="text" class="form-control" ></div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-sm-6">
                                                <div class="form-group">
                                                    <a href="#"><p class="text-left pt-2 ml-1">State / Country</p></a>
                                                    <input type="text" class="form-control" ></div>

                                            </div>
                                            <div class="col-6 col-sm-6">
                                                <a href="#"><p class="text-left pt-2 ml-1">Postcode / Zip</p></a>
                                                    <input type="text" class="form-control" ></div>
                                            </div>
                                            <a href="#"><p class="text-left pt-2 ml-1">Creat an account</p></a>

                </div>

    </div>
                </div>
                <div class="col-6 col-sm-6">
                    {{-- yes --}}
                    <div class="col-v">
                        <h3 class="item-h">CART TOTAL</h3>
                        <div class="bb">
                        <div class="row m-0">
                            <div class="col-sm-6 pt-3">
                              <h6>Subtotal</h6>
                            </div>

                            <div class="col-sm-6 pt-3">
                              <p id="subtotal">$132.00</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row m-0">
                            <div class="col-sm-6 pt-3 ">
                              <h6>Shipping</h6>

                            </div>

                            <div class="col-sm-6 pt-3">
                              <p id="tax">Free Shipping</p>
                              <p id="tax">Flat rate shipping</p>
                              <div class="form-group">
                                <select class="form-select" aria-label="Default select example">
                                    <a href="#"><p class="form-control text-left ">Country</p></a>
                                    <option value="">Germany</option>
                        <option value="">Canada</option>
                        <option value="">Uk</option>
                                </select>


                            </div>
                 <br>
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example">
                                    <a href="#"><p class="form-control text-left ">Country</p></a>
                                    <option value="">Select an option</option>
                                </select>


                            </div>
                            <br>
                            <div class="form-group">

                                <input type="text" class="form-control" placeholder="Postcode/ZIP" ></div>
                                <br>
                                <button class="t-b">
                                    Total Update
                                </button>
                            </div>


                          </div>
                          <hr>
                          <div class="row mx-0 mb-2">
                            <div class="col-sm-6 pt-3 d-inline">
                              <h5>Total</h5>
                            </div>
                            <div class="col-sm-6 pt-3">
                              <p id="total">$138.40</p>
                            </div>
                          </div>
                        </div>
                          {{-- <a href="#" class="btn-o btn-primary">Place Order</a> --}}
                          {{-- <a href="#"><button id="btn-checkout" class="shopnow"><span>Checkout</span></button></a> --}}
                        </div>
                            </div>
            </div>
            <h3>YOUR ORDER</h3>
            <div class="row">
                <div class="col-6  col-sm-9">

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-sm-9">
                                    Product
                                </div>
                                <div class="col-6 col-sm-3">
                                   Total
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-sm-9">
                                    Subtotal
                                </div>
                                <div class="col-6 col-sm-3">

                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-sm-9">
                                    Total
                                </div>
                                <div class="col-6 col-sm-3">
                                      $197
                                </div>
                            </div>
                        </div>
                      </div>

                </div>
                <div class="col-6 col-sm-3">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6 col-sm-9">
                    <div class="card pay">

                        <div class="card-body">


                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Direct Bank Transfer
                            </label>
                            <br><br/>
                            <div class="card">
                                <div class="card-body">
                                  Make your payment directly into your back account. Please use your order ID
                                </div>
                              </div>
                          </div>
                          <br>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                             Paypal
                            </label>
                          </div>
                          <a href="#" class="btn-o btn-primary">Place Order</a>
                        </div>
                      </div>
                </div>
                <div class="col-6 col-sm-3">
                </div>

            </div>




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
