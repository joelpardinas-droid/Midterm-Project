<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering App</title>
    <style>
        /* Reset and body style */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #fff8f0;
            color: #333;
        }

        /* Navigation bar */
        header {
            background: #e00000;
            color: white;
            padding: 12px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .logo {
            font-weight: bold;
            font-size: 22px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-weight: bold;
            transition: 0.3s;
        }
        nav a:hover {
            text-decoration: underline;
            color: #ffe0e0;
        }

        /* Hero banner for homepage */
        .hero {
            background: linear-gradient(to right, #ffcccc, #ffe5e5);
            text-align: center;
            padding: 60px 20px;
        }
        .hero h1 {
            color: #b80000;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .hero p {
            font-size: 1.1rem;
            color: #444;
        }

        /* Main content */
        main {
            padding: 30px;
            min-height: 70vh;
        }

        /* Flash messages */
        .message-success {
            background: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
        }
        .message-error {
            background: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        /* Footer */
        footer {
            background: #e00000;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
        }

        /* Buttons */
        button {
            background: #ff0000;
            color: white;
            border: none;
            padding: 8px 14px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #cc0000;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <header>
        <div class="logo">🍔 Food Ordering</div>
        <nav>
            <a href="/">Home</a>
            <?php if(auth()->guard()->check()): ?>
                <?php if(auth()->user()->role == 'admin'): ?>
                    <a href="/admin/dashboard">Dashboard</a>
                <?php endif; ?>
                <span>Hello, <?php echo e(auth()->user()->name); ?>!</span>
                <a href="/logout">Logout</a>
            <?php else: ?>
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            <?php endif; ?>
        </nav>
    </header>


    <!-- Main page content -->
    <main>
        <?php if(session('success')): ?>
            <div class="message-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="message-error"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer>
        © 2025 Food Ordering App | Designed by Joel |created by Dereck and Francis Jay
    </footer>
</body>
</html>
<?php /**PATH C:\Users\Joelp\Desktop\midtermproject\web-site\resources\views/layouts/app.blade.php ENDPATH**/ ?>