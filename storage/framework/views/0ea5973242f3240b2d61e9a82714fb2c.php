<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title><?php echo $__env->yieldContent('title', 'Home'); ?></title>
</head>

<body>

    <div class="topbar">

        <div class="container">

            <div class="logo">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Hash Logo">
                <span>Hash Restaurant</span>
            </div>

            <div class="nav-page">

                <div class="<?php echo e(request()->routeIs(['home']) ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('home')); ?>"><span>Home</span></a>
                </div>

                <div class="<?php echo e(request()->routeIs(['menu', 'search']) ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('menu')); ?>"><span>Menu</span></a>
                </div>

                <div class="<?php echo e(request()->routeIs(['promotion']) ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('promotion')); ?>"><span>Promotions</span></a>
                </div>

                <div class="<?php echo e(request()->routeIs(['reservation']) ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('reservation')); ?>"><span>Reservation</span></a>
                </div>

            </div>

            <div class="manage">
                <div class="search">
                    <i class='bx bx-search' id="open-search"></i>
                    <div class="search-container">
                        <form action="<?php echo e(route('search')); ?>" method="GET" id="search-form">
                            <i class='bx bx-search' id="search-button"></i>
                            <input type="text" name="search" placeholder="Search..." value="<?php echo e(old('search')); ?>">
                        </form>
                    </div>
                </div>

                <div class="cart">
                    <i class='bx bx-cart'></i>
                    <span class="cart-quantity" id="cart-quantity">0</span>
                </div>

                <div class="company">
                    <a href="<?php echo e(route('login')); ?>"><i class='bx bx-buildings'></i></a>
                </div>
            </div>

        </div>

    </div>

    <div class="cart-section">
        <div class="header">
            <span>Confirm Order</span>
            <div class="close-cart">
                <i class='bx bx-x'></i>
            </div>
        </div>

        <div class="table-number">
            <span>Table No.</span>
            <input type="text" name="table_number" placeholder="0" required>
            <div class="message"></div>
            <div id="success-response" class="success-message"></div>
            <div id="error-response" class="validation-error-message"></div>
        </div>

        <div class="main-section-order">
            <span>Your Order</span>
            <div class="cart-total">
                <span id="cart-item-count">Total 0 item</span>
                <span id="cart-total-amount">RM 0.00</span>
            </div>
        </div>

        <div class="your-order">
            <ul class="cart-list">
                <li>
                    <span class="empty">No item in cart</span>
                </li>
            </ul>
        </div>

        <div class="customer-contact">
            <span>Your Contact Number</span>
            <input type="text" name="customer_contact" placeholder="0123456789">
        </div>

        <div class="cart-button">
            <span>Please make sure your purchase before confirm the order.</span>
            <button type="button" class="confirm-order" disabled><span>Confirm Order</span></button>
        </div>
    </div>

    <?php echo $__env->yieldContent('content'); ?>

    <div class="footer">

        <div class="container">

            <div class="more">
                <a href="#">About us</a>
                <a href="#">Ask question</a>
                <a href="#">Contact us</a>
            </div>

            <div class="location">
                <span>Location</span>
            </div>

            <div class="social-page">
                <div class="social-media">
                    <a href="#"><i class='bx bxl-whatsapp'></i></a>
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                </div>
                <div class="project">
                    <a href="https://github.com/HazmiHazim" target="_blank"><i class='bx bxl-github'></i></a>
                    <a href="https://www.linkedin.com/in/hazmihazim/" target="_blank"><i
                            class='bx bxl-linkedin-square'></i></a>
                </div>
            </div>
        </div>

        <div class="copyright">
            <span>&copy; COPYRIGHT 2023 HAZMI HAZIM - ALL RIGHTS RESERVED</span>
        </div>

    </div>

    <script src="<?php echo e(asset('js/public.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\Users\babal\Dropbox\PC\Desktop\Food-Ordering-System-main\resources\views/main.blade.php ENDPATH**/ ?>