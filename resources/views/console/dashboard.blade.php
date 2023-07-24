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
        <ul id="dashboard">
            <li><a>Manage Projects</a></li>
            <li><a>Manage Types</a></li>
            <li><a>Manage Users</a></li>
        </ul>
    </section>
</body>
</html>
