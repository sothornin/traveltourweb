<?php
include('header.php');
?>

<?php
if(isset($_GET["id"])){
    // Include config file
    require_once "config.php";
    $id = $_GET["id"];
    $sql = "SELECT * FROM place WHERE id = $id";
    $result = mysqli_query($link,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<section class='ttbanner'>";
            echo "<h1>".$row['name']."</h1>";
            echo "</section>";
            echo "<section>
            <div class='container'><br>
                <div class='row pt-3'>
                    <div class='col-md-6'><img src='images/".$row['img1']."' alt='Travels n Tours' class='img-thumbnail' width='100%' height='200px'>
                    </div>";
            echo "<div class='col-md-6'><div class='text-center'>";
            echo "<h4>".$row['name']."</h4></div>";
            echo "<p>".$row['content']."</p></div></div><br></div></section>";
        }
    }
} 
?>
<?php
include('footer.php')
?>