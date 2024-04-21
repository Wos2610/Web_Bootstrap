const testimonialData = [
    {
        quote: "Mỗi món đồ đều được làm tỉ mỉ và tỉnh táo, thể hiện sự tinh tế trong từng đường nét. Chất liệu len mà họ sử dụng là cao cấp và rất dễ chịu, tạo cảm giác thoải mái khi sử dụng. Tôi đã mua một chiếc áo len và một cái túi xách, cả hai đều vượt quá mong đợi của tôi về chất lượng.",
        clientName: "Client Name", profession: "Profession", rating: 4
    },
    {
        quote: "Chủ shop rất thân thiện và nhiệt tình, luôn sẵn lòng giải đáp mọi thắc mắc của tôi và cung cấp những sản phẩm và dịch vụ tốt nhất.",
        clientName: "Client Name", profession: "Profession", rating: 5
    },
    {
        quote: "Shop có rất nhiều mẫu móc len đa dạng, từ thú bông, phụ kiện thời trang đến đồ trang trí nhà cửa. Các mẫu mã đều được thiết kế đẹp mắt, độc đáo và sáng tạo.",
        clientName: "Client Name", profession: "Profession", rating: 5
    }
];

// Function để tạo ra các phần tử tính năng
function createFeatureItem(iconClass, text, description) {
    return `
        <div class="col-md-6 col-lg-3">
            <div class="featurs-item text-center rounded bg-light p-4">
                <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                    <i class="${iconClass} text-white"></i>
                </div>
                <div class="featurs-content text-center">
                    <h5>${text}</h5>
                    <p class="mb-0">${description}</p>
                </div>
            </div>
        </div>
    `;
}

// Function để thêm các phần tử tính năng vào trong thẻ có id="featuresRow"
function addFeatureItems() {
    // Dữ liệu về các tính năng
    const featuresData = [
        { iconClass: "fas fa-motorcycle fa-3x", text: "Miễn Phí Giao Hàng", description: "Miễn phí giao hàng với đơn hàng trên 500k" },
        { iconClass: "fas fa-credit-card fa-3x", text: "Thanh Toán", description: "Đa dạng các hình thức thanh toán" },
        { iconClass: "fas fa-exchange-alt fa-3x", text: "Đổi Trả", description: "Đổi trả trong 7 ngày khi sản phẩm có lỗi" },
        { iconClass: "fa fa-phone-alt fa-3x", text: "Tư Vấn", description: "Tư vấn tận tình mọi thắc mắc" }
    ];

    // Thêm các phần tử vào trong thẻ có id="featuresRow"
    const featuresRow = $('#featuresRow');
    featuresData.forEach(feature => {
        const featureItem = createFeatureItem(feature.iconClass, feature.text, feature.description);
        featuresRow.append(featureItem);
    });
}

// Function để tạo các phần tử của tab navigation
function createTabItem(id, label) {
    return `
        <li class="nav-item">
            <a class="d-flex m-2 px-3 py-2 bg-light rounded-pill ${id === 'tab-1' ? 'active' : ''}" data-bs-toggle="pill" href="#${id}">
                <span class="text-dark" style="width: 130px;">${label}</span>
            </a>
        </li>
    `;
}

// Function để thêm các phần tử của tab navigation vào trong phần tử có class="nav"
function addTabItems() {
    // Dữ liệu cho tab navigation
    const tabData = [
        { id: "tab-1", label: "Tất Cả Sản Phẩm" },
        { id: "tab-2", label: "Len" },
        { id: "tab-3", label: "Vải Dạ" }
    ];

    // Thêm các phần tử vào trong phần tử có class="nav"
    const nav = document.querySelector(".nav.nav-pills.d-inline-flex.text-center.mb-5");

    // Kiểm tra nav khác null trước khi tiếp tục
    if (nav !== null) {
        tabData.forEach(tab => {
            const tabItem = createTabItem(tab.id, tab.label);
            nav.innerHTML += tabItem;
        });
    }
}


