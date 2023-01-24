<?= $this->extend('admin/layout') ?>

<?= $this->section('page') ?>
    User Page
<?= $this->endSection() ?>

<?= $this->section('title') ?>
    Data User
<?= $this->endSection() ?>

<?= $this->section('isi') ?>
<div class="row">
    <div class="col-sm-12">
    <div class="card-header">
        <button type="submit" class="btn btn-primary" onclick="window.location='<?php echo site_url('user/formtambah'); ?>'">Tambah Data</button>
    </div>
        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
        <thead>
            <tr>
                <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Username</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Password</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Last Login</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
            </tr>
        </thead>
            <tbody>
                <?php
                    foreach($datauser as $row):
                ?>
                <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0"><?= $row['id']; ?></td>
                    <td><?= $row['username']; ?></td>
                    <td><?= $row['password']; ?></td>
                    <td><?= $row['last_login']; ?></td>
                    <td>
                        <button type="button" class="btn btn-block btn-success btn-sm">Edit</button>
                        <button type="button" class="btn btn-block btn-danger btn-sm">Delete</button>
                    </td>
                </tr>   
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>

