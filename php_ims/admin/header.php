
<!DOCTYPE html>
<html lang="en">
<head>
    <title>FGI MARKETING</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/dropzone.min.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/fullcalendar.css"/>
    <link rel="stylesheet" href="css/matrix-style.css"/>
    <link rel="stylesheet" href="css/matrix-media.css"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/jquery.gritter.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


<div id="header">

    <h2 style="color: white;position: absolute">
        <a href="demo.php" style="color:orange; margin-left: 30px; margin-top: 40px">FGI </a>
    </h2>
</div>



<!--top-Header-menu-->
<div id="user-nav" class="navbar">
    <ul class="nav">
        <li class="" id="profile-messages">
            <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
                <i class="icon icon-user"></i> <span class="text">Welcome Admin</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="bi bi-person-circle"></i>Change Password</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="bi bi-list-task"></i> My Tasks</a></li>
                <li class="divider"></li>
            </ul>
        </li>
    </ul>
      <ul class="nav">
        <li class="dropdown" id="user-messages">
            <a title="" href="#" data-toggle="dropdown" data-target="#user-messages" class="dropdown-toggle">
                <i class="bi bi-gear"></i></i> <span class="text">Users</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="add_new_user.php"><i class="bi bi-people"></i>Create User Account</a></li>
            </ul>
        </li>
    </ul>
</div>

<!--sidebar-menu-->
<div id="sidebar">
    <ul>
        <li class="">
            <a href="demo.php"><i class="icon icon-home"></i><span>Dashboard</span></a>
        </li>
        
        <li>
            <a href="inventory.php"><i class="bi bi-boxes"></i><span>Inventory</span></a>
        </li>

        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span
                class="label label-important">3</span></a>
            <ul>
                <li><a href="form-common.html">Basic Form</a></li>
                <li><a href="form-validation.html">Form with Validation</a></li>
                <li><a href="form-wizard.html">Form with Wizard</a></li>
            </ul>
        </li>

    </ul>
</div>
<!--sidebar-menu-->
<div id="search">
        <a href="index.php" style="color:white"><i class="bi bi-box-arrow-right"></i><span>Log Out</span></a>
</div>