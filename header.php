<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if gt IE 8]> <html class="ie paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if !IE]><!--><html class="paceSimple sidebar sidebar-fusion"><!-- <![endif]-->
<head>
    <title>SMART (v1.0.0-rc1)</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <!--
**********************************************************
In development, use the LESS files and the less.js compiler
instead of the minified CSS loaded by default.
**********************************************************
<link rel="stylesheet/less" href="../assets/less/admin/module.admin.stylesheet-complete.less" />
    --> 
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="../assets/components/library/bootstrap/css/bootstrap.min.css" />
    <![endif]-->
    <?php
$skin = isset($_GET['skin']) && $_GET['skin'] !== 'style-default' ? $_GET['skin'] : false;
if ($skin)
echo '<link href="' . ASSETS_PATH . '/css/skins/module.' . $module . '.stylesheet-complete.skin.' . $skin . '.min.css" rel="stylesheet" />
        ';
else
echo '<link href="' . ASSETS_PATH . '/css/' . $module . '/module.' . $module . '.stylesheet-complete.min.css" rel="stylesheet" />
        ';
?> 
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <?php foreach ($scripts as $id =>
            $script)
{
$sections = !empty($script['sections']) && !empty($script['sections'][$page]);
$inPages = in_array($page, $script['pages']);
$inSections = !$sections ? false : in_array($section, $script['sections'][$page]); if ($script['header'] && ((!$sections && $inPages) || ($sections && $inSections)))
echo '
            <script src="' . $script['file'] . '"></script>
            ' . "\n\t";
} ?> 
            <script>if (/*@cc_on!@*/false && document.documentMode === 10) { document.documentElement.className+=' ie ie10'; }</script>
        </head>
        <body class="">

            <!-- Main Container Fluid -->
            <div class="container-fluid menu-hidden">
                <?php
                    if(Session::user())
					{?>
                <!-- Sidebar Menu -->
                <div id="menu" class="hidden-print hidden-xs">
                    <div id="sidebar-fusion-wrapper">
                        <!-- <input class="form-control search" type="text" placeholder="Search...">
                        --> 
                        <div class="search-wrapper">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-inverse" type="button"> <i class="fa fa-search"></i> </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </div>
                        <div id="logoWrapper">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src="assets/images/people/50/2.jpg" alt="" class="img-circle" >
                                </a>
                                <div class="media-body">
                                    <a href="" class="name"><?php echo Session::get('user.fname')." ".Session::get('user.lname');?></a> 
                                    <p><i class="fa fa-fw fa-circle-o text-success"></i> Online</p>
                                </div>
                                <div class="clearfix"></div>
                                <a href="?page=user" class="btn btn-xs btn-inverse "><i class="fa fa-user"></i></a>
                                <a href="?page=user&amp;section=projects" class="btn btn-xs btn-inverse "><i class="fa fa-clock-o"></i></a>
                                <a href="?page=user&amp;section=messages" class="btn btn-xs btn-inverse "><i class="fa fa-envelope"></i></a>
                            </div>
					
                            <select class="selectpicker" data-style="btn-inverse" id="select_project">
                                <option>Select Project</option>
										<?php
							                 $project=Query::getResults("select * from projects");
								             foreach($project as $projects){
							             ?>
                                <option value="index.php?page=project_milestones&id=<?php echo $projects->id;?>"><?php echo $projects->title;?></option>
                                       <?php }?>
                            </select>
                        </div>
                        <ul class="menu list-unstyled">
                            <?php Menu::make($config["menu"]["admin"], $page, $module, "collapse"); ?>
                            </ul>
                        </div>
                    </div>
                    <!-- // Sidebar Menu END -->
                    <!-- Content -->
                    <div id="content">
                    
                        <div class="navbar hidden-print main navbar-default" role="navigation">
                            <div class="user-action user-action-btn-navbar pull-right">
                                <button class="btn btn-sm btn-navbar btn-inverse btn-stroke hidden-lg hidden-md"><i class="fa fa-bars fa-2x"></i></button>
                            </div>
                            <a href="index.php" class="logo">
                                <img src="assets/images/logo/logo.jpg" width="32" alt="SMART" />
                                <span class="hidden-xs hidden-sm inline-block"><span>mosaic</span>pro</span>
                            </a>
                            <ul class="main pull-left hidden-xs ">
                                <li class="dropdown notif notifications hidden-xs">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <span class="badge badge-danger">5</span></a>
                                    <ul class="dropdown-menu chat media-list">
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object thumb" src="assets/images/people/100/15.jpg" alt="50x50" width="50" />
                                            </a>
                                            <div class="media-body">
                                                <span class="label label-default pull-right">5 min</span> 
                                                <h5 class="media-heading hidden-xs">
                                                    <?php echo Session::get('user.fname')." ".Session::get('user.lname');?>
                                                </h5>
                                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object thumb" src="assets/images/people/100/16.jpg" alt="50x50" width="50" />
                                            </a>
                                            <div class="media-body">
                                                <span class="label label-default pull-right">2 days</span> 
                                                <h5 class="media-heading">
                                                    Jane B.
                                                </h5>
                                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object thumb" src="assets/images/people/100/17.jpg" alt="50x50" width="50" />
                                            </a>
                                            <div class="media-body">
                                                <span class="label label-default pull-right">3 days</span> 
                                                <h5 class="media-heading">
                                                    Andrew M.
                                                </h5>
                                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" class="btn btn-primary"><i class="fa fa-list"></i> <span>View all messages</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="notifications">
                                    <a href="?page=user&amp;section=projects"><i class="fa fa-clock-o"></i> <span class="badge badge-warning">7</span></a>
                                </li>
                                <li class="notifications">
                                    <a href="?page=user" ><i class="fa fa-user"></i> <span class="badge badge-info">2</span></a>
                                </li>
                            </ul>
                            <ul class="main pull-right">
                                <li class="hidden-xs hidden-sm">
                                    <a href="#modal-task" class="btn btn-info" data-toggle="modal">Create Task <i class="fa fa-fw icon-compose"></i></a>
                                </li>
                                <li class="hidden-xs">Completed Tasks: <strong class="text-primary">24</strong></li>
                                <li class="dropdown username hidden-xs ">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="assets/images/people/35/22.jpg" class="img-circle" alt="Profile" />
                                       <?php echo Session::get('user.fname')." ".Session::get('user.lname');?> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="?page=user" class="glyphicons user"><i></i> Account</a>
                                        </li>
                                        <li>
                                            <a href="?page=user&amp;section=messages" class="glyphicons envelope"><i></i>Messages</a>
                                        </li>
                                        <li>
                                            <a href="?page=user&amp;section=projects" class="glyphicons settings"><i></i>Projects</a>
                                        </li>
                                        <li>
                                            <a href="index.php?page=logout" class="glyphicons lock no-ajaxify"><i></i>Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <?php } ?>
                        <!-- // END navbar -->