// Dữ liệu về các loại hoa quả cho mỗi tab
const productData = {
    "tab1": [
        { imgSrc: "img/2.png", category: "Móc Đan", name: "Móc khoá vòng Noel", description: "“Dáng xink” cùng keyo 🎄", price: "50.000đ" },
        { imgSrc: "img/14.png", category: "Vải Dạ", name: "Móc khóa theo tên", description: "Keyo chính thức mở order móc khoá, pin theo tên nhen🔥", price: "30.000đ" },
        { imgSrc: "img/12.png", category: "Móc Đan", name: "Túi dây rút", description: "Mùa giáng sinh đã tới, người ta trao nhau sweater, mình trao nhau quà “dáng xink” từ keyo. ", price: "30.000đ" },
        { imgSrc: "img/17.png", category: "Vải Dạ", name: "Dây treo điện thoại", description: "Chúng tớ đã quay lại với sản phẩm xinh iu hơn nè mọi người ơi~ dây treo điện thoại dành riêng cho các bạn fan Sebongie nè🥳", price: "20.000đ" },
        { imgSrc: "img/18.png", category: "Vải Dạ", name: "Móc khóa theo hình", description: "Nếu cậu muốn có chiếc móc khoá độc nhất, đừng ngần ngại mà direct keyo ngay nha ~", price: "20.000đ" },
        { imgSrc: "img/11.png", category: "Móc Đan", name: "Móc khóa nguyệt quế", description: "Chúng mình chính thức mở order sản phẩm cho mùa giáng sinh này nhá 😉", price: "35.000đ" },
        { imgSrc: "img/7.png", category: "Móc Đan", name: "Pin", description: "“Dáng xink” cùng keyo 🎄", price: "40.000đ" },
        { imgSrc: "img/16.png", category: "Vải Dạ", name: "Pin", description: "Không kể là tên cá nhân, người yêu dấu, tên Idol, nếu cậu muốn có chiếc móc khoá độc nhất, đừng ngần ngại mà direct keyo ngay nha 😘", price: "35.000đ" },
    ],
    "tab2": [
        { imgSrc: "img/2.png", category: "Móc Đan", name: "Móc khoá vòng Noel", description: "“Dáng xink” cùng keyo 🎄", price: "50.000đ" },
        { imgSrc: "img/12.png", category: "Móc Đan", name: "Túi dây rút", description: "Mùa giáng sinh đã tới, người ta trao nhau sweater, mình trao nhau quà “dáng xink” từ keyo. ", price: "30.000đ" },
        { imgSrc: "img/11.png", category: "Móc Đan", name: "Móc khóa nguyệt quế", description: "Chúng mình chính thức mở order sản phẩm cho mùa giáng sinh này nhá 😉", price: "35.000đ" },
        { imgSrc: "img/7.png", category: "Móc Đan", name: "Pin", description: "“Dáng xink” cùng keyo 🎄", price: "40.000đ" },
    ],
    "tab3": [
        { imgSrc: "img/14.png", category: "Vải Dạ", name: "Móc khóa theo tên", description: "Keyo chính thức mở order móc khoá, pin theo tên nhen🔥", price: "30.000đ" },
        { imgSrc: "img/16.png", category: "Vải Dạ", name: "Pin", description: "Không kể là tên cá nhân, người yêu dấu, tên Idol, nếu cậu muốn có chiếc móc khoá độc nhất, đừng ngần ngại mà direct keyo ngay nha 😘", price: "35.000đ" },
        { imgSrc: "img/17.png", category: "Vải Dạ", name: "Dây treo điện thoại", description: "Chúng tớ đã quay lại với sản phẩm xinh iu hơn nè mọi người ơi~ dây treo điện thoại dành riêng cho các bạn fan Sebongie nè🥳", price: "20.000đ" },
        { imgSrc: "img/18.png", category: "Vải Dạ", name: "Móc khóa theo hình", description: "Nếu cậu muốn có chiếc móc khoá độc nhất, đừng ngần ngại mà direct keyo ngay nha ~", price: "20.000đ" },
    ]
};

