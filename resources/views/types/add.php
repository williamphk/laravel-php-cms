<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/app.css">
    <script src="/app.js"></script>
</head>
<body>
    <header class="w3-padding">
        <h1 class="w3-text-red">Project Dashboard</h1>

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
        <h2>Add Types</h2>

        <form method="POST" action="/console/types/add" novalidate class="w3-margin-bottom">
            <?= csrf_field() ?>
            <div class="w3-margin-bottom">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="<?= old('title') ?>">

                <?php if($errors->first('title')): ?>
                    <br>
                    <span class="w3-text-red">
                        <?= $errors->first('title') ?>
                    </span>
                <?php endif; ?>
            </div>
            <input type="submit" value="Add Type" class="w3-button w3-green">
        </form>
        <a href="/console/types/list">Back to type list</a>
    </section>
</body>
</html>