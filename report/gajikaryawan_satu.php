<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Gaji Karyawan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_gajikaryawan WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Data Karyawan PT. ABC </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA GAJI KARYAWAN</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>NIK</td> <td><?= $data['NIK'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Karyawan</td> <td><?= $data['nama_karyawan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td> <td><?= $data['jabatan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Gaji Pokok</td> <td><?= $data['gaji_pokok'] ?></td>
                                </tr>
                                <tr>
                                    <td>Gaji Lembur</td> <td><?= $data['gaji_lembur'] ?></td>
                                </tr>
								<tr>
                                    <td>Total Gaji</td> <td><?= $data['total_diterima'] ?></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Manager<strong></u><br>
                                        NIK. 1473029878129890
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
