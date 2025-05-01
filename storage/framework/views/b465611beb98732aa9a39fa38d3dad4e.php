<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

    <div class="home-page">

        <section>

            <main>

                <div class="page">

                    <div class="content">

                        <div class="title">
                            <h1>Welcome To</h1>
                            <h1>Mohan Chicken</h1>
                        </div>

                        <div class="description">
                            <span>
                                Embark on a transcendent culinary odyssey at our esteemed venue, where the magic of
                                Malaysian cuisine
                            </span>
                            <span>is elevated by our local maestro boasting two Michelin stars. Gather your
                                loved ones for an unforgettable
                            </span>
                            <span>gastronomic journey through the enchanting world of flavor
                                we have meticulously crafted for you.</span>
                        </div>

                        <a href="<?php echo e(route('menu')); ?>"><span>See our menu</span></a>

                    </div>

                </div>

            </main>

        </section>

        <?php echo $__env->make('public.modal.success-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babal\Dropbox\PC\Desktop\Food-Ordering-System-main\resources\views/public/home.blade.php ENDPATH**/ ?>