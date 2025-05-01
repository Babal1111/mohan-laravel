<div class="modal-edit-order">

    <div class="wrapper">

        <h2>Manage Order</h2>

        <i class='bx bx-x' id="modal-close"></i>

        <div class="content">

            <div class="container">

                <?php if(isset($order)): ?>

                <form action="<?php echo e(route('update-order', ['id' => $order->id])); ?>" method="POST">

                    <?php echo method_field('PUT'); ?>

                    <?php echo csrf_field(); ?>

                    <div class="input-data">
                        <span class="label">Table No.</span>
                        <span class="data"><?php echo e($order->diningTable->table_name); ?></span>
                    </div>

                    <div class="order-status">
                        <span class="label">Order Status</span>
                        <div class="status">
                            <span class="data"><?php echo e($order->order_status); ?></span>
                            <span class="edit" id="edit-order-status">Change to Completed</span>
                        </div>
                    </div>

                    <div class="food-list-order">
                        <span class="label">Food Order</span>
                        <div class="list">
                            <?php $__currentLoopData = $order->customerOrderDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span><?php echo e($orderDetail->foodMenu->name); ?></span>
                                <?php if(!$loop->last): ?>
                                    <span>,</span>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="button-section">
                        <input type="submit" value="Update Status" disabled>
                        <button type="button" class="cancel"><span>Cancel</span></button>
                    </div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

                </form>

                <?php else: ?>

                <!-- Show the page -->

                <?php endif; ?>

            </div>

        </div>

    </div>

</div>
<?php /**PATH C:\Users\babal\Dropbox\PC\Desktop\Food-Ordering-System-main\resources\views/company/staff/order/modal/edit.blade.php ENDPATH**/ ?>