<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Gaji Karyawan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_gajikaryawan WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">NIK</td> <td><?= $data['NIK'] ?></td>
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
                            <td>Total Diterima</td> <td><?= $data['total_diterima'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=gajikaryawan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Peminjaman </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

