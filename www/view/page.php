<?php
    include "page/header.php";
?>
<div class="main">
    <div class="block">
        <div class="logo">
            <p>logo</p>
        </div>

        <div class="head">
            <h2><a href="../index.php">name site</h2>
            <hr>
            <i>tagline</i>
        </div>
    </div>

    <div class="block">
        <div class="menu">
            <p>
                menu
                <ul>
                <li><a href="../index.php?action=1">1</a></li>
                <li><a href="../index.php?action=2">2</a></li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                </ul>
            </p>
        </div>
        <div class="cont">
            <?php
                if($_GET['action']=='main' or !isset($_GET['action'])) {
                    include "page/main.php";
                } else if ($_GET['action']==1) {
                    include "page/1.php";
                } else if ($_GET['action']==2) {
                    include "page/2.php";
                } else {
                    echo "error";
                }
            ?>
        </div>
    </div>
</div>

<?php
    include "page/footer.php";
?>