// Function để tạo ra các phần tử hoa quả
function createFruitItem(imgSrc, category, name, description, price) {
    return `
    <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="rounded position-relative fruite-item border border-secondary d-flex flex-column" onclick="redirectToShopDetail()">
            <div class="fruite-img">
                <img src="${imgSrc}" class="img-fluid w-100 rounded-top" alt="">
            </div>
            <div class="p-4 pb-0 border-top-0 rounded-bottom ">
                <h4>${name}</h4>
                <p>${description}</p>
            </div>
            <div class="p-4 border-top-0 rounded-bottom mt-auto">
                <div class="d-flex justify-content-center flex-lg-wrap">
                    <p class="text-dark fs-5 fw-bold ">${price}</p>
                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
    `;
}

// Hàm chuyển hướng sang trang shop_detail.php
function redirectToShopDetail() {
    window.location.href = "shop-detail.php";
}

function createThreeItemPerRow(imgSrc, category, name, description, price) {
    return `
    <div class="col-md-6 col-lg-6 col-xl-4">
        <div class="rounded position-relative fruite-item border border-secondary d-flex flex-column" onclick="redirectToShopDetail()">
            <div class="fruite-img">
                <img src="${imgSrc}" class="img-fluid w-100 rounded-top" alt="">
            </div>
            <div class="p-4 pb-0 border-top-0 rounded-bottom">
                <h4>${name}</h4>
                <p>${description}</p>
            </div>
            <div class="p-4 border-top-0 rounded-bottom mt-auto">
                <div class="d-flex justify-content-center flex-lg-wrap">
                    <p class="text-dark fs-5 fw-bold ">${price}</p>
                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
    `;
}



// Function để thêm các phần tử hoa quả vào trong các hàng tương ứng với từng tab
function addItems(tabId, productData) {
    const fruitsRow = $(`#${tabId}`);
    if (fruitsRow != null) {
        productData.forEach(fruit => {
            const fruitItem = createFruitItem(fruit.imgSrc, fruit.category, fruit.name, fruit.description, fruit.price);
            fruitsRow.append(fruitItem);
        });
        console.log("aaaaaaaaaaaaaa");
        console.log(fruitsRow.length);
    }
}

function addAllItems(id, productData) {
    const fruitsRow = $(`#${id}`);
    if (fruitsRow != null) {
        productData.forEach(fruit => {
            const fruitItem = createThreeItemPerRow(fruit.imgSrc, fruit.category, fruit.name, fruit.description, fruit.price);
            fruitsRow.append(fruitItem);
        });
        console.log(fruitsRow.length);
    }
}

function createTestimonialItem(quote, clientName, profession, rating) {
    return `
        <div class="testimonial-item img-border-radius bg-light rounded p-4">
            <div class="position-relative">
                <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                <div class="mb-4 pb-4 border-bottom border-secondary">
                    <p class="mb-0">${quote}</p>
                </div>
                <div class="d-flex align-items-center flex-nowrap">
                    <div class="bg-secondary rounded">
                        <img src="img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                    </div>
                    <div class="ms-4 d-block">
                        <h4 class="text-dark">${clientName}</h4>
                        <p class="m-0 pb-3">${profession}</p>
                        <div class="d-flex pe-5">
                            ${generateStars(rating)}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
}

function generateStars(rating) {
    const filledStars = '<i class="fas fa-star text-primary"></i>'.repeat(rating);
    const emptyStars = '<i class="fas fa-star"></i>'.repeat(5 - rating);
    return filledStars + emptyStars;
}


function addTestimonialsToContainer(testimonialData, containerId) {
    const testimonialContainer = $(`#${containerId}`);;
    testimonialData.forEach(data => {
        const testimonialItem = createTestimonialItem(data.quote, data.clientName, data.profession, data.rating);
        testimonialContainer.append(testimonialItem);
    });
}

const categorieData = [
    { name: "Tất Cả", quantity: 8 },
    { name: "Móc Đan", quantity: 4 },
    { name: "Vải Dạ", quantity: 4 },
];

