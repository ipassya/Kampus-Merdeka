<div class="content-wrapper">
	<div class="graph_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="user_name">
						<h2>Welcome, <strong>Admin</strong></h2>
					</div>
				</div>
			</div>
			<div class="value_cards_sec">
				<div class="row">
					<div class="col-lg-3">
						<div class="value_card card_1">
							<p>Total Students</p>
							<h3><?= $count['totalStudents']; ?></h3>
							<i class="las la-users" id="icon"></i>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="value_card card_2">
							<p>Computer Science</p>
							<h3><?= $count['computerScience']; ?></h3>
							<i class='las la-users' id="icon"></i>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="value_card card_3">
							<p>Information Systems</p>
							<h3><?= $count['informationSystems']; ?></h3>
							<i class="las la-users" id="icon"></i>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="value_card card_4">
							<p>Computer Network</p>
							<h3><?= $count['computerNetwork']; ?></h3>
							<i class='las la-users' id="icon"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="graph_sec">
				<div class="row">
					<div class="col-lg-12">
						<div class="graph_sec_2 card">
							<!-- <div class="card-header">
								<p><strong>Data tables</strong></p>
							</div> -->
							<div class="card-body">

							<!-- Create Student -->
		                	<div class="tooltip-tambahdata mb-2">
		                    	<a class="btn btn-primary" data-toggle="modal" data-target=".modal-button"><i class="fas fa-plus-circle"></i></a>
		                    	<span class="tooltiptext-tambahdata">Add Data</span>
		                  	</div>
		                  	<!-- End create -->

			                <!-- /.table -->
			                <div class="table-responsive">
			                  <table class="table table-bordered" id="tables">
			                    <thead>
			                      <tr>
			                        <th>#</th>
			                        <th>NIM</th>
			                        <th>Name</th>
			                        <th>Email</th>
			                        <th>Major</th>
			                        <th>University</th>
			                        <th style="width: 110px;">Aksi</th>
			                      </tr>
			                    </thead>
			                    <tbody>
			                      	<?php $num = 1; ?>
			                      	<?php foreach ($students as $student): ?>
				                      <tr>
				                        <td><?= $num++; ?></td>
				                        <td><?= $student['nim']; ?></td>
				                        <td><?= $student['name']; ?></td>
				                        <td><?= $student['email']; ?></td>
				                        <td><?= $student['major']; ?></td>
				                        <td><?= $student['university']; ?></td>
				                        <td>
				                        <?php if ($student['university'] == 'UPN'): ?>
				                            <a href="#confirmDelete" onclick="$('#confirmDelete #formDelete').attr('action', '<?= base_url('home/deleteUPN/' . $student['nim']); ?>')" class="btn btn-danger btn-sm" data-toggle="modal"><i class='bx bxs-trash'></i></a>&nbsp;
				                            <a 
				                              class="btn btn-warning btn-sm"
				                              href="javascript:;"
				                              data-nim="<?= $student['nim']; ?>"
				                              data-name="<?= $student['name']; ?>"
				                              data-email="<?= $student['email']; ?>"
				                              data-major="<?= $student['major']; ?>"
				                              data-university="<?= $student['university']; ?>"
				                              data-toggle="modal" data-target="#edit-data-upn">
				                              <i class='bx bxs-edit' ></i>
				                            </a>
				                        <?php elseif ($student['university'] == 'Oxford'): ?>
				                      		<a href="#confirmDelete" onclick="$('#confirmDelete #formDelete').attr('action', '<?= base_url('home/deleteOxford/' . $student['nim']); ?>')" class="btn btn-danger btn-sm" data-toggle="modal"><i class='bx bxs-trash'></i></a>&nbsp;
				                            <a 
				                              class="btn btn-warning btn-sm"
				                              href="javascript:;"
				                              data-nim="<?= $student['nim']; ?>"
				                              data-name="<?= $student['name']; ?>"
				                              data-email="<?= $student['email']; ?>"
				                              data-major="<?= $student['major']; ?>"
				                              data-university="<?= $student['university']; ?>"
				                              data-toggle="modal" data-target="#edit-data-oxford">
				                              <i class='bx bxs-edit' ></i>
				                            </a>
				                        <?php endif; ?>
				                        </td>
				                      </tr>
			                      	<?php endforeach ?>
			                    </tbody>
			                  </table>
			                </div>
			              <!-- /.table -->

							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="copyright_txt">
				<p>All rights reserved. Copyright © 2021, <strong>Kampus Merdeka</strong></p>
			</div>
		</div>
	</div>
