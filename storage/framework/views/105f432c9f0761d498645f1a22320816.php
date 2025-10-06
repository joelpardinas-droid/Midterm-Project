
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Food Ordering</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 350px;
            text-align: center;
        }
        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #e00000;
            margin-bottom: 10px;
        }
        .logo img {
            width: 60px;
            height: auto;
        }
        h2 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            background: #e00000;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #b80000;
        }
        a {
            color: #e00000;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        small {
            font-size: 12px;
            color: #888;
            display: block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">
            🍔 Food Ordering
        </div>
        <h2>Register</h2>
        <p>Create an account for the jolliest ordering experience!</p>

        <form method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>

        <p style="margin-top:15px;">Already have an account? <a href="<?php echo e(route('login')); ?>">Log in</a></p>

        <small>By continuing, you agree to our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.</small>
    </div>
</body>
</html>

<?php /**PATH C:\Users\Joelp\Desktop\midtermproject\web-site\resources\views/auth/register.blade.php ENDPATH**/ ?>