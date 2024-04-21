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
            <h1 class="text-center text-white display-6">Giỏ hàng</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                <li class="breadcrumb-item active text-white">Giỏ Hàng</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Cart Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Sản Phẩm</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số Lượng</th>
                            <th scope="col">Thành Tiền</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                                // Mảng chứa thông tin về các sản phẩm
                                $products = array(
                                    array("img/1.png", "Móc khóa theo tên", "30.000đ"),
                                    array("img/7.png", "Pin ông già Nodel", "40.000đ"),
                                    array("img/2.png", "Móc khóa vòng Noel", "50.000đ")
                                );

                                // Duyệt qua mỗi sản phẩm và tạo hàng dữ liệu tương ứng
                                foreach ($products as $product) {
                                    echo '<tr>';
                                    echo '<th scope="row">';
                                    echo '<div class="d-flex align-items-center">';
                                    echo '<img src="' . $product[0] . '" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">';
                                    echo '</div>';
                                    echo '</th>';
                                    echo '<td>';
                                    echo '<p class="mb-0 mt-4">' . $product[1] . '</p>';
                                    echo '</td>';
                                    echo '<td>';
                                    echo '<p class="mb-0 mt-4">' . $product[2] . '</p>';
                                    echo '</td>';
                                    echo '<td>';
                                    echo '<div class="input-group quantity quantity-input mt-4" style="width: 100px;">';
                                    echo '<div class="input-group-btn">';
                                    echo '<button class="btn btn-sm btn-minus rounded-circle bg-light border">';
                                    echo '<i class="fa fa-minus"></i>';
                                    echo '</button>';
                                    echo '</div>';
                                    echo '<input type="text" class="form-control form-control-sm text-center border-0" value="1">';
                                    echo '<div class="input-group-btn">';
                                    echo '<button class="btn btn-sm btn-plus rounded-circle bg-light border">';
                                    echo '<i class="fa fa-plus"></i>';
                                    echo '</button>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</td>';
                                    echo '<td>';
                                    echo '<p class="mb-0 mt-4 total-price">' . $product[2] . '</p>';
                                    echo '</td>';
                                    echo '<td>';
                                    echo '<button class="btn btn-md rounded-circle bg-light border mt-4">';
                                    echo '<i class="fa fa-times text-danger"></i>';
                                    echo '</button>';
                                    echo '</td>';
                                    echo '</tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="mt-5">
                    <input type="text" class="border-0 border-bottom rounded me-5 py-3 mb-4" placeholder="Mã Giảm Giá">
                    <button class="btn border-secondary rounded-pill px-4 py-3 text-primary" type="button">Áp Dụng</button>
                </div>
                <div class="row g-4 justify-content-end">
                    <div class="col-8"></div>
                    <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                        <div class="bg-light rounded">
                            <div class="p-4">
                                <h1 class="display-6 mb-4">Đơn Hàng <span class="fw-normal"></span></h1>
                                <div class="d-flex justify-content-between mb-4">
                                    <h5 class="mb-0 me-4">Tổng Tiền Hàng:</h5>
                                    <p class="mb-0">120.000 đ</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-0 me-4">Phí Vận Chuyển</h5>
                                    <div class="">
                                        <p class="mb-0">30.000 đ</p>
                                    </div>
                                </div>
            
                            </div>
                            <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                                <h5 class="mb-0 ps-4 me-4">Thành Tiền</h5>
                                <p class="mb-0 pe-4">150.000 đ</p>
                            </div>
                            <a href="checkout.php" class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4" type="button">Thanh Toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Page End -->


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