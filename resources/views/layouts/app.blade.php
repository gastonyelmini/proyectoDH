<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="/logo.png">
    <title>Boole - The best way to organize your projects</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="../plugins/bower_components/dropify/dist/css/dropify.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body class="fix-header fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"> <a class="logo" href="{{ route('home') }}"><b><!--This is dark logo icon--><img src="/logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="/logo.png" alt="home" class="light-logo" style="width: 40px;"/></b><span class="hidden-xs"><!--This is dark logo text-->
                  <img src="../plugins/images/eliteadmin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><p class="light-logo" style="color: #18699f; font-size: 20px; font-family: 'Syncopate', sans-serif;">BOOLE</p></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img id="user-avatar" src="/images/profile_images/{{Auth::user()->avatar}}" alt="user-img" class="img-circle"></div> <a id="username" href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}<span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="{{ route('edit-user') }}"><i class="ti-user"></i> My Profile</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                    <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                    </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li> <a href="{{ route('projects') }}" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">My Projects</span></a> </li>
                    <li> <a href="{{ route('add-project') }}" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Add project</span></a> </li>

                    <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();" class="waves-effect"><i data-icon="P" class="icon-logout fa-fw"></i> <span class="hide-menu">Logout</span></a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->

    <div>
      <!-- Preloader -->
      <div class="preloader">
          <div class="cssload-speeding-wheel"></div>
      </div>
      <div id="wrapper">
          <!-- Navigation -->
          <nav class="navbar navbar-default navbar-static-top m-b-0">
              <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                  <div class="top-left-part"> <a class="logo" href="{{ route('home') }}"><b><!--This is dark logo icon--><img src="/logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="/logo.png" alt="home" class="light-logo" style="width: 40px;"/></b><span class="hidden-xs"><!--This is dark logo text-->
                    <img src="../plugins/images/eliteadmin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><p class="light-logo" style="color: #18699f; font-size: 20px; font-family: 'Syncopate', sans-serif;">BOOLE</p></span></a></div>
                  <ul class="nav navbar-top-links navbar-left hidden-xs">
                      <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                      <li>
                          <form role="search" class="app-search hidden-xs">
                              <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                      </li>
                  </ul>
                  <ul class="nav navbar-top-links navbar-right pull-right">
                      <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
                          <ul class="dropdown-menu mailbox animated bounceInDown">
                              <li>
                                  <div class="drop-title">You have 4 new messages</div>
                              </li>
                              <li>
                                  <div class="message-center">
                                      <a href="#">
                                          <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                          <div class="mail-contnet">
                                              <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                      </a>
                                      <a href="#">
                                          <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                          <div class="mail-contnet">
                                              <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                      </a>
                                      <a href="#">
                                          <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                          <div class="mail-contnet">
                                              <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                      </a>
                                      <a href="#">
                                          <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                          <div class="mail-contnet">
                                              <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                      </a>
                                  </div>
                              </li>
                              <li>
                                  <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                              </li>
                          </ul>
                          <!-- /.dropdown-messages -->
                      </li>
                      <!-- /.dropdown -->
                      <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
                          <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                              <li>
                                  <a href="#">
                                      <div>
                                          <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                          <div class="progress progress-striped active">
                                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                          </div>
                                      </div>
                                  </a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                  <a href="#">
                                      <div>
                                          <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                          <div class="progress progress-striped active">
                                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                          </div>
                                      </div>
                                  </a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                  <a href="#">
                                      <div>
                                          <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                          <div class="progress progress-striped active">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                          </div>
                                      </div>
                                  </a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                  <a href="#">
                                      <div>
                                          <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                          <div class="progress progress-striped active">
                                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                          </div>
                                      </div>
                                  </a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                  <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                              </li>
                          </ul>
                          <!-- /.dropdown-tasks -->
                      </li>
                      <!-- /.dropdown -->
                      <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                      <!-- /.dropdown -->
                  </ul>
              </div>
              <!-- /.navbar-header -->
              <!-- /.navbar-top-links -->
              <!-- /.navbar-static-side -->
          </nav>
          <!-- Left navbar-header -->
          <div class="navbar-default sidebar" role="navigation">
              <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                  <div class="user-profile">
                      <div class="dropdown user-pro-body">
                          <div>
                            <a href="{{ route('edit-user') }}">
                              <img id="user-avatar" src="/images/profile_images/{{Auth::user()->avatar}}" alt="user-img" class="img-circle">
                            </a>
                          </div>
                          <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}
                            <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu animated flipInY">
                              <li><a href="{{ route('edit-user') }}"><i class="ti-user"></i> My Profile</a></li>
                          </ul>
                      </div>
                  </div>
                  <ul class="nav" id="side-menu">
                      <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                          <!-- input-group -->
                          <div class="input-group custom-search-form">
                              <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                      <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                      </span> </div>
                          <!-- /input-group -->
                      </li>
                      <li> <a href="{{ route('projects') }}" class="waves-effect"><i data-icon="n" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">My Projects</span></a> </li>
                      <li> <a href="{{ route('add-project') }}" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Add project</span></a> </li>
                      <li> <a href="{{ route('friends') }}" class="waves-effect"><i data-icon="W" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">My Friends</span></a> </li>
                      <li> <a href="{{ route('chat') }}" class="waves-effect"><i data-icon="-" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Chat</span></a> </li>

                      <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();" class="waves-effect"><i data-icon="P" class="icon-logout fa-fw"></i> <span class="hide-menu">Logout</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                      </li>
                  </ul>
              </div>
          </div>
          <!-- Left navbar-header end -->

      <!-- Page Content -->
      <div id="page-wrapper">
          <div class="container-fluid">
              @yield('content')
              <?php include 'php/right-sidebar.php';?>
          </div>
          <!-- /.container-fluid -->
          <?php include 'php/footer.php';?>
      </div>
      <!-- /#page-wrapper -->
      </div>
      <!-- /#wrapper -->
    </div>

    <script src="/js/app.js"></script>
    <script src="/js/ajaxRequests.js"></script>

    <!-- Axios Vue -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue"></script>

    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <!-- jQuery file upload -->
    <script src="plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();
            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez'
                    , replace: 'Glissez-déposez un fichier ou cliquez pour remplacer'
                    , remove: 'Supprimer'
                    , error: 'Désolé, le fichier trop volumineux'
                }
            });
            // Used events
            var drEvent = $('#input-file-events').dropify();
            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });
            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });
            drEvent.on('dropify.errors', function (event, element) {
                console.log('Has Errors');
            });
            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                }
                else {
                    drDestroy.init();
                }
            })
        });
    </script>
    <script src="js/deleteProjectController.js"></script>
</body>

</html>
