<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Usaha </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">



        <?= $this->session->flashdata('message'); ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Usaha</h3>
            </div>
            <!-- /.card-header -->

            <div class="card-body" style="overflow:auto;">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="5">NO</th>
                            <th>Nama Usaha</th>
                            <th>Alamat Kantor</th>
                            <th>Telepon</th>


                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;

                        foreach ($usaha as $a) {
                            /* if ($a['sts_lapt'] == 1) {
                                $b = "koreksi";
                            }
                            if ($a['sts_lapt'] == 2) {
                                $b = "lengkap";
                            } else {
                                $b = "Draft";
                            }*/
                            echo "<tr>
                                <td width='5'>" . $no . "</td>
                                <td>" . $a['nm_usaha'] . "</td>
                                <td>" . $a['almt_ktr'] . "</td>
                                <td>" . $a['telepon'] . "</td>
                            
                            
                                <td>" . anchor("admin/dlampsm/list/" . $a['id_usaha'], "<i class='far fa-edit'></i>", array('title' => 'data usaha')) . "</td>"; ?>
                        </tr>
                        <?php $no++;
                        }
                        ?>


                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->