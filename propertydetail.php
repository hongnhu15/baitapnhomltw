<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>
<!DOCTYPE html>
<html lang="en">

<head>

 <!-- swiper CSS cdn link  -->
 <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

<!-- custom CSS file link  -->
<link rel="stylesheet" href="style.css">

<!-- Font awesome cdn link  -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="CHI TIẾT PHÒNG TRọ">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!--	Title
	=========================================================-->
<title>CHI TIẾT PHÒNG TRỌ</title>
<style>
.header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    padding: 3rem 9%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(255,255,255,.1);
    box-shadow: 0rem 0.1rem 0.5rem rgba(0,0,0,.1);
}
.header .logo {
    display: flex;
    align-items: center;
    font-size: 2.5rem;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: .1rem;
}
.header .navbar {
    position: absolute;
    top: 100%;
    right: 0;
    left: 0;
    background: rgba(0,0,0,.9);
    clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    border-top: .1rem solid #eee;
}
.header .icons a {
    font-size: 1.5rem;
    letter-spacing: .1rem;
    color: #fff;
    background: var(--main-color);
    font-weight: 500;
    text-transform: uppercase;
    padding: .8rem 2rem;
    border: none;
}
.footer {
    width: 100%;
}
element.style {
    width: 690px;
    height: 402px;
    margin: 30px auto 50px;
    position: relative;
    visibility: visible;
}
html .ls-container, body .ls-container, #ls-global .ls-container {
    float: none !important;
}
html .ls-container, body .ls-container, #ls-global .ls-container, html .ls-container .ls-slide-transition-wrapper, body .ls-container .ls-slide-transition-wrapper, #ls-global .ls-container .ls-slide-transition-wrapper, html .ls-container .ls-slide-transition-wrapper *, body .ls-container .ls-slide-transition-wrapper *, #ls-global .ls-container .ls-slide-transition-wrapper *, html .ls-container .ls-bottom-nav-wrapper, body .ls-container .ls-bottom-nav-wrapper, #ls-global .ls-container .ls-bottom-nav-wrapper, html .ls-container .ls-bottom-nav-wrapper *, body .ls-container .ls-bottom-nav-wrapper *, #ls-global .ls-container .ls-bottom-nav-wrapper *, html .ls-container .ls-bottom-nav-wrapper span *, body .ls-container .ls-bottom-nav-wrapper span *, #ls-global .ls-container .ls-bottom-nav-wrapper span *, html .ls-direction-fix, body .ls-direction-fix, #ls-global .ls-direction-fix {
    direction: ltr !important;
}
.ls-wp-fullwidth-container, .ls-wp-fullwidth-helper, .ls-gui-element *, .ls-gui-element, .ls-container, .ls-slide > *, .ls-slide, .ls-wrapper, .ls-layer {
    box-sizing: content-box !important;
}
.ls-container {
    visibility: hidden;
    position: relative;
    max-width: 100%;
}
.schedule {
            padding: 30px 0;
        }

        .full-row {
            width: 100%;
            float: left;
        }

        .container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
        }

        .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-md-12 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .heading {
            font-size: 36px;
            line-height: 1.5;
            margin-bottom: 30px;
        }

        .tab-content {
            margin-top: 20px;
        }

        .tab-pane {
            padding: 15px;
        }

        .col-md-6 {
            width: 50%;
            float: left;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-lg-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .featured-thumb {
            position: relative;
            display: block;
            margin-bottom: 30px;
        }

        .overlay-black {
            position: relative;
        }

        .overlay-black img {
            width: 100%;
            height: auto;
            vertical-align: middle;
        }

        .featured {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 4px;
        }

        .price {
            position: absolute;
            bottom: 20px;
            left: 20px;
            padding: 10px;
        }

        .text-primary {
            color: #f73471 !important;
        }

        .text-black {
            color: #000 !important;
        }

        .featured-thumb-data {
            position: relative;
            background: #fff;
            border: 1px solid #e1e1e1;
            border-top: none;
            padding: 10px;
            border-radius: 0 0 4px 4px;
        }

        .p-3 {
            padding: 1rem !important;
        }

        .text-secondary {
            color: #f73471 !important;
        }

        .hover-text-success:hover {
            color: #28a745 !important;
        }

        .location {
            display: block;
            margin-top: 5px;
        }

        .text-success {
            color: #28a745 !important;
        }

        .bg-gray {
            background-color: #f8f9fa !important;
        }

        .quantity {
            padding: 2px;
        }

        ul {
            padding-left: 0;
            list-style: none;
        }

        li {
            display: block;
        }

        .float-left {
            float: left !important;
        }

        .float-right {
            float: right !important;
        }
        .position-relative {
    position: relative!important;
        }

    .overflow-hidden {
    overflow: hidden!important;
    }
    .overlay-black::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .featured-thumb .price, .featured-thumb .appartment {
    position: absolute;
    bottom: 20px;
    left: 20px;
    z-index: 99;
    font-size: 21px;
    }
    .text-primary, a.text-primary, .text-primary a, a.text-primary:focus, a.hover-text-primary:hover, .hover-text-primary:hover, .hover-text-primary a:hover {
    color: var(--theme-primary-color) !important;
    }

    .text-primary {
    color: #f73471!important;
    }
    .quantity ul {
        list-style: none;
        padding: 0;
        display: flex;
        justify-content: space-between;
    }

    .quantity ul li {
        flex: 1;
        text-align: center;
        border-right: 1px solid #ddd;
        padding: 10px 0;
    }

    .quantity ul li:last-child {
        border-right: none;
    }
    .p-4 {
    padding: 1.5rem!important;
    }

    .w-100 {
    width: 100%!important;
    }
    .d-inline-block {
    display: inline-block!important;
    }
    .text-success {
    color: #f73471!important;
    }
    img {
    overflow-clip-margin: content-box;
    overflow: clip;
    }
    .mr-3, .mx-3 {
    margin-right: 1rem!important;
}

.float-left {
    float: left!important;
}
.ls-slide {
    position: relative;
    width: 100%;
    height: auto;
}
.ls-bg {
    position: relative;
    width: 100%;
    height: auto;
}
.logo {
    display: flex;
    align-items: center;
    font-size: 2.5rem;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
}
.ls-wrapper {
    padding: 0 !important;
    visibility: visible !important;
    border: 0 !important;
    z-index: 1;
}
</style>
</head>
<body>


    <div class="row"> 
        <!--	Header start  -->
        <header class="header">

            <a href="#" class="logo">
            <i class="fas fa-home " style="color: pink; margin-right: 5px"> </i> NHÀ TRỌ  <span>56</span>
            </a>

                <nav class="navbar">
                    <a href="#">Trang chủ</a>
                    <a href="#">Về chúng tôi</a>
                    <a href="#">Tin tức</a>
                    <a href="contact1.php">Liên hệ</a>
                </nav>
                <div class="icons">
                    <a href="signin.php" class="btn register-btn">Đăng ký</a>
                    <a href="login.php" class="btn login-btn">Đăng nhập</a>
                </div>
            
        </header>

        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('image/anh13.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <nav aria-label="anh13" class="float-left float-md-right">
                            <ol class="anh13 bg-transparent m-0 p-0">
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->

		
        <div class="full-row">
            <div class="container">
                <div class="row">
				
					<?php
						$id=$_REQUEST['pid']; 
						$query=mysqli_query($conn,"SELECT property.*, user.* FROM `property`,`user` WHERE property.uid=user.uid and pid='$id'");
						while($row=mysqli_fetch_array($query))
						{
					  ?>
				  
                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col-md-12">
                                <div id="single-property" style="width:1200px; height:700px; margin:30px auto 50px;"> 
                                    <!-- Slide 1-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['pimage'];?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 2-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['pimage'];?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 3-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['pimage'];?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 4-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['pimage'];?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 5-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['pimage'];?>" class="ls-bg" alt="" /> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h5 class="mt-2 text-secondary text-capitalize"><?php echo $row['title'];?></h5>
                                <span class="mb-sm-20 d-block text-capitalize"><i class="fas fa-map-marker-alt text-success font-12"></i> &nbsp;<?php echo $row['location'];?></span>
							</div>
                            <div class="col-md-6">
                                <div class="text-success text-left h5 my-2 text-md-right">$<?php echo $row['price'];?></div>
                                <div class="text-left text-md-right">Giá</div>
                            </div>
                        </div>
                        <div class="property-details">
                            <div class="bg-gray property-quantity px-4 pt-4 w-100">
                                <ul>
                                    <li><span class="text-secondary"><?php echo $row['size'];?></span> m2</li>
                                    <li><span class="text-secondary"><?php echo $row['bedroom'];?></span> Phòng ngủ</li>
                                    <li><span class="text-secondary"><?php echo $row['bathroom'];?></span> Phòng tắm</li>
                                    <li><span class="text-secondary"><?php echo $row['balcony'];?></span> Ban công</li>
                                    <li><span class="text-secondary"><?php echo $row['hall'];?></span> Gác</li>
                                    <li><span class="text-secondary"><?php echo $row['kitchen'];?></span> Nhà bếp</li>
                                </ul>
                            </div>
                            <h4 class="text-secondary my-4">Mô tả</h4>
                            <p><?php echo $row['pcontent'];?></p>
                            
                            <h5 class="mt-5 mb-4 text-secondary">Thông tin tóm tắt</h5>
                            <div  class="table-striped font-14 pb-2">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td>Loại cho thuê :</td>
                                            <td class="text-capitalize"><?php echo $row['type'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Tầng :</td>
                                            <td class="text-capitalize"><?php echo $row['floor'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Thành phố :</td>
                                            <td class="text-capitalize"><?php echo $row['city'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Trạng thái trọ :</td>
                                            <td class="text-capitalize"><?php echo $row['state'];?></td>
                                        </tr>   
                                        
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="mt-5 mb-4 text-secondary">Features</h5>
                            <div class="row">
								<?php echo $row['17'];?>
								
                            </div>   
							
                            <h5 class="mt-5 mb-4 text-secondary">Bản vẽ kiến trúc</h5>
                         
                               
                                    <div> <img src="admin/property/<?php echo $row['mapimage'];?>" alt="Not Available"> </div>
                    

                            <h5 class="mt-5 mb-4 text-secondary double-down-line-left position-relative">Liên hệ chủ trọ</h5>
                            <div class="agent-contact pt-60">
                                <div class="row">
                                    <div class="col-sm-4 col-lg-3"> <img src="admin/user/<?php echo $row['uimage']; ?>" alt="" height="200" width="170"> </div>
                                    <div class="col-sm-8 col-lg-9">
                                        <div class="agent-data text-ordinary mt-sm-20">
                                            <h6 class="text-success text-capitalize"><?php echo $row['uname'];?></h6>
                                            <ul class="mb-3">
                                                <li><?php echo $row['uphone'];?></li>
                                                <li><?php echo $row['uemail'];?></li>
                                            </ul>
                                            
                                            <div class="icon">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php } ?>
					
                    <div class="col-lg-4">
                        

                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Nhà trọ mới thêm gần đây</h4>
                            <ul class="property_list_widget">
							
								<?php 
								$query=mysqli_query($conn,"SELECT * FROM `property` ORDER BY date DESC LIMIT 7");
										while($row=mysqli_fetch_array($query))
										{
								?>
                                <li> <img src="admin/property/<?php echo $row['pimage'];?>" alt="pimage">
                                    <h6 class="text-secondary hover-text-success text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['pid'];?>"><?php echo $row['title'];?></a></h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?php echo $row['location'];?></span>
                                    
                                </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!--	Footer   start-->
         <section class="footer">

        <div class="box-container">

            <div class="box">
                <h1>Nhà Trọ 56</h1>
                <div class="text">
                    <p>Giới thiệu ở đây nhé!</p>
                </div>
                <div class="icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="box">
                <h1>contact info</h1>
                <div class="icons">
                    <a href="#"><i class="fas fa-map-marker-alt"></i>56 Hoàng Diệu 2, Phường Linh Chiểu, TP. Thủ Đức</a>
                    <a href="#"><i class="fas fa-phone-alt"></i>0568107033</a>
                    <a href="#"><i class="fas fa-envelope"></i>nhatrosinhvien56hd2@gmail.com</a>
                </div>
            </div>

            <div class="box">
                <h1>Quick links</h1>
                <div class="icons">
                    <a href="#">Trang chủ</a>
                    <a href="#about-us">Thông tin về chúng tôi</a>
                    <a href="#">Các dịch vụ</a>
                    <a href="#">Tin tức</a>
                    <a href="#">Liên hệ</a>
                </div>
            </div>

        </div>

        <div class="credit">created by <span>Nhóm Máu Chảy Về Tim</span> | all right reserved</div>

    </section>
		<!--	Footer   ends-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script> 

</body>

</html>