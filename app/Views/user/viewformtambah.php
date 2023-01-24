<?= $this->extend('admin/layout') ?>

<?= $this->section('page') ?>
    User Page
<?= $this->endSection() ?>

<?= $this->section('title') ?>
    Data User
<?= $this->endSection() ?>

<?= $this->section('isi') ?>
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Tambah Data User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?= form_open('user/simpandata') ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              <?= form_close(); ?>
            </div>
<?= $this->endSection() ?>

