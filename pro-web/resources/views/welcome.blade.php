<style>*,
  *:after,
  *:before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0;
    margin: 0;
  }

  /* Clearfix hack by Nicolas Gallagher: http://nicolasgallagher.com/micro-clearfix-hack/ */
  .clearfix:before,
  .clearfix:after {
      content: " ";
      display: table;
  }

  .clearfix:after {
      clear: both;
  }

  .clearfix {
      *zoom: 1;
  }

  ol, ul {
    list-style: none;
    text-align:center;
  }
  .container{max-width: 100%; margin:0 auto;}
  .header{
  vertical-align:middle;
    background:rgba(255,255,255,0.95);
    height:180px;
    box-sizing:border-box;
    -moz-box-sizing:border-box;
    padding:20px 0;
       -webkit-transition:all 0.2s ease-in;
     -moz-transition:all 0.2s ease-in;
     -o-transition:all 0.2s ease-in;
     transition:all 0.2s ease-in;
  }

  .logo img{
    margin:0 10px;
  }

  .stickynav{
    position: fixed;
    left: 0;
    right: 0;
    z-index: 99999;
  }

  .header-inner{
    height:100%;
    position:relative;
  }

  .header-logo{
    height:87%;
    text-align:center;
  }

  .header-logo .logo,.header-logo .logo img{
    height:90%;
  }

  .navleft{
    position:absolute;
    left: 125px;
    top: 70px;
  }

  .navright{
    position:absolute;
    right:125px;
    top:70px;
  }
  .navright-a {
    position:absolute;
    right:125px;
    top:70px;
  }
  .block{
    padding:45px 0;
  }

  .navbar .btn-navbar .icon-bar {
    display: block;
    width: 23px;
    height: 3px;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    border-radius: 1px;
    box-shadow: none;
    background:#fff;
  }

  .navbar .btn-navbar {
    position: absolute;
    top: 18px;
    right: 20px;
    z-index: 3;
    background: #99cccc;
    box-shadow: none;
    border: none;
    padding-bottom:9px;
  }

  .navbar .btn-navbar:hover{
    background:#00ada7;
  }

  .btn-navbar .icon-bar+.icon-bar {
    margin-top: 4px;
  }

  .btn-navbar {
    float: right;
    padding: 6px 9px 9px;
    box-shadow: none;
    border-radius: 0;
    display:none;
  }

  .navigation li a{
    font-weight:400;
    font-size:11px;
    line-height:30px;
    padding:16px;
    margin: -7px;
  }

  .navigation li{
    display:inline-block;
    line-height:60px;
  }

  .navleft .navigation{
    float:right;
  }

  .navright .navigation{
    float:left;
  }
  .navright-a .navigation-a{
    float:left;
  }

  .navigation .current-menu-item a{
    color:#00ada7;
  }

  .navbar{
    padding:0;
    margin-bottom:0;
  }

  .navbar-inverse .nav .active>a, .navbar-inverse .nav .active>a:hover, .navbar-inverse .nav .active>a:focus,.navbar-inverse .brand, .navbar-inverse .nav>li>a ,.navbar-inverse .nav>li>a:hover  {
  color: #00ada7;
  background-color: #fff;
  }

  .navbar .nav>.active>a, .navbar .nav>.active>a:hover, .navbar .nav>.active>a:focus,.navbar-inverse .brand, .navbar-inverse .nav>li>a {
  box-shadow: none;
  text-shadow:none;
  }

  @media (min-width: 1200px) {
    .navleft{
    max-width:500px;
      text-align:right;
  }

  .navright{
  max-width:500px;
  }
  }
  @media (min-width: 980px) and (max-width: 1199px) {
    .navleft{
  max-width:385px;
  }

  .navright{
  max-width:385px;
  }
  }


  /* Portrait tablet to landscape and desktop */
  @media (min-width: 768px) and (max-width: 979px) {
  .header-inner{
    position:relative;
  }

  .navbar .btn-navbar {
    top: 18px;
    right: 0;
  }
  }

  @media (max-width: 979px) {

    .navright .navigation{
      float:none;
      width:100%;
    }

    .navleft .navigation {
      float: none;
      width:100%;
    }

    .navleft{
      position:relative;
      top:0;
    }

    .navright{
      position:relative;
      top:0;
    }

    .header-logo .logo, .header-logo .logo img{
      height:auto;
    }

    .logo{
      float:none;
    }

    .header-nav{
      float:none;
    }

    .header{
      position:relative;
      height:auto!important;
      padding:0;
    }

    .header-logo{
      padding:20px 0;
    }

    .dropdown-menu{
      display:block!important;
    }

    .dropdown-menu li:first-child a{
      padding-top:0;
    }

    .navright .dropdown-menu li:last-child,.navright .navigation li:last-child{
      border-bottom:none;
    }

    .nav-collapse .nav>li>a, .nav-collapse .dropdown-menu a {
      padding: 6px 15px;
      font-weight:400;
    }

    .navbar-inverse .nav-collapse .nav>li>a, .navbar-inverse .nav-collapse .dropdown-menu a {
      color: #333333;
    }

    .navbar-inverse .nav-collapse .nav>li>a:hover, .navbar-inverse .nav-collapse .nav>li>a:focus, .navbar-inverse .nav-collapse .dropdown-menu a:hover, .navbar-inverse .nav-collapse .dropdown-menu a:focus {
      background-color: transparent;
    }

    .navigation {
      display: block;
      height: auto!important;
      text-align: left;
    }

    .navigation li {
      float: none;
      border-bottom: 1px solid #cecece;
      display:block;
    }

    .navbar .nav {
      padding-top: 15px;
    }

    .navbar {
      margin-bottom:0;
    }

    .logo{
      padding:20px 0;
      display:inline;
    }

    .btn-navbar {
      display:block
    }


  }
  //
  .header {
padding-top: 1px;
background: #bd9341 !important;
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;


}
.grid-container-2 {
  display: grid;
  grid-template-columns: auto auto auto;


}
.grid-item-r {
  background-color: #bd9341;
  padding: 4.2px;
  padding-left: 44%;
  font-size: x-small;
  color: white;
  font-family: 'Poppins', sans-serif;

}
.grid-item-c {
  background-color: #bd9341;
  padding: 4.2px;


}
.grid-item-l {
  background-color: #bd9341;
  padding: 4.2px;
padding-left: 10%;
  font-size: x-small;
  color: white;
  font-family: 'Poppins', sans-serif;

}
.nav-a{
    margin-bottom: 10%;
}
  </style>
  <div class="grid-container">
    <div class="grid-item-l"><img width="14" height="14" src="https://img.icons8.com/fluency-systems-regular/48/000000/new-post.png" alt="new-post"/><span>Email Address: info@example.com</span></div>
    <div class="grid-item-c"></div>
    <div class="grid-item-r">Marketplace | Help & Faq <span class="login">logo | Sign in or Register</span></div>
