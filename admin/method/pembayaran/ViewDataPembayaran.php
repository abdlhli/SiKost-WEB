<!-- //======================================================== TAMPILAN DATA TABEL DARI SQL ===================================================================================// -->
<?php
include 'database/config.php';

$sql = "SELECT * FROM `pembayaran` JOIN akun ON pembayaran.id_user = akun.id_user JOIN kamar ON akun.no_kamar = kamar.no_kamar JOIN jenis_kamar ON kamar.id_jenis_kamar = jenis_kamar.id_jenis_kamar;";
$count = 1;
$hasil = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($hasil, MYSQLI_ASSOC)) {
?>

    <tr>
        <td>
            <?php echo $count++; ?>
        </td>
        <td>
            <?php echo $data['id_pembayaran']; ?>
        </td>
        <td>
            <?php echo $data['firstname'], " ", $data['lastname']; ?>
        </td>
        <td>
            <?php echo $data['no_kamar']; ?>
        </td>
        <td>
            <?php echo $data['tgl_pembayaran']; ?>
        </td>
        <td>
            <?php echo $data['harga']; ?>
        </td>
        <td>
            <?php echo $data['foto_kuitansi']; ?>
        </td>
        <td>
            <?php echo $data['status_pembayaran']; ?>
        </td>
        <th> <button class="btn btn-success btn-xs" data-bs-toggle="modal" data-bs-target="#edit_data_pembayaran<?php echo $data['id_pembayaran']; ?>">
                <i class="bi-pencil" style="padding-right: 10px;">
                </i>Edit</button>
            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#hapus_data_pembayaran<?php echo $data['id_pembayaran']; ?>">
                <i class="bi-trash" style="padding-right: 10px;">
                </i>Hapus</button>
            <!-- <button class="btn btn-secondary btn-xs" data-bs-toggle="modal" data-bs-target="#detail_pembayaran">
                <i class="bi-info-circle-fill" style="padding-right: 10px;"></i>Detail</button> -->
        </th>
    </tr>
<?php
}
?>