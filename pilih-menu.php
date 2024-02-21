<?php
include("../conn/koneksi.php");
include("header.php");
?>
<body>


    <div class="main-content">
        <div class="card-container">
            <?php
            $sql = $koneksi->query("SELECT * FROM produk");
            while ($data= $sql->fetch_assoc()) {
                ?>
                <div class='card' style='width: 18rem; margin: 10px;'>
                
                    <?php echo "<img class='card-img-top' src='foto/" . $data['foto'] . "' width='230' height='250'>" ?>
                    <div class='card-body'>
                        <h5 class='card-title'><?php echo $data['nama']?></h5>
                        <p class='card-text'>harga: RP.<?php echo number_format($data['harga']) ?></p>
                        <p class='card-text'>stok: <?php echo $data['stok']?></p>
                        <a href='transaksi.php?id=<?= $data['ProdukID']; ?>' class='btn btn-md btn-primary float-end'>Beli</a>
                    </div>
                
                </div>

                <?php
            }
            ?>
        </div>
    </div>
</body>