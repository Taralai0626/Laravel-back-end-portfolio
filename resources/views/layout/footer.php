
<hr>

<footer class="w3-padding">

    Footer Text | 
    &copy; Copyright <?= date('Y') ?>
    
    <!-- !!! Find a way to connect profilelinks variable from controller to this footer pg to show profile links from database. !!! -->

    <br>

    <?php if(Auth::check()): ?>
        You are logged in as <?= auth()->user()->first ?> <?= auth()->user()->last ?> | 
        <a href="/console/logout">Log Out</a> | 
        <a href="/console/dashboard">Dashboard</a>
    <?php else: ?>
        <a href="/console/login">Login</a>
    <?php endif; ?>

</footer>

</body>
</html>