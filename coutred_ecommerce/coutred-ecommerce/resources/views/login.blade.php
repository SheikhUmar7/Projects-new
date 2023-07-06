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
    body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: rgba(255, 1, 1, 0.1)
}

.card {
    border: none;
    border-radius: 5;
    width: 450px !important;
    margin: -141 auto;

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
    border: 2px solid rgba(0, 0, 0, .075);
    border-radius: 50px !important;
    margin-top: 2%;

    letter-spacing: 1px
}

.form-control:focus {
    border: 0.5px solid #bd9341;
    border-radius: 30px;
    box-shadow: none;
    background-color: rgba(0, 0, 0, .075);
    color: #000;
    letter-spacing: 1px
}

.btn-l {
    display: block;
    width: 100%;
    border-radius: 50px !important;
    /* border: none; */
   background: #bd9341 !important;
   margin-top: 3% !important;

}
.btn-l:hover
{
    color: rgba(0, 0, 0, .075) !important;
}

.text-left {
    color: rgba(0, 0, 0, 0.3);
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
    color: white !important;

}
.btn:hover{
    color: white !important;
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
.f-p{
    color: red !important;

}
.welcomeSection .carousel-caption {

padding-top: 2% !important;
}

</style>
<body>
   @include('header')
   {{-- @include('new_data') --}}

   <section class="welcomeSection">
    <div
      id="carouselExampleControls"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="../images/signup/login.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 mx-auto py-4 px-0">
                                <div class="card p-0">
                                    <div class="card-title text-center">
                                        <h5 class="mt-5">Log In</h5>
                                    </div>

                                    <hr class="solid">
                                    <span class="text-center pt-1">Dont have an account? Sign up</span>
                                    <div class="row">
                                        <div class=" text-center col-9 col-sm-12 ">
                                    <img width="38" height="38" src="https://img.icons8.com/fluency/48/facebook-new.png" alt="facebook-new"/>
                                    <img width="38" height="38" src="https://img.icons8.com/fluency/48/gmail-new.png" alt="gmail-new"/>
                                    <img width="38" height="38" src="https://img.icons8.com/fluency/48/linkedin-circled.png" alt="linkedin-circled"/>
                                    <img width="38" height="38" src="https://img.icons8.com/fluency/48/twitter-circled.png" alt="twitter-circled"/>
                                    <img width="38" height="38" src="https://img.icons8.com/fluency/48/instagram-new.png" alt="instagram-new"/>

                                        </div>

                                        </div>
                                    <form class="signup">


                                        <div class="row">
                                            <div class="col-9 col-sm-12 ">
                                                <div class="form-group">

                                                    <input type="text" class="form-control p-3" placeholder="Username"></div>

                                            </div>

                                            </div>

                                         <div class="row">
                                            <div class="col-9 col-sm-12">

                                                <input type="text" class="form-control p-3" placeholder="Password"></div>

                                            </div>
                                            <div class="row">
                                                <div class="text-center col-6 col-sm-6">
                                                     <span class="text-center mt-3"> Remember me </span>
                                                    </div>

                                                <div class="col-6 col-sm-6 ">
                                                     <span class="text-center mt-3 f-p">Forget Password</span>
                                                    </div>




                                            <button type="button" class="btn btn-l  b-p p-3">LOGIN</button>
                                            <span class="text-center pt-4">Dont have an account? Sign up</span>
                                            {{-- <span class="text-center pt-2 login-d">Login Now</span> --}}
                                        </div>
                                            </div>
                                         </div>

                                        <div class="row">
                                            <div class="d-flex mx-auto pt-1 pb-3"> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-linkedin"></i></a> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 main">

                </div>
              </div>
            </div>

            {{-- <div class="image leftImg">
              <img src="../images/mainpage/welcome-1.png" alt="" />
            </div> --}}
          </div>
        </div>


      </div>


    </div>
  </section>
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
