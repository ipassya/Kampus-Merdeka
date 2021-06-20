
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-3">
    <div class="container container-table">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <!-- Container-fluid -->
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6 header-title">
            <h1>Kehadiran</h1>
          </div>
          <div class="col-sm-6 header-link">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="<?= base_url('admin/dashboard')?>">Admin</a></li>
              <li class="breadcrumb-item active">Kehadiran</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Content -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <?php if ($this->session->flashdata('message') != null): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('message'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php else: ?>
              <?php endif; ?>
              <!-- Card -->
              <div class="card">
                <div class="card-header card-header-attandance">
                  <h3 class="card-title">Data Kehadiran</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-bordered" id="tables">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Kelas</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th style="width: 100px;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($attendance as $data): ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['nisn']; ?></td>
                        <td><?= $data['kelas']; ?></td>
                        <td><?= $data['jam_masuk']; ?></td>
                        <td><?= $data['jam_keluar']; ?></td>
                        <td><?= $data['tanggal']; ?></td>
                        <td>
                            <?php $color; ?>
                          <?php 
                            if ($data['status'] == 1) {
                              $color = "btn btn-outline-success";
                            } else if ($data['status'] == 2) {
                              $color = "btn btn-outline-warning";
                            } else if ($data['status'] == 3) {
                              $color = "btn btn-outline-primary";
                            } else if ($data['status'] == 4) {
                              $color = "btn btn-outline-info";
                            } else if ($data['status'] == 5) {
                              $color = "btn btn-outline-danger";
                            }
                           ?>
                          <button class="<?= $color ?>" style="border-radius: 50%; border-width: 3px; font-size: 10px;" >
                            <strong>
                          <?php 
                            if ($data['status'] == 1) {
                              echo "Hadir";
                            } else if ($data['status'] == 2) {
                              echo "Terlambat";
                            } else if ($data['status'] == 3) {
                              echo "Sakit";
                            } else if ($data['status'] == 4) {
                              echo "Izin";
                            } else if ($data['status'] == 5) {
                              echo "Alfa";
                            }
                           ?>
                           </strong>
                           </button>
                        </td>
                        <td>
                          <!-- <a onclick="return confirm('Hapus data ini?')" href="<?= base_url('admin/attendance/delete/' . $data['id_kehadiran']) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> -->
                          <a href="#confirmDelete" onclick="$('#confirmDelete #formDelete').attr('action', '<?= base_url('admin/attendance/delete/' . $data['id_kehadiran']); ?>')" class="btn btn-danger btn-sm" data-toggle="modal"><i class='bx bxs-trash' ></i></a>&nbsp;
                          <a 
                              class="btn btn-warning btn-sm"
                              href="javascript:;"
                              data-id="<?= $data['id_kehadiran']; ?>"
                              data-nama="<?= $data['nama']; ?>"
                              data-toggle="modal" data-target="#edit-data">
                              <i class='bx bxs-edit' ></i>
                          </a>&nbsp;
                          <?php if ($data['status'] == 1 || $data['status'] == 2): ?>
                            <a 
                              class="btn btn-info btn-sm"
                              href="javascript:;"
                              data-id="<?= $data['id_kehadiran']; ?>"
                              data-fotomasuk="<?= base_url('assets/img/data-of-attendance/present/' . $data['foto_masuk']); ?>"
                              data-fotokeluar="<?= base_url('assets/img/data-of-attendance/present/' . $data['foto_keluar']); ?>"
                              data-toggle="modal" data-target="#capture-present">
                              <i class='bx bx-info-circle' ></i>
                            </a>
                          <?php else: ?>
                            <a 
                              class="btn btn-info btn-sm"
                              href="javascript:;"
                              data-id="<?= $data['id_kehadiran']; ?>"
                              data-fotosurat="<?= base_url('assets/img/data-of-attendance/absent/' . $data['foto_surat']); ?>"
                              data-toggle="modal" data-target="#capture-absent">
                              <i class='bx bx-info-circle' ></i>
                            </a>
                          <?php endif ?>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                      <tr>
                       <th>#</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Kelas</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">

                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </div>
      <!-- /.content -->
    </div>
  </div>
  <!-- /.Content Wrapper. Contains page content -->
  
<!-- Modal Confirm Delete -->
<div id="confirmDelete" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header flex-column">
        <div class="icon">
          <i class="ion ion-alert"></i>
        </div>    
        <h4 class="modal-title w-100">Are you sure?</h4>  
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p>Hapus Data Ini?</p>
      </div>
      <div class="modal-footer justify-content-center">
        <form id="formDelete" action="" method="post">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div> 
<!-- /Modal Confirm Delete -->

<!-- Modal Ubah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Ubah Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <form class="form-horizontal" action="<?= base_url('admin/attendance/update'); ?>" method="post" role="form">
        <div class="modal-body">
          <p>Update kehadiran: <span id="nama"></span></p>
          <input type="hidden" id="id" name="id">
          <div class="form-group">
            <label for="status">Status</label>
              <select class="form-control" id="status" name="status">
                <option value="1">Hadir</option>
                <option value="2">Terlambat</option>
                <option value="3">Sakit</option>
                <option value="4">Izin</option>
                <option value="5">Alfa</option>
              </select>
          </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END Modal Ubah -->

<!-- Modal Capture Kehadiran -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="capture-present" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-warning">
          <h4 class="modal-title">Capture Kehadiran</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <form class="form-horizontal" action="<?= base_url('admin/attendance/update'); ?>" method="post" role="form">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 ml-auto justify-content-center align-items-stretch">
              <div class="text-center">
                <h5>Capture Masuk</h5>
              </div>
              <!-- <img src="" id="fotomasuk" alt="profile" style="max-width: 220px;"> -->
              <img id="fotomasuk" src="" alt="profile" style="max-width: 220px;">
            </div>
            <div class="col-md-6 ml-auto justify-content-center align-items-stretch">
              <div class="text-center">
                <h5>Capture Keluar</h5>
              </div>
              <img id="fotokeluar" src="" alt="profile" style="max-width: 220px;">
            </div>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Kembali</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Capture Kehadiran -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="capture-absent" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-warning">
          <h4 class="modal-title">Capture Kehadiran</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <form class="form-horizontal" action="<?= base_url('admin/attendance/update'); ?>" method="post" role="form">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 ml-auto justify-content-center align-items-stretch">
              <div class="text-center">
                <h5>Capture Surat</h5>
              </div>
              <img class="" id="fotosurat" src="" alt="profile" style="max-width: 220px;">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Kembali</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal Capture Kehadiran -->
 
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama').html(div.data('nama'));
        });

        $('#capture-present').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#fotomasuk').attr("src",div.data('fotomasuk'));
            modal.find('#fotokeluar').attr("src",div.data('fotokeluar'));
        });

        $('#capture-absent').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#fotosurat').attr("src",div.data('fotosurat'));
        });
    });