// Phương thức tạo một mục trái cây
function createCategoryItem(name, quantity) {
    const listItem = document.createElement("li");
    listItem.innerHTML = `
        <div class="d-flex justify-content-between fruite-name">
            <a href="#"><i class="fas fa-apple-alt me-2"></i>${name}</a>
            <span>(${quantity})</span>
        </div>`;
    return listItem;
}

function populateCategoryList(categorieData) {
    const categoryList = document.querySelector(`.${"fruite-categorie"}`);
    if (categoryList != null) {
        categorieData.forEach(item => {
            const catrgoryItem = createCategoryItem(item.name, item.quantity);
            categoryList.appendChild(catrgoryItem);
        });
    }
}

function handleProductRows() {
    document.querySelectorAll('tbody tr').forEach(function(row) {
        var quantityInput = row.querySelector('.quantity-input'); // Phần input số lượng
        var totalPrice = row.querySelector('.total-price'); // Phần hiển thị tổng tiền
        var deleteBtn = row.querySelector('.delete-btn'); // Nút xóa sản phẩm
        var plusBtn = row.querySelector('.btn-plus'); // Nút tăng số lượng
        var minusBtn = row.querySelector('.btn-minus'); // Nút giảm số lượng

        // Hàm tính tổng tiền của sản phẩm
        function calculateTotalPrice() {
            var priceStr = row.querySelectorAll('td')[2].innerText; // Lấy giá sản phẩm
            var price = parseFloat(priceStr.replace('đ', '')); // Chuyển đổi giá thành số
            var quantity = parseInt(quantityInput.value); // Lấy số lượng từ input
            var total = price * quantity; // Tính tổng tiền
            totalPrice.innerText = total.toFixed(2) + 'đ'; // Hiển thị tổng tiền
        }

        // Gọi hàm tính tổng tiền khi trang được tải
        calculateTotalPrice();

        // Thêm sự kiện khi thay đổi số lượng
        quantityInput.addEventListener('input', function() {
            calculateTotalPrice(); // Gọi hàm tính tổng tiền khi số lượng thay đổi
        });

        // Thêm sự kiện khi nhấn vào nút tăng số lượng
        plusBtn.addEventListener('click', function() {
            quantityInput.value = parseInt(quantityInput.value) + 1; // Tăng số lượng lên 1
            calculateTotalPrice(); // Cập nhật tổng tiền
        });

        // Thêm sự kiện khi nhấn vào nút giảm số lượng
        minusBtn.addEventListener('click', function() {
            var currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1; // Giảm số lượng xuống 1, nhưng không được nhỏ hơn 1
                calculateTotalPrice(); // Cập nhật tổng tiền
            }
        });

        // Thêm sự kiện khi nhấn vào nút xóa sản phẩm
        // deleteBtn.addEventListener('click', function() {
        //     row.remove(); // Xóa hàng sản phẩm
        // });
    });
}
    
var checkOutData = [
    { image: "img/vegetable-item-2.jpg", name: "Awesome Brocoli", price: "$69.00", quantity: 2 },
    { image: "img/vegetable-item-5.jpg", name: "Potatoes", price: "$69.00", quantity: 2 },
    { image: "img/vegetable-item-3.png", name: "Big Banana", price: "$69.00", quantity: 2 }
];

function generateCheckoutProductRows(products) {
    var tbody = document.querySelector('tbody');
    if (tbody === null) return;
    products.forEach(function(product) {
        var row = document.createElement('tr');
        row.innerHTML = `
            <th scope="row">
                <div class="d-flex align-items-center mt-2">
                    <img src="${product.image}" class="img-fluid rounded-circle" style="width: 90px; height: 90px;" alt="">
                </div>
            </th>
            <td class="py-5">${product.name}</td>
            <td class="py-5">${product.price}</td>
            <td class="py-5">${product.quantity}</td>
            <td class="py-5">${(parseFloat(product.price.replace('$', '')) * product.quantity).toFixed(2)}</td>
        `;
        tbody.appendChild(row);
    });
}

