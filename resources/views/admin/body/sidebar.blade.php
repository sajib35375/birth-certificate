<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="../images/logo-dark.png" alt="">
                        <h3><b>Sunny</b> Admin</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Admin Controller</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('user.info') }}"><i class="ti-more"></i>User Form</a></li>
                    <li><a href=""><i class="ti-more"></i></a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="mail"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
                    <li><a href="mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
                    <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Pages</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="profile.html"><i class="ti-more"></i>Profile</a></li>
                    <li><a href="invoice.html"><i class="ti-more"></i>Invoice</a></li>
                    <li><a href="gallery.html"><i class="ti-more"></i>Gallery</a></li>
                    <li><a href="faq.html"><i class="ti-more"></i>FAQs</a></li>
                    <li><a href="timeline.html"><i class="ti-more"></i>Timeline</a></li>
                </ul>
            </li>

            <li class="header nav-small-cap">User Interface</li>





            <li class="treeview">
                <a href="#">
                    <i data-feather="server"></i>
                    <span>Tables</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="tables_simple.html"><i class="ti-more"></i>Simple tables</a></li>
                    <li><a href="tables_data.html"><i class="ti-more"></i>Data tables</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="pie-chart"></i>
                    <span>Charts</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="charts_chartjs.html"><i class="ti-more"></i>ChartJS</a></li>
                    <li><a href="charts_flot.html"><i class="ti-more"></i>Flot</a></li>
                    <li><a href="charts_inline.html"><i class="ti-more"></i>Inline</a></li>
                    <li><a href="charts_morris.html"><i class="ti-more"></i>Morris</a></li>
                    <li><a href="charts_peity.html"><i class="ti-more"></i>Peity</a></li>
                    <li><a href="charts_chartist.html"><i class="ti-more"></i>Chartist</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="map"></i>
                    <span>Map</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="map_google.html"><i class="ti-more"></i>Google Map</a></li>
                    <li><a href="map_vector.html"><i class="ti-more"></i>Vector Map</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="alert-triangle"></i>
                    <span>Authentication</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="auth_login.html"><i class="ti-more"></i>Login</a></li>
                    <li><a href="auth_register.html"><i class="ti-more"></i>Register</a></li>
                    <li><a href="auth_lockscreen.html"><i class="ti-more"></i>Lockscreen</a></li>
                    <li><a href="auth_user_pass.html"><i class="ti-more"></i>Password</a></li>
                    <li><a href="error_404.html"><i class="ti-more"></i>Error 404</a></li>
                    <li><a href="error_maintenance.html"><i class="ti-more"></i>Maintenance</a></li>
                </ul>
            </li>

            <li class="header nav-small-cap">EXTRA</li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="layers"></i>
                    <span>Multilevel</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Level One</a></li>
                    <li class="treeview">
                        <a href="#">Level One
                            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#">Level Two</a></li>
                            <li class="treeview">
                                <a href="#">Level Two
                                    <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#">Level Three</a></li>
                                    <li><a href="#">Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Level One</a></li>
                </ul>
            </li>

            <li>
                <a href="auth_login.html">
                    <i data-feather="lock"></i>
                    <span>Log Out</span>
                </a>
            </li>

        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
    </div>
</aside>
