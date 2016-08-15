<?php
    include "page/header.php";
?>
<div class="main">
    <div class="block">
        <div class="logo">
            <p>logo</p>
        </div>

        <div class="head">
            <h2><a href="../index.php">Name Site</a></h2>
            <hr>
            <i>tagline</i>
        </div>
    </div>

    <div class="block">
        <div class="menu">
            <p>
                menu
            </p>
            <ul>
                <?php for($i=1; $i<3; $i++) : ?>
                    <li><a href="../index.php?action=<?=$i?>"><?=$i?></a></li>
                <?php endfor ?>
                <li>HW</li>
                    <ul>
                    <?php for($i=1; $i<2; $i++) : ?>
                        <li><a href="../index.php?action=hw<?=$i?>">hw<?=$i?></a></li>
                    <?php endfor ?>
                    </ul>
            </ul>

        </div>
        <div class="cont">
            <?php
                if(!isset($_GET['action'])) {
                    include "page/main.php";
                } else if ($_GET['action']==1) {
                    include "page/1.php";
                } else if ($_GET['action']==2) {
                    include "page/2.php";
                } else if ($_GET['action']=='hw1') {
                    include "page/hw/hw1.php";
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
