<?php $__env->startSection('content'); ?>
<style>
    body {
        background-color: #fff8f0;
        font-family: Arial, sans-serif;
    }

    .hero {
        text-align: center;
        padding: 40px 20px;
        background: #d40000;
        color: white;
        border-radius: 0 0 20px 20px;
        margin-bottom: 40px;
    }

    .hero h1 {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .hero p {
        font-size: 18px;
        opacity: 0.9;
    }

    /* Grid layout for foods */
    .food-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 35px;
        padding: 30px 50px;
        justify-items: center;
    }

    /* Each food card */
    .food-card {
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        width: 240px;
        text-align: center;
        padding: 15px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .food-card:hover {
        transform: scale(1.03);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    .food-card img {
        width: 100%;
        height: 160px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .food-card h3 {
        font-size: 16px;
        font-weight: bold;
        color: #222;
        margin: 10px 0 5px;
    }

    .food-card p {
        color: #555;
        font-weight: bold;
        margin-bottom: 12px;
    }

    /* Order Now button */
    .food-card button {
        background: #d40000;
        color: white;
        font-weight: bold;
        border: none;
        border-radius: 25px;
        padding: 10px 25px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .food-card button:hover {
        background: #b80000;
    }
</style>

<div class="hero">
    <h1>Welcome to Food Ordering!</h1>
    <p>Craving something delicious? Order your favorite meal now.</p>
</div>

<div class="food-container">
    <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="food-card">
            <img src="<?php echo e(asset('images/' . $food->image)); ?>" alt="<?php echo e($food->name); ?>">
            <h3><?php echo e($food->name); ?></h3>
            <p>₱<?php echo e(number_format($food->price, 2)); ?></p>

            <form action="<?php echo e(route('order.store', ['id' => $food->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="food_id" value="<?php echo e($food->id); ?>">
                <button type="submit">Order Now</button>
            </form>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Joelp\Desktop\midtermproject\web-site\resources\views/user/index.blade.php ENDPATH**/ ?>