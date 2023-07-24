<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/app.css">
    <script src="/app.js"></script>
</head>
<body>
    <header class="w3-padding">
        <h1 class="w3-text-red">Login</h1>

        <?php if(Auth::check()): ?>
            You are logged in as <?= Auth::user()->first ?> <?= Auth::user()->last ?>
            <a href="/console/logout">Logout</a>
            <a href="/console/dashboard">Dashboard</a>
            <a href="/">Website Home Page</a>
        <?php else: ?>
            <a href="/">Return to my Portfolio</a>
        <?php endif; ?>

    </header>

    <hr>

    <section class="w3-padding">
        <form method="post" action="/console/login" novalidate>
            <?= csrf_field() ?>
            <div class="w3-margin-bottom">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" value="<?= old('email') ?>">

                <?php if($errors->has('email')): ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('email') ?></span>
                <?php endif; ?>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">

                <?php if($errors->has('password')): ?>
                    <br>
                    <span class="w3-text-red"><?= $errors->first('password') ?></span>
                <?php endif; ?>
            </div>
            <button type="submit">Log In</button>
        </form>
    </section>
</body>
</html>
