<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

    $query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."' ");
    $d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko  | Best </title>
    <link rel="icon" href="image/BOOK STORE.png" type="png" sizes="40x25" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-danger shadow navbar-dark">

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle" />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside style="background-color: black" class="main-sidebar sidebar-dark-danger elevation-4">
        <!-- Brand Logo -->
        <a href="dashboard.html" class="brand-link">
          <span class="brand-text font-weight-light">RestoIzna</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          
          <!-- SidebarSearch Form -->
          <div class="form-inline mt-3">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
              <a href="#" class="d-block">Izna</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="dashboard.php" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Dashbord</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="profil.php" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Profil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kategori.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data-produk.php" class="nav-link active">
                  <i class="nav-icon fas fa-list"></i>
                  <p>Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="keluar.php" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>Keluar</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

     <!-- Content Wrapper. Contains page content -->
     <div style="background-color: whitesmoke" class="content-wrapper">
      <!-- Content Header (Page header) -->
      <br />
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Profil</h1>
            </div>
             <!-- /.col -->
             <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Dashbord</li>
                <li class="breadcrumb-item">Menu</li>
                <li class="breadcrumb-item active">Tambah Menu</li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
                <select class="input-control" name="kategori" required>
                    <option value="">Pilih Kategori</option>
                    <?php
                        $kategori = mysqli_query($conn, "SELECT * FROM kategori ORDER BY kategori_id DESC ");
                        while ($r = mysqli_fetch_array($kategori)) {
                    ?>
                    <option value="<?php echo $r['kategori_id'] ?>" <?php echo ($r['kategori_id'] == $p->kategori_id)? 'selected':''; ?> ><?php echo $r['kategori_nama'] ?></option>
                    <?php } ?>
                </select>
                <input type="text" name="nama" placeholder="Nama Produk" class="input-control" value="<?php echo $p->produk_nama ?>" required>
                <input type="text" name="harga" placeholder="Harga" class="input-control" value="<?php echo $p->harga ?>" required>

                <img src="produk/<?php echo $p->produk_image ?>" width="100px" alt="">
                <input type="hidden" name="foto" value="<?php echo $p->produk_image ?>">
                <input type="file" name="gambar" class="input-control" >
                <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"><?php echo $p->deskripsi ?></textarea>
                <select name="status" class="input-control">
                    <option value="">Pilih Status</option>
                    <option value="1" <?php echo ($p->status == 1)? 'selected':''; ?> >Aktif</option>
                    <option value="0" <?php echo ($p->status == 0)? 'selected':''; ?>>Tidak Aktif</option>
                </select>
                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
            <?php
                if(isset($_POST['submit'])){
                    
                    //menampung data inputan form
                    $kategori   = $_POST['kategori'];
                    $nama       = $_POST['nama'];
                    $harga      = $_POST['harga'];
                    $deskripsi  = $_POST['deskripsi'];
                    $status     = $_POST['status'];
                    $foto       = $_POST['foto'];

                    //menampung data format file yang diizinkan
                    $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

                    //tampung data gambar yg baru
                    $filename = $_FILES['gambar']['name'];
                    $tmp_name = $_FILES['gambar']['tmp_name'];

                    $type1 = explode('.', $filename);
                    $type2 = $type1[1];

                    $newname = 'produk'.time().'.'.$type2;

                    //jika admin ganti gambar
                    if($filename != ''){
                        //validasi format file
                        if(!in_array($type2, $tipe_diizinkan)){
                        //jika format file tidak diizinkan
                        echo '<script>alert("Format tidak diixzinkan")</script>';

                        }else{
                            unlink('./produk/'.$foto);
                            move_uploaded_file($tmp_name, './produk/'.$newname);
                            $namagambar = $newname;
                        }

                    }else{
                        //jika admin tidak ganti gambar
                        $namagambar = $foto;

                    }

                    //query update data produk
                    $update = mysqli_query($conn, "UPDATE produk SET
                                              kategori_id = '".$kategori."',
                                              produk_nama = '".$nama."',
                                              harga = '".$harga."',
                                              deskripsi = '".$deskripsi."',
                                              produk_image = '".$namagambar."',
                                              status = '".$status."'
                                              WHERE produk_id = '".$p->produk_id."' ");
                    if($update){
                        echo'<script>alert("simpan data berhasil")</script>';
                        echo '<script>window.location="data-produk.php"</script>';
                    }else{
                        echo 'gagal'.mysqli_error($conn);
                    }                
                }
            ?>
        </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
      <br />
    </div>
    <!-- /.content-wrapper -->


      <!-- Main Footer -->
      <footer class="main-footer bg-danger">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">Official RestoIzna</div>
        <!-- Default to the left -->
        <p>Created with <i class="bi bi-heart-fill text-light"></i> by <a class="text-black fw-bold" href="https://api.whatsapp.com/send?phone=62812345678&text=udah liat semuanya, kerenn 😚">YNTKTS</a></p>
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
  </body>
</html>