</div>
<div class="header">
  <div class="container header-inner">

      <nav class="navbar navbar-inverse">

        <div class="header-logo">
                      <a href="#" class="logo">
                        <img src="{{URL::asset('/image/logo.png')}}"  width="180" alt="">
          </a>
        </div>

        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>







<div class="nav-collapse navleft">

<ul class="navigation">
            <li><a href="#" class="onepagelink">HOME</a></li>
                  <li><a href="#" class="onepagelink">WHATS NEW</a></li>
                  <li><a href="#" class="onepagelink">CLOTHING</a></li>
                  <li><a href="#" class="onepagelink">ILATIAN</a></li>
                  <li><a href="#" class="onepagelink">INTIMATES</a></li>
                  <li><a href="#" class="onepagelink">SWIM</a></li>
                  <li><a href="#" class="onepagelink">JEWELLERY</a></li>

</ul>

</div>



<div class="nav-collapse navright ">
  <ul class="navigation nav-a">

    <li><a href="#" class="onepagelink">ACCESSORIES</a></li>
          <li><a href="#" class="onepagelink">SHOES</a></li>
          <li><a href="#" class="onepagelink">BRIGHTHON</a></li>
          <li><a href="#">JONNY WAS</a></li>
          <li><a href="#" class="onepagelink">HOTEL COLLACTION</a></li>
          <li><a href="#" class="onepagelink">SALE</a></li>


</ul>

  <ul class="navigation">

              <li><a href="#" class="onepagelink">ACCESSORIES</a></li>
                    <li><a href="#" class="onepagelink">SHOES</a></li>
                    <li><a href="#" class="onepagelink">BRIGHTHON</a></li>
                    <li><a href="#">JONNY WAS</a></li>
                    <li><a href="#" class="onepagelink">HOTEL COLLACTION</a></li>
                    <li><a href="#" class="onepagelink">SALE</a></li>


  </ul>

  </div>

</nav>




  </div>
</div>
