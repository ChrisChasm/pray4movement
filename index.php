<?php
global $post;

if ( isset( $post->ID ) ) {
    $title = get_post_meta( $post->ID, 'title', true );
    $description = get_post_meta( $post->ID, 'description', true );
} else {
    $title = 'Pray4Movement';
    $description = 'Praying for a disciple making movement.';
}


?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3XJYWF723F"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-3XJYWF723F');
    </script>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?php echo esc_html( $title )  ?></title>
    <meta name="description" content="<?php echo esc_html( $description )  ?>">
    <meta name="author" content="<?php echo esc_html( $title )  ?>">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/wp-content/themes/pray4movement/css/base.css">
    <link rel="stylesheet" href="/wp-content/themes/pray4movement/css/vendor.css">
    <link rel="stylesheet" href="/wp-content/themes/pray4movement/css/main.css">

    <!-- script
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="/wp-content/themes/pray4movement/js/modernizr.js"></script>
    <script src="/wp-content/themes/pray4movement/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="/wp-content/themes/pray4movement/favicon.png" type="image/x-icon">
    <link rel="icon" href="/wp-content/themes/pray4movement/favicon.png" type="image/x-icon">

</head>

<body id="top">

<?php
$page = get_page_by_title( 'Home', ARRAY_A, 'page' );
echo $page['post_content'] ?? '';
?>

<!-- Java Script
================================================== -->

<script src="/wp-content/themes/pray4movement/js/plugins.js"></script>
<script src="/wp-content/themes/pray4movement/js/main.js"></script>

</body>

</html>