</script>


  <script>
    $(document).ready(function() {
        $('#tables').DataTable({
          dom: 'Bfrtip',
          buttons: [
              {
                extend:   'excelHtml5',
                text:   '<i class="far fa-file-excel"></i>',
                tittleAttr: 'Export to Excel',
                exportOptions: {
                    columns: ':visible'
                }
              },
              {
                extend:   'pdf',
                text:   '<i class="far fa-file-pdf"></i>',
                tittleAttr: 'Export to PDF',
                exportOptions: {
                    columns: ':visible'
                }
              },
              {
                extend:   'print',
                text:   '<i class="bx bxs-printer"></i>',
                tittleAttr: 'Export to Print',
                exportOptions: {
                    columns: ':visible'
                }
              },
              {
                extend:   'colvis',
                text:   '<i class="bx bxs-customize"></i>'
              }
          ],
          "columnDefs": [
            {
                columns: [0,1,2,3,6,7],
                targets: -1,
                visible: false
            }
            ],
          initComplete: function () {
              this.api().columns([1,2,3,6,7]).every( function () {
                  var column = this;
                  var select = $('<select><option value=""></option></select>')
                      .appendTo( $(column.footer()).empty() )
                      .on( 'change', function () {
                          var val = $.fn.dataTable.util.escapeRegex(
                              $(this).val()
                          );
   
                          column
                              .search( val ? '^'+val+'$' : '', true, false )
                              .draw();
                      } );
   
                  column.data().unique().sort().each( function ( d, j ) {
                      select.append( '<option value="'+d+'">'+d+'</option>' )
                  } );
              } );
          }

        });
    } );
  </script>