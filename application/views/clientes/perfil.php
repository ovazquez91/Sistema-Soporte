
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="card info-gradient m-t-0 m-b-0">
                <div class="card-content">
                    <div class="p-b-40 p-t-20">
                        <h3 class="white-text">Welcome back Steve!</h3>
                        <p class="white-text op-7 m-b-20">Revisa que toda tu información sea la correcta</p>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-content">
                                <div class="center-align m-t-30"> <img src="<?=base_url()?>application/public/assets/images/users/5.jpg" class="circle" width="150" />
                                    <h4 class="card-title m-t-10">NOMBRE</h4>
                                    <h6 class="card-subtitle">RFC</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="card-content">
                                <small>Correo </small>
                                <h6>jon@doe.com</h6>
                                <small>Telefono</small>
                                <h6>+91 654 784 547</h6>
                                <small>Estado</small>
                                <h6>Querétaro</h6>
                                <small>Ciudad</small>
                                <h6>Querétaro</h6>
                                <small>Dirección</small>
                                <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                                <small>Codigo Postal</small>
                                <h6>654736</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m8">
                        <div class="card">
                            <div class="row">
                                <div class="col s12">
                                    <ul class="tabs">
                                        <li class="tab col s3"><a href="#perfil">Perfil</a></li>
                                        <li class="tab col s3"><a href="#config">Config</a></li>
                                    </ul>
                                </div>
                               <div id="perfil" class="col s12">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col m3 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p>John Doe</p>
                                            </div>
                                            <div class="col m3 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p>(123) 456 7890</p>
                                            </div>
                                            <div class="col m3 b-r"> <strong>Email</strong>
                                                <br>
                                                <p>john@admin.com</p>
                                            </div>
                                            <div class="col m3"> <strong>Location</strong>
                                                <br>
                                                <p>New York</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h5 class="card-title">Skill Set</h5>
                                        <hr>
                                        <h6 class="font-light m-t-30">Wordpress <span class="pull-right">80%</span></h6>
                                        <div class="progress">
                                            <div class="determinate" style="width: 70%"></div>
                                        </div>
                                        <h6 class="font-light m-t-30">HTML 5 <span class="pull-right">90%</span></h6>
                                        <div class="progress">
                                            <div class="determinate" style="width: 70%"></div>
                                        </div>
                                        <h6 class="font-light m-t-30">jQuery <span class="pull-right">50%</span></h6>
                                        <div class="progress">
                                            <div class="determinate" style="width: 70%"></div>
                                        </div>
                                        <h6 class="font-light m-t-30">Photoshop <span class="pull-right">70%</span></h6>
                                        <div class="progress">
                                            <div class="determinate" style="width: 70%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="config" class="col s12">
                                    <div class="card-content">
                                        <form>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="name" type="text" value="Jon Doe">
                                                    <label for="name">Name</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="email" type="email" value="jon@doe.com">
                                                    <label for="email">Email</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="password" type="password" value="123456">
                                                    <label for="password">Password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="number" type="text" value="123 456 7890">
                                                    <label for="number">Phone No</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea id="message" class="materialize-textarea">Hi, I am Jon Doe</textarea>
                                                    <label for="message">Message</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select>
                                                        <option value="" disabled>Choose Country</option>
                                                        <option value="1">USA</option>
                                                        <option value="2" selected>Spain</option>
                                                        <option value="3">India</option>
                                                    </select>
                                                    <label>Select Country</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="btn teal waves-effect waves-light" type="submit" name="action">Modificar perfil</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    