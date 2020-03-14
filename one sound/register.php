<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>One Sound - Classical Music</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="anasayfa.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="anasayfa.php">Anasayfa</a></li>
                                    <li><a href="parcalar.php">Parçalar</a></li>
									<li><a href="enstruman.php">Enstrümanlar</a></li>
                                    <li><a href="muzisyen.php">Müzisyenler</a></li>
                                    
                                        <ul class="dropdown">
                                            
                                            
                                                        </ul>
                                                    </li>
                                                   
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    
                                </ul>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="login-register-btn mr-50">
                                        <a href="login.php" id="loginBtn">Giriş Yap</a>
										<a href="register.php" id="loginBtn">/Üye Ol</a>
                                    </div>

                                    <!-- Cart Button -->
                                    <div class="cart-btn">
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb-1.jpg);">
        <div class="bradcumbContent">
            <br>
            <h2>Üye Ol</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content" style="background-image: url(img/bg-img/pia4.jpg);">
                        <h3>Hoşgeldiniz</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="#" method="post">
							<div class="form-group">
                                    <label for="exampleInputKullanıcıadı1">Adı</label>
                                    <input type="text" class="form-control" id="exampleInputKullanıcıadı1"  placeholder="Adınızı giriniz" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail giriniz" name="email">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>E-mail adresinizi başkasıyla paylaşmayacagız.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputŞifre1">Şifre</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Şifrenizi giriniz" name="password">
                                </div>
                                <button type="submit" class="btn oneMusic-btn mt-30" name="submit">Üye Ol</button>
								<p class="message">Zaten üye misiniz?<a href="login.php">Gİriş Yap</a></p> 
                            </form>
							<?php 

$link=mysqli_connect('localhost','root',''); 

mysqli_select_db($link,'beyaz'); 

if(isset($_POST["submit"])){ 

$name=$_POST["name"]; 

$email=$_POST["email"]; 

$password=$_POST["password"]; 

$inserer=mysqli_query($link,"INSERT INTO tablo VALUES ('$name','$email','$password')");
 

} 

?> 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="anasayfa.php"><img src="img/core-img/logo.png" alt=""></a>
                    
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="anasayfa.php">Anasayfa</a></li>
                            <li><a href="muzisyen.php">Müzisyenler</a></li>
                            <li><a href="enstruman.php">Enstrümanlar</a></li>
                            <li><a href="parcalar.php">Parçalar</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>