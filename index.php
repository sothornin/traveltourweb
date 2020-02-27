<?php
    include('header.php');
?>
<section class="banner">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="images/thailand.jpg" alt="Travels n Tours" width="100%" height="500px">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="images/slider-2.jpg" alt="Travels n Tours" width="100%" height="500px">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="images/mmmslider1.jpg" alt="Travels n Tours" width="100%" height="500px">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</section>
<br>
<!-- <section class="tour">
    <div class="container">
        <div class="text-center">
            <h3>Tours In Myanmar</h3>
        </div><br>
        <div class="row">
            <div class="col-md-4">
                <img src="images/thailand.jpg" alt="travels n tours" width="100%" height="250px">
                <div id="serviceinfo" class="text-center">
                    <p>Yangon-Bagan-Mandalay</p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="images/slider-2.jpg" alt="travels n tours" width="100%" height="250px">
                <div id="serviceinfo" class="text-center">
                    <p>Yangon-Taunggyi-Innlay-Mandalay</p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="images/mmmslider1.jpg" alt="travels n tours" width="100%" height="250px">
                <div id="serviceinfo" class="text-center">
                    <p>Mandalay-Mingun-Sagaing</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- <br> -->

<section class="destination">
    <div class="container">
        <div class="text-center">
            <h3>Popular Destinations</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
            <section class="center slider">
                
                    <?php
                    require_once "config.php";

                    $sql = "select id,img1,name from place";
                    $result = mysqli_query($link,$sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-3 hvrbox">
                    <a href="placedetail.php?id=<?php echo $row['id']; ?>"><img src="images/<?php echo $row['img1']; ?>" width="100%" height="200px !important"  style="margin:4px;padding:10px;"></a>
                    </div>
                    <div class="hvrbox-layer_top hvrbox-layer_slidedown">
                        <div class="hvrbox-text">
                       <?php echo $row['name']; ?>
                        </div>
                    </div>
                    <?php 
                    }
                    mysqli_free_result($result);
                } else{
                    echo "<p class='lead'><em>No records were found.</em></p>";
                }
                ?>
            </section>
        </div>
        </div>
    </div>
</section>
<br>
<section class="hotel">
    <div class="container">
        <div class="text-center">
            <h3>Recommended Hotels</h3>
        </div><br>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images/meliahotel.jpeg" alt="Card image cap" height="190px;">
                    <div class="card-body">
                        <h5 class="card-title">Melia Hotel</h5>
                        <p class="card-text"> No. 1 Kabar Aye Pagoda Rd, Yangon 11081, Myanmar (Burma)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images/jasminepalace.jpeg" alt="Card image cap" height="190px;">
                    <div class="card-body">
                        <h5 class="card-title">Jasmine Palace Hotel</h5>
                        <p class="card-text"> 341 Pyay Road, Sanchaung Township, Yangon, Myanmar (Burma)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images/anantabagan.jpeg" alt="Card image cap" height="190px;">
                    <div class="card-body">
                        <h5 class="card-title">Anata Bagan Hotel</h5>
                        <p class="card-text">Old Bagan, Myanmar (Burma)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images/amatagarden.jpg" alt="Card image cap" height="190px;">
                    <div class="card-body">
                        <h5 class="card-title">Amata Garden Hotel</h5>
                        <p class="card-text">Inlay ,Myanmar (Burma)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<?php
include('footer.php');
?>