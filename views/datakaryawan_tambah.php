<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Karyawan</h3>
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
                            <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_lengkap" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Lengkap" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" class="form-control" id="inputPassword3" placeholder="Inputkan Jabatan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Karyawan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=datakaryawan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data karyawan
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
	$nama_lengkap=$_POST['nama_lengkap'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
  $tgl_masuk=$_POST['tgl_masuk'];
	$jabatan=$_POST['jabatan'];
    //buat sql
    $sql="INSERT INTO tbl_datakarayawan VALUES ('','$NIK','$nama_lengkap','$jenis_kelamin','$alamat','$tgl_masuk','$jabatan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan datakaryawan Error");
    if ($query){
        echo "<script>window.location.assign('?page=datakaryawan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
