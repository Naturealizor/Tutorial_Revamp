<?php 
require_once('../../util/main.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Change on each page -->
  <title>Installing XAMPP</title>

  <link rel="stylesheet" href="<?php echo $app_path . "css/"; ?>styles.css">
  <!-- Figure out if I want to keep the font-awesome stuff -->
  <link rel="stylesheet" href="<?php echo $app_path . "font-awesome-4.2.0/" . "css/"; ?>font-awesome.css">
<!-- ADD META TAGS FOR SEO -->
  <meta name="description" content="Install XAMPP for Windows Tutorial.">
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
include('../../view/header.php');
?>
<main>
<article>
  <header class="article-header">
  <h2>Installing XAMPP</h2>
  <p>By B Lingafelter&nbsp;&nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;
        <time datetime="2019-01-17">Updated: Jan 17, 2019</time>
        &nbsp;&nbsp;&nbsp;
        <i class="fa fa-tags"></i>&nbsp;testserver, workflow
        </p>
  </header>
  <p>This quide is written for <strong>XAMPP 7.3.0</strong> with PHP 7.3.0 (the current version today). First, head over to <a href="http://www.apachefriends.org/download.html" target="_blank">Apache Friends</a> and download the <strong>xampp-win32-7.3.0-0-VC15-installer.exe</strong> file (Windows).</p>
  <p>Mac users should download the <strong>xampp-osx-7.3.0-0-installer.dmg</strong> disk image file (avoid the XAMPP-VM version for now). Skip down to <a href="#mac">Install XAMPP for Mac</a> for installation instructions.</p>
  <div class="notes">
    <h3>Notes on  Windows installation: </h3>
    <ul>
      <li>If you have an older version of XAMPP already installed in the C:\XAMPP default location, run the uninstaller to completely remove it before installing the newer version.</li>
      <li>Skype uses port 80 as alternate port. If you have Skype installed, check the following before installing XAMPP. In Skype choose <strong>Actions -&gt; Options -&gt; Connection</strong>.  Clear the check box for "use port 80 for an alternate port" and restart Skype to verify it still functions normally. </li>
      <li> The first time you start Apache and
        MySQL you may get a Windows Security alert - be sure to  click <strong> Allow Access (Unblock)</strong> for each alert. </li>
      <li>On <strong>Windows 10</strong>, disable IIS from running on port 80 by default:
        <ul>
          <li>Open the <strong>Services</strong> panel in Computer Management</li>
          <li>Search for and select the <strong>World Wide Web Publishing Service</strong></li>
          <li>Click <strong>Stop</strong> the service link</li>
          <li>Double-click the service name</li>
          <li>In the <strong>Startup type </strong>field, select <strong>Disabled</strong> (or Manual)</li>
          <li>Click <strong>OK</strong> to save your changes</li>
        </ul>
      </li>
      <li> When you are finished with local testing, remember to stop Apache and MySQL (XAMPP Control Panel).</li>
      </ul>
</div>
  
  <h3>Install XAMPP Version <strong>7.3.0</strong> for Windows</h3>
  <p>Install using  the defaults.</p>
  <ol>
    <li>Close all open applications and double-click  the <strong>xampp-win32-7.3.0-0-VC15-installer.exe</strong> file to run the installer. </li>
    <li>If you see the Windows UAC warning message shown below, click <strong>OK</strong>. You will not be installing XAMPP in Program Files folder, so this will not affect you.<br>
      <img src="<?php echo $app_path . "support/" . "testserver/"; ?>uac-warning.png" alt="XAMPP Install UAC Warning Message"></li>
    <li>When the Setup Setup Wizard appears, click <strong>Next</strong> to start the installation. <br>
      <img src="<?php echo $app_path . "support/" . "testserver/"; ?>xampp-install1.png" alt="XAMPP Install Setup Wizard"></li>
    <li>With all components  selected by default, click <strong>Next</strong>. <br>
      <img src="<?php echo $app_path . "support/" . "testserver/"; ?>xampp-install2.png" alt="XAMPP Install Components"></li>
    <li>Accept default location of <strong>c:\xampp</strong> and click <strong>Next.</strong><br>
      <img src="<?php echo $app_path . "support/" . "testserver/"; ?>xampp-install3.png" alt="XAMPP Install Location"></li>
    <li>Clear the <strong>Learn more about BitNami for XAMPP</strong> checkbox and click <strong>Next</strong>.<br>
      <img src="<?php echo $app_path . "support/" . "testserver/"; ?>xampp-install4.png" alt="Bitnami for XAMPP">  </li>
    <li>Click <strong>Next</strong> to begin installing XAMPP.<br>
      <img src="<?php echo $app_path . "support/" . "testserver/"; ?>xampp-install5.png" alt="Install XAMPP">  </li>
    <li>The install will take a few minutes. <br>
      <img src="<?php echo $app_path . "support/" . "testserver/"; ?>xampp-install6.png" alt="Installing XAMPP">  </li>
    <li>When the installer is finished,  click <strong>Finish</strong> to start the XAMPP Control Panel.<br>
      <img src="<?php echo $app_path . "support/" . "testserver/"; ?>xampp-install7.png" alt="Xampp Install Complete">  </li>
    <li>You can choose not to open the XAMPP Control Panel at this point. To open the XAMPP Control Panel later, double-click the XAMPP Control Panel shortcut on your desktop, or go to <strong>Start &gt; All Programs &gt;  XAMPP &gt; XAMPP Control Panel</strong>.<br>
      <img src="<?php echo $app_path . "support/" . "testserver/"; ?>xampp-control-panel.png" alt="XAMPP Control Panel"></li>
    <li>In the XAMPP Control Panel, click <strong>Start</strong> button next to both <strong>Apache</strong> and <strong>MySQL</strong>. <br>
      <strong>Note:</strong> The first time you start Apache and
      MySQL you may get a Windows Security alert - be sure to  click <strong> Allow Access (Unblock)</strong> on local network <strong>for both Apache and MySQL</strong>.  </li>
    <li>In a few moments, you should see PID/Port information next to the module that's now running, and the Action button  will now be labeled as <strong>Stop</strong> button. (Start/Stop is a toggle) <br>
      <img src="<?php echo $app_path . "support/" . "testserver/"; ?>xampp-cpanel-running.png" alt="XAMPP Control Panel with Modules Running"></li>
    <li><strong>VERY IMPORTANT!
      </strong>Unless you have a valid reason to do so, <strong>DO NOT</strong> mark the checkboxes on the far left of the Control Panel which would  allow  components to run as a service (Apache, MySQL).  This does mean you'll have to open the XAMPP control panel and manually start Apache and MySQL servers when you need to use them, but you are also much less likely to have conflicts with other applications or servers that use one or more of the same ports.</li>
    <li>To test the install,  click the <strong>Admin</strong> button next to Apache to open the XAMPP for Windows page in your default browser.<br>
      <strong>Alternative:</strong> You can also   type <strong>http://localhost</strong> in address bar of a browser to open the XAMPP Administration page.  </li>
    <li>Choose <strong>English</strong> if prompted for language.</li>
    <li>If the XAMPP for Windows page (shown below) is displayed, the install was successful and you're ready to move on.<br>
      <img src="<?php echo $app_path . "support/" . "testserver/"; ?>xampp-startpage.jpg" alt="XAMPP Start Page"></li>
    <li><strong>Stop</strong> both Apache and MySQL servers in XAMPP Control Panel.</li>
    <li>To hide the XAMPP Control Panel, leaving it in Notifications area, click the <strong>Close</strong> &quot;X&quot; button (upper right).</li>
    <li>Click <strong>Quit</strong> button to close XAMPP Control Panel and remove it from Notification area. </li>
    <li>You are ready to  <a href="<?php echo $app_path . "support/" . "testserver/"; ?>configure-php.html">Configure PHP</a>.</li>
    <li>If you receive any error messages when starting the servers, review the <a href="https://www.apachefriends.org/faq_windows.html">XAMPP Windows FAQs</a> page for help.</li>
    </ol>
  <h3 id="mac">Install XAMPP Version 7.3.0 for MacOS X</h3>
  <p>Install using the defaults.</p>
  <ol>
    <li>Use <strong>Finder</strong> to locate the downloaded disk image and double-click  the<strong> xampp-osx-7.3.0-0-installer.dmg</strong> file to open the installer window. </li>
    <li>Drag the XAMPP folder onto the Applications folder. You will be prompted to enter your system password.</li>
    <li>When the Setup Wizard appears, click <strong>Next</strong> to start the installation.</li>
    <li>When prompted, choose to <strong>install  all components</strong> and <strong>accept the default location</strong>, XAMPP folder in Applications.</li>
    <li>When prompted, <strong>clear</strong> the <strong>Learn more about BitNami for XAMPP</strong> checkbox and click <strong>Next</strong>.</li>
    <li>When the installer is finished,  click <strong>Finish</strong> to start the XAMPP Control Panel (/Applications/XAMPP/<strong>manager-osx.app</strong>).<br>
    <img src="<?php echo $app_path . "support/" . "testserver/"; ?>manager-osx.jpg" alt="XAMPP Control Panel OSX">
    </li>
    <li>On the  Manage Servers tab, select <strong>Apache Web Server</strong> and click <strong>Start</strong> button.</li>
    <li>Select <strong>MySQL Database</strong> and click <strong>Start</strong> button.</li>
    <li>To test the install, open a browser and type <strong>http://localhost</strong> in Address bar. If the install is successful, you will see the XAMPP Start page, similar to one shown above for Windows.</li>
    <li><strong>Stop</strong> both Apache Web Server and MySQL Database servers in XAMPP Control Panel.</li>
    <li>Optional: You may want to add <strong>manager-osx.app</strong> (XAMPP Control Panel) to dock for future convenience.</li>
    <li>You are ready to <a href="<?php echo $app_path . "support/" . "testserver/"; ?>configure-php.html">Configure PHP</a>.</li>
    <li>If you receive any error messages when starting the servers, review the <a href="https://www.apachefriends.org/faq_osx.html">XAMPP OSX FAQs</a> page for help.</li>
  </ol>
  
  <!-- ADD PHP INCLUDE FOR ARTICLE FOOTER -->
  <?php include('../../view/article-footer.php'); ?>
</article>

</main> <!-- END OF MAIN ELEMENT -->

<!-- ADD PHP INCLUDE FOR PAGE FOOTER -->
<?php include('../../view/footer.php'); ?>
<!-- ADD SCRIPTS AS NEEDED -->

</body>
</html>