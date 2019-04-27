
<?php 
include('header.php');
?>

<!-- <!doctype html>
<html>
<head> -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-19389139-1"></script> -->

	<!-- Google Analytics -->
    <!-- <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-19389139-1');
    </script> -->


<!-- <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>How to Embed Web Fonts</title>
<meta name="description" content="Web Fonts Tutorial: Embed your own hosted web fonts or use a font embedding service to apply formatting to your HTML elements.">
<meta name="author" content="Butlercc Webhosting">
Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/font-awesome-4.2.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet" type="text/css"> -->


<!-- <style>
@font-face {
font-family: 'DroidSansBold';
src: url('fonts/DroidSans-Bold-webfont.eot');
src: url('fonts/DroidSans-Bold-webfont.eot?#iefix') format('embedded-opentype'),
url('fonts/DroidSans-Bold-webfont.woff') format('woff'),
url('fonts/DroidSans-Bold-webfont.ttf') format('truetype'),
url('fonts/DroidSans-Bold-webfont.svg#DroidSansBold') format('svg');
font-weight: normal;
font-style: normal;
} 
header>h2 {
	font-family: 'Tangerine', serif;
	font-size: 4em;
	font-weight:700;
	margin-top: 0.5em;
	margin-bottom: 0;
}
article>h3, article>h4 {
font-family: 'DroidSansBold', Helevetica, Arial, sans-serif;
font-weight:normal;
} 
</style> -->


<!-- </head> -->

<!-- FIX ME -->

<!-- <body>
<div id="container">
  <header class="clearfix page-header">
    <div id="branding">
      <h1><a href="/index.php">ButlerCC Webhosting</a></h1>
      <p>Free Webhosting for ButlerCC WebDev Students</p>
    </div>
  </header> -->

  <div id="main">
<p><a href="/index.php">Home</a> &gt; <a href="/support/index.php">Tutorials and Resources</a> &gt; How to Embed  Web Fonts</p>
<article>
<header>
  <h2>How to Embed  Web Fonts</h2>
  <p>By B Lingafelter&nbsp;&nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;
        <time datetime="2011-09-18">Sep 18, 2011</time>
        &nbsp;&nbsp;&nbsp;
        <i class="fa fa-tags"></i>&nbsp;CSS, typography
        </p>
      </header>
  <p>Embedding web fonts with the @font-face rule allows you to link to real fonts on your server, or the server of a font-embedding service rather than resorting to font-replacement technqiues like using images, Flash, and scrpting to create text. This method is not only easier and less work intensive, but also does not negatively impact accessibility or usability.</p>
  <h3>Acceptable Fonts and Resources</h3>
  <p>There are two issues you need to consider when choosing web fonts. </p>
  <ol>
    <li>Choose fonts that look good displayed on the web. Many fonts created for print purposes are not legible  on the web.</li>
    <li>Choose fonts with licenses that explicitly allow web embedding or redistribution. Be sure to read the end-user license aggreement (EULA); many fonts, including free ones, do not allow web embedding or redistribution.</li>
  </ol>
  <p>Use the following resources to find acceptable fonts:</p>
  <ul>
    <li><a href="https://www.fontsquirrel.com/" target="_blank">Font Squirrel @Font-Face Webfont Kits</a> - Webfont Kits include TTF, EOT, WOFF, and SVG formats along with sample .html and .css files. <strong>Update:</strong> Web Open Font Format (WOFF) is now the standard and works in all modern browsers, making it the only format needed.</li>
    <li><a href="https://fonts.google.com/" target="_blank">Google Font Directory</a> is a library of free web fonts. Find one you like and  link to it using the Google Fonts API .</li>
    <li><a href="https://www.theleagueofmoveabletype.com/" target="_blank">The League of Moveable Type</a> is a small collection of free, open-source fonts licensed for font embedding.</li>
    <li><a href="https://www.fonthead.com/" target="_blank">Fonthead</a> - All fonts can be embedded but most are not free.</li>
    
  </ul>
  <h3>Example 1: Self-Hosted Web Font</h3>
  <p>On this page, I used the DroidSansBold font that I downloaded as a kit (droid-sans-fontfacekit.zip) from Font Squirrel. Examples in these instructions refer to this font.</p>
  <ol>
    <li>Go to <a href="https://www.fontsquirrel.com/" target="_blank">Font Squirrel</a> and search for an appropriate font. Use the filters (right column) to limit results for a specific use.<br>
      <strong>NOTE:</strong> Due to current licensing issues, not all fonts have a downloadable webfont kit. </li>
    <li>Click on the desired font sample to view font specimens, related information, and to access the Webfont kit..<br>
      <img src="/support/webfont-kit.jpg" alt="webfont kit screenshot"/>
    </li>
    <li>Click <strong>Download @font-face Kit</strong> link and save the .zip to a &quot;Web Fonts&quot; folder on your hard drive. (This makes it  easy to find and reuse the font on any site.)</li>
    <li>Unzip the kit file. The zip contains a web fonts folder and one or more sub folders bearing the font name of each font style included.</li>
    <li>Open the subfolder that contains the desired font  (droidsans_bold_macroman in my case.). You may want to view the .html file in a browser.      <strong>NOTE:</strong> The installation instructions are outdated; only the .woff font file is required for modern browsers. </li>
    <li>Copy and paste the <strong>.woff</strong> font file (DroidSans-Bold-webfont.woff)  into a <strong>fonts</strong> subfolder in your site project. (For simplicity, I recommend creating the fonts folder inside the <strong>css</strong> folder.)</li>
    <li>Add the @font-face rule(s) at the very top of your site's external .css file (use code snippet below as a guide). <br>
      <strong>NOTE:</strong> If you choose to copy the @font-face rule(s) from the example <strong>stylesheet.css</strong> (font folder), be sure to paste it at the very top of your site's external .css file and then remove the unnecessary file format code.</li>
    <li>Check that  the relative path points to the location of the font file(s) from the .css file in your project, and adjust as needed.      <strong>NOTE:</strong> The relative path must point to location of the font files from the .css file.</li>
    <li>Now just add the font to the beginning of the font stack in the appropriate rule(s). Be sure to wrap font name in single quotes as shown below.</li>
    <li>When you publish the site to your remote server, be sure to upload the fonts folder along with the .css file.</li>
  </ol>
  
  <figure>
    <div class="snippets">
