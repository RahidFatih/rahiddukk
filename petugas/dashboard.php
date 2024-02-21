<?php
$pathToImage = "../img/kafe.jpg";
?>

<div class="well">
    <h4>Dashboard</h4>
    <p>Selamat Datang <?php echo $User;?> Sebagai <?php echo $_SESSION['level']; ?></p>
    <h1>WAREG</h1>
    <img src="<?php echo $pathToImage; ?>" alt="SKRRR">
</div>  