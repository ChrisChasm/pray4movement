<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Pray4Colorado</title>
    <meta name="description" content="Praying for a disciple making movement in Colorado.">
    <meta name="author" content="Pray4Colorado.org">

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
    <script src="/wp-content/themes/pray4movement/js/modernizr.js"></script>
    <script src="/wp-content/themes/pray4movement/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="/wp-content/themes/pray4movement/favicon.png" type="image/x-icon">
    <link rel="icon" href="/wp-content/themes/pray4movement/favicon.png" type="image/x-icon">

</head>

<body id="top" style="color:white;">

<?php
$page = get_page_by_title( 'Home', ARRAY_A, 'page' );
echo $page['post_content'] ?? '';
?>

<!-- Java Script
================================================== -->
<script src="/wp-content/themes/pray4movement/js/jquery-3.2.1.min.js"></script>
<script src="/wp-content/themes/pray4movement/js/plugins.js"></script>
<script src="/wp-content/themes/pray4movement/js/main.js"></script>

</body>

</html>
