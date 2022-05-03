        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(url('/')); ?>">>
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> X-Finances</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Charts
            </div>           
            
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('income/')); ?>">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span>Income</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('expentures/')); ?>">
                    <i class="far fa-money-bill-alt"></i>
                    <span>Expentures</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar --><?php /**PATH /home/administrador/git/x-finances/x-finances/resources/views/theme/sidebar.blade.php ENDPATH**/ ?>