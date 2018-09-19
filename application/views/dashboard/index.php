 <?php include 'layout/header.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $user; ?></div>
                                    <div>Jumlah admin</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $blog; ?></div>
                                    <div>jumlah blog</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-heart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $qoutes; ?></div>
                                    <div>Jumlah qoutes</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Admin Information ?
                        </div>
                        <div class="panel-body">
                            <h4>Nama : <?php echo $this->session->userdata('username') ?></h4>
                            <h4>Status : <button class="btn btn-success"><?php echo $this->session->userdata('status') ?></button></h4>
                            <h4>Umur : <?php echo $this->session->userdata('umur') ?></h4>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Admin photos
                        </div>
                        <div class="panel-body">
                            <img src="<?php echo base_url()?>assets/foto/admin/<?php echo $this->session->userdata('foto') ?>" width="150px" height="100px">
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="<?php echo base_url()?>dashboard/qoutes"><button type="submit" class="btn btn-primary">Tambah qoutes</button></a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>qoutes</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($qout as $row){?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $row->isi ?></td>
                                        <td><a href="<?php echo base_url()?>dashboard/edit_qout/<?php echo $row->id ?>"><button class="btn btn-primary">edit</button></a><a href="<?php echo base_url()?>dashboard/hapus_qout/<?php echo $row->id ?>"><button class="btn btn-danger">Hapus</button></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include 'layout/footer.php';?>
