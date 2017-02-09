<!doctype html>
<html>
<?php include('partials/head.php')?>
<body>
    <script src="js/test.js"></script>
    <div class="wrapper">
        <div id="sidebar">
            <ul>
                <li><a href="#">about us</a></li>
                <li><a href="#">FREE resources</a></li>
                <li><a href="#">inbound marketing</a></li>
                <li><a href="#">CREATIVE SERVICES</a></li>
                <li><a href="#">blog</a></li>
            </ul>
        </div>
        <?php include('partials/header.php')?>
        <main id="main">
            <div class="container">
                <section id="content">
                    <?php include('partials/buckets.php')?>
                </section>
                <aside id="aside">
                    <?php include('partials/news.php')?>
                </aside>
            </div>
            <?php include('partials/lowerBlock.php')?>
        </main>

        <?php include('partials/footer.php')?>
    </div>
</body>
</html>