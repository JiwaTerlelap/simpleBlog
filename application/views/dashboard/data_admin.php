<?php include 'layout/header.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Admin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="<?php echo base_url()?>dashboard/tambah_admin"><button type="submit" class="btn btn-primary">Tambah Admin</button></a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>umur</th>
                                        <th>status</th>
                                        <th>foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($admin as $row){?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $row->username ?></td>
                                        <td><?php echo $row->password ?></td>
                                        <td><?php echo $row->umur ?></td>
                                        <td><?php echo $row->status ?></td>
                                        <td><img src="<?php echo base_url()?>assets/foto/admin/<?php echo $row->foto ?>" width="50"></td>
                                        <td><a href="<?php echo base_url()?>dashboard/edit_admin/<?php echo $row->id ?>" role="button" class="btn btn-success">edit</a><a href="<?php echo base_url()?>dashboard/hapus_admin/<?php echo $row->id ?>" role="button" class="btn btn-danger">Hapus</a></td>
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
