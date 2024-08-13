<?php

$conn = mysqli_connect("localhost","root","","nhatro56");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang chủ Nhà Trọ 56</title>

        <!-- swiper CSS cdn link  -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

        <!-- custom CSS file link  -->
        <link rel="stylesheet" href="style.css">

        <!-- Font awesome cdn link  -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
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
    </style>

</head>
<body>

    <!-- header section starts  -->

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

    <!-- header section ends  -->

    <!-- home section starts  -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

            <div class="swiper-slide box" style="background:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(image/anh8.jpg);">

                </div>

        </div>

        </div>

    </section>

    <!-- home section ends  -->

    <!-- Nhà Trọ Sinh Viên starts -->

    <section class="feature">

        <h1 class="heading"> Nhà Trọ <span> Sinh Viên</span></h1>

        <div class="swiper feature-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/anh11.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">Sale 30%</div>
                        <h3><a href="chitiet.php">Xem chi tiết tại đây</a></h3>

                    </div>
                </div>

                

            </div>

        </div>

    </section>

    <!-- Nhà trọ Sinh Viên ends  -->

    <!-- Danh sách phòng trọ starts  -->
    <section class="schedule">
    <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="heading">DANH SÁCH<span> PHÒNG TRỌ</span></h1>
                    </div>
              
                    <div class="col-md-12">
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								
									<?php $query=mysqli_query($conn,"SELECT property.*, user.uname,user.uimage FROM `property`,`user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 9");
										while($row=mysqli_fetch_array($query))
										{
									?>
								
                                    <div class="col-md-6 col-lg-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="admin/property/<?php echo $row['pimage'];?>" alt="pimage" style="width: 100%; height: 250px; object-fit: cover;">
                                                <div class="featured bg-success text-white">New</div>
                                              
                                                <div class="price text-primary"><b>$<?php echo $row['price'];?> </b></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-3">
                                                    <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['pid'];?>"><?php echo $row['title'];?></a></h5>
                                                    <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-success"></i> <?php echo $row['location'];?></span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span><?php echo $row['size'];?></span>m2</li>
                                                        <li><span><?php echo $row['bedroom'];?></span> Phòng ngủ</li>
                                                        <li><span><?php echo $row['bathroom'];?></span> Phòng tắm</li>
                                                        <li><span><?php echo $row['kitchen'];?></span> Nhà bếp</li>
                                                        <li><span><?php echo $row['balcony'];?></span> Sân thượng </li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="p-4 d-inline-block w-100">
                                                    <div class="float-left text-capitalize"><i class="fas fa-user text-success mr-1"></i>Chủ trọ : <?php echo $row['uname'];?></div>
                                                    <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"></i> <?php echo date('d-m-Y', strtotime($row['date']));?></div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
		<!--	Danh Sách phòng trọ ends  -->



    <!-- Các Đối Tác Uy starts  -->

    <section class="trainers">

        <h1 class="heading">Các Đối Tác <span>Uy Tín</span></h1>

        <div class="swiper trainer-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/anh13.jpg" alt="">
                    </div>
                    <div class="name">
                    <h1 class="heading">mix<span>HOME</span></h1>
                        <p>Cung Cấp Nội Thất và Thiết Kế Phòng</p>
                    </div>
                </div>


            </div>
            <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/anh12.jpg" alt="">
                    </div>
                    <div class="name">
                    <h1 class="heading">bee<span>Taskee</span></h1>
                        <p>Dịch Vụ Chăm Sóc & Dọn Dẹp Nhà Cửa</p>
                    </div>
                </div>

            </div>
            

        </div>

    </section>

   <!-- Các Đối Tác Uy end  -->

    <!-- Người Sáng Lập starts  -->
    <section class="testimonial" id="about-us">
    <h1 class="heading">BAN <span> ĐIỀU HÀNH</span></h1>
    <div class="box-container">
        <!-- Nội dung hiện tại -->
        <div class="box">
            <div class="image">
                <img src="image/ninh.jpg" alt="">
            </div>
            <div class="name">
                <h1>Hồng Như</h1>
                <p>Founder <span>Nhà Trọ 56</span> </p>
            </div>
            <p>Với tư cách là một founder, hy vọng trang web Nhà trọ 56 sẽ giúp bạn tìm được phòng trọ theo như ý thích của bạn.</p>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/ninh.jpg" alt="">
            </div>
            <div class="name">
                <h1>Trung Hiếu</h1>
                <p>Co-Founder <span>Nhà Trọ 56</span> </p>
            </div>
            <p>Đã từng trải qua thời sinh viên, tôi biết việc tìm nhà trọ gần các trường đại học khó thế nào. Bên cạnh đó 
                còn phải tìm được phòng trọ uy tín nữa. Đừng lo lắng gì cả, vì đó là lí do Nhà Trọ 56 ra đời!
            </p>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/ninh.jpg" alt="">
            </div>
            <div class="name">
                <h1>Hải Yên</h1>
                <p>Co-Founder <span>Nhà Trọ 56</span> </p>
            </div>
            <p>Tìm nhà trọ thời 4.0. Đừng đi đâu cả, vì ở đây đã có Nhà Trọ 56. Chúng tôi luôn ở đây vì các bạn!</p>
        </div>
    </div>
    </div>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="image/ninh.jpg" alt="">
            </div>
            <div class="name">
                <h1>Thuận Ninh</h1>
                <p>CEO Truyền Trông <span>Nhà Trọ 56</span> </p>
            </div>
            <p>Nhà Trọ 56 là nơi tuyệt vời cho cả tôi và các bạn! Bạn không cần lo về chi phí quá cao để sở hữu một căn trọ hoàn hảo vì ở đây chúng tôi có nhiều
                dịch vụ và chương trình khuyến mãi với các đối tác vô cùng uy tín. Bạn trao tôi niềm tin, tôi trao bạn tiện ích!
            </p>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/ninh.jpg" alt="">
            </div>
            <div class="name">
                <h1>Hương Quỳnh</h1>
                <p>CEO Marketing <span>Nhà trọ 56</span> </p>
            </div>
            <p>Cuộc sống sinh viên khỏe hơn khi có Nhà Trọ 56</p>
        </div>

        <!-- Nội dung hiện tại -->
    </div>
</section>

 <!-- Người Sáng Lập starts  -->

  <!--Vị trí bản đồ starts  -->


    <section class="blogs">

        <h1 class="heading">Trụ Sở Chính <span>Nhà Trọ 56</span></h1>
        
        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                <div class="map">
        <!--	Map -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5644.408542716626!2d-117.1523848363907!3d32.73426737275872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d95495497f80c9%3A0x5df0f4372635e247!2sSan%20Diego%20Zoo!5e0!3m2!1sen!2snp!4v1658568764228!5m2!1sen!2snp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<!--	Map -->
          
                
            </div>

        </div>

    </section>
  <!--Vị trí bản đồ ends -->

    <!-- footer section starts  -->

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
                <h1>Thông tin liên hệ</h1>
                <div class="icons">
                    <a href="#"><i class="fas fa-map-marker-alt"></i>56 Hoàng Diệu 2, Phường Linh Chiểu, TP. Thủ Đức</a>
                    <a href="#"><i class="fas fa-phone-alt"></i>0568107033</a>
                    <a href="#"><i class="fas fa-envelope"></i>nhatrosinhvien56hd2@gmail.com</a>
                </div>
            </div>

            <div class="box">
                <h1>Trang liên kết nhanh</h1>
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

    <!-- footer section ends  -->



    <!-- swiper JS cdn link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> 


    <!-- Custom JS file link  -->
    <script src="script.js"></script>
</body>
</html>