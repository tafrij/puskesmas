<?php
if ($_REQUEST['act'] == 'edit') {
    $r = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM m_pasien WHERE id_pasien = '$_REQUEST[id]'"));
    $id_pasien      = $r['id_pasien'];
    $nama           = $r['nama'];
    $alamat         = $r['alamat'];
    $tmp_lahir      = $r['tmp_lahir'];
    $tgl_lahir      = $r['tgl_lahir'];
    $jenis_kelamin  = $r['jenis_kelamin'];
    $no_telp        = $r['no_telp'];
    $act            = "edit";
} else {
    $id_pasien      = "";
    $nama           = "";
    $alamat         = "";
    $tmp_lahir      = "";
    $tgl_lahir      = "";
    $jenis_kelamin  = "";
    $no_telp        = "";
    $act            = "save";
}
?>
<form action="modul/m_pasien/proses_pasien.php?act=<?= $act ?>" method="post">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">Nama pasien</label>
            <input type="text" autocomplete="off" name="nama" value="<?= $nama ?>" class="form-control" id="formGroupExampleInput2" placeholder="nama...">
        </div>
        <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">No Telp</label>
            <input type="text" autocomplete="off" name="no_telp" value="<?= $no_telp ?>" class="form-control" id="formGroupExampleInput2" placeholder="no telp...">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">Tgl Lahir</label>
            <input type="text" name="tgl_lahir" value="<?= $tgl_lahir ?>" class="form-control" id="formGroupExampleInput2" placeholder="contoh : 1997-02-11">
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Jenis Kelamin</label>
            <select id="inputState" class="form-control" name="jenis_kelamin">
                <option value="l" <?php if ($jenis_kelamin == "l") {
                                        echo "selected";
                                    } ?>>Laki-Laki</option>
                <option value="p" <?php if ($jenis_kelamin == "p") {
                                        echo "selected";
                                    } ?>>Perempuan</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">Tmp Lahir</label>
            <input type="text" autocomplete="off" name="tmp_lahir" value="<?= $tmp_lahir ?>" class="form-control" id="formGroupExampleInput2" placeholder="tempat lahir...">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Alamat</label>
        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"><?= $alamat ?></textarea>
    </div>
    <hr>
    <button type="submit" class="btn btn-primary"><?= $act ?></button>
    <button class="btn btn-danger">Batal</button>
</form>