<?php
include('header.php')
?>
<section class="ttbanner">
    <h1>Hotels</h1>
</section>

<section>
    <div class="container">
        <div class="row pt-3">
            <?php 
                require_once "config.php"; //it means call 'config.php'
                $sql = "select * from hotel";
                $result = mysqli_query($link,$sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                       echo "<div class='col-md-6'>";
                       echo "<img src='images/".$row['hotel_img']."' alt='Travels n Tours' width='100%' height='300px'>";
                       echo "<p>".$row['location']."</p><br>";
                       echo "</div>";
                    }
                }
            ?>
        </div>
    </div>
</section>

<?php
include('footer.php')
?>