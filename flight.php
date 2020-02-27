<?php
include('header.php')
?>
<section class="ttbanner">
    <h1>Flights</h1>
</section>

<section>
    <div class="container">
        <div class="row pt-3">
            <?php 
                require_once "config.php";
                $sql = "select * from flight";
                $result = mysqli_query($link,$sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                       echo "<div class='col-md-4' width='360px' height='240px'>";
                       echo "<img src='images/".$row['flight_img']."' alt='Travels n Tours' width='100%' height='300px' class='border' id='air'>";
                       echo "<h4 class='text-center'>".$row['air_name']."</h4><br>";
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