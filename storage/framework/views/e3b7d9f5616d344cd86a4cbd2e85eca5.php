<!-- Custom Pagination -->

<?php if($paginator->hasPages()): ?>
    <nav>
        <div class="pagination-number">
            
            <div class="page">
                <?php if($paginator->onFirstPage()): ?>
                    <li class="disabled"><i class='bx bx-chevrons-left'></i>prev</li>
                <?php else: ?>
                    <li><a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"><i
                                class='bx bx-chevrons-left'></i>prev</a></li>
                <?php endif; ?>
            </div>

            
            <div class="page-number">
                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if(is_string($element)): ?>
                        <li class="disabled"><span><?php echo e($element); ?></span></li>
                    <?php endif; ?>

                    
                    <?php if(is_array($element)): ?>
                        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page == $paginator->currentPage()): ?>
                                <li class="active"><span><?php echo e($page); ?></span></li>
                            <?php else: ?>
                                <li><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>


            
            <div class="page">
                <?php if($paginator->hasMorePages()): ?>
                    <li><a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next">next<i
                                class='bx bx-chevrons-right'></i></a></li>
                <?php else: ?>
                    <li class="disabled">next<i class='bx bx-chevrons-right'></i></li>
                <?php endif; ?>
            </div>

        </div>
    </nav>
<?php endif; ?>
<?php /**PATH C:\Users\babal\Dropbox\PC\Desktop\Food-Ordering-System-main\resources\views/partials/paginator.blade.php ENDPATH**/ ?>