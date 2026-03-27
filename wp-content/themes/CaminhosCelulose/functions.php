<?php
    function removeHeadLinks() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    show_admin_bar( false );
    add_theme_support( 'post-thumbnails' );

    //changing logo login
    function meu_login_logo() {
    echo '
        <style type="text/css">
            #loginform .button{background: #1C2849;color: #fff; border: 1px solid #1C2849;box-shadow: none;text-shadow: none;}
            #backtoblog{display: none;}
            .login #backtoblog a:hover, .login #nav a:hover{color: #1C2849;}
            .login h1 a{
                background-image: none,url('.get_template_directory_uri().'/images/logo_admin.png);
                margin: 0 auto;
                width: 150px;
                background-size: 150px;
                background-position: bottom;
            }
			#nav, .language-switcher{display: none;
			}
            a:focus{box-shadow:none;}
        </style>
    ';
    }
    add_action('login_head', 'meu_login_logo');
    add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );
    function remove_wp_logo( $wp_admin_bar ) {$wp_admin_bar->remove_node( 'wp-logo' );}
    add_filter('admin_footer_text', 'bl_admin_footer');
    function bl_admin_footer() {echo 'Desenvolvido por <a target="_blank" href="https://argosolucoes.com.br">Argo Soluções</a>';}
    function my_login_url() { return get_option('home'); }
    function my_login_title() { return get_option('blogname'); }
    function custom_admin_title( $admin_title ) {
        return str_replace( ' &#8212; WordPress', '', $admin_title );
    }
    add_filter( 'admin_title', 'custom_admin_title' );

    function wp_responsivo_scripts() {
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.0' );
        wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/assets/css/fancybox.css', array(), '5.0' );
         wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4' );
        wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array('owl-carousel'), '2.3.4' );
        wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0' );

        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), '3.7.1', true);
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);
        wp_enqueue_script('owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
        wp_enqueue_script('fancybox-js', get_template_directory_uri() . '/assets/js/fancybox.umd.js', array('jquery'), '5.0', true);
        wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script3.js', array('jquery'), '1.0', true);
    }
    add_action( 'wp_enqueue_scripts', 'wp_responsivo_scripts' );
    
    // Move o Yoast SEO para o final da página de edição
    add_filter( 'wpseo_metabox_prio', function() {
        return 'low';
    }, 10);

?>