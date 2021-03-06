<?php include 'includes/header.php' ?>
<?php if(!$session->is_signed_in()){redirect("login.php");}?>

    <!-- Brand and toggle get grouped for better mobile display -->
<?php include "includes/top_nav.php" ?>
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<?php include "includes/sidebar.php" ?>
<!-- /.navbar-collapse -->
</nav>
<?php   $photos =Photo::find_all() ?>
<div id="page-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Photos
                    <small>page</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Blank Page
                    </li>
                </ol>
            </div>

            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Photo</th>
                        <th>ID</th>
                        <th>File Name</th>
                        <th>Title</th>
                        <th>Size</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    <?php foreach ($photos  as $key=> $photo): ?>
                    <tr class="text-center">
                        <td><?php echo $key+1;?></td>
                        <td><img src="<?php echo $photo->picture_path();?>" alt="" height="120px" width="120px">
                        <div class="photo-links">
                            <a href="delete_photo.php/?id=<?php echo $photo->id ?>">Delete</a>
                            <a href="delete_photo.php/?<?php $photo->id ?>">Edit</a>
                            <a href="delete_photo.php/?<?php $photo->id ?>">View</a>
                        </div>
                        </td>
                        <td><?php echo $photo->id ;?></td>
                        <td><?php echo  $photo->filename;?></td>
                        <td><?php echo  $photo->title;?></td>
                        <td><?php echo  $photo->size;?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->

    </div>