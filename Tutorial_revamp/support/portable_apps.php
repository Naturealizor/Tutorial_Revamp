<?php require_once('../util/main.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Change on each page -->
  <title>Tutorial Article Title:  CSS Selectors Cheat Sheet</title>
  <link rel="stylesheet" href="../css/styles.css">
<!-- ADD META TAGS FOR SEO -->
  <meta name="description" content="Tutorial description paragraph for page content.">
  <meta name="author" content="Butlercc Webhosting">
  <!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
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
  <?php include('../view/header.php'); ?>
  <main>
  <article>
  <div class="article_header">
  <h1>Working with Portable Apps</h1>
   <p>By Jacob Jordan&nbsp;&nbsp;&nbsp;&nbsp;
        <time datetime="2019-05-16">May 16, 2019</time>
        &nbsp;&nbsp;&nbsp;
        &nbsp;Portable Apps
        </p>
  </div>
      <p>Portable apps are designed to be used on a portable storage device (USB drive or portable hard drive), cloud drive (like DropBox and Google Drive), or even your local PC. If you need to complete homework on a computer that does not allow you to install and configure necessary applications, portable apps are a great solution. And there are portable versions of many open-source software applications  essential for Web Development, like portable browsers and text editors.</p>
      <h3>Step 1: Install Portable Apps Platform</h3>
      <p>The best place to get portable apps is from <a href="https://portableapps.com/download" target="_blank"><strong>PortableApps.com</strong></a>. While the <strong>PortableApps.com Platform</strong> is not required to install and run portable versions of your favorite software, it does provide many benefits. The platform ties all the portable apps together, making it easy to install new apps, upgrade existing ones, and to launch the apps when needed. It even has a backup feature to backup app settings. Currently, the platform is about a <strong>4MB download; 8MB installed</strong>.</p>
      <p>For installation instructions, read <a href="https://portableapps.com/support/platform#installing">Installing the PortableApps.com Platform</a>. The support page also provides answers to many of the questions you may have after installation. As stated, you should install the platform to the <strong>root directory of your portable drive (E:\)</strong>. </p>
      <h3>Step 2: Install Portable Apps</h3>
      <p>At the end of the PortableApps Platform installation, the installer will prompt you to select the apps you want to download and install.</p>
      <p>It's tempting to go crazy checking all the portable apps you think might be necessary. However, the more apps you select at one time, the longer it will take to download and install them. Start off with just a minimum of the most essential apps. Once you are comfortable with how the platform works, you can always add more apps.      </p>
      <p><strong>Essential portable apps:</strong></p>
      <ul>
        <li><a href="https://portableapps.com/apps/development/notepadpp_portable"><strong>Notepad++</strong></a> Text Editor</li>
        <li><a href="https://portableapps.com/apps/graphics_pictures/gimp_portable"><strong>Gimp</strong></a> (Photo and Image Editor)</li>
        <li><a href="https://portableapps.com/apps/internet/filezilla_portable"><strong>FileZilla</strong></a> (FTP client)</li>
        <li><a href="https://portableapps.com/apps/internet/google_chrome_portable"><strong>Google Chrome</strong></a></li>
        <li><a href="https://portableapps.com/apps/internet/firefox_portable"><strong>Mozilla Firefox</strong></a></li>
        <li><a href="https://portableapps.com/apps/internet/opera_portable"><strong>Opera</strong></a></li>
        <li><a href="https://portableapps.com/apps/security/clamwin_portable"><strong>ClamWin</strong></a> (Antivirus)</li>
      </ul>
      <p><strong>Other portable apps packaged with PortableApps launcher</strong></p>
      <ul>
        <li><a href="https://github.com/sagiegurari/brackets-portable/releases/latest"><strong>Brackets Portable</strong></a></li>
        <li><a href="https://github.com/garethflowers/atom-portable/releases/latest"><strong>Atom Portable</strong></a> (older than full version of <a href="https://atom.io/">Atom</a> editor)</li>
        <li><a href="http://www.sublimetext.com/3"><strong>SublimeText3</strong></a> - (compressed .zip file; not packaged with PortableApps launcher)<br>
Note: Download portable version and extract   .zip file to temporary location. Then move <strong>Sublime Text</strong> folder to Portable Apps folder on USB drive. To access from Portable Apps menu, click <strong>Apps</strong> button and choose <strong>Refresh Apps</strong>. Sublime Text will appear in Other category. To move to another category, right-click on executable and choose Category. </li>
      </ul>
      <h3>Standalone Installation</h3>
      <p>The Portable Apps platform makes updating and adding apps an easy   process, but it's not required. All portable apps packaged with the PortableApps launcher can be installed   manually.</p>
      <ol>
        <li>Use provided links to download standalone portable apps.</li>
        <li>Browse to the location of the downloaded <strong>AppNamePortable_x.x.paf.exe</strong> file.</li>
        <li>Double-click the file to start the installation.</li>
        <li>Follow the on-screen prompts to select the location for installation. <br>
          If the installer detects an existing <strong>PortableApps</strong> directory on one of your attached drives or within your USERPROFILE   folder, it will automatically select that. Otherwise, the current   directory will be selected by default. Within the directory you select,   an <strong>AppNamePortable</strong> directory will be created containing   the portable app. Note that installing to the C:\Program Files or   equivalent is not supported.</li>
      </ol>
      <p><strong>Installing on Lab computers:</strong> Create PortableApps directory in <strong>Documents</strong> and select in step 4 above.</p>
      <h3>Other Portable Apps by Category</h3>
      <p>Some other useful apps are listed below  by PortableApps.com category.</p>
      <h4>Development</h4>
      <p><strong>Please note:</strong> Installing XAMPP Lite should be avoided unless you are already comfortable with installing, configuring, and running a packaged local test server and know why you need it. XAMPP is not for newbies.</p>
      <ul>
        <li><strong>XAMPP Lite</strong> - Apache, mySQL, PHP, phpMyAdmin, etc in one package <br>
        NOTE: Click <strong>Download XAMPP Lite</strong> button to go to <a href="https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/">XAMPP for Windows downloads on Sourceforge.net</a>. Open the directory for the appropriate XAMPP version, and grab the <strong>xampp-portable-win</strong> (either .zip or .7z) file. Do NOT try to use the executable (.exe) file for installation to portable drive. Basic installation instructions follow, but if you need additional help check the <a href="https://community.apachefriends.org/f/">Apache Friends Support Forum</a> (English forums at bottom).</li>
      </ul>
      <figure>
        <div class="notes">
          <p><strong>To install XAMPP Lite on USB Drive: </strong></p>
          <ol>
            <li>Unpack/extract to the <strong>root directory</strong> of your portable drive (e:\xampp or g:/xampp). DO NOT run &quot;setup_xampp.bat&quot; for portable installation!</li>
            <li>Open the xampp directory and double-click the <strong>xampp-control.exe</strong> file to run the XAMPP Control panel.</li>
            <li>Click <strong>Start</strong> button next to Apache to turn on your web server; <strong>Stop</strong> button to turn it off.</li>
            <li>Click <strong>Start</strong> button next to MySQL if you need database access; <strong>Stop</strong> button to turn it off. <br>
              Refer to <a href="<?php echo $app_path . "support/testserver/"; ?>install-xampp.php">Using XAMPP Control Panel tutorial</a> for detailed information on how to use the control panel.</li>
            <li>After starting Apache, type <strong>http://localhost/</strong> in address bar of browser to load default index.html in <strong>htdocs</strong> folder.</li>
          </ol>
        </div>
      </figure>
      <h4>Graphics &amp; Pictures</h4>
      <ul>
        <li><strong>Blender</strong> - 3D modelling, animation, rendering, post-production, playback</li>
        <li><strong>Gimp</strong> - Photo and Image Editor (open source alternative for PhotoShop) <br>
          Note: To dock floating panels/windows, choose <strong>Windows -&gt; Single-Window mode</strong>.</li>
        <li><strong>IcoFX</strong> - full-featured icon editor</li>
        <li><strong>Inkscape</strong> - Vector Graphics Editor (open source alternative for Illustrator) and an excellent choice for creating SVG files</li>
        <li><strong>Pencil Project</strong> - prototyping and diagramming tool</li>
        <li><strong>PngOptimizer</strong> - image converter and optimizer</li>
      </ul>
      <h4>Internet</h4>
      <ul>
        <li><strong>FileZilla</strong> - full-featured FTP client</li>
        <li><strong>Google Chrome</strong></li>
        <li><strong>Mozilla Firefox</strong></li>
        <li><strong>Opera</strong></li>
      </ul>
      <h4>Office</h4>
      <ul>
        <li><strong>Foxit Reader</strong> - small and fast PDF reader</li>
        <li><strong>LibreOffice</strong> - word processor, spreadsheet, presentations with excellent compatibility</li>
        <li><strong>Stickies</strong> - lightweight sticky notes</li>
        <li><strong>Sumatra PDF</strong> - PDF, Comic Book, and E-book Reader</li>
      </ul>
      <h4>Security</h4>
      <ul>
        <li><strong>ClamWin</strong> - Antivirus on the go</li>
      </ul>
      <h4>Utilities</h4>
      <ul>
        <li><strong>7-Zip</strong> - File archiver and compressor</li>
        <li><strong>WinMerge</strong> -  file comparison and merging</li>
      </ul>
      <?php include('../view/article-footer.php'); ?>
      </article>
    </main>
<?php 
include('../view/footer.php');
?>
<!--! end of #container -->
</body>
</html>
