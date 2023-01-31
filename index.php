<?php include 'template/header.php';
include "proses.php"; ?>


<!-- <header class="container mt-2 text-center ">

    <h1>Instalasi Bedah Sentral RS Nur Rohmah</h1>

</header> -->

<div class="tab-content" id="custom-tabs-three-tabContent">
    <div class="tab-pane fade show active" id="custom-tabs-three-form" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
        <div class="container">
            <div class="card" style="width: auto;">
                <div class="row">
                    <div class="card-body">
                        <div class="col-lg col-sm">
                            <form method="POST">
                                <h5 for="" class="bg-warning col text-white text-center shadow-sm p-2 bg-body rounded mt-2">Register Pasien IBS</h5>
                                <div class="f-group">
                                    <!-- <div class="f-group">
                                        <label for="">Kode Laporan</label>
                                        <input type="text" class="form-control mb-3" name="kd_laporan" placeholder="Kosongkan Saja!">
                                    </div> -->
                                    <label for="">Tanggal</label>
                                    <input type="date" id="" name="tgl" placeholder="" class="form-control tgl_now" required>
                                </div>
                                <div class="f-group mt-2">
                                    <!-- <div class="f-group">
                                        <label for="">Kode Laporan</label>
                                        <input type="text" class="form-control mb-3" name="kd_laporan" placeholder="Kosongkan Saja!">
                                    </div> -->
                                    <label for="">No.RM</label>
                                    <input type="number" id="" name="rm" placeholder="Nomor Rekam Medis 6 digit terakhir" class="form-control" required>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="alamat" class="form-label">Nama</label>
                                    <textarea class="form-control" name="nama" id="" rows="2" required="Silahkan lengkapi dulu!" placeholder="Nama Pasien"></textarea>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="alamat" class="form-label">Umur</label>
                                    <textarea class="form-control" name="umur" id="" rows="1" placeholder="Tuliskan Umur" required>Tahun</textarea>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="" class="form-label">Jaminan</label>
                                    <select class="form-control" name="jaminan" required>
                                        <option value="-">--Choose--</option>
                                        <option value="JKN">JKN</option>
                                        <option value="BPJS-TK">BPJS-TK</option>
                                        <option value="Jasa Raharja">Jasa Raharja</option>
                                        <option value="Jampersal">Jampersal</option>
                                        <option value="Jamkesos">Jamkesos</option>
                                        <option value="Umum">Mbayar Dewe</option>
                                    </select>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="alamat" class="form-label">Diagnosa Pre OP</label>
                                    <!-- <textarea class="form-control" name="diag_pre_op" id="" rows="2" placeholder="Tuliskan Diagnosa Pre OP"></textarea> -->
                                    <input type="text" id="" name="diag_pre_op" placeholder="Tuliskan Diagnosa Pre OP" class="form-control" required>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="alamat" class="form-label">Tindakan OP</label>
                                    <input type="text" id="" name="tindakan" placeholder="Tuliskan Tindakan Operasi" class="form-control" required>
                                    <!-- <textarea class="form-control" name="tindakan" id="" rows="2" placeholder="Tuliskan Tindakan Operasi"></textarea> -->
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="alamat" class="form-label">Diagnosa Pasca OP</label>
                                    <!-- <textarea class="form-control" name="diag_pas_op" id="" rows="2" placeholder="Tuliskan Diagnosa Pasca OP"></textarea> -->
                                    <input type="text" id="" name="diag_pas_op" placeholder="Tuliskan Diagnosa Pasca OP" class="form-control" required>
                                </div>
                                <!-- <div class="mb-3 mt-3">
                                    <label for="alamat" class="form-label">Teknik Anestesi</label>
                                    <textarea class="form-control" name="teknik_anestesi" id="" rows="2" placeholder="Tuliskan Teknik Anestesi"></textarea>
                                </div> -->
                                <div class="mb-3 mt-3">
                                    <label for="" class="form-label">Penandaan Lokasi Operasi</label>
                                    <select class="form-control" name="penandaan_lokasi" required>
                                        <option value="-">--Choose--</option>
                                        <option value="Dilakukan">Dilakukan</option>
                                        <option value="Tidak Dilakukan">Tidak Dilakukan</option>
                                        <option value="Tidak Berlaku(organ tunggal)">Tidak Berlaku(organ tunggal)</option>
                                    </select>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="" class="form-label">Teknik Anestesi</label>
                                    <select class="form-control" name="teknik_anestesi" required>
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
                                <div class="mb-3 mt-3">
                                    <label for="" class="form-label">Konversi Tindakan Anestesi</label>
                                    <select class="form-control" name="konversi_t_a" required>
                                        <option value="-">--Choose--</option>
                                        <option value="Lokal Anestesi">Lokal Anestesi</option>
                                        <option value="Sedasi Ringan">Sedasi Ringan</option>
                                        <option value="Sedasi Moderat">Sedasi Moderat</option>
                                        <option value="Sedasi Dalam">Sedasi Dalam</option>
                                        <option value="Tidak Dilakukan">Tidak Dilakukan</option>
                                        <!-- <option value="General Anestesi">General Anestesi</option> -->
                                        <!-- <option value="-">Tidak ada</option> -->
                                    </select>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="" class="form-label">komplikasi Anestesi (Overdosis,Reaksi Anestesi,Salah Penempatan ETT)</label>
                                    <!-- <textarea class="form-control" name="diag_pas_op" id="" rows="2" placeholder="Tuliskan Diagnosa Pasca OP"></textarea> -->
                                    <input type="text" id="" name="komplikasi" placeholder="Ada atau Tidak" class="form-control" required>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="alamat" class="form-label">Dokter Operator</label>
                                    <select class="form-control" name="dr_operator" required>
                                        <option value="">--Select Me--</option>
                                        <option value="dr.Aji Pangki,Sp.B">dr.Aji Pangki,Sp.B</option>
                                        <option value="dr.Eko Sumardiyono,Sp.OT">dr.Eko Sumardiyono,SP.OT</option>
                                        <option value="dr.RADEN SRI TRIYONO,SP.B">dr.Raden Sri Triyono,SP.B</option>
                                        <option value="dr.ANITA ROHMAH, SpOG">dr.Anita Rohmah, SpOG</option>
                                        <option value="dr. Nia Ariasti, Sp.M">dr. Nia Ariasti, Sp.M</option>
                                    </select>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="alamat" class="form-label">Dokter Anestesi</label>
                                    <select class="form-control" name="dr_anestesi" required>
                                        <option value="">--Select Me--</option>
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
                                    <select class="form-control" name="penata_anestesi" required>
                                        <option value="">--Select Me--</option>
                                        <option value="Gavan,Amd.Kep">Gavan,Amd.Kep</option>
                                        <option value="Isna">Isna</option>
                                        <option value="-">Tidak ada</option>
                                    </select>
                                </div>
                                <!-- <div class="mb-3 mt-3">
                                    <label for="alamat" class="form-label">Penata Anestesi</label>
                                    <textarea class="form-control" name="penata_anestesi" id="" rows="2" placeholder="Tuliskan Penata Anestesi">Gavan,Amd.Kep</textarea>
                                </div> -->
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
                                <div class="mb-3 mt-3">
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
                                </div>
                                <div class="f-group">
                                    <label for="">Jam Mulai</label>
                                    <input type="time" id="" name="start_time" placeholder="" class="form-control" required>
                                </div>
                                <div class="f-group mt-3 mb-3">
                                    <label for="">Jam Selesai</label>
                                    <input type="time" id="" name="end_time" placeholder="" class="form-control" required>
                                </div>
                                <div class="f-group mt-3 mb-3">
                                    <label for="">Durasi</label>
                                    <input type="text" id="" name="durasi" placeholder="Tuliskan Durasi mu!" value="Menit" class="form-control" required>
                                </div>
                                <!-- <input type="hidden" class="form-control" name="status" value="Menunggu Respon"> -->

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                    <button type="sumbit" name="save" class="btn btn-success btn btn-primary btn-sm">Submit &nbsp;<i class="fa fa-paper-plane"></i> </button>
                                    <!-- <button type="submit" name="update" class="btn btn-warning btn btn-primary btn-sm">Update</button> -->
                                    <button type="reset" class="btn btn-warning btn btn-primary btn-sm">Reset&nbsp;<i class="fa fa-times"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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

            <!-- Main Footer -->
            <footer class="mb-3">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2022 <a href="">IT-RSNR</a></strong> All rights reserved.
            </footer>
        </div>

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
        <script src=dashboard/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src=dashboard/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
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
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
            })
        </script>
        </body>

        </html>