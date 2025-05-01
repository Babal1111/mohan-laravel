<?php $__env->startSection('title', 'Reservation'); ?>

<?php $__env->startSection('content'); ?>

    <section>

        <div class="reservation-index">

            <main>

                <div class="content">

                    <div class="header">
                        <h1>Manage Customer Reservation</h1>
                    </div>

                    <div class="reservation-status">

                        <div class="container">
                            <i class='bx bxs-bell'></i>
                            <div class="data">
                                <span class="title">Reservation in-Progress (<?php echo e(date('d-M')); ?>)</span>
                                <span class="data">Total bla bla bla</span>
                            </div>
                        </div>

                    </div>

                    <div class="bottom-section">

                        <div class="table-top">
                            <h3>Manage Reservation</h3>
                        </div>

                        <table>

                            <thead>
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact No.</th>
                                    <th>No. of Attendees</th>
                                    <th>Date & Time Arrival</th>
                                    <th>Table</th>
                                    <th>Status</th>
                                    <th>Message</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $reservation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reserve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><?php echo e($reserve->reservation_name); ?></td>
                                        <td><?php echo e($reserve->reservation_email); ?></td>
                                        <td><?php echo e($reserve->reservation_contact); ?></td>
                                        <td><?php echo e($reserve->reservation_attendees); ?></td>
                                        <td>
                                            <?php echo e(date('d-M', strtotime($reserve->reservation_date))); ?> 
                                            <?php echo e(date('g:i A', strtotime($reserve->reservation_time))); ?>

                                        </td>
                                        <td>
                                            <?php if($reserve->dining_table_id): ?>
                                                <?php echo e($reserve->dining_table_id); ?>

                                            <?php else: ?>
                                                Not Chosen
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($reserve->reservation_status); ?></td>
                                        <td><?php echo e($reserve->reservation_message); ?></td>
                                        <td><a href="#"><i class='bx bxs-pencil'></i><span>Edit</span></a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                        </table>

                    </div>

                </div>

            </main>

        </div>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('company.staff.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babal\Dropbox\PC\Desktop\Food-Ordering-System-main\resources\views/company/staff/reservation/index.blade.php ENDPATH**/ ?>