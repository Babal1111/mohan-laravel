<?php $__env->startSection('title', 'Food Menu'); ?>
<?php $__env->startSection('content'); ?>

    <div class="food-menu-index">
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
                        <h1>Food Menu</h1>
                    </div>
                    <a href="<?php echo e(route('food-menu-create')); ?>" class="create">
                        <span>Create New Food Menu</span>
                    </a>
                </div>

                <!-- Food Menu -->
                <div class="custom-card1">
                    <div class="container">
                        <div class="header">
                            <i class='bx bx-detail'></i>
                            <h3>Menu</h3>
                            <i class='bx bx-filter' ></i>
                            <form action="<?php echo e(route('food-menu-search-index')); ?>" method="GET" id="search-form">
                                <div class="search-field">
                                    <i class='bx bx-search' id="search-button"></i>
                                    <input type="text" name="search" placeholder="Search" value="<?php echo e(old('search')); ?>">
                                </div>
                            </form>
                        </div>

                        <?php echo $__env->make('partials.table1', [
                            'tableId' => 'FoodMenuIndex',
                            'tableAllCheckBoxId' => 'FoodMenuIndexAllCheckBox',
                            'tableCheckboxName' => 'FoodMenuIndexAllCheckBox',
                            'tableHeaders' => ['Name', 'Description', 'Price', 'Category', 'Image'],
                            'tableBodyCheckBoxId' => 'FoodMenuIndexCheckBox_',
                            'tableBodyCheckBoxName' => 'FoodMenuIndexCheckBox',
                            'tableDatas' => $food,
                            'tableFields' => ['name', 'description', 'price', 'foodCategory.name', 'image'],
                            'buttonLink' => fn($td) => route('food-menu-show', ['food_menu' => $td->id]),
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="pagination">
                            <div class="count">Showing <?php echo e($food->firstItem()); ?> to <?php echo e($food->lastItem()); ?> out of <?php echo e($food->total()); ?> results</div>
                            <div class="pagination-number">
                                <div class="page-number"><?php echo e($food->render('partials.paginator')); ?></div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(() => {
            $('#FoodMenuIndexAllCheckBox').on('change', function () {
                let allCheckBox = $(this);
                let isChecked = allCheckBox.prop('checked');
                let idList = [];

                $('input[id^="FoodMenuIndexCheckBox_"]').each(function () {
                    $(this).prop("checked", isChecked);
                    idList.push($(this).val());
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('company.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babal\Dropbox\PC\Desktop\Food-Ordering-System-main\resources\views/company/admin/food-menu/index.blade.php ENDPATH**/ ?>