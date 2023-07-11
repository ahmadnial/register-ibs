<?php include 'template/header.php'; ?>
<!-- Theme style -->
<link rel="stylesheet" href="dashboard/dist/css/adminlte.min.css">
<link rel="stylesheet" href="dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="css/sweetalert2.min.css">
<link rel="stylesheet" href="css/sweetalert2.css">
<script src="js/ajax.jquery.min"></script>
<!-- dropzonejs -->
<link rel="stylesheet" href="dashboard/plugins/dropzone/min/dropzone.min.css">
<!-- BS Stepper -->
<link rel="stylesheet" href="dashboard/plugins/bs-stepper/css/bs-stepper.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="dashboard/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="dashboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

<!-- <div class="content-wrapper"> -->

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <!-- <h1>Dashboardnya Bu kesekretariatan</h1> -->
      </div>
      <div class="col-sm">
        <ol class="breadcrumb float-sm-right">
          <!-- <li class="breadcrumb-item"><a href="#">Soon</a></li>
          <li class="breadcrumb-item active">Soon</li> -->
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- /.card-header -->
        <div class="card">
          <div class="card-header bg-purple">
            <h3 class="card-title"> <i class="fa fa-table"></i> Rekap Register Operasi</h3>
          </div>
          <!-- /.card-header -->

          <div class="container-fluid">
            <form action="" method="post">
              <div class="form-gruop mb-3 mt-3">
                <div class="form-inline">
                  <input type="date" class="form-control  mr-1" name="start" value="" />
                  <a>s/d</a>
                  <input type="date" class="form-control ml-1" name="end" value="" />
                  <!-- <button type="submit" name="cari" class="btn btn-primary ml-3">Search</button> -->

                  <div class="form-gruop  col-5">
                    <!-- <label for="" class="form-label">Pilih Layanan/Unit/Instalasi</label> -->
                    <div class="form-inline">
                      <!-- <select class="custom-select" name="keterangan" required>
                              <option selected>--Choose--</option>
                              <option value="1">Belum Terisi</option>
                              <option value="">Sudah Terisi</option>
                            </select> -->
                      <button type="submit" name="cari" class="btn btn-success"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Jam Mulai</th>
                  <th>Jam Selesai</th>
                  <th>Lama</th>
                  <th>No RM</th>
                  <th>Nama</th>
                  <th>Umur</th>
                  <th>Jaminan</th>
                  <th>Diag. Pre OP</th>
                  <th>Tindakan OP</th>
                  <th>Diag. pasca OP</th>
                  <th>Penandaan Lokasi</th>
                  <th>Teknik Anestesi</th>
                  <!-- <th>Konversi Tindakan Anestesi</th>
                  <th>Komplikasi Anestesi</th> -->
                  <th>dr.Operator</th>
                  <th>dr.Anestesi</th>
                  <th>Penata Anestesi</th>
                  <th>&nbsp;&nbsp;&nbsp;TIM &nbsp;&nbsp;&nbsp;&nbsp;</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "conn.php";

                if (isset($_POST['cari'])) {
                  $start = $_POST['start'];
                  $end = $_POST['end'];
                  // $ket = $_POST['keterangan'];

                  $sql = " SELECT * FROM register_ibs where tanggal between '$start' and '$end' ";
                  $no = 1;
                  $query = sqlsrv_query($conn, $sql) or die(sqlsrv_errors());;
                  while ($data = sqlsrv_fetch_array($query)) {
                ?>
                    <tr>
                      <td><?php echo $no++; ?></td>

                      <td><?php echo $data['tanggal']; ?></td>
                      <td><?php echo $data['jam_mulai']; ?></td>
                      <td><?php echo $data['jam_selesai']; ?></td>
                      <td><?php echo $data['durasi_jam']; ?></td>
                      <td><?php echo $data['no_rm']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['umur']; ?></td>
                      <td><?php echo $data['jaminan']; ?></td>
                      <td><?php echo $data['diagnosa_pre']; ?></td>
                      <td><?php echo $data['tindakan']; ?></td>
                      <td><?php echo $data['diagnosa_pasca']; ?></td>
                      <td><?php echo $data['penandaan_lokasi']; ?></td>
                      <td><?php echo $data['teknik_anestesi']; ?></td>
                    
                      <td><?php echo $data['dr_operator']; ?></td>
                      <td><?php echo $data['dr_anestesi']; ?></td>
                      <td><?php echo $data['penata_anestesi']; ?></td>
                      <td><?php echo $data['tim']; ?></td>

                      <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ppiModal<?php echo $data['id']; ?>">Edit</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?php echo $data['id']; ?>">Del</button>
                      </td>
                    </tr>
                    <!-- MODAL -->
                    <div class="modal fade" id="ppiModal<?php echo $data['id']; ?>">

                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="Label">Edit Data</h5>
                            <!-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> -->
                          </div>
                          <div class="modal-body">
                            <form action="" method="post" name="" id="">
                              <input type="hidden" id="" name="id" value="<?php echo $data['id']; ?>">
                              <div class="f-group">
                                <!-- <div class="f-group">
                                        <label for="">Kode Laporan</label>
                                        <input type="text" class="form-control mb-3" name="kd_laporan" placeholder="Kosongkan Saja!">
                                    </div> -->
                                <label for="">Tanggal</label>
                                <input type="date" id="" name="tgl" placeholder="" class="form-control" required value="<?php echo $data['tanggal']; ?>">
                              </div>
                              <div class="f-group mt-2">
                                <!-- <div class="f-group">
                                        <label for="">Kode Laporan</label>
                                        <input type="text" class="form-control mb-3" name="kd_laporan" placeholder="Kosongkan Saja!">
                                    </div> -->
                                <label for="">No.RM</label>
                                <input type="text" id="" name="rm" placeholder="Nomor Rekam Medis 6 digit terakhir" class="form-control" required value="<?php echo $data['no_rm']; ?>">
                              </div>

                              <div class="mb-3 mt-3">
                                <label for="alamat" class="form-label">Nama</label>
                                <textarea class="form-control" name="nama" id="" rows="2" required="Silahkan lengkapi dulu!" placeholder="Nama Pasien"><?php echo $data['nama']; ?></textarea>
                              </div>
                              <div class="mb-3 mt-3">
                                <label for="alamat" class="form-label">Umur</label>
                                <textarea class="form-control" name="umur" id="" rows="1" placeholder="Tuliskan Umur"><?php echo $data['umur']; ?></textarea>
                              </div>
                              <div class="mb-3 mt-3">
                                <label for="" class="form-label">Jaminan</label>
                                <select class="form-control" name="jaminan">
                                  <option value="-">--Choose--</option>
                                  <option value="JKN">JKN</option>
                                  <option value="Jasa Raharja">Jasa Raharja</option>
                                  <option value="Jampersal">Jampersal</option>
                                  <option value="Jamkesos">Jamkesos</option>
                                  <option value="Umum">Mbayar Dewe</option>
                                </select>
                              </div>
                              <div class="mb-3 mt-3">
                                <label for="alamat" class="form-label">Diagnosa Pre OP</label>
                                <!-- <textarea class="form-control" name="diag_pre_op" id="" rows="2" placeholder="Tuliskan Diagnosa Pre OP"></textarea> -->
                                <input type="text" id="" name="diag_pre_op" placeholder="Tuliskan Diagnosa Pre OP" class="form-control" required value="<?php echo $data['diagnosa_pre']; ?>">
                              </div>
                              <div class="mb-3 mt-3">
                                <label for="alamat" class="form-label">Tindakan OP</label>
                                <input type="text" id="" name="tindakan" placeholder="Tuliskan Tindakan Operasi" class="form-control" required value="<?php echo $data['tindakan']; ?>">
                                <!-- <textarea class="form-control" name="tindakan" id="" rows="2" placeholder="Tuliskan Tindakan Operasi"></textarea> -->
                              </div>
                              <div class="mb-3 mt-3">
                                <label for="alamat" class="form-label">Diagnosa Pasca OP</label>
                                <!-- <textarea class="form-control" name="diag_pas_op" id="" rows="2" placeholder="Tuliskan Diagnosa Pasca OP"></textarea> -->
                                <input type="text" id="" name="diag_pas_op" placeholder="Tuliskan Diagnosa Pasca OP" class="form-control" required value="<?php echo $data['diagnosa_pasca']; ?>">
                              </div>
                              <div class="mb-3 mt-3">
                                <label for="" class="form-label">Penandaan Lokasi Operasi</label>
                                <select class="form-control" name="penandaan_lokasi">
                                  <option value="-">--Choose--</option>
                                  <option value="Dilakukan">Dilakukan</option>
                                  <option value="Tidak Dilakukan">Tidak Dilakukan</option>
                                </select>
                              </div>
                              <!-- <div class="mb-3 mt-3">
                                    <label for="alamat" class="form-label">Teknik Anestesi</label>
                                    <textarea class="form-control" name="teknik_anestesi" id="" rows="2" placeholder="Tuliskan Teknik Anestesi"></textarea>
                                </div> -->
                              <div class="mb-3 mt-3">
                                <label for="" class="form-label">Teknik Anestesi</label>
                                <select class="form-control" name="teknik_anestesi">
                                  <option value="-">--Choose--</option>
                                  <option value="Regional Anestesi">Regional Anestesi</option>
                                  <option value="General Anestesi-ETT">General Anestesi - ETT</option>
                                  <option value="General Anestesi-LMA">General Anestesi - LMA</option>
                                  <option value="General Anestesi-TiVa">General Anestesi - TiVa</option>
                                  <option value="General Anestesi-TiVa">General Anestesi - Face Mask</option>
                                  <option value="Lokal Anestesi">Lokal Anestesi</option>
                                </select>
                              </div>
                              <!-- <div class="mb-3 mt-3">
                                    <label for="alamat" class="form-label">Konversi Tindakan Anestesi</label>
                                    <textarea class="form-control" name="konversi_t_a" id="" rows="2" placeholder="Tuliskan Konversi Tindakan Anestesi"></textarea>
                                </div> -->
                              <!-- <div class="mb-3 mt-3">
                                <label for="" class="form-label">Konversi Tindakan Anestesi</label>
                                <select class="form-control" name="konversi_t_a">
                                  <option value="-">--Choose--</option>
                                  <option value="Lokal Anestesi">Lokal Anestesi</option>
                                  <option value="Sedasi Ringan">Sedasi Ringan</option>
                                  <option value="Sedasi Moderat">Sedasi Moderat</option>
                                  <option value="Sedasi Dalam">Sedasi Dalam</option>
                                  <option value="Tidak Dilakukan">Tidak Dilakukan</option>
                                </select>
                              </div> -->
                              <div class="mb-3 mt-3">
                                <label for="alamat" class="form-label">Dokter Operator</label>
                                <select class="form-control" name="dr_operator">
                                  <option value="-">--Choose--</option>
                                  <option value="dr.Aji Pangki,Sp.B">dr.Aji Pangki,Sp.B</option>
                                  <option value="dr.Eko Sumardiyono,SpPD">dr.Eko Sumardiyono,SP.OT</option>
                                  <option value="dr.RADEN SRI TRIYONO,SP.B">dr.Raden Sri Triyono,SP.B</option>
                                  <option value="dr.ANITA ROHMAH, SpOG">dr.Anita Rohmah, SpOG</option>
                                  <option value="dr. Nia Ariasti, Sp.M">dr. Nia Ariasti, Sp.M</option>
                                </select>
                              </div>
                              <div class="mb-3 mt-3">
                                <label for="alamat" class="form-label">Dokter Anestesi</label>
                                <select class="form-control" name="dr_anestesi">
                                  <option value="-">--Choose--</option>
                                  <option value="dr.BINTANG BERLIAN,SP.AN">dr.BINTANG BERLIAN,SP.AN</option>
                                  <option value="dr.BOWO ARDIYANTO,SpAn">dr.BOWO ARDIYANTO,SpAn</option>
                                  <option value="dr.Syaeful Fatah,Sp.An">dr.Syaeful Fatah,Sp.An</option>
                                  <option value="dr.Adi Hidayat,Sp.An">dr.Adi Hidayat,Sp.An</option>
                                  <option value="dr.Dika Rezkiawan Sp.An">dr.Dika Rezkiawan,Sp.An</option>
                                  <option value="-">Tidak ada</option>
                                </select>
                              </div>
                              <div class="mb-3 mt-3">
                                <label for="alamat" class="form-label">Penata Anestesi</label>
                                <textarea class="form-control" name="penata_anestesi" id="" rows="2" placeholder="Tuliskan Penata Anestesi"><?php echo $data['penata_anestesi']; ?></textarea>
                              </div>
                              <!-- <h5>Custom</h5>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Minimal (.select2-danger)</label>
                                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                    </div> -->
                              <!-- <div class="mb-3 mt-3">
                                <label>TIM</label>
                                <div class="select2-purple">
                                  <select class="select2" name="timlist[]" multiple="multiple" data-placeholder="Select a Man" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                    <option value="Yanuar Akmal">Yanuar</option>
                                    <option value="Yunus Heryudono">Yunus</option>
                                    <option value="Arlinda Putri">Arlinda</option>
                                    <option value="Rizki Eko">Rizki</option>
                                    <option value="Andri RSUD">Andri</option>
                                    <option value="Brian RSUD">Brian</option>
                                    <option value="Edi RSUD">Edi</option>
                                  </select>
                                </div>
                              </div> -->
                              <div class="f-group">
                                <label for="">Jam Mulai</label>
                                <input type="time" id="" name="start_time" placeholder="" class="form-control" required value="<?php echo $data['jam_mulai']; ?>">
                              </div>
                              <div class="f-group mt-3 mb-3">
                                <label for="">Jam Selesai</label>
                                <input type="time" id="" name="end_time" placeholder="" class="form-control" required value="<?php echo $data['jam_selesai']; ?>">
                              </div>
                              <div class="f-group mt-3 mb-3">
                                <label for="">Durasi</label>
                                <input type="text" id="" name="durasi" placeholder="Tuliskan Durasi mu!" class="form-control" required value="<?php echo $data['durasi_jam']; ?>">
                              </div>

                              <button type="submit" name="updatecok" id="update" class="btn btn-success mt-3 ml-2 float-right">Update</button>
                              <button type="button" class="btn btn-danger mt-3 float-right" data-dismiss="modal">Close</button>
                          </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="del<?php echo $data['id']; ?>">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="Label">Konfirmasi dulu, Serius mau di Hapus <?php echo $data['nama']; ?> no RM : <?php echo $data['no_rm']; ?>?</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <body>
                              <form action="" method="post">
                                <input type="hidden" name="id_del" value="<?php echo $data['id']; ?>">
                                <button type="submit" name="del" class="btn btn-success">Ya dong</button>
                                <button type="button" class="btn btn-danger ml-1" data-dismiss="modal">Gajadi</button>
                              </form>
                            </body>
                          </div>
                        </div>
                        <!-- <button type="button" class="btn btn-danger mt-3 float-right" data-dismiss="modal">Close</button> -->
                        <div class="modal-footer">
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                <?php } ?>
                <?php include 'delete.php'; ?>
                <?php include 'edit.php' ?>
                </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="float-left mb-2 d-none d-sm-inline">
    <strong>Copyright &copy; 2022 <a href="">IT-RSNR</a></strong> | Anything you want.
</footer>


<!-- jQuery -->
<!-- jQuery -->
<script src="dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="dashboard/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="dashboard/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="dashboard/plugins/moment/moment.min.js"></script>
<script src="dashboard/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="dashboard/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="dashboard/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="dashboard/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="dashboard/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="dashboard/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="dashboard/dist/js/adminlte.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="dashboard/plugins/jszip/jszip.min.js"></script>
<script src="dashboard/plugins/pdfmake/pdfmake.min.js"></script>
<script src="dashboard/plugins/pdfmake/vfs_fonts.js"></script>
<script src="dashboard/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="dashboard/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- BS-Stepper -->
<script src="dashboard/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="dashboard/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="dashboard/dist/js/adminlte.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="js/sweetalert2.all.js"></script>
<script src="js/autoDate.js"></script>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>