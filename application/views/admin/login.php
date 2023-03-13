<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url('assets/img/bpuic.png') ?>" type="image/x-icon">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assetsAdmin/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assetsAdmin/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assetsAdmin/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assetsAdmin/css/style.css">
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>
    <!-- Pre-loader end -->

    <section class="login p-fixed d-flex text-center bg-white">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" method="POST" action="<?= base_url(); ?>admin/loginadmin">
                            <div class="text-center">
                                <img src="assets/img/bpuic.png" alt="logo.png" height="100" width="150">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary text-center">Login Admin</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <span class="md-line"></span>
                                </div>
                                
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Log In</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    
    <script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/modernizr/css-scrollbars.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assetsAdmin/js/common-pages.js"></script>
    <!-- <script>

         $(".alert").hide(); 
                $('.masuk').click(function(e) {
                   
                    e.preventDefault();
                    if($('[name="username"]').val() == ''){
                        $("#pesan_alert").html("username tidak boleh kosong!");
                        $(".alert").show('hidden'); 
                        setTimeout(function() { 
                            $(".alert").hide('hidden'); 
                        }, 3000);
                        $('[name="username"]').focus();
                    }else if($('[name="password"]').val() == ''){
                        //$.HSCore.components.HSValidation.init('.js-validate');
                        $("#pesan_alert").html("password tidak boleh kosong!");
                        $(".alert").show('hidden');
                        setTimeout(function() { 
                            $(".alert").hide('hidden'); 
                        }, 3000);
                        $('[name="password"]').focus();

                    }else{
                        var formData = new FormData();

                        formData.append('username', $('[name="username"]').val());
                        formData.append('password', $('[name="password"]').val());

                        proses(formData);
                    }

                    });


        function proses(data_){
                    //alert(JSON.stringify(data_));
                    $.ajax({
                        url: "<?php echo base_url();?>admin/loginadmin",
                        type: "POST",
                        data: data_,
                        dataType: "JSON",
                        processData: false,
                        contentType: false,
                        success: function(data){
                        if(data.return == 1){
                            if(data.akses == "admin"){
                                top.location.href = "<?php echo base_url('dashboard');?>";
                            }
                            
                        }else{
                            $('[name="username"]').val('').focus();
                            $('[name="password"]').val('');
                            $("#pesan_alert").html(data.keterangan);
                            $(".alert").show('hidden');
                                setTimeout(function() { 
                                $(".alert").hide('hidden'); 
                                }, 2000);

                        }
                        },
                        error: function(jqXHR, textStatus, errorThrown){
                        alert("Proses Login gagal");
                        }
                    });
                }
    </script> -->
</body>

</html>
