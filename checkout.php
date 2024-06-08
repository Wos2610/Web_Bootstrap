<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'>
        <meta http-equiv='pragma' content='no-cache'>

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Navbar-->
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/demo/php/navbar.php'; ?>
        <?php
            // Hàm làm sach dữ liệu đầu vào
            $submitted = "no";

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            // Khởi tạo biến lỗi
            $surErr = $nameErr = $cityErr = $districtErr = $wardErr = $addressErr = $phoneErr = $emailErr = "";
            $sur = $name = $city = $district = $ward = $address = $phone = $email = "";
            //Check họ
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Kiểm tra trường Họ
                if (empty($_POST["sur"])) {
                    $surErr = "* Họ là bắt buộc";
                    $submitted = "false";
                } else {
                    $sur = test_input($_POST["sur"]);
                    // Kiểm tra chỉ chứa kí tự chữ và khoảng trắng
                    if (!preg_match("/^[a-zA-Z ]*$/",$sur)) {
                        $surErr = "* Họ chỉ bao gồm kí tự chữ và khoảng trắng";
                        $submitted = "false";
                    }
                }
        
                // Kiểm tra trường Tên
                if (empty($_POST["name"])) {
                    $nameErr = "* Tên là bắt buộc";
                    $submitted = "false";
                } else {
                    $name = test_input($_POST["name"]);
                    // Kiểm tra chỉ chứa kí tự chữ và khoảng trắng
                    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                        $nameErr = "* Tên chỉ bao gồm kí tự chữ và khoảng trắng";
                        $submitted = "false";
                    }
                }
        
                // Kiểm tra trường Thành Phố
                if (empty($_POST["city"])) {
                    $cityErr = "* Thành Phố là bắt buộc";
                    $submitted = "false";
                } else {
                    $city = test_input($_POST["city"]);
                }
        
                // Kiểm tra trường Huyện
                if (empty($_POST["district"])) {
                    $districtErr = "* Quận/Huyện là bắt buộc";
                    $submitted = "false";
                } else {
                    $district = test_input($_POST["district"]);
                }
        
                // Kiểm tra trường Xã
                if (empty($_POST["ward"])) {
                    $wardErr = "* Phường/Xã là bắt buộc";
                    $submitted = "false";
                } else {
                    $ward = test_input($_POST["ward"]);
                }
        
                // Kiểm tra trường Địa Chỉ Chi Tiết
                if (empty($_POST["address"])) {
                    $addressErr = "* Địa Chỉ Chi Tiết là bắt buộc";
                    $submitted = "false";
                } else {
                    $address = test_input($_POST["address"]);
                }
        
                // Kiểm tra trường Số Điện Thoại
                if (empty($_POST["phone"])) {
                    $phoneErr = "* Số Điện Thoại là bắt buộc";
                    $submitted = "false";
                } else {
                    $phone = test_input($_POST["phone"]);
                    // Kiểm tra định dạng số điện thoại
                    if (!preg_match("/^\+?[0-9]{10,}$/",$phone)) {
                        $submitted = "false";
                        $phoneErr = "* Số Điện Thoại không hợp lệ";
                    }
                }
        
                // Kiểm tra trường Email
                if (empty($_POST["email"])) {
                    $emailErr = "* Email là bắt buộc";
                    $submitted = "false";
                } else {
                    $email = test_input($_POST["email"]);
                    // Kiểm tra định dạng email
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $submitted = "false";
                        $emailErr = "* Địa chỉ email không hợp lệ";
                    }
                }
        
                if ($submitted === "no") {
                    $submitted = "true";
                }
            }
        ?>

        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Thanh Toán</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active text-white">Thanh Toán</li>
            </ol>
        </div>
        <!-- Single Page Header End -->

        <?php if ($submitted === "true"): ?>
            <!-- Hiển thị thông báo thành công -->
            <div class="alert alert-success" role="alert">
                Đặt hàng thành công! Cảm ơn bạn đã mua hàng.
            </div>
        <?php endif; ?>


        <!-- Checkout Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <h1 class="mb-4">Chi Tiết Hóa Đơn</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="row g-5">
                        <div class="col-md-12 col-lg-6 col-xl-7">
                            <div class="row my-3">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group w-100">
                                        <label for="sur" class = "fw-bold">Họ<sup>*</sup></label>
                                        <input type="text" class="form-control" id="sur" aria-describedby="surHelp" placeholder="Nhập họ của bạn" name="sur">
                                        <small id="surHelp" class="form-text text-muted">Họ chỉ bao gồm kí tự chữ và khoảng trắng.</small>
                                        <span class="error"><?php echo $surErr;?></span>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group w-100">
                                        <label for="name" class = "fw-bold">Tên<sup>*</sup></label>
                                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Nhập tên của bạn" name="name">
                                        <small id="nameHelp" class="form-text text-muted">Tên chỉ bao gồm kí tự chữ và khoảng trắng.</small>
                                        <span class="error"><?php echo $nameErr;?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group w-100 mt-3">
                                <label for="city" class = "fw-bold">Thành Phố<sup>*</sup></label>
                                <input type="text" class="form-control" id="city" placeholder="Nhập thành phố của bạn" name="city">
                                <span class="error"><?php echo $cityErr;?></span>
                            </div>
                            <div class="form-group w-100 mt-3">
                                <label for="district" class = "fw-bold">Quận/Huyện<sup>*</sup></label>
                                <input type="text" class="form-control" id="district" placeholder="Nhập huyện của bạn" name="district">
                                <span class="error"><?php echo $districtErr;?></span>
                            </div>
                            <div class="form-group w-100 mt-3">
                                <label for="ward" class = "fw-bold">Phường/Xã<sup>*</sup></label>
                                <input type="text" class="form-control" id="ward" placeholder="Nhập xã của bạn" name="ward">
                                <span class="error"><?php echo $wardErr;?></span>
                            </div>
                            <div class="form-group w-100 mt-3">
                                <label for="address" class = "fw-bold">Địa Chỉ Chi Tiết<sup>*</sup></label>
                                <input type="text" class="form-control" id="address" placeholder="Nhập địa chỉ chi tiết của bạn" name="address">
                                <span class="error"><?php echo $addressErr;?></span>
                            </div>
                            <div class="form-group w-100 my-3">
                                <label for="phone" class = "fw-bold">Số Điện Thoại<sup>*</sup></label>
                                <input type="tel" class="form-control" id="phone" placeholder="Nhập số điện thoại của bạn" name="phone">
                                <small id="phoneHelp" class="form-text text-muted">Số điện thoại có 10 chữ số.</small>
                                <span class="error"><?php echo $phoneErr;?></span>
                            </div>
                            <div class="form-group w-100 my-3">
                                <label for="email" class = "fw-bold">Email<sup>*</sup></label>
                                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Nhập email của bạn">
                                <small id="emailHelp" class="form-text text-muted">Địa chỉ email có dạng @gmai.com, @edu.vn, ....</small>
                                <span class="error"><?php echo $emailErr;?></span>
                            </div>
                            <div class="form-item">
                                <textarea name="text" class="form-control" spellcheck="false" cols="30" rows="11" placeholder="Ghi Chú (Tùy Chọn)"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-5">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sản Phẩm</th>
                                            <th scope="col">Tên</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Số Lượng</th>
                                            <th scope="col">Thành Tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            // Mảng chứa thông tin về các sản phẩm
                                            $products = array(
                                                array("img/1.png", "Móc khóa theo tên", "30.000đ", 1, "30.000đ"),
                                                array("img/7.png", "Pin ông già Nodel", "40.000đ", 1, "40.000đ"),
                                                array("img/2.png", "Móc khóa vòng Noel", "50.000đ", 1, "50.000đ")
                                            );

                                            // Duyệt qua mỗi sản phẩm và tạo hàng dữ liệu tương ứng
                                            foreach ($products as $product) {
                                                echo '<tr>';
                                                echo '<th scope="row">';
                                                echo '<div class="d-flex align-items-center mt-2">';
                                                echo '<img src="' . $product[0] . '" class="img-fluid rounded-circle" style="width: 90px; height: 90px;" alt="">';
                                                echo '</div>';
                                                echo '</th>';
                                                echo '<td>';
                                                echo '<p class="py-5">' . $product[1] . '</p>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<p class="py-5">' . $product[2] . '</p>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<p class="py-5">' . $product[3] . '</p>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<p class="py-5">' . $product[4] . '</p>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                        <tr>
                                            <th scope="row">
                                            </th>
                                            <td colspan="2" class="py-5">
                                                <p class="mb-0 text-dark py-4">Phí Vận Chuyển</p>
                                            </td>
                                            <td colspan="3" class="py-5">
                                                <p class="mb-0 text-dark py-4 text-end me-3">30.000 đ</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            </th>
                                            <td class="py-5" colspan="2">
                                                <p class="mb-0 text-dark text-uppercase py-3 fw-bold">TỔNG TIỀN</p>
                                            </td>
                                       
                                            <td class="py-5" colspan="3">
                                                <div class="py-3">
                                                    <p class="mb-0 text-dark text-end me-3">150.000 đ</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row g-4 text-center align-items-center justify-content-center pt-4">
                                <button type="submit" class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Đặt Hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Checkout Page End -->


        <!-- Footer -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/demo/php/footer.php'; ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>