<?php $__env->startSection('title', 'Show'); ?>

<?php $__env->startSection('content'); ?>

    <div class="food-menu-show">

        <section>

            <main>

                <?php if(session('success-message')): ?>
                    <div class="success-message left-green">
                        <i class='bx bxs-check-circle'></i>
                        <div class="text">
                            <span>Success</span>
                            <span class="message"><?php echo e(session('success-message')); ?></span>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="header">
                    <div class="left">
                        <h1>Show Food Menu</h1>
                    </div>
                </div>

                <div class="show-section">

                    <div class="container">

                        <div class="image">
                            <img src="<?php echo e(asset($menu->image)); ?>" alt="food image">
                        </div>

                        <div class="details">
                            <h2><?php echo e($menu->name); ?></h2>
                            <span class="category"><?php echo e($menu->category_id); ?></span>
                            <span class="price">RM <?php echo e($menu->price); ?></span>
                            <span class="description"><?php echo e($menu->description); ?></span>
                        </div>

                    </div>

                </div>

                <form action="<?php echo e(route('food-menu.destroy', $menu->id)); ?>" method="POST" id="deleteForm">

                    <?php echo method_field('DELETE'); ?>

                    <?php echo csrf_field(); ?>

                    <div class="button">
                        <a href="<?php echo e(route('food-menu-edit', ['food_menu' => $menu->id])); ?>"><span>Edit</span></a>
                        <button type="button" class="delete-button-popup">Delete</button>
                        <a href="<?php echo e(route('food-menu')); ?>"><span>Cancel</span></a>
                    </div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                </form>

                <div class="delete-confirmation" id="deletePopup">
                    <i class='bx bxs-info-circle'></i>
                    <h1>Warning</h1>
                    <h3>Are you sure you want to delete this staff?</h3>
                    <p>Once deleted, you will not be able to recover this data!</p>
                    <div class="button">
                        <button class="close-popup">Cancel</button>
                        <button class="confirm-delete">Delete</button>
                    </div>
                </div>

            </main>

        </section>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('company.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babal\Dropbox\PC\Desktop\Food-Ordering-System-main\resources\views/company/admin/food-menu/show.blade.php ENDPATH**/ ?>