<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="../assets/user/css/adminlte.min.css">
    <link rel="stylesheet" href="../assets/user/css/style.css">
    <link rel="stylesheet" href="../assets/user/css/responsive.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- top bar menu -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- sidebar menu -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="dashboard.html" class="brand-link">
                <span class="brand-text font-weight-light">
                    <img src="../assets/user/images/logo.png" width="150" alt="logo">
                </span>
            </a>
            <div class="sidebar">
                <nav class="mt-4">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="dashboard.html" class="nav-link">
                                <span class="icon">
                                    <img src="../assets/user/images/icon/user.svg" alt="icon">
                                </span>
                                My Cards
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="insights.html" class="nav-link active">
                                <span class="icon">
                                    <img src="../assets/user/images/icon/insights.svg" alt="icon">
                                </span>
                                Insights
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="setting.html" class="nav-link">
                                <span class="icon">
                                    <img src="../assets/user/images/icon/settings.svg" alt="icon">
                                </span>
                                Settings
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- user profile -->
                <div class="user-panel align-items-center mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <a href="#">
                            <img src="../assets/user/images/user.jpg" class="img-circle elevation-2" alt="User Image">
                        </a>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Rabin</a>
                        <span>User</span>
                    </div>
                </div>
                <!-- upgrade plan -->
                <div class="plan_upgrade text-center mb-5">
                    <a href="#">Upgrade now</a>
                </div>
            </div>
        </aside>
        <!-- main content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Instghts</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>10</h3>
                                    <p>Total Cards</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>05</h3>
                                    <p>Total Card Share</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>Free</h3>
                                    <p>Current Plan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/user/js/jquery.min.js"></script>
    <script src="../assets/user/js/bootstrap.min.js"></script>
    <script src="../assets/user/js/adminlte.min.js"></script>
</body>

</html>