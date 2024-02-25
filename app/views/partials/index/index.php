        <?php 
        $page_id = null;
        $comp_model = new SharedController;
        ?>

<style>
    body{
        background-image: url(assets/images/ll.png);

        background-size: cover;
    }
</style>

        <div  class=" py-5">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 comp-grid">
                        <div class="">
                            <div class="fadeIn animated mb-4">
                                <div class="text-capitalize">
                                   <center><b> <h2 class="text-capitalize">SISTEMA INFORMASAUN DADUS ALUMNI IHA ESKOLA SECUNDARI S&Atilde;O JOS&Eacute; OPERARIU REMESIO </b></h2></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 comp-grid">
                        <?php $this :: display_page_errors(); ?>
                        
                        <div  class=" p-3 animated flipInY page-content" style="background: rgb(162,161,157);
background: -moz-linear-gradient(161deg, rgba(162,161,157,1) 3%, rgba(195,199,196,0.680637220708596) 61%, rgba(36,190,170,0.9719537473192402) 93%, rgba(36,190,121,1) 99%);
background: -webkit-linear-gradient(161deg, rgba(162,161,157,1) 3%, rgba(195,199,196,0.680637220708596) 61%, rgba(36,190,170,0.9719537473192402) 93%, rgba(36,190,121,1) 99%);
background: linear-gradient(161deg, rgba(162,161,157,1) 3%, rgba(195,199,196,0.680637220708596) 61%, rgba(36,190,170,0.9719537473192402) 93%, rgba(36,190,121,1) 99%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#a2a19d",endColorstr="#24be79",GradientType=1);">
                            <div>
                                <h4><i class="material-icons">lock_open</i>  Login Ba Sistema</h4>
                                <hr />
                                <?php 
                                $this :: display_page_errors(); 
                                ?>
                                <form name="loginForm" action="<?php print_link('index/login/?csrf_token=' . Csrf::$token); ?>" class="needs-validation form page-form" method="post">
                                    <div class="input-group form-group">
                                        <input placeholder="Username Or Email" name="username"  required="required" class="form-control" type="text"  />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="form-control-feedback material-icons">account_circle</i></span>
                                        </div>
                                    </div>
                                    <div class="input-group form-group">
                                        <input  placeholder="Password" required="required" v-model="user.password" name="password" class="form-control " type="password" />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="form-control-feedback material-icons">lock</i></span>
                                        </div>
                                    </div>
                                    <div class="row clearfix mt-3 mb-3">
                                        <div class="col-6">
                                            <label class="">
                                                <input value="true" type="checkbox" name="rememberme" />
                                                Remember Me
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <a href="<?php print_link('passwordmanager') ?>" class="text-danger"> Reset Password?</a>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary btn-block btn-md" type="submit"> 
                                            <i class="load-indicator">
                                                <clip-loader :loading="loading" color="#fff" size="20px"></clip-loader> 
                                            </i>
                                            Login <i class="material-icons">lock_open</i>
                                        </button>
                                    </div>
                                    <hr />
                                    <div class="text-center">
                                        Don't Have an Account? <a href="<?php print_link("index/register") ?>" class="btn btn-success">Register
                                        <i class="material-icons">account_box</i></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        