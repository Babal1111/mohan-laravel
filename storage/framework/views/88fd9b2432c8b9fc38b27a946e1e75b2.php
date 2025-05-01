<?php $__env->startSection('title', 'Edit'); ?>

<?php $__env->startSection('content'); ?>

    <div class="food-menu-edit">

        <section>

            <main>

                <?php $__errorArgs = ['error-message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error-message left-red">
                        <i class='bx bxs-x-circle'></i>
                        <div class="text">
                            <span>Error</span>
                            <span class="message"><?php echo e($message); ?></span>
                        </div>
                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="header">
                    <div class="left">
                        <h1>Edit Food Menu</h1>
                    </div>
                </div>

                <div class="edit-section">

                    <form action="<?php echo e(route('food-menu.update', $menu->id)); ?>" method="POST" enctype="multipart/form-data"
                        id="imageForm">

                        <?php echo method_field('PUT'); ?>

                        <?php echo csrf_field(); ?>

                        <div class="container">

                            <div class="drag-area">
                                <i class='bx bxs-cloud-upload'></i>
                                <h2 class="drag-text">Drag and drop to upload image</h2>
                                <input type="file" hidden name="image" accept="image/*" class="select-image-input">
                            </div>

                            <div class="details">
                                <div class="label">
                                    <span>Name</span>
                                    <input type="text" name="name" placeholder="<?php echo e($menu->name); ?>">

                                    <span>Category</span>
                                    <div class="dropdown">
                                        <div class="select">
                                            <span class="selected"><?php echo e($category->name); ?></span>
                                            <div class="caret"><i class='bx bx-chevron-down'></i></div>
                                        </div>
                                        <ul class="menu">
                                            <li data-value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></li>
                                        </ul>
                                        <input type="hidden" name="category_id" value="">
                                    </div>

                                    <span>Price</span>
                                    <input type="text" name="price" placeholder="<?php echo e($menu->price); ?>">

                                    <span>Description</span>
                                    <input type="text" name="description" placeholder="Description line 1"
                                        class="description">
                                    <input type="text" name="description-two" placeholder="Description line 2"
                                        class="description">
                                </div>
                            </div>

                        </div>

                        <div class="button-section">
                            <div class="button">
                                <input type="submit" value="Update Menu">
                                <a href="<?php echo e(route('food-menu-show', ['food_menu' => $menu->id])); ?>"><span>Cancel</span></a>
                            </div>
                        </div>

                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                    </form>

                </div>

            </main>

        </section>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('company.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babal\Dropbox\PC\Desktop\Food-Ordering-System-main\resources\views/company/admin/food-menu/edit.blade.php ENDPATH**/ ?>