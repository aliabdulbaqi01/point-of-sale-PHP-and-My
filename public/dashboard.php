<?php
require_once __DIR__ . '/../src/bootstrap.php';

$title = $title ?? 'Dashboard';
view('header', ['title' => $title]);
view('navbar');

view('sidebar');
//view('content');
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?=$title ?? 'Dashboard' ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
    <!-- Yield the content section -->
<?php echo $content ?? ''; ?>
    </div>
    </section>
    </div>


<?php
view('footer');
view('foot');

