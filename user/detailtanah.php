<?php
require '../function.php';
require '../cek.php';

$idtanah = $_GET['id'];
$get = mysqli_query($conn,"select * from tanah where idtanah='$idtanah'");
$fetch = mysqli_fetch_assoc($get);

$namalembaga = $fetch['namalembaga'];
$namalembaga = $fetch['namalembaga'];
$namaaset = $fetch['namaaset'];
$keterangan = $fetch['keterangan'];
$kodebarang = $fetch['kodebarang'];
$golongan4 = $fetch['golongan4'];
$asal = $fetch['asal'];
$jumlah = $fetch['jumlah'];
$harga = $fetch['harga'];
$luas = $fetch['luas'];
$tanggal = $fetch['tanggal'];
$penggunaan = $fetch['penggunaan'];
$alamat = $fetch['alamat'];
$thak = $fetch['thak'];
$tnomor = $fetch['tnomor'];
$tanggalditerbitkan = $fetch['tanggalditerbitkan'];
$gambar = $fetch['image'];
// if{$gambar==null}{
//     $img = 'No Photo';
// }else{
//     $img= '<img src="../uploadPhoto/'.$gambar.'" class="zoomable">';
// }
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>keterangan Barang</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <style>
            .zoomable{
                width: 200px;
            }
            .zoomable:hover{
                transform: scale(2.5);
                transition: 0.2s ease;
            }
        </style>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">DPPPAKB</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="tanah.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                tanah
                            </a>
                            <a class="nav-link" href="alatmesin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Peralatan dan Mesin
                            </a>
                            <a class="nav-link" href="gedungbangunan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Gedung dan Bangunan
                            </a>
                            <a class="nav-link" href="jalan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Jalan,Irigasi dan Jaringan
                            </a>
                            <a class="nav-link" href="asettetaplain.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Aset Tetap Lainnya
                            </a>
                            <a class="nav-link" href="konstruksi.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Konstruksi Dalam Pengerjaan
                            </a>
                            <a class="nav-link" href="kemitraan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Kemitraan Dengan Pihak ke 3
                            </a>
                            <a class="nav-link" href="asettidakberwujud.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Aset Tidak Berwujud
                            </a>
                            <a class="nav-link" href="asetlainlain.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Aset Lain-Lain
                            </a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                    <a class="nav-link" href="logout.php">
                                Logout
                            </a>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Detail</h1>
                         
                            <?php
                                $ambilsemuadatatanah = mysqli_query($conn,"select * from tanah");

                                while($fetch=mysqli_fetch_array($ambilsemuadatatanah)){
                                    
                                    $namaaset = $fetch['namaaset'];
                                }
                            ?>
                            
                            
                            <div class="card-body">
                                
                            
                            <div class="table-responsive">
                                    
                                        
                                        <tbody>

                                            
                                            <?php
                                            $ambilsemuadatatanah = mysqli_query($conn,"select * from tanah where idtanah='$idtanah'");
                                            $i = 1;
                                            while($data=mysqli_fetch_array($ambilsemuadatatanah)){
                                                
                                                $namalembaga = $data['namalembaga'];
                                                $namaaset = $data['namaaset'];
                                                $keterangan = $data['keterangan'];
                                                $kodebarang = $data['kodebarang'];
                                                $golongan4 = $data['golongan4'];
                                                $asal = $data['asal'];
                                                $jumlah = $data['jumlah'];
                                                $harga = $data['harga'];
                                                $luas = $data['luas'];
                                                $tanggal = $data['tanggal'];
                                                $penggunaan = $data['penggunaan'];
                                                $alamat = $data['alamat'];
                                                $thak = $data['thak'];
                                                $tnomor = $data['tnomor'];
                                                $tanggalditerbitkan = $data['tanggalditerbitkan'];
                                                $gambar = $data['image'];
                                                $idtanah = $data['idtanah'];

                                                if($gambar==null){
                                                    //gaada gambar
                                                    $img = 'No Photo';
                                                }else{
                                                    //ada
                                                    $img ='<img src="../images/'.$gambar.'" class="zoomable">';
                                                }

                                                
                                        
                                                 //echo json_encode($namalembaga);
                                            ?>

                                            <div class="card mb-4">
                                            <div class="card-header" style="font-size: 24px;">
                                            <strong><?=$namaaset;?></strong>
                                            </div>     
                                            <!-- foto -->
                                            <div class="row">
                                            <div class="col"><?=$img;?></div> 
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2">Nama Lembaga</div>
                                            <div class="col-md-9">: <?=$namalembaga;?></div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2">Nama Aset</div>
                                            <div class="col-md-9">: <?=$namaaset;?></div>
                                            </div >
                                            <div class="row">
                                            <div class="col-md-2">Keterangan</div>
                                            <div class="col-md-9">: <?=$keterangan;?></div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2">Kode Barang</div>
                                            <div class="col-md-9">: <?=$kodebarang;?></div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2">Golongan di lv.4</div>
                                            <div class="col-md-9">: <?=$golongan4;?></div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2">Asal Usul</div>
                                            <div class="col-md-9">: <?=$asal;?></div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2">Jumlah</div>
                                            <div class="col-md-9">: <?=$jumlah;?></div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2">Harga Perolehan</div>
                                            <div class="col-md-9">: <?=$harga;?></div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2">Luas</div>
                                            <div class="col-md-9">: <?=$luas;?></div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2">Tanggal Pembelian</div>
                                            <div class="col-md-9">: <?=$tanggal;?></div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2">Penggunaan</div>
                                            <div class="col-md-9">: <?=$penggunaan;?></div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2">Alamat</div>
                                            <div class="col-md-9">: <?=$alamat;?></div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2">Status Tanah</div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2" style="left: 1cm;">Hak</div>
                                            <div class="col-md-9" style="left: 1cm;">: <?=$thak;?></div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2" style="left: 1cm;">Nomor</div>
                                            <div class="col-md-9" style="left: 1cm;">: <?=$tnomor;?></div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-2" style="left: 1cm;">Tanggal Di Terbitkan</div>
                                            <div class="col-md-9" style="left: 1cm;">: <?=$tanggalditerbitkan;?></div>
                                            
                            
                                            

                                             
                                      
                                                    
                                                    
                                                </div>
                                                </div>
                                            </div>


                                           

                                

                                            <?php
                                            };

                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>

        <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
   
        <script src="./plugin/sweetalert/sweetalert.min.js"></script>
        <script src="./plugin/webcamjs/webcam.min.js"></script>
        
    </body>
               
        
</html>
