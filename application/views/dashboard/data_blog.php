<?php include 'layout/header.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Blog</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="<?php echo base_url()?>dashboard/blog"><button type="submit" class="btn btn-primary">Tambah Blog</button></a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>judul</th>
                                        <th>Blog</th>
                                        <th>foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($blog as $row):
                                        $blog = $row->isi;
                                         $potong = substr($blog, 0, 200);
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $row->judul?></td>
                                        <td><?php echo $potong; ?></td>
                                        <td><img src="<?php echo base_url()?>assets/foto/blog/<?php echo $row->foto?>" width="100"></td>
                                        <td><a href="<?php echo base_url()?>dashboard/edit_blog/<?php echo $row->id ?>"><button class="btn btn-primary">edit</button><a href="<?php echo base_url()?>dashboard/hapus_blog/<?php echo $row->id ?>"><button class="btn btn-danger">Hapus</button></a></td>
                                    </tr>
                                    <?php endforeach; ?>
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
