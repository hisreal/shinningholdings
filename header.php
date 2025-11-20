<?php
header("Cache-Control: no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
?>
<?php
foreach ($_COOKIE as $name => $value) {
    setcookie($name, "", time() - 3600, "/");
}
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Finance and Investment HTML Template by Indonez">
	<meta name="keywords" content="blockit, bootstrap, indonez, handlebars, scss, javascript">
	<meta name="author" content="Indonez">
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
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/user/favicon.png" type="image/x-icon">
	<!-- Touch icon -->
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
	<title>Shinning Holding || Manage & grow investment assets securely</title>
	
</head>