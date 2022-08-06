<!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <header class="topbar">
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
            <nav>
                <div class="nav-wrapper">
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <a class="brand-logo"  >
                        <span class="icon">
                            <img class="light-logo" src="<?=base_url()?>application/public/assets/images/logo-icon2.png">
                        </span>
                        <span class="text">
                            <img class="light-logo" src="<?=base_url()?>application/public/assets/images/logo-text2.png">
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Left topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <ul class="left">
                        <li class="hide-on-med-and-down">
                            <a href="javascript: void(0);" class="nav-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                        <li class="hide-on-large-only">
                            <a href="javascript: void(0);" class="sidebar-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Notification icon scss in header.scss -->
                        <!-- ============================================================== -->
                        <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="noti_dropdown"><i class="material-icons">help</i></a>
                            <ul id="noti_dropdown" class="mailbox dropdown-content">
                                <li>
                                    <div class="drop-title">¿Como te podemos ayudar?</div>
                                </li>
                                <li>
                                    <a class="center-align" href="javascript:void(0);"><i class="fas fa-phone"></i><strong>Telefono</strong> </a>
                                </li>
                                <li>
                                    <a class="center-align" href="javascript:void(0);"><i class="fas fa-envelope"></i><strong>Correo</strong> </a>
                                </li>
                                <li>
                                    <a class="center-align" href="javascript:void(0);"><i class="fab fa-whatsapp"></i><strong>WhatsApp</strong> </a>
                                </li>
                                <li>
                                    <a class="center-align" href="javascript:void(0);"><i class="fab fa-facebook-messenger"></i><strong>Messenger</strong> </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                   
                    <!-- ============================================================== -->
                    <!-- Right topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <ul class="right">
                        <!-- ============================================================== -->
                        <!-- Profile icon scss in header.scss -->
                        <!-- ============================================================== -->
                        <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><img src="<?=base_url()?>application/public/assets/images/users/2.jpg" alt="user" class="circle profile-pic"></a>
                            <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="<?=base_url()?>application/public/assets/images/users/2.jpg" alt="user"></div>
                                        <div class="u-text">
                                            <h4><?=$this->session->userdata("nombre")?></h4>
                                            <p><?=$this->session->userdata("correo")?></p>
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?=base_url()?>Cliente/perfil"><i class="material-icons">account_circle</i> Mi perfil</a></li>
                                <li><a href="<?=base_url()?>Cliente/perfil"><i class="material-icons">settings</i> Configuración</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?=base_url()?>Login/logout"><i class="material-icons">power_settings_new</i> Logout</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                </div>
            </nav>
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
        </header>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <ul id="slide-out" class="sidenav">
                <li>
                    <ul class="collapsible">
                        <li class="small-cap"><span class="hide-menu"></span></li>
                        <li>
                            <a href="<?=base_url()?>Cliente" class="collapsible-header"><i class="material-icons">home</i><span class="hide-menu"> Inicio </span></a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">account_circle</i><span class="hide-menu"> Perfil</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?=base_url()?>Cliente/perfil"><i class="material-icons">account_circle</i><span class="hide-menu"></span> Perfil</a></li>
                                    <li><a href="<?=base_url()?>Cliente/perfil"><i class="material-icons">settings</i><span class="hide-menu"></span> Configuración</a></li>
                                    
                                    
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="<?=base_url()?>Cliente/horas" class="collapsible-header"><i class="material-icons">timer</i><span class="hide-menu"> Horas </span></a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">bookmark_border</i><span class="hide-menu"> Ticket</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?=base_url()?>Cliente/ticket"><i class="material-icons">collections_bookmark</i><span class="hide-menu"></span>Todos los tickets</a></li>
                                    <li><a href="ticket-list.html"><i class="material-icons">collections_bookmark</i><span class="hide-menu"></span>Crear ticket</a></li>
                                    <li><a href="ticket-list.html"><i class="material-icons">collections_bookmark</i><span class="hide-menu"></span>Abierto</a></li>
                                    <li><a href="ticket-list.html"><i class="material-icons">collections_bookmark</i><span class="hide-menu">En progeso</span></a></li>
                                    <li><a href="ticket-list.html"><i class="material-icons">collections_bookmark</i><span class="hide-menu"><span class="label label-danger">Cerrado</span></span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">assignment</i><span class="hide-menu"> Recibos</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?=base_url()?>Cliente/recibos"><i class="material-icons">assignment</i><span class="hide-menu"> Lista de Recibos</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">import_contacts</i><span class="hide-menu"> News Feed</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?=base_url()?>Cliente/noticias"><i class="material-icons">import_contacts</i><span class="hide-menu"></span> Noticias</a></li>
                                    <li><a href="<?=base_url()?>Cliente/avisos"><i class="material-icons">hearing</i><span class="hide-menu"></span> Avisos</a></li>
                                    
                                    
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">shopping_cart</i><span class="hide-menu"> Productos </span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?=base_url()?>Cliente/producto"><i class="material-icons">add_to_photos</i><span class="hide-menu">Productos</span></a></li>
                                    <li><a href="<?=base_url()?>Cliente/comprarHoras"><i class="material-icons">timer</i><span class="hide-menu">Comprar Horas</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="<?=base_url()?>Login/logout"><i class="material-icons">power_settings_new</i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->