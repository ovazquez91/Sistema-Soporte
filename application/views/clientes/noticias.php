
        <div class="page-wrapper page-header">
            <!-- ============================================================== -->
            <!-- Temp - Earnings -->
            <!-- ============================================================== -->
            <div class="card info-gradient m-t-0 m-b-0">
                <div class="card-content">
                    <div class="p-b-40 p-t-20">
                        <h3 class="white-text">Welcome back Steve!</h3>
                        <p class="white-text op-7 m-b-20">Te dejamos un poco de noticias del mundo de la tecnología</p>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                  <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <?php foreach ($noticias as $value): ?>
                    <div class="col l4">
                        <div class="card">
                            <img class="card-img-top responsive-img" src="<?=$value->imagen ?>" alt="Card image cap">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center m-b-15">
                                    <span><i class="ti-calendar"> </i><?= date("d/m/Y", strtotime($value->fecha_noticia)) ?></span>
                                </div>
                                <h5><?=$value->titulo ?></h5>
                                <button onclick="javascript:location.href='<?=$value->liga ?>'" class="waves-effect waves-light btn btn-round indigo m-t-20">Leer más</button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    