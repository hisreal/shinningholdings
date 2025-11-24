<!doctype html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $page_title; ?> | Shining Holdings</title>

  <!-- Author -->
  <meta name="author" content="Shining Holdings" />

  <!-- Description -->
  <meta name="description" content="<?php echo $page_description; ?>" />

  <!-- Keywords -->
  <meta name="keywords" content="<?php echo $page_keyword; ?>" />

  <!-- Favicon -->
  <link rel="icon" href="img/user/favicon.png" type="image/x-icon" />
  <link rel="shortcut icon" href="img/user/favicon.png" type="image/x-icon" />

  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="<?php echo $page_title; ?> | Shining Holdings" />
  <meta property="og:description" content="<?php echo $page_description; ?>" />
  <meta property "og:image" content="https://www.shiningholdings.com/path-to-share-image.jpg" />
  <meta property="og:url" content="<?php echo $page_url; ?>" />
  <meta property="og:type" content="website" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo $page_title; ?>| Shining Holdings" />
  <meta name="twitter:description" content="<?php echo $page_description; ?>" />
  <meta name="twitter:site" content="@ShiningHoldings" />

  <meta name="robots" content="index, follow" />

	<meta name="theme-color" content="#125a52">
	<!-- critical preload -->
	<link rel="preload" href="js/vendors/bootstrap.bundle.min.js" as="script">
	<link rel="preload" href="css/style.css" as="style">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- icon preload -->
	<link rel="preload" href="fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
	<!-- font preload -->
	<link rel="preload" href="fonts/dm-sans-v11-latin-700.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="fonts/dm-sans-v11-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
	<!-- stylesheet -->
	<link rel="stylesheet" href="css/style.css?v=<?php echo filemtime('css/style.css');?>">
	
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
/>
	<style>
		input.form-control,
select.form-select,
textarea.form-control {
  border: 1px solid #125a52 !important;
  box-shadow: none !important;
}

input.form-control:focus,
select.form-select:focus,
textarea.form-control:focus {
  border-color: #125a52 !important;
  box-shadow: 0 0 0 0.2rem rgba(18, 90, 82, 0.25) !important;
}


	</style>
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon.png">
	
</head>