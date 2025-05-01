<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/staff-style.css')); ?>">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title><?php echo $__env->yieldContent('title', 'Staff'); ?></title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="content">
            <ul>
                <li>
                    <a href="#" class="logo">
                        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Hash Logo">
                        <span>Hash Restaurant</span>
                    </a>
                </li>
                <li class="<?php echo e(request()->routeIs(['staff-dashboard', 'login']) ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('staff-dashboard')); ?>">
                        <i class='bx bxs-dashboard'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="<?php echo e(request()->routeIs(['customer-order', 'customer-order-create']) ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('customer-order')); ?>">
                        <i class='bx bxs-spreadsheet'></i>
                        <span>Orders</span>
                    </a>
                </li>
                <li class="<?php echo e(request()->routeIs(['customer-reservation']) ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('customer-reservation')); ?>">
                        <i class='bx bxs-book'></i>
                        <span>Reservation</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-message-alt-error'></i>
                        <span>Complaint</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-dollar-circle'></i>
                        <span>Money Float</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-dashboard'></i>
                        <span>Test4</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li class="logout">
                    <form action="<?php echo e(route('logout')); ?>" method="POST" id="logout-form">

                        <?php echo csrf_field(); ?>

                        <button type="button" id="logout-button">
                            <i class='bx bx-log-out-circle'></i>
                            <span>Logout</span>
                        </button>

                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                    </form>
                </li>
            </ul>
        </div>

    </div>

    <div class="topbar">

        <div class="content">

            <div class="menu-button">
                <i class='bx bx-menu'></i>
            </div>

            <div class="user">
                <?php if(Auth::user()->photo): ?>
                    <img src="<?php echo e(asset(Auth::user()->photo)); ?>" alt="User-Photo" class="user-profile" id="profile-menu">
                <?php else: ?>
                    <i class='bx bxs-user-circle' id="profile-menu"></i>
                <?php endif; ?>
                <ul class="toggle-profile">
                    <li><a href="<?php echo e(route('staff-profile-show', Auth::user()->id)); ?>"><i class='bx bxs-user-detail'></i><span>Update Profile</span></a></li>
                    <li><a href="#"><i class='bx bxs-key'></i><span>Change Password</span></a></li>
                    <li class="logout">
                        <form action="<?php echo e(route('logout')); ?>" method="POST" id="logout-form">

                            <?php echo csrf_field(); ?>

                            <button type="button" id="logout-button-topbar">
                                <i class='bx bx-log-out-circle'></i>
                                <span>Logout</span>
                            </button>

                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                        </form>
                    </li>
                </ul>
            </div>

        </div>

    </div>

    <?php echo $__env->yieldContent('content'); ?>

    <script src="<?php echo e(asset('js/staff.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\Users\babal\Dropbox\PC\Desktop\Food-Ordering-System-main\resources\views/company/staff/main.blade.php ENDPATH**/ ?>