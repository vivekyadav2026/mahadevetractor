<!-- ===================== MOBILE BOTTOM NAVIGATION ===================== -->
<nav class="pl-bottom-nav d-lg-none">
    <a href="<?php echo e(route('home')); ?>" class="nav-item <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">
        <i class="bi <?php echo e(request()->routeIs('home') ? 'bi-house-fill' : 'bi-house'); ?>"></i>
        <span>Home</span>
    </a>
    
    <a href="<?php echo e(route('shop')); ?>" class="nav-item <?php echo e(request()->routeIs('shop') || request()->routeIs('category.show') ? 'active' : ''); ?>">
        <i class="bi <?php echo e(request()->routeIs('shop') || request()->routeIs('category.show') ? 'bi-grid-fill' : 'bi-grid'); ?>"></i>
        <span>Shop</span>
    </a>
    
    <a href="<?php echo e(route('cart.index')); ?>" class="nav-item position-relative <?php echo e(request()->routeIs('cart.index') ? 'active' : ''); ?>">
        <i class="bi <?php echo e(request()->routeIs('cart.index') ? 'bi-bag-fill' : 'bi-bag'); ?>"></i>
        <span>Cart</span>
        <span class="badge position-absolute translate-middle bg-danger border border-light rounded-circle pl-nav-badge" data-cart-badge style="<?php echo e(session()->has('cart') && array_sum(array_column(session('cart'), 'quantity')) > 0 ? 'display:flex;' : 'display:none;'); ?>">
            <?php echo e(session()->has('cart') ? array_sum(array_column(session('cart'), 'quantity')) : 0); ?>

        </span>
    </a>
    
    <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(route('dashboard')); ?>" class="nav-item <?php echo e(request()->routeIs('dashboard') || request()->routeIs('profile.edit') || request()->routeIs('orders.*') ? 'active' : ''); ?>">
            <i class="bi <?php echo e(request()->routeIs('dashboard') || request()->routeIs('profile.edit') || request()->routeIs('orders.*') ? 'bi-person-fill' : 'bi-person'); ?>"></i>
            <span>Profile</span>
        </a>
    <?php else: ?>
        <a href="<?php echo e(route('login')); ?>" class="nav-item <?php echo e(request()->routeIs('login') ? 'active' : ''); ?>">
            <i class="bi bi-person"></i>
            <span>Login</span>
        </a>
    <?php endif; ?>
</nav>
<?php /**PATH C:\xampp\htdocs\mahadevetractor\resources\views/frontend/partials/bottom_nav.blade.php ENDPATH**/ ?>