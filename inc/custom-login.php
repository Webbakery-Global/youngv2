<?php

function eigen_login_logo()
{ ?>
    <style type="text/css">
        .login {
            background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/young/assets/images/web-login.jpg);
            background-size: cover !important;
            position: relative;
        }

        .login form {
            background: rgba(255, 255, 255, 0.8) !important;
        }

        .wp-core-ui .button-primary {
            background: #000 !important;
        }


        #login {
            padding: 16% 0 0 !important;
        }

        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/young/assets/svg/logo-dark.svg);
            width: 300px;
            height: 50px;
            background-size: cover;
        }

        #loginform {
            border-radius: 10px !important;
        }

        .login #nav, .login #backtoblog {
            padding: 0 !important;
        }

        #nav a, #backtoblog a {
            color: #fff !important;
            text-align: center;
            display: block;


        }
    </style>
<?php }

add_action('login_enqueue_scripts', 'eigen_login_logo');

?>