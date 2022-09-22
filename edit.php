
                                                    <?php
                                                    include "conn.php";

                                                    if (isset($_POST['updatecok'])) {
                                                        $tgl = $_POST['tgl'];
                                                        $norm = $_POST['rm'];
                                                        $nama = $_POST['nama'];
                                                        $umur = $_POST['umur'];
                                                        $jaminan = $_POST['jaminan'];
                                                        $diagpre = $_POST['diag_pre_op'];
                                                        $tindakan = $_POST['tindakan'];
                                                        $diagpasca = $_POST['diag_pas_op'];
                                                        $ta = $_POST['teknik_anestesi'];
                                                        $ka = $_POST['konversi_t_a'];
                                                        $droperator = $_POST['dr_operator'];
                                                        $dranestesi = $_POST['dr_anestesi'];
                                                        $penata = $_POST['penata_anestesi'];
                                                        // $tim = $_POST['timlist[]'];
                                                        $start_time = $_POST['start_time'];
                                                        $end_time = $_POST['end_time'];
                                                        $durasi = $_POST['durasi'];
                                                        $id = $_POST['id'];
                                                        $sql2 = " UPDATE register_ibs set tanggal='$tgl', no_rm='$norm', nama='$nama', umur='$umur', jaminan='$jaminan', diagnosa_pre='$diagpre',
                                                        tindakan='$tindakan', diagnosa_pasca='$diagpasca', teknik_anestesi='$ta', konversi_anestesi='$ka', dr_operator='$droperator',
                                                        dr_anestesi='$dranestesi', penata_anestesi='$penata', jam_mulai='$start_time', jam_selesai='$end_time', durasi_jam='$durasi'  where id='$id' ";
                                                        $query2 = sqlsrv_query($conn, $sql2) or die(sqlsrv_errors());;
                                                        if ($query2) {
                                                            //redirect ke halaman index
                                                            // header("location: inventory.php");
                                                            echo "<script> alert(
                                                                    'Sip,Berhasil update lek!',
                                                                    'Mantap Sekali',
                                                                    'success') </script>";
                                                            echo '<script language="javascript">document.location="rekap.php";</script>';
                                                        } else {
                                                            die(print_r(sqlsrv_errors(), true));
                                                        }
                                                    }
                                                    ?>