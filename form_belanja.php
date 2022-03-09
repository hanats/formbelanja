<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="border-bottom border-dark mb-4">
                <h1>Belanja Online</h1>
            </div>
            <form method="POST" action="form_belanja.php">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label> 
                    <div class="col-8">
                        <table>
                            <tr>
                                <td><div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="produk" id="produk_0" type="checkbox" class="custom-control-input" value="TV"> 
                                    <label for="produk_0" class="custom-control-label">TV</label>
                                </div></td>
                                <td><div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="produk" id="produk_1" type="checkbox" class="custom-control-input" value="Kulkas"> 
                                    <label for="produk_1" class="custom-control-label">Kulkas</label>
                                </div></td>
                                <td><div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="produk" id="produk_2" type="checkbox" class="custom-control-input" value="Mesin Cuci"> 
                                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                </div></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Pilih Jumlah</label> 
                    <div class="col-8">
                    <input id="jumlah" name="jumlah" type="number" class="form-control">
                    </div>
                </div> 
                <br>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-auto m-3">
            <table class="table">
                <tr class="table-primary">
                    <td><h4>Daftar Harga</h4></td>
                </tr>
                <tr>
                    <td>TV : 4.200.000</td>
                </tr>
                <tr>
                    <td>Kulkas : 3.100.000</td>
                </tr>
                <tr>
                    <td>Mesin Cuci : 3.800.000</td>
                </tr>
                <tr class="table-primary">
                    <td><h4>Harga dapat berubah setiap saat</h4></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="border-top border-dark p-3">
        <?php 
        $nama = isset ($_POST['nama']) ? $_POST['nama'] : '';
        $produk = isset ($_POST['produk']) ? $_POST['produk'] : '';
        $jumlah= isset ($_POST['jumlah']) ? $_POST['jumlah'] : '';
        
        function format_uang($uang){
            $hasil = "Rp.".number_format($uang,0,",",".");
            return $hasil;
        }

        $tv = 4200000;
        $kulkas = 3100000;
        $mcuci = 3800000;

        echo 'Nama Costumer : '.$nama.'<br>';        
        echo 'Produk Pilihan : '. $produk.'<br>';
        echo 'Jumlah Beli : '.$jumlah.'<br>';

        //pemilihan produk

        if($produk == 'TV'){
            $total = $jumlah * $tv;
        }elseif($produk == 'Kulkas'){
            $total = $jumlah * $kulkas;
        }elseif($produk == 'Mesin cuci'){
            $total = $jumlah * $mcuci;
        }
        echo "Total Belanja : ".format_uang($total);


        ?>
    </div>
    





  </body>
</html>