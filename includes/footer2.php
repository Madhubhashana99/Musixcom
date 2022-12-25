<! DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<meta charset="UTF-8">  
<title>  Boostrap3 Footer Example  
</title>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">  
</head>  
<style>  
html {  
  position: relative;  
  min-height: 100%;  
  body {  
    margin-bottom: 60px;   
    .footer {  
      position: absolute;  
      bottom: 0;  
      width: 100%;  
      height: 60px;   
      background-color: rgba(0,0,0,0.3);  
    }  
  }  
}  
body {  
  background-color:#563d7c;  
  color:white;  
  >.container {  
    padding: 60px 15px 0;  
  }  
  .footer {  
    .container {  
      padding-right: 15px;  
      padding-left: 15px;  
      .text-muted {  
        margin: 20px 0;  
        color: rgba(255,255,255,0.5);  
      }  
    }  
  }  
}  
.navbar-logo {  
  padding: 0px; /* firefox bug fix */  
}  
.navbar-logo>img {  
  height: 100%;  
  padding: 15px; /* firefox bug fix */  
  width: auto;  
}  
  
ul {  
    margin: 0px;  
    padding: 0px;  
}  
.footer-section {  
  background: #151414;  
  position: relative;  
}  
.footer-cta {  
  border-bottom: 1px solid #373636;  
}  
.single-cta i {  
  color: #ff5e14;  
  font-size: 30px;  
  float: left;  
  margin-top: 8px;  
}  
.cta-text {  
  padding-left: 15px;  
  display: inline-block;  
}  
.cta-text h4 {  
  color: #fff;  
  font-size: 20px;  
  font-weight: 600;  
  margin-bottom: 2px;  
}  
.cta-text span {  
  color: #757575;  
  font-size: 15px;  
}  
.footer-content {  
  position: relative;  
  z-index: 2;  
}  
.footer-pattern img {  
  position: absolute;  
  top: 0;  
  left: 0;  
  height: 330px;  
  background-size: cover;  
  background-position: 100% 100%;  
}  
.footer-logo {  
  margin-bottom: 30px;  
}  
.footer-logo img {  
    max-width: 200px;  
}  
.footer-text p {  
  margin-bottom: 14px;  
  font-size: 14px;  
      color: #7e7e7e;  
  line-height: 28px;  
}  
.footer-social-icon span {  
  color: #fff;  
  display: block;  
  font-size: 20px;  
  font-weight: 700;  
  font-family: 'Poppins', sans-serif;  
  margin-bottom: 20px;  
}  
.footer-social-icon a {  
  color: #fff;  
  font-size: 16px;  
  margin-right: 15px;  
}  
.footer-social-icon i {  
  height: 40px;  
  width: 40px;  
  text-align: center;  
  line-height: 38px;  
  border-radius: 50%;  
}  
.facebook-bg{  
  background: #3B5998;  
}  
.twitter-bg{  
  background: #55ACEE;  
}  
.google-bg{  
  background: #DD4B39;  
}  
.footer-widget-heading h3 {  
  color: #fff;  
  font-size: 20px;  
  font-weight: 600;  
  margin-bottom: 40px;  
  position: relative;  
}  
.footer-widget-heading h3::before {  
  content: "";  
  position: absolute;  
  left: 0;  
  bottom: -15px;  
  height: 2px;  
  width: 50px;  
  background: #ff5e14;  
}  
.footer-widget ul li {  
  display: inline-block;  
  float: left;  
  width: 50%;  
  margin-bottom: 12px;  
}  
.footer-widget ul li a:hover{  
  color: #ff5e14;  
}  
.footer-widget ul li a {  
  color: #878787;  
  text-transform: capitalize;  
}  
.subscribe-form {  
  position: relative;  
  overflow: hidden;  
}  
.subscribe-form input {  
  width: 100%;  
  padding: 14px 28px;  
  background: #2E2E2E;  
  border: 1px solid #2E2E2E;  
  color: #fff;  
}  
.subscribe-form button {  
    position: absolute;  
    right: 0;  
    background: #ff5e14;  
    padding: 13px 20px;  
    border: 1px solid #ff5e14;  
    top: 0;  
}  
.subscribe-form button i {  
  color: #fff;  
  font-size: 22px;  
  transform: rotate(-6deg);  
}  
.copyright-area{  
  background: #202020;  
  padding: 25px 0;  
}  
.copyright-text p {  
  margin: 0;  
  font-size: 14px;  
  color: #878787;  
}  
.copyright-text p a{  
  color: #ff5e14;  
}  
.footer-menu li {  
  display: inline-block;  
  margin-left: 20px;  
}  
.footer-menu li:hover a{  
  color: #ff5e14;  
}  
.footer-menu li a {  
  font-size: 14px;  
  color: #878787;  
}  
</style>  
<body>  
    <nav class="navbar navbar-default navbar-fixed-top">  
      <div class="container">  
        <div class="navbar-header">  
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">  
            <span class="sr-only"> Toggle navigation </span>  
            <span class="icon-bar"> </span>  
            <span class="icon-bar"> </span>  
            <span class="icon-bar"> </span>  
          </button>  
          <a class="navbar-brand" href="#"> Logo </a>       
      <a class="navbar-logo" href="#" class="pull-left"> <img style="max-width:150px; margin-top: 7px;"  
             src="logo 2.png"> </a>  
        </div>  
        <div id="navbar" class="collapse navbar-collapse">  
          <ul class="nav navbar-nav">  
            <li class="active"> <a href="#"> Link </a> </li>  
            <li> <a href="#about">Link </a> </li>  
            <li> <a href="#contact"> Link </a> </li>  
            <li class="dropdown">  
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"> </span> </a>  
              <ul class="dropdown-menu">  
                <li><a href="#"> Link </a> </li>  
                <li><a href="#"> Link</a> </li>  
                <li><a href="#"> Link </a> </li>  
              </ul>  
            </li>  
          </ul>  
        </div>  
      </div>  
    </nav>  
    <div class="container">  
      <div class="page-header">  
        <h1>Bootstrap 3 Sticky footer Example </h1>  
      </div>  
    </div>  
    <footer class="footer-section">  
        <div class="container">  
            <div class="footer-cta pt-5 pb-5">  
                <div class="row">  
                    <div class="col-xl-4 col-md-4 mb-30">  
                        <div class="single-cta">  
                            <i class="fas fa-map-marker-alt"> </i>  
                            <div class="cta-text">  
                                <h4> Find us </h4>  
                                <span> 1010 Avenue, sw 54321, chandigarh <span>  
                            </div>  
                        </div>  
                    </div>  
                    <div class="col-xl-4 col-md-4 mb-30">  
                        <div class="single-cta">  
                            <i class="fas fa-phone"> </i>  
                            <div class="cta-text">  
                                <h4> Call us </h4>  
                                <span> 9876543210 0 </span>  
                            </div>  
                        </div>  
                    </div>  
                    <div class="col-xl-4 col-md-4 mb-30">  
                        <div class="single-cta">  
                            <i class="far fa-envelope-open"> </i>  
                            <div class="cta-text">  
                                <h4> Mail us </h4>  
                                <span> mail@info.com </span>  
                            </div>  
                        </div>  
                    </div>  
                </div>  
            </div>  
            <div class="footer-content pt-5 pb-5">  
                <div class="row">  
                    <div class="col-xl-4 col-lg-4 mb-50">  
                        <div class="footer-widget">  
                            <div class="footer-logo">  
                                <a href="index.html"> <img src="logo 2.png" class="img-fluid" alt="logo"> </a>  
                            </div>  
                            <div class="footer-text">  
                                <p> Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing  
                                elit,Lorem ipsum dolor sit amet. </p>  
                            </div>  
                            <div class="footer-social-icon">  
                                <span> Follow us </span>  
                                <a href="#"> <i class="fab fa-facebook-f facebook-bg"> </i> </a>  
                                <a href="#"> <i class="fab fa-twitter twitter-bg"> </i> </a>  
                                <a href="#"> <i class="fab fa-google-plus-g google-bg"> </i> </a>  
                            </div>  
                        </div>  
                    </div>  
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">  
                        <div class="footer-widget">  
                            <div class="footer-widget-heading">  
                                <h3> Useful Links </h3>  
                            </div>  
                            <ul>  
                                <li> <a href="#"> Home </a> </li>  
                                <li> <a href="#"> about </a> </li>  
                                <li> <a href="#"> services</a> </li>  
                                <li> <a href="#"> portfolio</a> </li>  
                                <li> <a href="#"> Contact</a> </li>  
                                <li> <a href="#"> About us</a> </li>  
                                <li> <a href="#"> Our Services</a> </li>  
                                <li> <a href="#"> Expert Team</a> </li>  
                                <li> <a href="#"> Contact us</a> </li>  
                                <li> <a href="#"> Latest News</a> </li>  
                            </ul>  
                        </div>  
                    </div>  
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">  
                        <div class="footer-widget">  
                            <div class="footer-widget-heading">  
                                <h3> Subscribe </h3>  
                            </div>  
                            <div class="footer-text mb-25">  
                                <p> Don?t miss to subscribe to our new feeds, kindly fill the form below. </p>  
                            </div>  
                            <div class="subscribe-form">  
                                <form action="#">  
                                    <input type="text" placeholder="Email Address">  
                                    <button> <i class="fab fa-telegram-plane"> </i> </button>  
                                </form>  
                            </div>  
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>  
        <div class="copyright-area">  
            <div class="container">  
                <div class="row">  
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">  
                        <div class="copyright-text">  
                            <p> Copyright © 2018, All Right Reserved </p>  
                        </div>  
                    </div>  
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">  
                        <div class="footer-menu">  
                            <ul>  
                                <li> <a href="#"> Home </a> </li>  
                                <li> <a href="#"> Terms </a> </li>  
                                <li> <a href="#"> Privacy </a> </li>  
                                <li> <a href="#"> Policy </a> </li>  
                                <li> <a href="#"> Contact </a> </li>  
                            </ul>  
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </footer>  
</body>  
</html>  