<!DOCTYPE html>
<html>

<body>
    <div class="main-wrapper">
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?=base_url()?>application/public/assets/images/big/auth-bg2.jpg) no-repeat left center;">
            <div class="container">
                <div class="row">
                    <div class="col s12 l8 m6 demo-text">
                        <h1 class="font-light m-t-40">Bienvenido al portal<span class="font-medium black-text">de DigitalTec</span></h1><br><br>
                        <p>Puedes acceder con los datos que se te enviarón por correo</p>
                    </div>
                </div>
                <div class="auth-box auth-sidebar">
                    <div id="loginform">
                        <div class="p-l-10">
                            <img href="http://digitaltec.com.mx/" src="http://digitaltec.com.mx/images/logo/logo-106x106.jpg">
                            <h5 class="font-medium m-b-0 m-t-40">¡Bienvenido a la comunidad!</h5>
                        </div>
                        <!-- Form -->
                        <div class="row">
                            <form class="col s12" method="POST" action="<?=base_url()?>index.php/Login/sigIn">
                                <!-- email -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="txtUser" id="email" type="email" class="validate" required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <!-- pwd -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="txtPwd" id="password" type="password" class="validate" required>
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <!-- pwd -->
                                <div class="row m-t-5">
                                    <div class="col s7">
                                        <label>
                                            <input type="checkbox" />
                                            <span>Remember Me?</span>
                                        </label>
                                    </div>
                                    <div class="col s5 right-align"><a href="#" class="link" id="to-recover">Olvide mi contraseña</a></div>
                                </div>
                                <!-- pwd -->
                                <div class="row m-t-40">
                                    <div class="col s12">
                                        <button stule="background-color: #b5e4f8 !important;" class="btn-large w100 blue accent-4" value="valid" name="btnAccesar" type="submit">Entrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    $('.tooltipped').tooltip();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $(function() {
        $(".preloader").fadeOut();
    });
    </script>
</body>

</html>