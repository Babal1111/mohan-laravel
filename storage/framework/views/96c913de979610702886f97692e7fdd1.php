<?php $__env->startSection('title', 'Customer Orders'); ?>

<?php $__env->startSection('content'); ?>

    <section>

        <div class="customer-order-index">

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

                <div class="content">

                    <div class="header">
                        <h1>Manage Customer Orders</h1>
                    </div>

                    <div class="statistic">

                        <div class="item1">
                            <i class='bx bxs-check-circle'></i>
                            <div class="data">
                                <span class="title">Total Orders Completed (<?php echo e(date('j M', strtotime(now()))); ?>)</span>
                                <span class="data">Total of 51 Order</span>
                            </div>
                        </div>

                        <div class="item2">
                            <i class='bx bxs-info-circle'></i>
                            <div class="data">
                                <span class="title">Total Orders Pending (<?php echo e(date('j M', strtotime(now()))); ?>)</span>
                                <span class="data">51 Still Pending</span>
                            </div>
                        </div>

                        <div class="item"></div>
                    </div>

                    <div class="bottom-section">

                        <div class="table-top">
                            <h3>Manage Orders</h3>
                            <div class="button">
                                <a href="<?php echo e(route('customer-order-create')); ?>" class="add"><i
                                        class='bx bxs-plus-circle'></i><span>Check Table</span></a>
                            </div>
                        </div>

                        <table>

                            <thead>
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th>Table Number</th>
                                    <th>Food Order</th>
                                    <th>Order Status</th>
                                    <th>Paid Status</th>
                                    <th>Customer Contact No.</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $customerOrder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><?php echo e($order->diningTable->table_name); ?></td>
                                        <td>
                                            <?php $__currentLoopData = $order->customerOrderDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e(Str::limit($orderDetail->foodMenu->name, 10)); ?>

                                                <?php if(!$loop->last): ?>
                                                    ,
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td><?php echo e($order->order_status); ?></td>
                                        <td>
                                            <?php if($order->isPaid): ?>
                                                True
                                            <?php else: ?>
                                                False
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($order->customer_contact); ?></td>
                                        <td>
                                            <button class="modal-button">
                                                <i class='bx bxs-pencil'></i>
                                                <span>Edit</span>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                        </table>

                        <?php echo $__env->make('company.staff.order.modal.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </div>

                </div>

            </main>

        </div>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('company.staff.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babal\Dropbox\PC\Desktop\Food-Ordering-System-main\resources\views/company/staff/order/index.blade.php ENDPATH**/ ?>