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
							<h3>123</h3>
							<i class="las la-users" id="icon"></i>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="value_card card_2">
							<p>Computer Science</p>
							<h3>123</h3>
							<i class='las la-users' id="icon"></i>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="value_card card_3">
							<p>Information Systems</p>
							<h3>123</h3>
							<i class="las la-users" id="icon"></i>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="value_card card_4">
							<p>Computer Network</p>
							<h3>123</h3>
							<i class='las la-users' id="icon"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="graph_sec">
				<div class="row">
					<div class="col-lg-12">
						<div class="graph_sec_2 card">
							<div class="card-header">
								<p><strong>Data tables</strong></p>
							</div>
							<div class="card-body">

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
			                        <!-- <th>Photo</th> -->
			                        <th style="width: 100px;">Aksi</th>
			                      </tr>
			                    </thead>
			                    <tbody>
			                      	<?php $num = 1 ?>
			                      	<?php foreach ($students as $student): ?>
			                      <tr>
			                        <td><?= $num++; ?></td>
			                        <td><?= $student['nim']; ?></td>
			                        <td><?= $student['name']; ?></td>
			                        <td><?= $student['email']; ?></td>
			                        <td><?= $student['major']; ?></td>
			                        <td><?= $student['university']; ?></td>
			                        <!-- <td><?= $student['photo']; ?></td> -->
			                        <td>
			                        	-
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