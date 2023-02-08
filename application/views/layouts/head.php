<?php
$meta_title='';
$meta_author='';
$meta_description='';
$meta_keywords='';
$seo_script = '';

if(isset($course)){
	$meta_title = $course->meta_title;
	$meta_author = $course->meta_author;
	$meta_description = $course->meta_description;
	$meta_keywords = $course->meta_keywords;
	$seo_script = $course->seo_script;
}
?>
<head>
	<meta charset="utf-8" />
	<title><?php echo $meta_title ?></title>
	<meta name="description" content="<?php echo $meta_description ?>">
	<meta name="keywords" content="<?php echo $meta_keywords ?>" />
	<meta name="author" content="<?php echo $meta_author ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<meta name="robots" content="index, follow">

	<meta name="revisit-after" content="15 days"/>
	
    <title>Train 2 Success - T2S</title>
	 
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	
	<!-- Custom Color Option -->
	<link href="<?php echo base_url();?>assets/css/colors.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/fevicon.png" />
	<link href="<?php echo base_url();?>assets/css/sidebar.css" rel="stylesheet">
	<link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
	
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script type="text/javascript">
		var base_url = '<?php echo base_url();?>';
		var userid = <?php echo $this->session->userdata('userid') ? $this->session->userdata('userid') : 'null';?>;
	</script>
	<script src="https://www.google.com/recaptcha/api.js"></script>
	
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155199064-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-155199064-1');
</script>
<script type="application/ld+json"><?php echo $seo_script ?> </script>
</head>
