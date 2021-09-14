<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME ?></title>
    <link rel="stylesheet" type="text/css" href="../../admin/assets/font-awesome/css/all.min.css">
    <!-- Site  Stylesheet -->
    <link rel="stylesheet" type="text/css" href="../../admin/assets/admin-style.css">
</head>
<body>
<div class="container">
    <!-- Navigation -->
    <div class="navigation">
        <ul>
            <li>
                <a href="../../admin/dashboard.php">
                    <span class="icon"><i class="fa fa-church"></i></span>
                    <span class="title"><?php echo SITE_NAME ?></span>
                </a>
            </li>
            <li>
                <a href="../../admin/dashboard.php">
                    <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../../admin/members.php">
                    <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                    <span class="title">Members</span>
                </a>
            </li>
            <li>
                <a href="../../admin/execs.php">
                    <span class="icon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                    <span class="title">Execs</span>
                </a>
            </li>
            <li>
                <a href="../../admin/events.php">
                    <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    <span class="title">Events</span>
                </a>
            </li>
            <li>
                <a href="../../admin/readings.php">
                    <span class="icon"><i class="fa fa-book-open" aria-hidden="true"></i></span>
                    <span class="title">Readings</span>
                </a>
            </li>
            <li>
                <a href="../../libs/logout.php">
                    <span class="icon"><i class="fa fa-sign-out-alt" aria-hidden="true"></i></span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- End Navigation -->

    <div class="main">
        <!-- Topbar -->
        <div  class="topbar">
            <div class="toggle"  onclick="toggleMenu()"></div>
            <div class="search">
                <label>
                    <!-- <input type="text" placeholder="Search Here">
                    <i class="fa fa-search"></i> -->
                </label>
            </div>
            <div class="user">
                <img src="assets/user.png">
            </div>
        </div>
        <!-- End Topbar -->
