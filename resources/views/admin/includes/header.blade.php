<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="#" onClick="return false;" class="bars"></a>
            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="logo-name">La Maisonnette</span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="#" onClick="return false;" class="sidemenu-collapse">
                        <i data-feather="align-justify"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Full Screen Button -->
                <li class="fullscreen">
                    <a href="javascript:;" class="fullscreen-btn">
                        <i data-feather="maximize"></i>
                    </a>
                </li>
                <!-- #END# Full Screen Button -->
                <li class="dropdown user_profile">
                    <div class="chip dropdown-toggle" data-toggle="dropdown">
                       {{ Auth::user()->name }}
                    </div>
                    <ul class="dropdown-menu pullDown">
                        <li class="body">
                            <ul class="user_dw_menu">
                                <li>
                                    <a href="#" onClick="return false;">
                                        <i class="material-icons">help</i>Help
                                    </a>
                                </li>
                                <li>

                                 <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                    <i class="material-icons">power_settings_new</i>Logout
                                </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
                <li class="user_profile">
                    <a href="https://www.lamaisonnette.com.ng" class="js-right-sidebar" data-close="true">
                        <i data-feather="home"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header"></li>
                <li class="active">
                    <a onClick="return false;">
                         <span>-- {{ Auth::user()->name }}</span>
                       <a href="{{ url('admin') }}">  <i data-feather="home"></i> <span>Dashboard</span></a>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/admissions') }}">
                        <i data-feather="user-check"></i>
                        <span>Admission Info</span>
                    </a>
                        </li>
                    <li>
                    <a href="{{ url('admin/health') }}">
                        <i data-feather="edit"></i>
                        <span>Health info</span>
                    </a>
                        </li>
                    <li>
                    <a href="{{ url('admin/parents-guardians') }}">
                        <i data-feather="edit"></i>
                        <span>Parents/guardians info</span>
                    </a>
                        </li>
                        <li>
                    <a href="{{ url('admin/emergency-contacts') }}">
                        <i data-feather="edit"></i>
                        <span>Emergency contact info</span>
                    </a>
                        </li>
                         <li>
                            <li>
                                <a href="{{ url('admin/contacts') }}">
                                    <i data-feather="edit"></i>
                                    <span>Contact  Messages</span>
                                </a>
                                    </li>
                    <a href="#">
                        <i data-feather="grid"></i>
                        <span>Gallery</span>
                    </a>
                        </li>
                        <li><a href="{{ url('admin/testimonials') }}">
                        <i data-feather="calendar"></i>
                        <span>Testimonials</span>
                    </a>
                </li>


                {{-- <li><a href="{{ url('admin/register') }}">
                    <i data-feather="register"></i>
                    <span>Change Password</span>
                </a>
            </li> --}}

            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
</div>