// Hàm sắp xếp sản phẩm theo giá từ thấp đến cao
function sortProductsByPriceAscending() {
    var items = $('#all-items');
    var sortedItems = items.children('.col-md-6').sort(function(a, b) {
        var priceA = parseFloat($(a).find('.text-dark').text().replace('đ', ''));
        var priceB = parseFloat($(b).find('.text-dark').text().replace('đ', ''));
        return priceA - priceB;
    });
    items.empty().append(sortedItems);
}

// Hàm sắp xếp sản phẩm theo giá từ cao đến thấp
function sortProductsByPriceDescending() {
    var items = $('#all-items');
    var sortedItems = items.children('.col-md-6').sort(function(a, b) {
        var priceA = parseFloat($(a).find('.text-dark').text().replace('đ', ''));
        var priceB = parseFloat($(b).find('.text-dark').text().replace('đ', ''));
        return priceB - priceA;
    });
    items.empty().append(sortedItems);
}

function sortProducts() {
    console.log("aaaaaaaaaaaaaa");
    $('#fruits').change(function() {
        // Lấy giá trị của tùy chọn đã chọn
        var sortBy = $(this).val();
    
        console.log(sortBy);
        // Sắp xếp sản phẩm dựa trên tùy chọn được chọn
        if (sortBy === 'volvo') {
            // Không sắp xếp
        } else if (sortBy === 'saab') {
            // Sắp xếp giá từ thấp đến cao
            sortProductsByPriceAscending();
        } else if (sortBy === 'opel') {
            // Sắp xếp giá từ cao đến thấp
            sortProductsByPriceDescending();
        }
    });
}

function addAllItems(id, productData) {
    const fruitsRow = $(`#${id}`);
    if (fruitsRow != null) {
        fruitsRow.empty(); // Clear existing items before adding new ones
        productData.forEach(fruit => {
            const fruitItem = createThreeItemPerRow(fruit.imgSrc, fruit.category, fruit.name, fruit.description, fruit.price);
            fruitsRow.append(fruitItem);
        });
        console.log(fruitsRow.length);
    }
}

// Function to filter products based on category
function filterProductsByCategory(category) {
    let filteredProducts;
    if (category.startsWith("Móc Đan")) {
        filteredProducts = productData["tab2"];
    } else if (category.startsWith("Vải Dạ")) {
        filteredProducts = productData["tab3"];
    } else {
        filteredProducts = productData["tab1"];
    }
    console.log(filterProducts.length);
    addAllItems("all-items", filteredProducts);
}

function filterProducts() {
    $('.fruite-categorie').on('click', 'li', function() {
        const category = $(this).text().trim();
        filterProductsByCategory(category);
    });
}

(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);


    // Fixed Navbar
    $(window).scroll(function () {
        if ($(window).width() < 992) {
            if ($(this).scrollTop() > 55) {
                $('.fixed-top').addClass('shadow');
            } else {
                $('.fixed-top').removeClass('shadow');
            }
        } else {
            if ($(this).scrollTop() > 55) {
                $('.fixed-top').addClass('shadow').css('top', -55);
            } else {
                $('.fixed-top').removeClass('shadow').css('top', 0);
            }
        }
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 2000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            }
        }
    });



    // vegetable carousel
    $(".vegetable-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });



    // Product Quantity
    $('.quantity button').on('click', function () {
        var button = $(this);
        var oldValue = button.parent().parent().find('input').val();
        if (button.hasClass('btn-plus')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        button.parent().parent().find('input').val(newVal);
    });

    addFeatureItems();
    addTabItems();

    Object.keys(productData).forEach(tabId => {
        addItems(tabId, productData[tabId]);
    });

    addTestimonialsToContainer(testimonialData, "testimonial");

    populateCategoryList(categorieData);

    addAllItems("all-items", productData["tab1"]);

    handleProductRows();

    // generateCheckoutProductRows(checkOutData);

    sortProducts();

    filterProducts();
    
})(jQuery);
