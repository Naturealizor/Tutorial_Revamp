<?php 
require_once('../util/main.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Change on each page -->
  <title>Tutorial Article Title:  Butlercc WebHosting</title>
  <link rel="stylesheet" href="<?php echo $app_path . "css/"; ?>styles.css">
  <!-- Figure out if I want to keep the font-awesome stuff -->
  <link rel="stylesheet" href="/font-awesome-4.2.0/css/font-awesome.css">
<!-- ADD META TAGS FOR SEO -->
  <meta name="description" content="Tutorial description paragraph for page content.">
  <meta name="author" content="Butlercc Webhosting">
  <!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!-- ADD ON EVERY TUTORIAL PAGE -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-19389139-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-19389139-1');
  </script>
</head>

<body>
<!--ADD PHP INCLUDE FOR PAGE HEADER -->
<?php 
include('../view/header.php');
?>

<article>
  <header class="article-header">
  <h2>Article Heading Text</h2>
  <p>By Author Name&nbsp;&nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;
  <time datetime="2014-09-08">Published/Updated: Date</time>&nbsp;&nbsp;&nbsp;
  <i class="fa fa-tags"></i>&nbsp;tag name
  </p>
  </header>
  <p>Article Content Goes Here</p>
  <p>Article Content Goes Here</p>
  <p>Article Content Goes Here</p>
  
  <!-- ADD PHP INCLUDE FOR ARTICLE FOOTER -->
  <?php include('../view/article-footer.php'); ?>
</article>

</main> <!-- END OF MAIN ELEMENT -->

<!-- ADD PHP INCLUDE FOR PAGE FOOTER -->
<?php include('../view/footer.php'); ?>
<!-- ADD SCRIPTS AS NEEDED -->

</body>
</html>