

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Banner -->
    <section class="bg-red-600">
        <div class="container mx-auto px-4 py-10 md:py-16 grid md:grid-cols-2 gap-8 items-center text-white">
            <div>
                <div class="uppercase tracking-widest text-sm opacity-90">New!</div>
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Burger Steak</h1>
                <p class="mt-3 text-lg opacity-90">Bigger patty, more sauce. Price varies.</p>
                <div class="mt-6 flex gap-3">
                    <a href="#menu" class="px-5 py-3 rounded-full bg-white text-red-600 font-semibold hover:bg-red-50">See Menu</a>
                    <a href="#" class="px-5 py-3 rounded-full border border-white font-semibold hover:bg-white/10">Sign Up</a>
                </div>
            </div>
            <div class="text-center">
                <img src="/assets/hero-burger-steak.png" alt="Burger Steak" class="w-full max-w-md mx-auto" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <!-- Promo Card -->
    <section class="container mx-auto px-4 -mt-8 md:-mt-12">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="grid md:grid-cols-3">
                <div class="md:col-span-2 p-6 flex items-center gap-6">
                    <img src="/assets/promo-bucket.png" alt="Promo" class="h-20" onerror="this.style.display='none'">
                    <div>
                        <h3 class="text-2xl font-bold">Sign up now</h3>
                        <p class="text-slate-600">We made joy more accessible! Order your favorites now.</p>
                        <a href="#" class="text-red-600 font-semibold mt-2 inline-block">Sign up here →</a>
                    </div>
                </div>
                <div class="bg-red-50 p-6 flex items-center justify-center text-red-700 font-extrabold text-3xl">JOY</div>
            </div>
        </div>
    </section>

    <!-- Featured Menu -->
    <section id="menu" class="container mx-auto px-4 py-12">
        <h2 class="text-xl font-bold mb-6">Featured Menu</h2>
        <div class="grid grid-cols-2 md:grid-cols-6 gap-6 text-center">
            <?php $__currentLoopData = [ 'Family Meals', 'Super Meals', 'Jolly Meal Savers', 'Chickenjoy', 'Burgers', 'Jolly Spaghetti & Palabok']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="#" class="group">
                    <div class="h-20 mb-2 rounded bg-slate-100 group-hover:bg-slate-200 transition"></div>
                    <div class="text-sm"><?php echo e($item); ?></div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!-- Bestsellers -->
    <section id="bestsellers" class="container mx-auto px-4 pb-12">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold">Bestsellers</h2>
            <a href="#" class="text-red-600 font-semibold">View All</a>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <?php
                $products = [
                    ['name'=>'1-pc. Chickenjoy, Regular Fries & Half Jolly Spaghetti Super Meal','price'=>'₱197.00'],
                    ['name'=>'8-pc. Burger Steak Family Pan','price'=>'₱318.00'],
                    ['name'=>'Yumburger w/ Fries & Drink','price'=>'₱129.00'],
                ];
            ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="border rounded-xl p-4 hover:shadow-md transition bg-white">
                <div class="h-36 bg-slate-100 rounded mb-3"></div>
                <div class="font-semibold"><?php echo e($p['name']); ?></div>
                <div class="text-sm text-slate-600 mt-1"><?php echo e($p['price']); ?></div>
                <button class="mt-3 inline-flex items-center justify-center w-9 h-9 rounded-full bg-red-600 text-white">+</button>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="container mx-auto px-4 py-12 grid md:grid-cols-2 gap-8 items-center">
        <div class="bg-red-600 rounded-2xl text-white p-8">
            <div class="text-3xl font-extrabold">Chickenjoy</div>
            <p class="opacity-90 mt-2">Crispylicious, juicylicious chicken enjoyed by generations.</p>
        </div>
        <div>
            <h3 class="text-2xl font-bold mb-3">Jollibee | Fast Food Restaurant Near Me</h3>
            <p class="text-slate-700 leading-relaxed">Welcome to Jollibee, the Philippines' favorite fast food chain. Explore our menu of comfort foods including fried chicken, burgers, spaghetti, french fries and pies.</p>
        </div>
    </section>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Joelp\Desktop\midtermproject\web-site\resources\views/home.blade.php ENDPATH**/ ?>