<?php
include("config.php");
$error = "";
$msg = "";

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($subject) && !empty($message)) {
        $sql = "INSERT INTO contact (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $msg = "<p class='alert alert-success'>Message Sent Successfully</p>";
        } else {
            $error = "<p class='alert alert-warning'>Message Not Sent Successfully</p>";
        }
    } else {
        $error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ Nhà Trọ 56</title>

    <!-- swiper CSS cdn link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom CSS file link  -->
    <link rel="stylesheet" href="style.css">

    <!-- Font awesome cdn link  -->
    <link
        rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE" />
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!--	Fonts
	========================================================-->
    <link
        href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&display=swap"
        rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet" />
  
    <!--	Css Link
	========================================================-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="css/layerslider.css" />
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
    <!-- header section starts  -->
    <header class="header">
        <a href="#" class="logo">
            <i class="fas fa-home" style="color: pink; margin-right: 5px"></i> NHÀ TRỌ <span> 56</span>
        </a>
        <nav class="navbar">
            <a href="index.php">Trang chủ</a>
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
                <div class="swiper-slide box" style="background:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(image/lienhe.jpg);">
                    
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <!-- home section ends  -->
<!-- form liên hệ ở đây -->
    <h1 class="heading">Thông Tin <span>Liên Hệ</span></h1>

<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-secondary">
                <div class="col-md-12">
                    <form class="w-100" action="#" method="post">
                        <div class="row mb-4">
                            <div class="form-group col-lg-12">
                                <input type="text" name="name" class="form-control" placeholder="Họ Và Tên*">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" name="email" class="form-control" placeholder="Email*">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" name="phone" class="form-control" placeholder="SĐT" maxlength="10">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" name="subject" class="form-control" placeholder="Chủ đề">
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="5" placeholder="Nội dung bạn muốn liên hệ"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" name="send" class="btn btn-success">Gửi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- form liên hệ kết thúc --> 
    <!-- Footer section starts  -->
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
                    <a href="#">Thông tin về chúng tôi</a>
                    <a href="#">Các dịch vụ</a>
                    <a href="#">Tin tức</a>
                    <a href="#">Liên hệ</a>
                </div>
            </div>
        </div>
        <div class="credit">created by <span>Nhóm Máu Chảy Về Tim</span> | all right reserved</div>
    </section>
    <!-- Footer section ends  -->

    <!-- swiper JS cdn link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom JS file link  -->
    <script src="script.js"></script>
</body>
</html>
