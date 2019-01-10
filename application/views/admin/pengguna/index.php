<div class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-warning">
          <div class="row">
            <div class="col-md-9">
              <h4 class="card-title">Daftar Pengguna</h4>
              <p class="card-category">menampilkan daftar dan detail tentang pengguna</p>
            </div>
            <div class="col-md-3">
              <a href="<?php echo base_url('admin/pengguna/create/') ?>" rel="tooltip" title="Tambah" class="btn btn-primary">
                <i class="material-icons">add</i>
              </a>
              <a href="<?php echo base_url('admin/pengguna/export/') ?>" rel="tooltip" title="Cetak Laporan" class="btn btn-primary">
                <i class="material-icons">print</i>
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead class="text-primary">
                <tr>
                  <th class="th-sm">No
                  </th>
                  <th class="th-sm">Nama Sekolah
                  </th>
                  <th class="th-sm">Username
                  </th>
                  <th class="th-sm">Email
                  </th>
                  <th class="th-sm">Reset Password
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($pengguna as $key => $value): ?>
                  <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $value->nama_sekolah ?></td>
                    <td><?php echo $value->username ?></td>
                    <td><?php echo $value->email ?></td>
                    <td><a href="<?php echo site_url('admin/pengguna/resetPass/').$value->username ?>">
                      <button type="button" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Mereset Password Akun Ini?')">Reset Password</button></td></a>
                  </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot class="text-primary">
                <tr>
                  <th>No
                  </th>
                  <th>Nama Sekolah
                  </th>
                  <th>Username
                  </th>
                  <th>Password
                  </th>
                  <th>Email
                  </th>
                  <th>Reset Password
                  </th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Informasi Sekolah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-content">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function openModal(id) {
  $.ajax({
    url:"<?php echo base_url('admin/pengguna/get/'); ?>"+id,
    method: 'post',
    data:null
  }).done(function(data) {
    $('#modal-content').html(data);
    $('#exampleModalCenter').modal('show');
  });
}
</script>
