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
  <meta name="description" content="CSS cheatsheet.">
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
  <?php include('../view/header.php'); ?>
  <main>
  <article>
  <div class="article_header">
  <h1>CSS Selectors Cheat Sheet</h1>
   <p>By Jacob Jordan&nbsp;&nbsp;&nbsp;&nbsp;
        <time datetime="2019-05-16">May 16, 2019</time>
        &nbsp;&nbsp;&nbsp;
        <i class="fa fa-tags"></i>&nbsp;CSS, cheatsheets
        </p>
  </div>

  <p>Most web developers  learn CSS by first writing style rules that target the HTML elements on the page because. the <strong>element selector</strong> is easy to understand and the results are immediate and obvious. With a little CSS practice, <strong>grouped selectors</strong> become essential to reducing redundancy because they allow us to apply the same style properties to multiple elements separated with commas in a single style rule. </p>
  <p>The disadvantage of using element and grouped selectors of course, is that they are universally applied. And it doesn't take long before the need to format  one particular element arises. The simplest solution for most developers is  to use <strong>class selectors</strong> and <strong>ID selectors</strong> to target specific elements. But unfortunately, the tendency is to overuse them and end up with pages that suffer from class-itis.</p>
  <p>Instead of mucking around with the markup by adding classes and id's to   elements simply for styling purposes, consider using advanced CSS selectors to apply formatting to target elements. The many advanced selectors are generally categorized into <strong>contextual selectors</strong>, <strong>attribute selectors</strong>, <strong>pseudo-element selectors</strong>, and <strong>pseudo-class selectors</strong>.</p>
  <h3>Element selectors</h3>
  <p>Element selectors apply  properties globally to all specified elements on the page, and are the most common selectors used.</p>
  
 <table>
    <caption>
      Syntax for Element selectors
      </caption>
    <tr>
      <th scope="col">Selector</th>
      <th scope="col">Syntax</th>
      <th scope="col">Description</th>
      </tr>
    <tr>
      <td>Element</td>
      <td><strong>h2</strong></td>
      <td>selects all h2 elements on the page<br>
        The rule <strong>h2 {text-align: center;}</strong>  would center all text marked up with <strong>&lt;h2&gt;</strong> elements</td>
      </tr>
    <tr>
      <td>Grouped</td>
      <td><strong>h1,&nbsp;h2,&nbsp;h3</strong></td>
      <td>selects all h1, h2, and h3 elements on the page<br>
        The rule <strong>h1, h2, h3 {margin-bottom: .5em;}</strong> would set the bottom margin for all text marked up with <strong>&lt;h1&gt;</strong>, <strong>&lt;h2&gt;</strong>, and <strong>&lt;h3&gt;</strong> elements</td>
      </tr>
  </table>

  <h3>Class and ID selectors</h3>
  <p>Class and ID selectors make it easy to target and apply properties to one or several particular elements without affecting all the others. Classes allow you to classify elements into conceptual groups. Two or more elements can belong to the same class on a page. IDs assign a unique identifier to an element, and <em>each id value must be used only once  on a page</em>. </p>
  <table>
    <caption>
      Syntax for Class and ID selectors
      </caption>
    <tr>
      <th scope="col">Selector</th>
      <th scope="col">Syntax</th>
      <th scope="col">Description</th>
      </tr>
    <tr>
      <td>Class</td>
      <td><strong>.warning<br>
        p.warning
        </strong></td>
      <td>selects all elements belonging to the <strong>warning</strong> class<br>
        selects only paragraph elements belonging to the <strong>warning</strong> class<br>
        Note: <strong>&lt;p class=&quot;warning&quot;&gt;</strong> classifies the <strong>&lt;p&gt;</strong> into a conceptual group</td>
      </tr>
    <tr>
      <td>ID</td>
      <td><strong>#links</strong></td>
      <td>selects the element with the <strong>links</strong> id value<br>
        Note: <strong>&lt;ul id=&quot;links&quot;&gt;</strong> assigns the links unique identifier to the element</td>
      </tr>
  </table>
  <h3>Contextual selectors</h3>
  <p>Contextual selectors (combinators) target elements based on their relationships to other elements in the document's tree hierarchy, and use the same <em>parent</em>, <em>child</em>, <em>sibling</em>, and <em>descendant</em> terminology.</p>
  <table>
    <caption>
      Syntax for Contextual selectors
      </caption>
    <tr>
      <th scope="col">Selector</th>
      <th scope="col">Syntax</th>
      <th scope="col">Description</th>
      </tr>
    <tr>
      <td>Descendant</td>
      <td><strong>#main&nbsp;li</strong></td>
      <td>selects elements only when they are descendants of a higher-level element<br>
        Note: target element does not have to be a direct child; descendant can be further down in hierarchy</td>
      </tr>
    <tr>
      <td>Adjacent sibling</td>
      <td><strong>h2+p</strong></td>
      <td>selects sibling element that is adjacent to (next to) another element <br>
        (if there are several <strong>&lt;p&gt;</strong> elements following the <strong>&lt;h2&gt;</strong> element, only the first <strong>&lt;p&gt;</strong> is the adjacent sibling)</td>
      </tr>
    <tr>
      <td>Child</td>
      <td><strong>blockquote&gt;p</strong></td>
      <td>selects elements only when they are child elements of the parent element</td>
      </tr>
    <tr>
      <td>General sibling</td>
      <td><strong>h2~p</strong></td>
      <td>selects any elements that are siblings to another element<br>
        (if there are several <strong>&lt;p&gt;</strong> elements following the <strong>&lt;h2&gt;</strong> element, all are siblings)</td>
      </tr>
  </table>
  <h4>Related Links:</h4>
  <ul class="resources">
    <li> <a href="http://net.tutsplus.com/tutorials/html-css-techniques/the-30-css-selectors-you-must-memorize/">The 30 CSS Selectors you Must Memorize</a> </li>
    <li><a href="http://coding.smashingmagazine.com/2009/08/17/taming-advanced-css-selectors/">Taming Advanced CSS Selectors</a> </li>
  </ul>
  <h3>Pseudo-class selectors</h3>
  <p>Pseudo-class selectors are used to apply styles to elements based on their browser state or position in document hierarchy. Browsers keep track of many things behind the scenes, like whether a link has been visited, when an element is selected, and whether an element is the first or last of its type, or even the first or last child of its parent element. </p>
  <p>All elements in a certain state are treated as though they belong to the same class, even though the class name is not actually in the markup. Pseudo-class selectors are indicated by a colon (:), and are typically placed immediately after the element name. </p>
  <h3>Pseudo-class selectors for link and user states</h3>
  <p>When styling  all link states, the order of the rules in the style sheet is important for proper functionality. Required order is <strong>:link</strong>, <strong>:visited</strong>, <strong>:focus</strong>, <strong>:hover</strong>, <strong>:active</strong>.</p>
  <table>
    <caption>
      Syntax for link and user state Pseudo-class selectors
      </caption>
    <tr>
      <th scope="col">State</th>
      <th scope="col">Syntax</th>
      <th scope="col">Description</th>
      </tr>
    <tr>
      <td>Unvisited&nbsp;link</td>
      <td><strong>:link</strong></td>
      <td>applies to   link elements that have not been visited 
        (<strong>a:link</strong>)</td>
      </tr>
    <tr>
      <td>Visited link</td>
      <td><strong>:visited</strong></td>
      <td>applies to   link elements that have been visited 
        (<strong>a:visited</strong>)</td>
      </tr>
    <tr>
      <td>Focus state</td>
      <td><strong>:focus</strong></td>
      <td>applies to selected element that is ready for input 
        <br>
        (<strong>a:focus</strong> or <strong>input:focus</strong>)<br>
        Note: focus state most often applies to users who use a keyboard to tab through links and form controls, but some elements can also be given focus with markup and scripts.</td>
      </tr>
    <tr>
      <td>Hover state</td>
      <td><strong>:hover</strong></td>
      <td>applies when mouse pointer is over the element  
        (<strong>a:hover</strong>)</td>
      </tr>
    <tr>
      <td>Active state</td>
      <td><strong>:active</strong></td>
      <td>applies when element is in process of being clicked 
        (<strong>a:active</strong>)</td>
      </tr>
  </table>
  <h3>Pseudo-class selectors that apply to siblings</h3>
  <p>The following six sibling pseudo-class selectors apply to elements that have the same parent, and are at the same level of the document hierarchy.</p>
  <table id="grid_table">
    <caption>
      Syntax for sibling Pseudo-class selectors
      </caption>
    <tr>
      <th scope="col">Syntax</th>
      <th scope="col">Description</th>
      </tr>
    <tr>
      <td><strong>:first-child</strong></td>
      <td>selects the specified element when it is the first child of its parent<br>
        (<strong>h2:first-child</strong> selects a <strong>&lt;h2&gt;</strong> element only when it's the first element within its parent)</td>
      </tr>
    <tr>
      <td><strong>:last-child</strong></td>
      <td>selects the specified element when it is the last child of its parent<br>
        (<strong>h2:last-child</strong> selects a <strong>&lt;h2&gt;</strong> element only when it's the last element within its parent)</td>
      </tr>
    <tr>
      <td><strong>:only-child</strong></td>
      <td>selects the specified element when it is the only child of its parent<br>
        (<strong>h2:only-child</strong> selects a <strong>&lt;h2&gt;</strong> element only when it's the only element within its parent)</td>
      </tr>
    <tr>
      <td><strong>:first-of-type</strong></td>
      <td>selects the first element of the specified type within its parent element<br>
        (<strong>li:first-of-type</strong> selects the first <strong>&lt;li&gt;</strong> element)</td>
      </tr>
    <tr>
      <td><strong>:last-of-type</strong></td>
      <td>selects the last element of the specified type within its parent element<br>
        (<strong>li:last-of-type</strong> selects the last <strong>&lt;li&gt;</strong> element)</td>
      </tr>
    <tr>
      <td><strong>:only-of-type</strong></td>
      <td>selects the only element of the specified type within its parent element<br>
        (<strong>blockquote p:only-of-type</strong> selects the only <strong>&lt;p&gt;</strong> inside a <strong>&lt;blockquote&gt;</strong> element)</td>
      </tr>
  </table>
  <p>The <strong>:first-child</strong>, <strong>:last-child</strong>, and <strong>:only-child</strong> pseudo-classes are very specific. When a targeted element is no longer the first, last, or only child of its parent, the style rule  no longer applies.</p>
  <p>The other pseudo-classes are far more flexible. When you add or remove a targeted element, the browser will still automatically apply the style to the first and last element, or to the element that has no siblings of the same type.</p>
  <h4>Related Links:</h4>
  <ul class="resources">
    <li> <a href="http://css-tricks.com/pseudo-class-selectors/">Meet the Pseudo
      Class Selectors</a></li>
    <li><a href="http://www.sitepoint.com/getting-to-know-css3-selectors-structural-pseudo-classes/">Getting to Know CSS3 Selectors: Structural Pseudo-Classes</a> </li>
    <li> <a href="http://www.adobe.com/devnet/dreamweaver/articles/css-selectors-pt2.html">Getting to know your CSS selectors Part 2: CSS3 pseudo-classes and pseudo-elements</a></li>
  </ul>
  <h3>CSS3 structural Pseudo-class selectors</h3>
  <p>The new CSS3 pseudo-class selectors can style elements based on their position within a series in the document hierarchy. </p>
  <table>
    <caption>
      Syntax for CSS3 structural Pseudo-class selectors
      </caption>
    <tr>
      <th scope="col">Syntax</th>
      <th scope="col">Description</th>
      </tr>
    <tr>
      <td><strong>:nth-child(n)</strong></td>
      <td>nth child of parent</td>
      </tr>
    <tr>
      <td><strong>:nth-last-child(n)</strong></td>
      <td>nth child of parent counting backwards</td>
      </tr>
    <tr>
      <td><strong>:nth-of-type(n)</strong></td>
      <td>nth element of its type within parent</td>
      </tr>
    <tr>
      <td><strong>:nth-last-of-type(n)</strong></td>
      <td>nth element of its type counting backwards</td>
      </tr>
  </table>
  <p>Use the following typical n values to target elements.</p>
  <table>
    <caption>
      Typical n values for CSS3 Structural Pseudo-class Selectors
      </caption>
    <tr>
      <th scope="col">Value</th>
      <th scope="col">Meaning</th>
      </tr>
    <tr>
      <td>odd<br>
        2n+1</td>
      <td>every odd child or element</td>
      </tr>
    <tr>
      <td>even<br>
        2n</td>
      <td>every even child or element</td>
      </tr>
    <tr>
      <td>n</td>
      <td>every nth child or element</td>
      </tr>
    <tr>
      <td>3n</td>
      <td>every third child or element (3, 6, 9, &#8230;)</td>
      </tr>
    <tr>
      <td>3n+1</td>
      <td>every third child or element starting with 1 (1, 4, 7,  &#8230;)</td>
      </tr>
  </table>
  <h4>Related Links:</h4>
  <ul class="resources">
    <li><a href="http://css-tricks.com/useful-nth-child-recipies/"> Useful :nth-child Recipes</a></li>
    <li> <a href="http://coding.smashingmagazine.com/2011/03/30/how-to-use-css3-pseudo-classes/">How To Use CSS3 Pseudo-Classes</a></li>
    <li> <a href="http://net.tutsplus.com/tutorials/html-css-techniques/quick-tip-work-backward-to-understand-css-structural-pseudo-classes/">Quick Tip: Work Backward to Understand Structural Pseudo Classes</a></li>
    <li> <a href="http://www.impressivewebs.com/css3-pseudo-class-expressions/">CSS3 Structural Pseudo-class Expressions Explained</a> </li>
    <li> <a href="http://www.vanseodesign.com/css/pseudo-elements-classes/">How To Use Structural Pseudo Classes and Pseudo Element Selectors</a></li>
  </ul>
  <h3>Pseudo-element selectors</h3>
  <p>Pseudo-element selectors allow you to style fictional elements that are not actually in the markup. The <strong>::first-letter</strong> and <strong>::first-line</strong> selectors  target a portion of an element to avoid use of inline &lt;span&gt; element. The <strong>::before</strong> and <strong>::after</strong> selectors are used to insert content dynamically that doesn't exist in the markup.</p>
  <p>CSS3 uses a double colon for pseudo-elements. To provide backward compatibility for older browsers, omit one of the colons that precede the pseudo-elements (ie<strong> :first-letter</strong>)</p>
  <table>
    <caption>
      Syntax for Pseudo-elements
      </caption>
    <tr>
      <th scope="col">Syntax</th>
      <th scope="col">Description</th>
      </tr>
    <tr>
      <td><strong>::first-letter</strong></td>
      <td>selects the first letter of the specified element<br>
        (<strong>p::first-letter</strong> selects only the first letter of the <strong>&lt;p&gt;</strong> element)<br>
        commonly used with <strong>::first-child</strong> to create a drop cap in first paragraph</td>
      </tr>
    <tr>
      <td><strong>::first-line</strong></td>
      <td>selects the first line of the specified element<br>
        (<strong>p::first-line</strong> selects only the first line of the <strong>&lt;p&gt;</strong> element)<br>
        commonly used with <strong>::first-child</strong> to add visual impact to the first line of the first paragraph</td>
      </tr>
    <tr>
      <td><strong>::before</strong></td>
      <td>adds generated content before the specified element when used with <strong>content </strong>property<br>
        (<strong>q::before {content: &quot;\201c&quot;;}</strong> generates a left double quote before the &lt;q&gt; element)</td>
      </tr>
    <tr>
      <td><strong>::after</strong></td>
      <td>adds generated content after the specified element when used with <strong>content </strong>property<br>
        (<strong>q::after {content: &quot;\201d&quot;;}</strong> generates a right double quote after the &lt;q&gt; element)</td>
      </tr>
  </table>
  <h4>Common  uses of generated content: </h4>
  <figure>
  <div class="snippets">
<pre><code>blockquote&gt;p::before {
  content: &quot;\201c&quot;; /* left double quotation character */
  display: inline;
}
blockquote&gt;p::after {
  content: &quot;\201d&quot;; /* right double quotation character */
  display: inline;
}</code></pre></div>    
    <figcaption>Rules to style &lt;blockquote&gt; elements</figcaption>
  </figure>
  <figure>
    <div class="snippets">
<pre><code>/*  apply class to  parent element to self-clear its floated children */
.group:after {
  content: ""; 
  display: table; 
  clear: both; 
}</code></pre>
      </div>
    <figcaption>Rule to force parent element to self-clear its floated children</figcaption>
  </figure>
  <h4>Related Links:</h4>
  <ul class="resources">
    <li><a href="http://coding.smashingmagazine.com/2011/07/13/learning-to-use-the-before-and-after-pseudo-elements-in-css/">Learning To Use The :before And :after Pseudo-Elements In CSS</a></li>
    <li>To find Unicode Characters:
      <ul>
        <li><a href="http://unicode-table.com/en/">Unicode Character Table</a></li>
        <li> <a href="http://www.digitalmediaminute.com/reference/entity/">XHTML Character Entity Reference</a>  - Hover over a character box to display the characters numerical code (&amp;#8220;) and its Unicode code (u201c). <br>
          <strong>NOTE:</strong> For generated content with ::before and/or ::after pseudo-elements, use only the hexadecimal part--the part after the &quot;u&quot;--and be sure to escape the code by preceding with a backslash &quot;\&quot; character. </li>
        </ul>
      </li>
    <li><a href="http://coding.smashingmagazine.com/2013/04/12/css-generated-content-counters/"> How To Benefit From CSS Generated Content And Counters</a></li>
    <li> <a href="http://line25.com/tutorials/how-to-create-a-stylish-drop-cap-effect-with-css3">How To Create a Stylish Drop Cap Effect with CSS3</a> </li>
    <li> <a href="http://net.tutsplus.com/tutorials/html-css-techniques/css-fudamentals-containing-children/">CSS Fundamentals: Containing Children</a></li>
  </ul>
  <h3>Attribute selectors</h3>
  <p>Attribute selectors target elements based on the presence or value of a specific attribute. Of the seven attribute selectors in the table below, the last three are new in CSS3, and are not yet fully supported by all browsers.</p>
  <table>
    <caption>
      Syntax for Attribute selectors
      </caption>
    <tr>
      <th scope="col">Syntax</th>
      <th scope="col">Description</th>
      </tr>
    <tr>
      <td><strong>E[attr]</strong></td>
      <td>selects elements with specified attribute present, regardless of its value<br>
        (<strong>img[alt]</strong> selects all <strong>&lt;img&gt;</strong> elements that have an <strong>alt</strong> attribute present)</td>
      </tr>
    <tr>
      <td><strong>E[attr=&quot;val&quot;]</strong></td>
      <td>selects elements where the specified attribute has the exact value of <strong>val</strong><br>
        (<strong>input[type=&quot;text&quot;]</strong> selects all <strong>&lt;input&gt;</strong> elements with <strong>type</strong> attributes that have a value of &quot;text&quot;)</td>
      </tr>
    <tr>
      <td><strong>E[attr~=&quot;val&quot;]</strong></td>
      <td>selects elements with attribute values that contain specified partial value of <strong>val<br>
        </strong>(<strong>img[alt~=&quot;2014&quot;]</strong> selects all <strong>&lt;img&gt;</strong> elements with <strong>alt</strong> attributes that contain &quot;2014&quot; in the whitespace seaparated value) </td>
      </tr>
    <tr>
      <td><strong>E[attr|=&quot;val&quot;]</strong></td>
      <td>selects elements with attribute values that contain hyphenated value that starts with <strong>val</strong> and is immediately followed by &quot;<strong>-</strong>&quot;<br>
        (<strong>img[src|=&quot;thumb&quot;]</strong> selects all <strong>&lt;img&gt;</strong> elements where the <strong>src</strong> attribute value contains &quot;thumb-&quot;)</td>
      </tr>
    <tr>
      <td><strong>E[attr^=&quot;val&quot;]</strong></td>
      <td>selects elements where the value of the specified attribute begins with <strong>val</strong><br>
        (<strong>a[href^=&quot;http&quot;]</strong> selects all <strong>&lt;a&gt;</strong> elements where the <strong>href</strong> attribute value begins with &quot;http&quot; &#8212;identifies external links)</td>
      </tr>
    <tr>
      <td><strong>E[attr$=&quot;val&quot;]</strong></td>
      <td>selects elements where the value of the specified attribute ends with <strong>val</strong><br>
        (<strong>a[href$=&quot;.pdf&quot;]</strong> selects all <strong>&lt;a&gt;</strong> elements where the <strong>href</strong> attribute value ends with &quot;.pdf&quot; &#8212;identifies  links to PDF files)</td>
      </tr>
    <tr>
      <td><strong>E[attr*=&quot;val&quot;]</strong></td>
      <td>selects elements where the value of the specified attribute contains <strong>val</strong><br>
        (<strong>img[src*=&quot;thumb&quot;]</strong> selects all <strong>&lt;img&gt;</strong> elements where the <strong>src</strong> attribute value contains &quot;thumb&quot; &#8212;identifies images with thumb in filename as well as images in thumbs folder)</td>
      </tr>
  </table>
  <h4>Related Links:</h4>
  <ul class="resources">
    <li><a href="http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-make-the-most-of-css-attribute-selectors/"> Quick Tip: Make the Most of CSS Attribute Selectors</a></li>
    <li><a href="http://www.adobe.com/devnet/dreamweaver/articles/css-selectors-pt1.html">Getting to know your CSS selectors Part 1: CSS2.1 and attribute selectors</a></li>
    <li> <a href="http://css-tricks.com/attribute-selectors/">The Skinny on CSS Attribute Selectors</a></li>
  </ul>
      <?php include('../view/article-footer.php'); ?>
      </article>
</main>
    <?php include('../view/footer.php'); ?>
</body>
</html>
