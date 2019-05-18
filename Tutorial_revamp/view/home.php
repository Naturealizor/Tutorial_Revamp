<?php require_once('../util/main.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Change on each page -->
  <title>Tutorial Article Title:  Tutorials Landing Page</title>
  <link rel="stylesheet" href="../css/styles.css">
<!-- ADD META TAGS FOR SEO -->
  <meta name="description" content="Tutorial list landing page">
  <meta name="author" content="Butlercc Webhosting">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!-- ADD ON EVERY TUTORIAL PAGE -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-19389139-1">
    </script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-19389139-1');
  </script>
</head>

<body>
<?php include('view/header.php'); ?>
  <main>
   <article>
      <h2>Web Developer Tutorials and Resources</h2>
      <p>Need help with general web development topics or help specifically related to your Butlercc WebHosting student account? Find it here.</p>
      <h3 id="tools">Browser Tools</h3>
      <ul>
        <li><a href="/support/css-debugging.html">CSS Debugging Tools and Resources</a> - How to access and use browser integrated tools and addons essential to debugging HTML and CSS</li>
        <li><a href="<?php echo $app_path . "support/"; ?>browser_addons.php">Useful Browser Add-ons and Extensions</a> - Essential Chrome, Firefox, and Opera add-ons and extensions for web developers. Includes popular Firefox add-ons FireFTP, HeadingsMap, and Web Developer Toolbar.</li>
        <li><a href="<?php echo $app_path . "support/"; ?>portable_apps.php">Working with portable apps on a USB drive</a> - What they are, where to get them, and related information</li>
      </ul>
      <h3 id="cheatsheets">Cheat Sheets</h3>
      <ul>
        <li><a href="<?php echo $app_path . "support/"; ?>css_cheatsheet.php">CSS Selectors Cheat Sheet</a> - Most common CSS selectors, including those new in CSS3</li>
      </ul>
      <h3 id="css">CSS</h3>
      <ul>
        <li><a href="/support/css-debugging.html">CSS Debugging Tools and Resources</a> - How to access and use browser integrated tools and addons essential to debugging HTML and CSS</li>
        <li><a href="<?php echo $app_path . "support/"; ?>css_cheatsheet.php">CSS Selectors Cheat Sheet</a> - Most common CSS selectors, including those new in CSS3</li>
        <li><a href="/support/webfonts.html">Web Fonts Tutorial</a> - Use your own hosted web fonts with @font-face or link to Google web fonts</li>
      </ul>
      <h3 id="ftp">FTP </h3>
      <ul>
        <li><a href="/support/fireftp_tutorial.html">FireFTP Tutorial</a> - Install and use the FireFTP addon in Firefox to upload your web site</li>
        <li><a href="/support/filezilla_tutorial.html">FileZilla Tutorial</a> - Install and use FileZilla to upload your web site</li>
        <li><a href="/support/publishing.html">Publishing with Dreamweaver</a> - Use Dreamweaver to setup a connection to the web server and upload your web site</li>
      </ul>
      <h3 id="forms">Forms</h3>
      <ul>
        <li><a href="<?php echo $app_path . "support/"; ?>processing_forms.php">Processing Form Data</a> - Use the formmail.pl script to send user data gathered from a form to your email account</li>
      </ul>
      <h3 id="graphics">Graphics</h3>
      <ul>
        <li><a href="/support/gimp/index.html">Image Editing with Gimp</a> - Install and use Gimp to edit images. Includes tutorials for common image editing operations.</li>
        <li><a href="/support/web-image-sources.html">Image Sources for Web Projects</a> - Find free images released under Creative Commons licenses</li>
        <li><a href="/support/web-image-formats.html">Web Image File Formats</a> - Comparison of GIF, JPEG, and PNG file formats</li>
      </ul>
      <h3 id="html5">HTML5</h3>
      <ul>
        <li><a href="/support/html5-video/index.php">HTML5 Video Tutorial</a> - Use HTML5 to serve video in current browsers without browser plugins</li>
        <li><a href="/support/html5-video/audio-demo.html">HTML5 Audio Tutorial</a> - Use HTML5 to serve audio in current browsers</li>
      </ul>
      <h3 id="testserver">Local Test (Development) Server</h3>
      <ul>
        <li><a href="https://devtuts.butlerccwebdev.net/testserver/index.php">Getting Started Guide</a></li>
        <li><a href="https://devtuts.butlerccwebdev.net/testserver/install-xampp.html">Installing XAMPP (Win/Mac)</a></li>
        <li><a href="https://devtuts.butlerccwebdev.net/testserver/configure-php.html">Configuring PHP</a></li>
        <li><a href="https://devtuts.butlerccwebdev.net/testserver/using-xampp-control-panel.html">Using XAMPP Control Panel</a></li>
        <li><a href="https://devtuts.butlerccwebdev.net/testserver/vhosts-setup-win.html">Virtual Host Setup with XAMPP</a></li>
        <li><a href="https://devtuts.butlerccwebdev.net/testserver/install-mamp.html">Installing MAMP for Mac (includes Virtual Host Setup)</a></li>
      </ul>
      <h3>WordPress</h3>
      <ul>
        <li><a href="https://devtuts.butlerccwebdev.net/wordpress/wp-5min-install.html">WordPress 5-Minute Install</a></li>
      </ul>
      <h3>Applications for Web Developers </h3>
      <h4 id="browsers">Browsers for testing</h4>
      <ul>
        <LI><a href="https://www.mozilla.org/en-US/firefox/" target="_blank"> Mozilla Firefox</a></LI>
        <li><a href="https://www.google.com/chrome/browser/desktop/index.html" target="_blank">Google Chrome</a></li>
        <li><a href="http://www.opera.com/download/" target="_blank">Opera</a></li>
        <li><a href="https://vivaldi.com/" target="_blank">Vivaldi</a> - A developer's browser</li>
        <li><a href="https://brave.com/" target="_blank">Brave</a> from Brendan Eich, creator of JavaScript</li>
      </ul>
      <h4 id="ftpapps">FTP Clients</h4>
      <ul>
        <li><a target="_blank" href="https://filezilla-project.org/download.php?show_all=1">FileZilla</a> (Win/Mac) </li>
        <li><a target="_blank" href="https://addons.mozilla.org/en-US/firefox/addon/fireftp/">FireFTP</a> Firefox extension (Win/Mac)</li>
      </ul>
      <h4 id="editors">Text Editors</h4>
      <ul>
        <li><a target="_blank" href="https://notepad-plus-plus.org/">Notepad ++</a> (Win)</li>
        <li><a target="_blank" href="https://brackets.io/">Brackets</a> (Win/Mac) - Open source editor created by Adobe</li>
        <li><a target="_blank" href="https://atom.io/">Atom</a> (Win/Mac) - Open source editor created by Github</li>
        <li><a target="_blank" href="https://www.sublimetext.com/3">Sublime Text 3</a> (Win/Mac)</li>
      </ul>
      <h4 id="ide">IDE's</h4>
      <ul>
        <li><a href="https://netbeans.org/downloads/">NetBeans</a></li>
        <li>JetBrains <a href="https://www.jetbrains.com/student/">PHPStorm</a> (free for students with .edu email address)</li>
        <li><a href="https://code.visualstudio.com/">Visual Studio Code</a></li>
      </ul>
       <?php include('../view/article-footer.php'); ?>
    </article>
  </main>

<?php
include ('footer.php')
?>
    </body>
</html>

<!--
//<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
//<script>!window.jQuery && document.write('<script src="/js/jquery-1.4.2.min.js"><\/script>')</script> 
//<script src="/js/plugins.js"></script> 
//<script src="/js/script.js"></script> 
-->
