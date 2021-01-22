<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Gaji Karyawan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="NIK" class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" name="NIK" class="form-control" id="inputEmail3" placeholder="Inputkan NIK" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama_karyawan" class="col-sm-3 control-label">Nama Karyawan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_karyawan" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Karyawan" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" class="form-control" id="inputEmail3" placeholder="Inputkan Jabatan" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="gaji_pokok" class="col-sm-3 control-label">Gaji Pokok</label>
                            <div class="col-sm-9">
                                <input type="text" name="gaji_pokok" class="form-control" id="inputEmail3" placeholder="Inputkan Gaji Pokok" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="gaji_lembur" class="col-sm-3 control-label">Gaji Lembur</label>
                            <div class="col-sm-3">
                                <input type="text" name="gaji_lembur" class="form-control" id="inputEmail3" placeholder="Inputkan Gaji Lembur" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="total_diterima" class="col-sm-3 control-label">Total Gaji</label>
                            <div class="col-sm-9">
                                <input type="text" name="total_diterima" class="form-control" id="inputPassword3" placeholder="Inputkan Total Diterima" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Gaji Karyawan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=gajikaryawan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Gaji karyawan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $NIK=$_POST['NIK'];
    $nama_karyawan=$_POST['nama_karyawan'];
    $jabatan=$_POST['jabatan'];
    $gaji_pokok=$_POST['gaji_pokok'];
  $gaji_lembur=$_POST['gaji_lembur'];
    $total_diterima=$_POST['total_diterima'];
    //buat sql
    $sql="INSERT INTO tbl_gajikaryawan VALUES ('$NIK','$nama_karyawan','$jabatan','$gaji_pokok','$gaji_lembur','$total_diterima','')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan gajikaryawan Error");
    if ($query){
        echo "<script>window.location.assign('?page=gajikaryawan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
