
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="card info-gradient m-t-0 m-b-0">
                <div class="card-content">
                    <div class="p-b-40 p-t-20">
                        <h3 class="white-text">Welcome back Steve!</h3>
                        <p class="white-text op-7 m-b-20">Aqui encontraras todos tus recibos de pagos que se han hecho con nosotros, si pediste factura dentro de cada recibo encontraras los archivos correspondientes.</p>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Invoice List</h5>
                                <div class="table-responsive">
                                <table id="file_export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                                    <label class="custom-control-label" for="customControlValidation1"></label>
                                                </div>
                                            </th>
                                            <th>Setting</th>
                                            <th>Date</th>
                                            <th>Invoice</th>
                                            <th>Order No</th>
                                            <th>Customer Name</th>
                                            <th>Due</th>
                                            <th>Balance</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <!-- Dropdown Trigger -->
                                                <a class='dropdown-trigger btn grey darken-3' href='#' data-target='dropdown1'><i class="material-icons dp48">settings</i></a>
                                                <!-- Dropdown Structure -->
                                                <ul id='dropdown1' class='dropdown-content'>
                                                    <li><a href="<?=base_url()?>Cliente/recibo">Abrir</a></li>
                                                </ul>
                                            </td>
                                            <td>11 March 2017</td>
                                            <td>IWP-1001</td>
                                            <td>AONO-123456401</td>
                                            <td>Nirav Joshi</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <!-- Dropdown Trigger -->
                                                <a class='dropdown-trigger btn grey darken-3' href='#' data-target='dropdown1'><i class="material-icons dp48">settings</i></a>
                                                <!-- Dropdown Structure -->
                                                <ul id='dropdown1' class='dropdown-content'>
                                                    <li><a href="<?=base_url()?>Cliente/recibo">Abrir</a></li>
                                                </ul>
                                            </td>
                                            <td>12 March 2017</td>
                                            <td>IWP-1002</td>
                                            <td>AONO-147852001</td>
                                            <td>Sunil Joshi</td>
                                            <td>2011/07/25</td>
                                            <td>$320,800</td>
                                            <td>$170,750</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                                    <label class="custom-control-label" for="customControlValidation1"></label>
                                                </div>
                                            </th>
                                            <th>Setting</th>
                                            <th>Date</th>
                                            <th>Invoice</th>
                                            <th>Order No</th>
                                            <th>Customer Name</th>
                                            <th>Due</th>
                                            <th>Balance</th>
                                            <th>Amount</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    