<pre><code>@font-face {
  font-family: 'DroidSansBold';
  src: url('fonts/DroidSans-Bold-webfont.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}</code></pre>
      </div>
    <figcaption>Example @font-face rule (top of .css file)</figcaption>
  </figure>
  <figure>
    <div class="snippets">
<pre><code>article &gt; h3, article &gt; h4 {
  font-family: 'DroidSansBold', Helevetica, Arial, sans-serif;
  font-weight:normal;
}</code></pre>
      </div>
    <figcaption>Example font declaration</figcaption>
  </figure>
  <h3>Example 2: Linking to Google Fonts API</h3>
  <p>Google fonts can be downloaded and hosted on your server, like the font kits from Font Squirrel. However,  you can also choose to just link to a font on Google's fast server and let it serve the correct file type for the browser used. On this page for example, I  linked to Google's Tangerine font and then just declared it in my <strong>header &gt; h2</strong> selector.</p>
  <ol>
    <li>Go to <a href="https://fonts.google.com/" target="_blank">Google Font Directory</a> and choose an appropriate font.</li>
    <li>Click <strong>Quick-use</strong> link.</li>
    <li>If available, select additional font styles needed (step 1)</li>
    <li>Scroll down to step 3, Add this code to your website.</li>
    <li>Copy the link tag and paste into the &lt;head&gt; section of your page. Be sure to place it above the link to your site's stylesheet. Refer to <a href="https://developers.google.com/fonts/docs/getting_started?csw=1" target="_blank">Google's Getting Started Guide</a> for examples.</li>
    <li>Now  just add the font to the beginning of the font stack in the appropriate rule(s). Be sure to wrap font name in single quotes as shown below.</li>
  </ol>
  <figure>
    <div class="snippets">
<pre><code>&lt;link href=&quot;https://fonts.googleapis.com/css?family=Tangerine:400,700&quot; <br>rel=&quot;stylesheet&quot;&gt;</code></pre>
      </div>
    <figcaption>Example link to Google's font API</figcaption>
  </figure>
  <figure>
    <div class="snippets">
<pre><code>header &gt; h2 {
  font-family: 'Tangerine', serif;
  font-weight:700;
}</code></pre>
      </div>
    <figcaption>Example font declaration</figcaption>
  </figure>

  <!-- ADD PHP INCLUDE FOR FOOTER -->
  <footer>
        <div class="disclaimers clearfix">
          <p><small><strong>Disclaimers:</strong> <a href="https://www.butlercc.edu/">Butler Community College</a> is an &ldquo;Equal Opportunity Employer/Program&rdquo; and &ldquo;Auxiliary  Aids and Services are available upon request.&rdquo;</small></p>
          <p><a rel="license" href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><img src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" alt="Creative Commons License" class=" cclicense pull-left"></a> <small>This work is licensed under a <a rel="license" href="https://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.</small></p>
        </div>
      </footer>
</article>
  </div><!-- end of #main -->
  <footer class="page-footer">
    <p>Generously Provided by<br>
      <a href="https://www.butlercc.edu/"><img src="/images/Butler_Horiz_206a.png" width="206" height="64" alt="Butler Community College"></a></p>
  </footer>
</div><!--! end of #container --> 
</body>
</html>