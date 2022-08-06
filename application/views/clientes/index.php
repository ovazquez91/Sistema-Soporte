
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="card info-gradient m-t-0 m-b-0">
                <div class="card-content">
                    <div class="p-b-40 p-t-20">
                        <h3 class="white-text">¡Bienvenido <?=$this->session->userdata("nombre") ?>!</h3>
                        <p class="white-text op-7 m-b-20">Success is not a destination, its a Journey!!!</p>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Earnings -->
                <!-- ============================================================== -->
                <div class="row">
                    
                    
                    <div class="col l3 m6 s12">
                        <div class="card">
                            <div class="card-content center-align">
                                <div>
                                    <span class="blue-text display-6"><i class="ti-receipt"></i></span>
                                </div>
                                <div>
                                    <h4>62,600</h4>
                                    <h6 class="blue-text font-medium m-b-0">Todos los tickets</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="card">
                            <div class="card-content center-align">
                                <div>
                                    <span class="cyan-text display-6"><i class="ti-layout-cta-btn-right"></i></span>
                                </div>
                                <div>
                                    <h4>12,270</h4>
                                    <h6 class="cyan-text font-medium m-b-0">Tickets Abiertos</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="card">
                            <div class="card-content center-align">
                                <div>
                                    <span class="red-text display-6"><i class="ti-check-box"></i></span>
                                </div>
                                <div class="">
                                    <h4>21,090</h4>
                                    <h6 class="red-text font-medium m-b-0">Tickets Cerrados</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="card">
                            <div class="card-content center-align">
                                <div>
                                    <span class="yellow-text text-darken-2 display-6"><i class="ti-timer"></i></span>
                                </div>
                                <div>
                                    <h4>8:00 horas</h4>
                                    <h6 class="yellow-text text-darken-2 font-medium m-b-0">Horas</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="card-title">Tickets recientes</h5>
                                        <h6 class="card-subtitle">Muestra todos los tickets que se han generado o modificado</h6>
                                    </div>
                                    
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Title</th>
                                                <th>ID</th>
                                                <th>Product</th>
                                                <th>Created by</th>
                                                <th>Date</th>
                                                <th>Agent</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="label label-warning">In Progress</span></td>
                                                <td><a href="ticket-detail.html" class="link">Elegant Theme Side Menu Open OnClick</a></td>
                                                <td><a href="ticket-detail.html" class="font-medium link">276377</a></td>
                                                <td>Elegant Admin</td>
                                                <td>Eric Pratt</td>
                                                <td>2018/05/01</td>
                                                <td>Fazz</td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-danger">Closed</span></td>
                                                <td><a href="ticket-detail.html" class="link">AdminX Theme Side Menu Open OnClick</a></td>
                                                <td><a href="ticket-detail.html" class="font-medium link">1240503</a></td>
                                                <td>AdminX Admin</td>
                                                <td>Nirav Joshi</td>
                                                <td>2018/02/01</td>
                                                <td>Steve</td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-success">Opened</span></td>
                                                <td><a href="ticket-detail.html" class="link">Admin-Pro Theme Side Menu Open OnClick</a></td>
                                                <td><a href="ticket-detail.html" class="font-medium link">1250304</a></td>
                                                <td>Admin-Pro</td>
                                                <td>Vishal Bhatt</td>
                                                <td>2018/05/21</td>
                                                <td>Fazz</td>
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Status</th>
                                                <th>Title</th>
                                                <th>ID</th>
                                                <th>Product</th>
                                                <th>Created by</th>
                                                <th>Date</th>
                                                <th>Agent</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <ul class="pagination right-align m-t-15">
                                    </ul>
                                </div>
                                <a href="javascript: void(0)"><i class="fas fa-angle-right"></i> Ver todos los tickets</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <!-- Column -->
                    <div class="col l4">
                        <div class="card">
                            <img class="card-img-top responsive-img" src="<?=base_url()?>application/public/assets/images/big/img4.jpg" alt="Card image cap">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center m-b-15">
                                    <span><i class="ti-calendar"></i> 20 May 2018</span>
                                    
                                </div>
                                <h5>Featured Hydroflora Pots Garden &amp; Outdoors</h5>
                                <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="waves-effect waves-light btn btn-round indigo m-t-20">Leer más</button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col l4">
                        <div class="card">
                            <img class="card-img-top responsive-img" src="<?=base_url()?>application/public/assets/images/big/img5.jpg" alt="Card image cap">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center m-b-15">
                                    <span><i class="ti-calendar"></i> 19 May 2018</span>
                                    
                                </div>
                                <h5>Featured Hydroflora Pots Garden &amp; Outdoors</h5>
                                <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="waves-effect waves-light btn btn-round indigo m-t-20">Leer más</button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col l4">
                        <div class="card">
                            <img class="card-img-top responsive-img" src="<?=base_url()?>application/public/assets/images/big/img6.jpg" alt="Card image cap">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center m-b-15">
                                    <span><i class="ti-calendar"></i> 29 May 2018</span>
                                    
                                </div>
                                <h5>Featured Hydroflora Pots Garden &amp; Outdoors</h5>
                                <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="waves-effect waves-light btn btn-round indigo m-t-20">Leer más</button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <a href="#" data-target="right-slide-out" class="sidenav-trigger right-side-toggle btn-floating btn-large waves-effect waves-light red"><i class="material-icons">settings</i></a>
        <aside class="right-sidebar">
            <!-- Right Sidebar -->
            <ul id="right-slide-out" class="sidenav right-sidenav p-t-10">
                <li>
                    <div class="row">
                        <div class="col s12">
                            <!-- Tabs -->
                            <ul class="tabs">
                                <li class="tab col s4"><a href="#settings" class="active"><span class="material-icons">build</span></a></li>
                                <li class="tab col s4"><a href="#chat"><span class="material-icons">chat_bubble</span></a></li>
                                <li class="tab col s4"><a href="#activity"><span class="material-icons">local_activity</span></a></li>
                            </ul>
                            <!-- Tabs -->
                        </div>
                        <!-- Setting -->
                        <div id="settings" class="col s12">
                            <div class="m-t-10 p-10 b-b">
                                <h6 class="font-medium">Layout Settings</h6>
                                <ul class="m-t-15">
                                    <li class="m-b-10">
                                        <label>
                                            <input type="checkbox" name="theme-view" id="theme-view" />
                                            <span>Dark Theme</span>
                                        </label>
                                    </li>
                                    <li class="m-b-10">
                                        <label>
                                            <input type="checkbox" class="nav-toggle" name="collapssidebar" id="collapssidebar" />
                                            <span>Collapse Sidebar</span>
                                        </label>
                                    </li>
                                    <li class="m-b-10">
                                        <label>
                                            <input type="checkbox" name="sidebar-position" id="sidebar-position" />
                                            <span>Fixed Sidebar</span>
                                        </label>
                                    </li>
                                    <li class="m-b-10">
                                        <label>
                                            <input type="checkbox" name="header-position" id="header-position" />
                                            <span>Fixed Header</span>
                                        </label>
                                    </li>
                                    <li class="m-b-10">
                                        <label>
                                            <input type="checkbox" name="boxed-layout" id="boxed-layout" />
                                            <span>Boxed Layout</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-10 b-b">
                                <!-- Logo BG -->
                                <h6 class="font-medium">Logo Backgrounds</h6>
                                <ul class="m-t-15 theme-color">
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a></li>
                                </ul>
                                <!-- Logo BG -->
                            </div>
                            <div class="p-10 b-b">
                                <!-- Navbar BG -->
                                <h6 class="font-medium">Navbar Backgrounds</h6>
                                <ul class="m-t-15 theme-color">
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a></li>
                                </ul>
                                <!-- Navbar BG -->
                            </div>
                            <div class="p-10 b-b">
                                <!-- Logo BG -->
                                <h6 class="font-medium">Sidebar Backgrounds</h6>
                                <ul class="m-t-15 theme-color">
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a></li>
                                    <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a></li>
                                </ul>
                                <!-- Logo BG -->
                            </div>
                        </div>
                        <!-- chat -->
                        <div id="chat" class="col s12">
                            <ul class="mailbox m-t-20">
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_1' data-user-id='1'>
                                            <span class="user-img">
                                                <img src="<?=base_url()?>application/public/assets/images/users/1.jpg" alt="user" class="circle">
                                                <span class="profile-status online pull-right" data-status="online"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Chris Evans</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:30 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_2' data-user-id='2'>
                                            <span class="user-img">
                                                <img src="<?=base_url()?>application/public/assets/images/users/2.jpg" alt="user" class="circle">
                                                <span class="profile-status busy pull-right" data-status="busy"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Ray Hudson</h5>
                                                <span class="mail-desc">I've sung a song! See you at</span>
                                                <span class="time">9:10 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_3' data-user-id='3'>
                                            <span class="user-img">
                                                <img src="<?=base_url()?>application/public/assets/images/users/3.jpg" alt="user" class="circle">
                                                <span class="profile-status away pull-right" data-status="away"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Lb James</h5>
                                                <span class="mail-desc">I am a singer!</span>
                                                <span class="time">9:08 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_4' data-user-id='4'>
                                            <span class="user-img">
                                                <img src="<?=base_url()?>application/public/assets/images/users/4.jpg" alt="user" class="circle">
                                                <span class="profile-status offline pull-right" data-status="offline"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Don Andres</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:02 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_5' data-user-id='5'>
                                            <span class="user-img">
                                                <img src="../../assets/images/users/1.jpg" alt="user" class="circle">
                                                <span class="profile-status online pull-right" data-status="online"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Chris Evans</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:30 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_6' data-user-id='6'>
                                            <span class="user-img">
                                                <img src="../../assets/images/users/2.jpg" alt="user" class="circle">
                                                <span class="profile-status busy pull-right" data-status="busy"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Ray Hudson</h5>
                                                <span class="mail-desc">I've sung a song! See you at</span>
                                                <span class="time">9:10 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_7' data-user-id='7'>
                                            <span class="user-img">
                                                <img src="../../assets/images/users/3.jpg" alt="user" class="circle">
                                                <span class="profile-status away pull-right" data-status="away"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Lb James</h5>
                                                <span class="mail-desc">I am a singer!</span>
                                                <span class="time">9:08 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_8' data-user-id='8'>
                                            <span class="user-img">
                                                <img src="../../assets/images/users/4.jpg" alt="user" class="circle">
                                                <span class="profile-status offline pull-right" data-status="offline"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Don Andres</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:02 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_9' data-user-id='9'>
                                            <span class="user-img">
                                                <img src="../../assets/images/users/1.jpg" alt="user" class="circle">
                                                <span class="profile-status online pull-right" data-status="online"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Chris Evans</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:30 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_10' data-user-id='10'>
                                            <span class="user-img">
                                                <img src="../../assets/images/users/2.jpg" alt="user" class="circle">
                                                <span class="profile-status busy pull-right" data-status="busy"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Ray Hudson</h5>
                                                <span class="mail-desc">I've sung a song! See you at</span>
                                                <span class="time">9:10 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_11' data-user-id='11'>
                                            <span class="user-img">
                                                <img src="../../assets/images/users/3.jpg" alt="user" class="circle">
                                                <span class="profile-status away pull-right" data-status="away"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Lb James</h5>
                                                <span class="mail-desc">I am a singer!</span>
                                                <span class="time">9:08 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_12' data-user-id='12'>
                                            <span class="user-img">
                                                <img src="../../assets/images/users/4.jpg" alt="user" class="circle">
                                                <span class="profile-status offline pull-right" data-status="offline"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Don Andres</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:02 AM</span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Activity -->
                        <div id="activity" class="col s12">
                            <div class="m-t-10 p-10">
                                <h6 class="font-medium">Activity Timeline</h6>
                                <div class="steamline">
                                    <div class="sl-item">
                                        <div class="sl-left green"> <i class="ti-user"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                            <div class="desc">you can write anything </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left blue"><i class="fa fa-image"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Send documents to Clark</div>
                                            <div class="desc">Lorem Ipsum is simply </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="circle" alt="user" src="<?=base_url()?>application/public/assets/images/users/2.jpg"> </div>
                                        <div class="sl-right">
                                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Contrary to popular belief</div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="circle" alt="user" src="<?=base_url()?>application/public/assets/images/users/1.jpg"> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Approve meeting with tiger</div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left teal"> <i class="ti-user"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                            <div class="desc">you can write anything </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left purple"><i class="fa fa-image"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Send documents to Clark</div>
                                            <div class="desc">Lorem Ipsum is simply </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="circle" alt="user" src="../../<?=base_url()?>application/public/assets/images/users/4.jpg"> </div>
                                        <div class="sl-right">
                                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Contrary to popular belief</div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="circle" alt="user" src="<?=base_url()?>application/public/assets/images/users/6.jpg"> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Approve meeting with tiger</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </aside>
        <div class="chat-windows"></div>
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>