</div>


<!-- Modal Add Data -->
<div class="modal fade modal-button" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <a type="button" class="btn btn-primary m-2" data-toggle="modal" data-target="#add-upn" data-dismiss="modal"><i class="fas fa-plus-circle"></i> Add Data UPN</a>
        <a type="button" class="btn btn-warning m-2" data-toggle="modal" data-target="#add-oxford" data-dismiss="modal"><i class="fas fa-plus-circle"></i> Add Data Oxford</a>
    </div>
  </div>
</div>
<!-- End modal add data -->


<!-- Modal Add data UPN -->
<div class="modal fade" id="add-upn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLabel">Add Data UPN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      	<form id="form-upn" action="<?= base_url('home/addUPN'); ?>" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
              </div>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="major">Major</label>
                  <select class="form-control" id="major" name="major">
                    <option>Computer Science</option>
                    <option>Information Systems</option>
                    <option>Computer Network</option>
                  </select>
              </div>
            </div>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" form="form-upn" class="btn btn-info">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Add data UPN -->


<!-- Modal Add data Oxford -->
<div class="modal fade" id="add-oxford" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLabel">Add Data Oxford</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      	<form id="form-oxford" action="<?= base_url('home/addOxford'); ?>" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
              </div>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="major">Major</label>
                  <select class="form-control" id="major" name="major">
                    <option>Computer Science</option>
                    <option>Information Systems</option>
                    <option>Computer Network</option>
                  </select>
              </div>
            </div>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" form="form-oxford" class="btn btn-info">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Add data Oxford -->


<!-- Modal Confirm Delete -->
<div id="confirmDelete" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header flex-column bg-info">
        <div class="icon">
          <i class="ion ion-alert"></i>
        </div>    
        <h4 class="modal-title w-100">Are you sure?</h4>
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

<!-- Modal Update UPN -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data-upn" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-warning">
          <h4 class="modal-title">Update Data UPN</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <form class="form-horizontal" action="<?= base_url('home/UpdateUPN'); ?>" method="post" role="form">
        <div class="modal-body">
          <div class="card-body">
          	<input type="text" id="id-nim" name="id-nim" hidden>
            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="major">Major</label>
                <select class="form-control" id="major" name="major">
                  <option>Computer Science</option>
                  <option>Information Systems</option>
                  <option>Computer Network</option>
                </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel&nbsp;</button>
            <button class="btn btn-info" type="submit"> Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END Modal Update UPN -->

<!-- Modal Update Oxford -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data-oxford" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-warning">
          <h4 class="modal-title">Update Data Oxford</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <form class="form-horizontal" action="<?= base_url('home/UpdateOxford'); ?>" method="post" role="form">
        <div class="modal-body">
          <div class="card-body">
          	<input type="text" id="id-nim" name="id-nim" hidden>
            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="major">Major</label>
                <select class="form-control" id="major" name="major">
                  <option>Computer Science</option>
                  <option>Information Systems</option>
                  <option>Computer Network</option>
                </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel&nbsp;</button>
            <button class="btn btn-info" type="submit"> Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END Modal Update Oxford -->



<script>
    $(document).ready(function() {
        $('#edit-data-upn').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal = $(this)

            modal.find('#nim').attr("value",div.data('nim'));
            modal.find('#id-nim').attr("value",div.data('nim'));
            modal.find('#email').attr("value",div.data('email'));
            modal.find('#name').attr("value",div.data('name'));
            modal.find('#major').attr("value",div.data('major'));
            modal.find('#university').attr("value",div.data('university'));
            // modal.find('#name').html(div.data('name'));
        });

        $('#edit-data-oxford').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal = $(this)

            modal.find('#nim').attr("value",div.data('nim'));
            modal.find('#id-nim').attr("value",div.data('nim'));
            modal.find('#email').attr("value",div.data('email'));
            modal.find('#name').attr("value",div.data('name'));
            modal.find('#major').attr("value",div.data('major'));
            modal.find('#university').attr("value",div.data('university'));
        });
    });
</script>