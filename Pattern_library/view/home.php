<?php
include ('C:\Users\Jacob\Desktop\School\Spring_2019\C++\Week_4\Tutorial_Revamp\Pattern_library\view\header.php')
?>

<!-- <!doctype html>
<html lang="en" class="no-js">
<head> -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-19389139-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-19389139-1');
    </script> -->

<!-- <meta charset="utf-8"> -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<!-- <title>ButlerCC Webhosting - Free Webhosting for ButlerCC WebDev Students</title> -->
<!-- <meta name="description" content=""> -->
<!-- <meta name="author" content="Butlercc Webhosting"> -->
<!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
<!-- <link rel="shortcut icon" href="/favicon.ico"> -->
<!-- <link rel="apple-touch-icon" href="/apple-touch-icon.png"> -->
<!-- <link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/font-awesome-4.2.0/css/font-awesome.css">
<script src="/js/modernizr-1.5.min.js"></script>

</head> -->
<!-- <body> -->


<!-- <div id="container">
  <header class="clearfix page-header">
    <div id="branding">

      <h1>ButlerCC Webhosting</h1>
      <p>Free Webhosting for ButlerCC WebDev Students</p>

    </div>

    <div id="stlogin">

      <h2>Member Login</h2>

      <form action="https://butlerccwebdev.net:2083/login/" method=POST>      

      <p>
        <label for="user">Username:</label>
        <input name="user" type="text" id="user">
      </p>

      <p>
        <label for="pass">Password:</label>
        <input name="pass" type="password" id="pass">
      </p>

      <input type=hidden name=failurl value="https://butlerccwebdev.net/index.php?failed=1">      
	  
	    <p>
        <input type="hidden" name="login_theme" value="default">
        <input type="submit" value="Login">
      </p>
	  
      </form>
    </div>
  </header> -->

  <!-- <div id="main"> -->
    <h2> ButlerCC WebDevelopment Sandbox</h2>
    <p>Whether you've created a simple static website or developed a dynamic site using client-side webscripting, a Content Management System, or custom server-side programming, understanding how to upload your work to a webserver and share it with the public is an important part of the web development process. Additionally, web developers must  understand server configuration, behavioral differences in development and production environments, optimization techniques, and how to test accessibility, responsiveness, and site performance in the real world.</p>

    <p><strong>There is no substitute for experience, period.</strong> This webserver sandbox provides a valuable learning experience for you as a Web Developement student. You may not be proud of everything you produce and you will likely make some embarrasing mistakes along the way, but you will gain extremely valuable &#8220;real world&#8221; experience on your journey. And that's a promise!</p>

    <p>We hope to automate account setup and support functions in the near future. Until then,  the following information should help you get started.</p>


    <h3>How Do I Create My Account?</h3>
    <p>Free webserver accounts are provided <strong>only to currently enrolled Butler Community College Web Development students</strong>. Your instructor will provide your account details (your assigned subdomain, username, and initial password), demonstrate how to configure your cPanel and publish to your account, and answer your general questions, including how to request a password reset. Until there is an automated support system in place, please contact your instructor if you have any problems with your hosting account.</p>


    <h3 id="ftp">How Do I Upload  My Files? </h3>
    <p>You can use any FTP program, like 
    <!-- These links need to re worked in V2 -->
    <a href="/support/filezilla_tutorial.html">Filezilla</a>, 
    the <a href="/support/fireftp_tutorial.html">FireFTP</a>
    Firefox extension, or even <a href="/support/publishing.html">Dreamweaver</a>
    to upload  files to your account. Your instructor will walk you through this process in class. But just in case you forget, refer to the settings below, or review one of our  brief tutorials.</p>

    
    <h4>FTP Settings:</h4>
    <ol>
      <li>FTP Host: <strong>yoursubdomain.butlerccwebdev.net</strong></li>
      <li>FTP Username: <strong>yourusername</strong> (the one you use to login to your cPanel)</li>
      <li>FTP Password: <strong>password</strong> (the one you set in your cPanel)</li>
      <li>Upload Directory/Initial Host Directory: <strong>public_html</strong> - all files and folders must be stored in the public_html folder</li>
    </ol>
    <h3>What Is My URL?</h3>
    <p>Once you have uploaded files to your subdomain, point your browser to your subdomain. Your URL will look like this one except you'll enter your assigned subdomain: <strong>http://yoursubdomain.butlerccwebdev.net/</strong> - Your index page (index.html or index.php)  will be returned by the web server.</p>
    
    <!--FIX LINK -->
    <h3>
    <a href="/support/index.php">Web Developer Tutorials and Resources</a>
    </h3>
    
    <p>New tutorials and resources are continually added to the support section of this site. Some of our most popular resources are listed below. If you don't see what you need, check out the 
    
    <!--FIX LINK -->
    <a href="/support/index.php">full list of  tutorials and resources</a>
    
    .</p>
    <!-- <ul>
      <li><a href="/support/filezilla_tutorial.html">FileZilla Tutorial</a> - Install and use FileZilla to upload your web site</li>
      <li><a href="/support/web-image-sources.html">Image Sources for Web Projects</a> - Find free images released under Creative Commons licenses</li>
      <li><a href="/support/index.php#editors">Recommended Text Editors</a> for Web Developers (most are free)</li>
      <li><a href="/support/css-selectors-cheatsheet.html">CSS Selectors Cheat Sheet</a> - Most common CSS selectors, including those new in CSS3</li>
      <li><a href="https://devtuts.butlerccwebdev.net/testserver/index.php">Getting Started Guide</a> for installing and configuring a local test server with XAMPP and MAMP</li>
      <li><a href="/support/portable-apps.html">Working with portable apps on a USB drive</a> - What they are, where to get them, and related information</li>
    </ul> -->

<?php
include ('C:\Users\Jacob\Desktop\School\Spring_2019\C++\Week_4\Tutorial_Revamp\Pattern_library\view\footer.php')
?>
    <!-- <p>&copy; 2010&#8211;2019, <a href="https://butlerccwebdev.net/">ButlerCC Webhosting</a>. All rights reserved.</p>
  </div>
  <footer class="page-footer">
    <p>Generously Provided by<br>
      <a href="https://www.butlercc.edu/"><img src="/images/Butler_Horiz_206a.png" width="206" height="64" alt="Butler Community College"></a></p>
  </footer> -->
<!-- </div>! end of #container   -->
<!-- Javascript at the bottom for fast page loading --> 
<!-- Grab Google CDN's jQuery. fall back to local if necessary --> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
<script>!window.jQuery && document.write('<script src="/js/jquery-1.4.2.min.js"><\/script>')</script> 
<script src="/js/plugins.js"></script> 
<script src="/js/script.js"></script> 
