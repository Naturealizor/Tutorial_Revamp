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
  <link rel="stylesheet" href="<?php echo $app_path . "font-awesome-4.2.0/" . "css/"; ?>font-awesome.css">
<!-- ADD META TAGS FOR SEO -->
  <meta name="description" content="Template page for tutorials.">
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
<main>
<article>
  <div class="article_header">
  <h1>Article Heading Text</h1>
   <p>By Jacob Jordan&nbsp;&nbsp;&nbsp;&nbsp;
        <time datetime="2019-05-16">May 16, 2019</time>
        &nbsp;&nbsp;&nbsp;
        Article Template
        </p>
  </div>
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