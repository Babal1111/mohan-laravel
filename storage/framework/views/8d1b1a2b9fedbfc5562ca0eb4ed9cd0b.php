<?php $__env->startSection('title', 'Menu'); ?>

<?php $__env->startSection('content'); ?>

    <div class="menu-page">

        <section>

            <main>

                <div class="page">

                    <?php if($menu->isEmpty()): ?>

                        <div class="container-empty">
                            <i class='bx bxs-error-alt'></i>
                            <div class="text">
                                <span class="top">Sorry, no menu available at the moment.</span>
                                <span class="bottom">Please check back later!</span>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="category-banner">
                            <h1>Menu</h1>
                        </div>
                        <div class="food-item">
                            <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <div class="image">
                                        <img src="<?php echo e($menu->image); ?>" alt="food-image">
                                        <div class="overlay">
                                            <button type="button" class="add-to-cart" data-food-id="<?php echo e($menu->id); ?>"
                                                data-food-image="<?php echo e($menu->image); ?>" data-food-name="<?php echo e($menu->name); ?>"
                                                data-food-price="<?php echo e($menu->price); ?>">
                                                <i class='bx bx-plus'></i>
                                                <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="name-price">
                                        <span class="food-name"><?php echo e($menu->name); ?></span>
                                        <span class="price">Rs<?php echo e($menu->price); ?></span>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                    <?php endif; ?>

                </div>

            </main>

            <?php echo $__env->make('public.modal.success-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

        </section>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babal\Dropbox\PC\Documents\GitHub\mohan-laravel\resources\views/public/menu.blade.php ENDPATH**/ ?>