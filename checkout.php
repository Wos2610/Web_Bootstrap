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


        <!-- Modal Search Start -->
        <!-- <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Modal Search End -->


        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Thanh Toán</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active text-white">Thanh Toán</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Checkout Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <h1 class="mb-4">Chi Tiết Hóa Đơn</h1>
                <form action="#">
                    <div class="row g-5">
                        <div class="col-md-12 col-lg-6 col-xl-7">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-item w-100">
                                        <label class="form-label my-3">Họ<sup>*</sup></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-item w-100">
                                        <label class="form-label my-3">Tên<sup>*</sup></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Thành Phố <sup>*</sup></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Huyện<sup>*</sup></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Xã<sup>*</sup></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Địa Chỉ Chi Tiết<sup>*</sup></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Số Điện Thoại<sup>*</sup></label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="form-item my-3">
                                <label class="form-label my-3">Email<sup>*</sup></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-item">
                                <textarea name="text" class="form-control" spellcheck="false" cols="30" rows="11" placeholder="Oreder Notes (Optional)"></textarea>
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
                                                    <p class="mb-0 text-dark text-end me-3">120.000 đ</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row g-4 text-center align-items-center justify-content-center pt-4">
                                <button type="button" class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Đặt Hàng</button>
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