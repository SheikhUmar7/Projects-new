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
    <link rel="stylesheet" type="text/css" href="{{ url('/style/bag.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/style/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/style/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/style/bootstrap.min.css') }}" />


  </head>
  <style>
    .puffer{padding-top: 0%; background-color: #a79a89;}

.banner{ background: #e4dacd; width:100%; margin: 0 auto; justify-content: center; text-align: center; z-index: 5; padding: 0px 0px; height: 131px;}
.banner p{ clear: both; color: #fff; font-size: 62px; font-family: sans-serif; padding-top: 25px; color: black; font-weight: 700}
.inhalt{ }
.puffer{padding-top: 0%; background-color: #a79a89;}

/* .banner-c{ background: #f1f0f0; width:100%; margin: 0 auto; justify-content:  center; z-index: 5; padding: 14px 0px; height: 52px;  border-top: 3px solid #bd9341;}
/* .banner-c p{ clear: both; color: #fff; font-size: 62px; font-family: sans-serif; padding-top: 25px; color: black; font-weight: 700} */
.inhalt-c{ } */
#navigation_background {top: 0px !important;}
.nav_wrapper.sticky_nav {top: 0px !important;}
.cm-templates-navigation-container {top: 0px !important;}

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

    width: 15%;
    border-radius: 10px;
    border: none;
   background: #bd9341 !important;
   text-align: center;
   padding: 12px;

   padding-left: 173px;
    padding-right: 137px;


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
.f-r{
    background-color: #b5b5b48e;
    color: #bd9341;

}
.item-h{
    margin-bottom: 50px;
    margin-top: 80px;
}
.t-v {
    padding: 2.5rem;
}
.col-3{
    /* background: #b5b5b48e; */
    margin-bottom: 6%;
    width: 33% !important;

}
.col-9 {

    width: 66% !important;
}
.bb{
     background: #b5b5b48e;
     padding: 10%;
}
.first{
    padding: 10%;
    margin: 10%;
}

.table>:not(caption)>*>* {
    padding: 1.5rem 2.5rem !important;
    background-color: var(--bs-table-bg);
    border-bottom-width: 1px;
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}
  </style>
  <body>

    <!-- nav bar  -->

@include('header')
{{-- @include('section') --}}


{{-- @include('new.data') --}}





    <!-- nav bar end  -->
    <div class="mainPage">
      <!-- /* welcome section  */ -->


      <div class="puffer">
        <div class="banner">
        <div class="inhalt">
        <p>MY BAG<br/></p>
        </div></div></div>
        <br>

<div class="container">
    <div class="container">

        <div class="row">
          <div class="col-9 col">
            <h3 class="item-h">ITEMS IN YOUR BAGARE NOT RESERVED AND MAY SELL OUT</h3>
            <table class="table">
                <thead>
                  <tr class="f-r">
                    <th scope="col-6 " class="first">PRODUCT</th>
                    <th scope="col-3">NAME</th>
                    <th scope="col-3">PRICE</th>
                    <th scope="col-3">QUANTITY</th>
                    <th scope="col-3">TOTAL</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                  <tr>
                    <th scope="row" >
                        <img src="{{ $item->attributes->image }}" alt="" width="20%" height="20%">
                          Classic Yellow LV Bag
                    </th>
                    <td>{{ $item->name }}</td>
                    <td>${{ $item->price }}</td>
                    {{-- <td><select  class="s-i">
                        <option selected>1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                      </select></td> --}}
                      <td class="justify-center mt-6 md:justify-end md:flex">
                        <div class="h-10 w-28">
                          <div class="relative flex flex-row w-full h-8">

                            <form action="{{ route('cart.update') }}" method="POST">
                              @csrf
                              <input type="hidden" name="id" value="{{ $item->id}}" >
                            <input type="text" name="quantity" value="{{ $item->quantity }}"
                            class="w-16 text-center h-6 text-gray-800 outline-none rounded border border-blue-600" />
                            <button class="px-4 mt-1 py-1.5 text-sm rounded rounded shadow text-violet-100 bg-violet-500">Update</button>
                            </form>
                          </div>
                        </div>
                      </td>

                    <td>
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <button class="px-4 py-2 text-white bg-red-600 shadow rounded-full"><img width="14" height="14" src="https://img.icons8.com/material-sharp/24/multiply.png" alt="multiply"/></button>
                        </form>
                        {{-- <img width="14" height="14" src="https://img.icons8.com/material-sharp/24/edit--v1.png" alt="edit--v1"/> --}}
                    </td>
                  </tr>

                @endforeach
                </tbody>
              </table>
          </div>

          <div class="col-3">
            <h3 class="item-h">CART TOTAL</h3>
            <div class="bb">
            <div class="row m-0">
                <div class="col-sm-6 pt-3">
                  <h6>Subtotal</h6>
                </div>

                <div class="col-sm-6 pt-3">
                  <p id="subtotal">${{ Cart::getTotal() }}</p>
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
              <br/>
                <div class="form-group">
                    <select class="form-select" aria-label="Default select example">
                        <a href="#"><p class="form-control text-left ">Country</p></a>
<option value="">Select</option>
                    </select>


                </div>
                <br>

                <div class="form-group">

                    <input type="text" placeholder="Postcode/ZIP" class="form-control" ></div>
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
              <a href="#" class="btn-o btn-primary">Place Order</a>
              {{-- <a href="#"><button id="btn-checkout" class="shopnow"><span>Checkout</span></button></a> --}}
            </div>
          </div>
        </div>
          </div>

        </div>
      </div>
</div>

<div>
    <form action="{{ route('cart.clear') }}" method="POST">
      @csrf
      <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500">Clear Carts</button>
    </form>
  </div>
@include('footer')
      <!-- news latter end -->
    </div>
    <!-- footer Section-->


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
