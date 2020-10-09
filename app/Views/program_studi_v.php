<section>

    <div class="container">
        <h2>Program Studi</h2>
        <p>
            <a href="<?php echo base_url('Program_Studi/add'); ?>" class="btn btn-primary btn-sm">
               <i class="fa fa-plus"></i> Tambah
            </a>
        </p>
        <table class="table table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Aksi</th>
                    <th>Kode</th>
                    <th>Program Studi</th>
                    <th>Ketua</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach ($dataProdi as $row) :?>
                <tr>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">
                           <i class="fa fa-edit"></i> Ubah
                        </a>
                        <a href="#" class="btn btn-danger btn-sm">
                           <i class="fa fa-trash"></i> Hapus
                        </a>
                    </td>
                    <td><?php echo $row->kode_prodi; ?></td>
                    <td><?php echo $row->nama_prodi; ?></td>
                    <td><?php echo $row->ketua_prodi; ?></td>
                </tr>

            <?php 
                endforeach;
                if (empty($dataProdi)) {
            ?>
            <tr>
                <td colspan="4" class="text-center">
                tidak ada data
                </td>
            </tr>
            <?php    } ?>
            

            </tbody>
        </table>
    </div>

</section>