<table id="<?php echo e($tableId ?? 'table1'); ?>" class="table1">
    <thead>
        <tr>
            <th width="5%">
                <input type="checkbox" name="<?php echo e($tableCheckboxName); ?>" id="<?php echo e($tableAllCheckBoxId); ?>">
            </th>
            <?php $__currentLoopData = $tableHeaders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $th): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <th><?php echo e($th); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <th width="10%">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $tableDatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $td): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <input type="checkbox" name="<?php echo e($tableBodyCheckBoxName); ?>" id="<?php echo e($tableBodyCheckBoxId . $td->id); ?>" value="<?php echo e($td->id); ?>">
                </td>
                <?php $__currentLoopData = $tableFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td>
                        <?php if($field == 'image'): ?>
                            <img src="<?php echo e(asset($td->image)); ?>">
                        <?php elseif($field == 'description'): ?>
                            <?php echo e(Str::limit($td->$field, 30)); ?>

                        <?php elseif($field == 'price'): ?>
                            RM <?php echo e($td->$field); ?>

                        <?php elseif(str_contains($field, '.')): ?>
                            <?php echo e(data_get($td, $field)); ?>

                        <?php else: ?>
                            <?php echo e($td->$field); ?>

                        <?php endif; ?>
                    </td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td>
                    <a href="<?php echo e($buttonLink($td)); ?>">
                        <i class='bx bxs-pencil'></i>
                        <span>Edit</span>
                    </a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\Users\babal\Dropbox\PC\Desktop\Food-Ordering-System-main\resources\views/partials/table1.blade.php ENDPATH**/ ?>