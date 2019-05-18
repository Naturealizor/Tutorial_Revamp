<?php require_once('../util/main.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Change on each page -->
    <title>Browser Add-ons and Extensions</title>
    <link rel="stylesheet" href="../css/styles.css">
    <!-- ADD META TAGS FOR SEO -->
    <meta name="description" content="Browser add-ons and extensions for developers.">
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

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-19389139-1');

    </script>
</head>

<body>
    <?php include('../view/header.php'); ?>
    <main>
        <article>
            <div class="article_header">
                <h1>Processing Form Data</h1>
                <p>By Jacob Jordan&nbsp;&nbsp;&nbsp;&nbsp;
                    <time datetime="2019-05-16">May 16, 2019</time>
                    &nbsp;&nbsp;&nbsp;
                    &nbsp;Add-ons and Extensions for devs
                </p>
            </div>
            <p>Your student account at Butlercc Webhosting has a copy of the <strong>formmail.pl</strong> perl script that can be used to submit your user's form data via email. However, before you can use it, you must first setup an email account on your subdomain and then add the script and some hidden fields to your form.</p>
            <h3>Setup Email Account in cPanel</h3>
            <ol>
                <li>Log in to your cPanel and select <strong>Email Accounts</strong> icon (Mail category).</li>
                <li>Create an email account for your subdomain i.e. <em>support@your_subdomain.butlerccwebdev.net</em>. You may use the same password you set for your cPanel login.</li>
                <li>Select <strong>Forwarders</strong> icon (Mail category) and click <strong>Add Forwarder</strong> button.<br>
                    <img src="../images/email-forwarder.jpg" alt="Email: Add Forwarder"><br>
                </li>
                <li>Forward your new email account to your Butler pipeline email address. This makes it easier to retrieve any user form data submitted by the script, as you will not need to login to your cPanel just to check your email.</li>
            </ol>
            <h3>Add the script and related fields to your form</h3>
            <ol>
                <li>In a text editor, open the .html page that contains your form.</li>
                <li>Edit the form element's <strong>action</strong> attribute to point to your formmail.pl script, and set the <strong>method</strong> attribute to <strong>post</strong>. It should resemble the following:<br>
                    <code>&lt;form id=&quot;contact&quot; action=&quot;http://<strong>your_subdomain</strong>.butlerccwebdev.net/cgi-sys/formmail.pl&quot; method=&quot;post&quot;&gt; </code></li>
                <li>Add three hidden fields to your form. These can be placed anywhere inside the form element.</li>
                <li>Add a hidden field for <strong>recipient</strong> and set the value to your new email address.<br>
                    Example: <code>&lt;input type=&quot;hidden&quot; name=&quot;recipient&quot; value=&quot;<strong>support@your_subdomain</strong>.butlerccwebdev.net&quot;&gt;</code></li>
                <li>Add a hidden field for <strong>subject</strong> and set a value to help you identify any messages sent by the script.<br>
                    Example: <code>&lt;input type=&quot;hidden&quot; name=&quot;subject&quot; value=&quot;<strong>FormMail Contact Information</strong>&quot;&gt; </code></li>
                <li>Add a hidden field for <strong>redirect</strong> and set the value to the name of the page you want users to see after submitting the form.<br>
                    Example: <code>&lt;input type=&quot;hidden&quot; name=&quot;redirect&quot; value=&quot;<strong>http://your_subdomain.butlerccwebdev.net/path-to/thankyou.html</strong>&quot;&gt;</code> </li>
                <li>Save the page.</li>
                <li>Create a new .html page with the text message you want users to see after they submit the form. Be sure the name and location of this file matches the path specified in step 6.</li>
                <li>Publish the page containing your form, as well as the redirect page.</li>
                <li>Open the page containing your form in a browser and test it. Fill in the form fields and submit the form.</li>
                <li>Check your email (Pipeline) to retrieve the data sent by the script.</li>
            </ol>
    <?php include('../view/article-footer.php'); ?>
        </article>
    </main>
    <?php include('../view/footer.php'); ?>
    </div>
    <!--! end of #container -->
</body>

</html>
