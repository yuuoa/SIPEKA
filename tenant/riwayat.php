<?php include 'header.php'; include 'breadcome.php';?>

<div class="container-fluid">
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Data Riwayat Unduhan Arsip Saya</h3>
        </div>
        <div class="panel-body">

            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th width="18%">Waktu Upload</th>
                        <th width="30%">User</th>
                        <th width="30%">Arsip yang diunduh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $saya = $_SESSION['id'];
                    $arsip = mysqli_query($koneksi,"SELECT * FROM riwayat,arsip,user WHERE riwayat_arsip=arsip_id and riwayat_user=user_id and arsip_tenant='$saya' ORDER BY riwayat_id DESC");
                    while($p = mysqli_fetch_array($arsip)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo date('H:i:s  d-m-Y',strtotime($p['riwayat_waktu'])) ?></td>
                            <td><?php echo $p['user_nama'] ?></td>
                            <td><a style="color: blue" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>"><?php echo $p['arsip_nama'] ?></a></td>
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>

        </div>

    </div>
</div>

<?php include 'footer.php'; ?>