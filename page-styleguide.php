<?php
/**
 * Template Name: Style Guide, no sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.7
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
     <div class="container">

      <!-- Masthead
      ================================================== -->
      <header class="jumbotron subhead" id="overview">
        <h1><?php the_title();?></h1>
        <p class="lead">On top of the scaffolding, basic HTML elements are styled and enhanced with extensible classes to provide a fresh, consistent look and feel.</p>
      </header>


<!-- Typography
================================================== -->
<section id="typography">
  <div class="page-header">
    <h1>Typography <small>Headings, paragraphs, lists, and other inline type elements</small></h1>
  </div>

  <h2>Headings &amp; body copy</h2>

  <!-- Headings & Paragraph Copy -->
  <div class="row">
    <div class="span4">
      <h3>Typographic scale</h3>
      <p>The entire typographic grid is based on two Less variables in our preboot.less file: <code>@baseFontSize</code> and <code>@baseLineHeight</code>. The first is the base font-size used throughout and the second is the base line-height.</p>
      <p>We use those variables, and some math, to create the margins, paddings, and line-heights of all our type and more.</p>
    </div>
    <div class="span4">
      <h3>Example body text</h3>
      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
    </div>
    <div class="span4">
      <div class="well">
        <h1>h1. Heading 1</h1>
        <h2>h2. Heading 2</h2>
        <h3>h3. Heading 3</h3>
        <h4>h4. Heading 4</h4>
        <h5>h5. Heading 5</h5>
        <h6>h6. Heading 6</h6>
      </div>
    </div>
  </div>

  <!-- Misc Elements -->
  <h2>Emphasis, address, and abbreviation</h2>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Element</th>
        <th>Usage</th>
        <th>Optional</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <code>&lt;strong&gt;</code>
        </td>
        <td>
          For emphasizing a snippet of text with <strong>important</strong>
        </td>
        <td>
          <span class="muted">None</span>
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;em&gt;</code>
        </td>
        <td>
          For emphasizing a snippet of text with <em>stress</em>
        </td>
        <td>
          <span class="muted">None</span>
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;abbr&gt;</code>
        </td>
        <td>
          Wraps abbreviations and acronyms to show the expanded version on hover
        </td>
        <td>
          Include optional <code>title</code> for expanded text
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;address&gt;</code>
        </td>
        <td>
          For contact information for its nearest ancestor or the entire body of work
        </td>
        <td>
          Preserve formatting by ending all lines with <code>&lt;br&gt;</code>
        </td>
      </tr>
    </tbody>
  </table>

  <div class="row">
    <div class="span4">
      <h3>Using emphasis</h3>
      <p><a href="#">Fusce dapibus</a>, <strong>tellus ac cursus commodo</strong>, <em>tortor mauris condimentum nibh</em>, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue.</p>
      <p><strong>Note:</strong> Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5, but their usage has changed a bit. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
    </div>
    <div class="span4">
      <h3>Example addresses</h3>
      <p>Here are two examples of how the <code>&lt;address&gt;</code> tag can be used:</p>
      <address>
        <strong>Twitter, Inc.</strong><br>
        795 Folsom Ave, Suite 600<br>
        San Francisco, CA 94107<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
      <address>
        <strong>Full Name</strong><br>
        <a mailto="#">first.last@gmail.com</a>
      </address>
    </div>
    <div class="span4">
      <h3>Example abbreviations</h3>
      <p>Abbreviations are styled with uppercase text and a light dotted bottom border. They also have a help cursor on hover so users have extra indication something will be shown on hover.</p>
      <p><abbr title="HyperText Markup Language">HTML</abbr> is the best thing since sliced bread.</p>
      <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
    </div>
  </div>


  <!-- Blockquotes -->
  <h2>Blockquotes</h2>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Element</th>
        <th>Usage</th>
        <th>Optional</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <code>&lt;blockquote&gt;</code>
        </td>
        <td>
          Block-level element for quoting content from another source
        </td>
        <td>
          <p>Add <code>cite</code> attribute for source URL</p>
          Use <code>.pull-left</code> and <code>.pull-right</code> classes for floated options
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;small&gt;</code>
        </td>
        <td>
          Optional element for adding a user-facing citation, typically an author with title of work
        </td>
        <td>
          Place the <code>&lt;cite&gt;</code> around the title or name of source
        </td>
      </tr>
    </tbody>
  </table>
  <div class="row">
    <div class="span4">
      <p>To include a blockquote, wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes we recommend a <code>&lt;p&gt;</code>.</p>
      <p>Include an optional <code>&lt;small&gt;</code> element to cite your source and you'll get an em dash <code>&amp;mdash;</code> before it for styling purposes.</p>
    </div>
    <div class="span8">
<pre class="prettyprint linenums">
&lt;blockquote&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.&lt;/p&gt;
  &lt;small&gt;Someone famous&lt;/small&gt;
&lt;/blockquote&gt;
</pre>
    </div>
  </div><!--/row-->

  <h3>Example blockquotes</h3>
  <div class="row">
    <div class="span6">
      <p>Default blockquotes are styled as such:</p>
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
        <small>Someone famous in <cite title="">Body of work</cite></small>
      </blockquote>
    </div>
    <div class="span6">
      <p>To float your blockquote to the right, add <code>class="pull-right"</code>:</p>
      <blockquote class="pull-right">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
        <small>Someone famous in <cite title="">Body of work</cite></small>
      </blockquote>
    </div>
  </div>


  <!-- Lists -->
  <h2>Lists</h2>
  <div class="row">
    <div class="span3">
      <h4>Unordered</h4>
      <p><code>&lt;ul&gt;</code></p>
      <ul>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
          <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
          </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ul>
    </div>
    <div class="span3">
      <h4>Unstyled</h4>
      <p><code>&lt;ul class="unstyled"&gt;</code></p>
      <ul class="unstyled">
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
          <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
          </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ul>
    </div>
    <div class="span3">
      <h4>Ordered</h4>
      <p><code>&lt;ol&gt;</code></p>
      <ol>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit</li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ol>
    </div>
    <div class="span3">
      <h4>Description</h4>
      <p><code>&lt;dl&gt;</code></p>
      <dl>
        <dt>Description lists</dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Euismod</dt>
        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
        <dt>Malesuada porta</dt>
        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
      </dl>
    </div>
  </div><!-- /row -->


  <!-- Code -->

  <h2>Code <small>Inline and block</small></h2>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th style="width: 190px;">Element</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>&lt;code&gt;</code></td>
        <td>In a line of text like this, your wrapped code will look like this <code>&lt;html&gt;</code> element.</td>
      </tr>
      <tr>
        <td><code>&lt;pre&gt;</code></td>
        <td>
<pre>&lt;div&gt;
  &lt;h1&gt;Heading&lt;/h1&gt;
  &lt;p&gt;Something right here...&lt;/p&gt;
&lt;/div&gt;</pre>
          <p><strong>Note:</strong> Be sure to keep code within <code>&lt;pre&gt;</code> tags as close to the left as possible; it will render all tabs.</p>
        </td>
      </tr>
      <tr>
        <td><code>&lt;pre class="prettyprint"&gt;</code></td>
        <td>
          <p>Using the google-code-prettify library, you're blocks of code get a slightly different visual style and automatic syntax highlighting. You can also add an additional class to add line numbers.</p>
<pre class="prettyprint">&lt;div&gt;
  &lt;h1&gt;Heading&lt;/h1&gt;
  &lt;p&gt;Something right here...&lt;/p&gt;
&lt;/div&gt;</pre>
<pre class="prettyprint linenums">&lt;div&gt;
  &lt;h1&gt;Heading&lt;/h1&gt;
  &lt;p&gt;Something right here...&lt;/p&gt;
&lt;/div&gt;</pre>
          <p><a href="http://code.google.com/p/google-code-prettify/">Download google-code-prettify</a> and view the readme for <a href="http://google-code-prettify.googlecode.com/svn/trunk/README.html">how to use</a>.</p>
        </td>
      </tr>
    </tbody>
  </table>

  <!-- Labels -->
  <h2>Inline labels <small>for special attention</small></h2>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th style="width: 190px;">Labels</th>
        <th>Markup</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <span class="label">Default</span>
        </td>
        <td>
          <code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td>
          <span class="label success">New</span>
        </td>
        <td>
          <code>&lt;span class="label success"&gt;New&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td>
          <span class="label warning">Warning</span>
        </td>
        <td>
          <code>&lt;span class="label warning"&gt;Warning&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td>
          <span class="label important">Important</span>
        </td>
        <td>
          <code>&lt;span class="label important"&gt;Important&lt;/span&gt;</code>
        </td>
      </tr>
      <tr>
        <td>
          <span class="label notice">Notice</span>
        </td>
        <td>
          <code>&lt;span class="label notice"&gt;Notice&lt;/span&gt;</code>
        </td>
      </tr>
    </tbody>
  </table>

</section>



<!-- Tables
================================================== -->
<section id="tables">
  <div class="page-header">
    <h1>Tables <small>For, you guessed it, tabular data</small></h1>
  </div>

  <h2>Table markup</h2>
  <div class="row">
    <div class="span8">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Tag</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <code>&lt;table&gt;</code>
            </td>
            <td>
              Wrapping element for displaying data in a tabular format
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;thead&gt;</code>
            </td>
            <td>
              Container element for table header rows (<code>&lt;tr&gt;</code>) to label table columns
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;tbody&gt;</code>
            </td>
            <td>
              Container element for table rows (<code>&lt;tr&gt;</code>) in the body of the table
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;tr&gt;</code>
            </td>
            <td>
              Container element for a set of table cells (<code>&lt;td&gt;</code> or <code>&lt;th&gt;</code>) that appears on a single row
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;td&gt;</code>
            </td>
            <td>
              Default table cell
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;th&gt;</code>
            </td>
            <td>
              Special table cell for column (or row, depending on scope and placement) labels<br>
              Must be used within a <code>&lt;thead&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;caption&gt;</code>
            </td>
            <td>
              Description or summary of what the table holds, especially useful for screen readers
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="span4">
<pre class="prettyprint linenums">
&lt;table&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;...&lt;/th&gt;
      &lt;th&gt;...&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;...&lt;/td&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
</pre>
    </div>
  </div>

  <h2>Table options</h2>
  <table class="table table-bordered table-striped">
  <thead>
      <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Default</td>
        <td class="muted">None</td>
        <td>No styles, just columns and rows</td>
      </tr>
      <tr>
        <td>Basic</td>
        <td>
          <code>.table</code>
        </td>
        <td>Only horizontal lines between rows</td>
      </tr>
      <tr>
        <td>Bordered</td>
        <td>
          <code>.table-bordered</code>
        </td>
        <td>Rounds corners and adds outter border</td>
      </tr>
      <tr>
        <td>Zebra-stripe</td>
        <td>
          <code>.table-striped</code>
        </td>
        <td>Adds light gray background color to odd rows (1, 3, 5, etc)</td>
      </tr>
      <tr>
        <td>Condensed</td>
        <td>
          <code>.table-condensed</code>
        </td>
        <td>Cuts vertical padding in half, from 8px to 4px, within all <code>td</code> and <code>th</code> elements</td>
      </tr>
    </tbody>
  </table>


  <h2>Example tables</h2>

  <h3>1. Default table styles</h3>
  <div class="row">
    <div class="span4">
      <p>Tables are automatically styled with only a few borders to ensure readability and maintain structure. With 2.0, the <code>.table</code> class is required.</p>
<pre class="prettyprint linenums">
&lt;table class="table"&gt;
  ...
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>CSS</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Javascript</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>HTML</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <h3>2. Striped table</h3>
  <div class="row">
    <div class="span4">
      <p>Get a little fancy with your tables by adding zebra-striping&mdash;just add the <code>.table-striped</code> class.</p>
      <p class="muted"><strong>Note:</strong> Sprited tables use the <code>:nth-child</code> CSS selector and is not available in IE7-IE8.</p>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-striped"&gt;
  ...
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>CSS</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Javascript</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>HTML</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <h3>3. Bordered table</h3>
  <div class="row">
    <div class="span4">
      <p>Add borders around the entire table and rounded corners for aesthetic purposes.</p>
<pre class="prettyprint linenums">
&lt;table class="table table-bordered"&gt;
  ...
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td colspan="2">Mark Otto</td>
            <td>CSS</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td rowspan="2">Javascript</td>
          </tr>
          </tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Brosef</td>
            <td>Stalin</td>
            <td>HTML</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <h3>4. Condensed table</h3>
  <div class="row">
    <div class="span4">
      <p>Make your tables more compact by adding the <code>.table-condensed</code> class to cut table cell padding in half (from 10px to 5px).</p>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-condensed"&gt;
  ...
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>CSS</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Javascript</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>HTML</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>



  <h3>5. Striped table w/ TableSorter.js</h3>
  <div class="row">
    <div class="span4">
      <p>Include the <a href="http://jquery.com">jQuery</a> <a href="http://tablesorter.com/docs/">Tablesorter</a> plugin and automaically get clear styles for sorted columns.</p>
<pre class="prettyprint linenums">
&lt;script src="jquery.tablesorter.js"&gt;&lt;/script&gt;
&lt;script &gt;
  $(function() {
    $("table#sortTableExample")
    .tablesorter({
      sortList: [[1,0]]
    });
  });
&lt;/script&gt;
&lt;table class="table table-striped"&gt;
  ...
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
      <table class="table table-striped tablesorter-example">
        <thead>
          <tr>
            <th>#</th>
            <th class="yellow">First Name</th>
            <th class="blue">Last Name</th>
            <th class="green">Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>CSS</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Javascript</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>HTML</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Brosef</td>
            <td>Stalin</td>
            <td>HTML</td>
          </tr>
        </tbody>
      </table>
      <p>Styles for the Tablesorter, zebra striping, borders, and condensing may all compound in any variation to fit your needs.</p>
      <table class="table table-striped table-bordered table-condensed tablesorter-example">
        <thead>
          <tr>
            <th>#</th>
            <th class="yellow">First Name</th>
            <th class="blue">Last Name</th>
            <th class="green">Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>CSS</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Javascript</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>HTML</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Brosef</td>
            <td>Stalin</td>
            <td>HTML</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>



<!-- Forms
================================================== -->
<section id="forms">
  <div class="page-header">
    <h1>Forms</h1>
  </div>
  <div class="row">
    <div class="span4">
      <h2>Flexible HTML and CSS</h2>
      <p>The best part about forms in Bootstrap is that all your inputs and controls look great no matter how you build them in your markup. No superfluous HTML is required, but we provide the patterns for those who require it.</p>
      <p>More complicated layouts come with succinct and scalable classes for easy styling and event binding, so you're covered at every step.</p>
    </div>
    <div class="span4">
      <h2>Four layouts included</h2>
      <p>Bootstrap comes with support for four types of form layouts:</p>
      <ul>
        <li>Vertical (default)</li>
        <li>Search</li>
        <li>Inline</li>
        <li>Horizontal</li>
      </ul>
      <p>Different types of form layouts require some changes to markup, but the controls themselves remain and behave the same.</p>
    </div>
    <div class="span4">
      <h2>Control states and more</h2>
      <p>Bootstrap's forms include styles for all the base form controls like input, textarea, and select you'd expect. But it also comes with a number of custom components like appended and prepended inputs and support for lists of checkboxes.</p>
      <p>States like error, warning, and success are included for each type of form control. Also included are styles for disabled controls.</p>
    </div>
  </div>

  <h2>Four types of forms</h2>
  <p>Bootstrap provides simple markup and styles for four styles of common web forms.</p>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Vertical (default)</th>
        <td><code>.vertical-form</code> <span class="muted">(not required)</span></td>
        <td>Stacked, left-aligned labels over controls</td>
      </tr>
      <tr>
        <th>Horizontal</th>
        <td><code>.form-horizontal</code></td>
        <td>Float left, right-aligned labels on same line as controls</td>
      </tr>
      <tr>
        <th>Inline</th>
        <td><code>.form-inline</code></td>
        <td>Left-aligned label and inline-block controls for compact style</td>
      </tr>
      <tr>
        <th>Search</th>
        <td><code>.form-search</code></td>
        <td>Extra-rounded text input for a typical search aesthetic</td>
      </tr>
    </tbody>
  </table>


  <h2>Example forms <small>using just form controls, no extra markup</small></h2>
  <div class="row">
    <div class="span4">
      <h3>Basic form</h3>
      <p>With v2.0, we have lighter and smarter defaults for form styles. No extra markup, just form controls.</p>
      <form class="well">
        <label>Label name</label>
        <input type="text" class="span3" placeholder="Type something...">
        <label class="checkbox">
          <input type="checkbox"> Check me out
        </label>
        <button type="submit" class="btn">Submit</button>
      </form>
    </div>
    <div class="span4">
      <h3>Search form</h3>
      <p>Reflecting default WebKit styles, just add <code>.form-search</code> for extra rounded search fields.</p>
      <form class="well form-search">
        <input type="text" class="input-medium search-query">
        <button type="submit" class="btn">Search</button>
      </form>
    </div>
    <div class="span4">
      <h3>Inline form</h3>
      <p>Inputs are block level to start. For <code>.form-inline</code> and <code>.form-horizontal</code>, we use inline-block.</p>
      <form class="well form-search">
        <input type="text" class="input-small" placeholder="Email">
        <input type="password" class="input-small" placeholder="Password">
        <button type="submit" class="btn">Go</button>
      </form>
    </div>
  </div><!-- /row -->

  <br>

  <h2>Horizontal forms</h2>
  <div class="row">
    <div class="span8">
      <form class="form-horizontal">
        <legend>Controls Bootstrap supports</legend>
        <fieldset class="control-group">
          <label class="control-label" for="input01">Text input</label>
          <div class="controls">
            <input type="text" class="xlarge" name="input01">
            <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
          </div>
        </fieldset>
        <fieldset class="control-group">
          <label class="control-label" for="optionsCheckbox">Checkbox</label>
          <div class="controls">
            <label class="checkbox">
              <input type="checkbox" name="optionsCheckbox" value="option1">
              Option one is this and that&mdash;be sure to include why it’s great
            </label>
          </div>
        </fieldset>
        <fieldset class="control-group">
          <label class="control-label" for="select01">Select list</label>
          <div class="controls">
            <select name="select01">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </fieldset>
        <fieldset class="control-group">
          <label class="control-label" for="multiSelect">Multi-select</label>
          <div class="controls">
            <select multiple="multiple" name="multiSelect">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </fieldset>
        <fieldset class="control-group">
          <label class="control-label" for="fileInput">File input</label>
          <div class="controls">
            <input class="input-file" id="fileInput" name="fileInput" type="file">
          </div>
        </fieldset>
        <fieldset class="control-group">
          <label class="control-label" for="textarea">Textarea</label>
          <div class="controls">
            <textarea class="input-xlarge" name="textarea" id="textarea" rows="3"></textarea>
          </div>
        </fieldset>
        <fieldset class="form-actions">
          <button type="submit" class="btn primary">Save changes</button>
          <button type="reset" class="btn">Cancel</button>
        </fieldset>
      </form>
    </div>
    <div class="span4">
      <div class="form-docs">
        <h3>What's included</h3>
        <p>Shown on the left are all the default form controls we support. Here's the bulleted list:</p>
        <ul>
          <li>text inputs (text, password, email, etc)</li>
          <li>checkbox</li>
          <li>radio</li>
          <li>select</li>
          <li>multiple select</li>
          <li>file input</li>
          <li>textarea</li>
        </ul>
        <hr>
        <h3>New defaults with v2.0</h3>
        <p>Up to v1.4, Bootstrap's default form styles used the horizontal layout. With Bootstrap 2, we removed that constraint to have smarter, more scalable defaults for any form.</p>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="span8">
      <form class="form-horizontal">
        <legend>Form control states</legend>
        <fieldset class="control-group">
          <label class="control-label" for="focusedInput">Focused input</label>
          <div class="controls">
            <input class="input-xlarge focused" id="focusedInput" name="focusedInput" type="text" value="This is focused...">
          </div>
        </fieldset>
        <fieldset class="control-group">
          <label class="control-label" for="disabledInput">Disabled input</label>
          <div class="controls">
            <input class="input-xlarge disabled" id="disabledInput" name="disabledInput" type="text" placeholder="Disabled input here..." disabled>
          </div>
        </fieldset>
        <fieldset class="control-group">
          <label class="control-label" for="optionsCheckbox">Disabled checkbox</label>
          <div class="controls">
            <label class="checkbox">
              <input type="checkbox" name="optionsCheckbox" value="option1" disabled>
              This is a disabled checkbox
            </label>
          </div>
        </fieldset>
        <fieldset class="control-group warning">
          <label class="control-label" for="inputError">Input with warning</label>
          <div class="controls">
            <input type="text" name="inputError">
            <span class="help-inline">Something may have gone wrong</span>
          </div>
        </fieldset>
        <fieldset class="control-group error">
          <label class="control-label" for="inputError">Input with error</label>
          <div class="controls">
            <input type="text" name="inputError">
            <span class="help-inline">Please correct the error</span>
          </div>
        </fieldset>
        <fieldset class="control-group success">
          <label class="control-label" for="inputError">Input with success</label>
          <div class="controls">
            <input type="text" name="inputError">
            <span class="help-inline">Woohoo!</span>
          </div>
        </fieldset>
        <fieldset class="form-actions">
          <button type="submit" class="btn primary">Save changes</button>
          <button type="reset" class="btn">Cancel</button>
        </fieldset>
      </form>
    </div>
    <div class="span4">
      <div class="form-docs">
        <h3>Redesigned browser states</h3>
        <p>Bootstrap features styles for browser-supported focused and <code>disabled</code> states. We remove the default Webkit <code>outline</code> and apply a <code>box-shadow</code> in it's place for <code>:focus</code>.</p>
        <hr>
        <h3>Form validation</h3>
        <p>It also includes validation styles for errors, warnings, and success. To use, add the a class to the surrounding <code>.control-group</code>.</p>
<pre class="prettyprint linenums">
&lt;fieldset
  class="control-group error"&gt;
  ...
&lt;/fieldset&gt;
</pre>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="span8">
      <form class="form-horizontal">
        <legend>Extending form controls</legend>
        <fieldset class="control-group">
          <label class="control-label">Form sizes</label>
          <div class="controls docs-input-sizes">
            <input class="span2" type="text" name="" placeholder=".span2">
            <input class="span3" type="text" name="" placeholder=".span3">
            <input class="span4" type="text" name="" placeholder=".span4">
            <p class="help-block">Use the same <code>.span*</code> classes from the grid system for input sizes.</p>
          </div>
        </fieldset>
        <fieldset class="control-group">
          <label class="control-label" for="prependedInput">Prepended text</label>
          <div class="controls">
            <div class="input-prepend">
              <span class="add-on">@</span>
              <input class="span2" id="prependedInput" name="prependedInput" size="16" type="text">
            </div>
            <p class="help-block">Here's some help text</p>
          </div>
        </fieldset>
        <fieldset class="control-group">
          <label class="control-label" for="appendedInput">Appended text</label>
          <div class="controls">
            <div class="input-append">
              <input class="span2" id="appendedInput" name="appendedInput" size="16" type="text">
              <span class="add-on">.00</span>
            </div>
            <p class="help-block">Here's more help text</p>
          </div>
        </fieldset>
        <fieldset class="control-group">
          <label class="control-label" for="inlineCheckboxes">Inline checkboxes</label>
          <div class="controls">
            <label class="checkbox inline">
              <input type="checkbox" name="inlineCheckbox1" value="option1"> 1
            </label>
            <label class="checkbox inline">
              <input type="checkbox" name="inlineCheckbox1" value="option1"> 2
            </label>
            <label class="checkbox inline">
              <input type="checkbox" name="inlineCheckbox1" value="option1"> 3
            </label>
          </div>
        </fieldset>
        <fieldset class="control-group">
          <label class="control-label" for="optionsCheckboxes">Checkboxes</label>
          <div class="controls">
            <label class="checkbox">
              <input type="checkbox" name="optionsCheckboxes" value="option1">
              Option one is this and that&mdash;be sure to include why it’s great
            </label>
            <label class="checkbox">
              <input type="checkbox" name="optionsCheckboxes" value="option2">
              Option two can also be checked and included in form results
            </label>
            <label class="checkbox">
              <input type="checkbox" name="optionsCheckboxes" value="option3">
              Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results
            </label>
            <p class="help-text"><strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.</p>
          </div>
        </fieldset>
        <fieldset class="control-group">
          <label class="control-label" for="optionsRadios">Radio buttons</label>
          <div class="controls">
            <label class="radio">
              <input type="radio" checked name="optionsRadios" value="option1">
              Option one is this and that&mdash;be sure to include why it’s great
            </label>
            <label class="radio">
              <input type="radio" name="optionsRadios" value="option2">
              Option two can is something else and selecting it will deselect option one
            </label>
          </div>
        </fieldset>
        <fieldset class="form-actions">
          <button type="submit" class="btn primary">Save changes</button>
          <button type="reset" class="btn">Cancel</button>
        </fieldset>
      </form>
    </div>
    <div class="span4">
      <div class="form-docs">
        <h3>Prepend &amp; append inputs</h3>
        <p>Input groups&mdash;with appended or prepended text&mdash;provide an easy way to give more context for your inputs. Great examples include the @ sign for Twitter usernames or $ for finances.</p>
        <hr>
        <h3>Checkboxes and radios</h3>
        <p>Up to v1.4, Bootstrap required extra markup around checkboxes and radios to stack them. Now, it's a simple matter of repeating the <code>&lt;label class="checkbox"&gt;</code> that wraps the <code>&lt;input type="checkbox"&gt;</code>.</p>
        <p>Inline checkboxes and radios are also supported. Just add <code>.inline</code> to any <code>.checkbox</code> or <code>.radio</code> and you're done.</p>
      </div>
    </div>
  </div><!-- /row -->
</section>



<section id="buttons">
  <div class="page-header">
    <h1>Buttons</h1>
  </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Button</th>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a class="btn" href="#">Default</a></td>
        <td><code>.btn</code></td>
        <td>Standard gray button with gradient</td>
      </tr>
      <tr>
        <td><a class="btn primary" href="#">Primary</a></td>
        <td><code>.primary</code></td>
        <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
      </tr>
      <tr>
        <td><a class="btn info" href="#">Info</a></td>
        <td><code>.info</code></td>
        <td>Used as an alternate to the default styles</td>
      </tr>
      <tr>
        <td><a class="btn success" href="#">Success</a></td>
        <td><code>.success</code></td>
        <td>Indicates a successful or positive action</td>
      </tr>
      <tr>
        <td><a class="btn danger" href="#">Danger</a></td>
        <td><code>.danger</code></td>
        <td>Indicates a dangerous or potentially negative action</td>
      </tr>
    </tbody>
  </table>

  <div class="row">
    <div class="span4">
      <h3>Buttons for actions</h3>
      <p>As a convention, buttons should only be used for actions while hyperlinks are to be used for objects. For instance, "Download" should be a button while "recent activity" should be a link.</p>
    </div>
    <div class="span4">
      <h3>For anchors and forms</h3>
      <p>Button styles can be applied to anything with the <code>.btn</code> applied. However, typically you’ll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements.</p>
    </div>
    <div class="span4">
      <p><strong>Note:</strong> All buttons must include the <code>.btn</code> class. Button styles should be applied to <code>&lt;button&gt;</code> and <code>&lt;a&gt;</code> elements for consistency.</p>
    </div>
  </div>

  <div class="row">
    <div class="span4">
      <h3>Multiple sizes</h3>
      <p>Fancy larger or smaller buttons? Have at it!</p>
      <p>
        <a href="#" class="btn large primary">Primary action</a>
        <a href="#" class="btn large">Action</a>
      </p>
      <p>
        <a href="#" class="btn small primary">Primary action</a>
        <a href="#" class="btn small">Action</a>
      </p>
    </div>
    <div class="span8">
      <h3>Disabled state</h3>
      <p>For buttons that are not active or are disabled by the app for one reason or another, use the disabled state. That’s <code>.disabled</code> for links and <code>:disabled</code> for <code>&lt;button&gt;</code> elements.</p>
      <p>
        <a href="#" class="btn large primary disabled">Primary action</a>
        <a href="#" class="btn large disabled">Action</a>
      </p>
      <p>
        <button class="btn large primary disabled" disabled="disabled">Primary action</button>&nbsp;<button class="btn large" disabled>Action</button>
      </p>
    </div>
  </div>

  <br>

</section>



<!-- Icons
================================================== -->
<section id="icons">
  <div class="page-header">
    <h1>Icons <small>Graciously provided by <a href="http://glyphicons.com" target="_blank">Glyphicons</a></small></h1>
  </div>
  <div class="row">
    <div class="span2">
      <div class="the-icons">
        <i class="glass"></i>
        <i class="music"></i>
        <i class="search"></i>
        <i class="envelope"></i>
        <i class="heart"></i>
        <i class="star"></i>
        <i class="star-empty"></i>
        <i class="user"></i>
        <i class="film"></i>
        <i class="th-large"></i>
        <i class="th"></i>
        <i class="th-list"></i>
        <i class="ok"></i>
        <i class="remove"></i>
        <i class="zoom-in"></i>
        <i class="zoom-out"></i>
        <i class="off"></i>
        <i class="signal"></i>
        <i class="cog"></i>
        <i class="trash"></i>
      </div>
    </div>
    <div class="span2">
      <div class="the-icons">
        <i class="home"></i>
        <i class="file"></i>
        <i class="time"></i>
        <i class="road"></i>
        <i class="download-alt"></i>
        <i class="download"></i>
        <i class="upload"></i>
        <i class="inbox"></i>
        <i class="play-circle"></i>
        <i class="repeat"></i>
        <i class="refresh"></i>
        <i class="calendar"></i>
        <i class="lock"></i>
        <i class="flag"></i>
        <i class="headphones"></i>
        <i class="volume-off"></i>
        <i class="volume-down"></i>
        <i class="volume-up"></i>
        <i class="qrcode"></i>
        <i class="barcode"></i>
      </div>
    </div>
    <div class="span2">
      <div class="the-icons">
        <i class="tag"></i>
        <i class="tags"></i>
        <i class="book"></i>
        <i class="bookmark"></i>
        <i class="print"></i>
        <i class="camera"></i>
        <i class="font"></i>
        <i class="bold"></i>
        <i class="italic"></i>
        <i class="text-height"></i>
        <i class="text-width"></i>
        <i class="align-left"></i>
        <i class="align-center"></i>
        <i class="align-right"></i>
        <i class="align-justify"></i>
        <i class="list"></i>
        <i class="indent-left"></i>
        <i class="indent-right"></i>
        <i class="facetime-video"></i>
        <i class="picture"></i>
      </div>
    </div>
    <div class="span2">
      <div class="the-icons">
        <i class="pencil"></i>
        <i class="map-marker"></i>
        <i class="adjust"></i>
        <i class="tint"></i>
        <i class="edit"></i>
        <i class="share"></i>
        <i class="check"></i>
        <i class="move"></i>
        <i class="step-backward"></i>
        <i class="fast-backward"></i>
        <i class="backward"></i>
        <i class="play"></i>
        <i class="pause"></i>
        <i class="stop"></i>
        <i class="forward"></i>
        <i class="fast-forward"></i>
        <i class="step-forward"></i>
        <i class="eject"></i>
        <i class="chevron-left"></i>
        <i class="chevron-right"></i>
      </div>
    </div>
    <div class="span2">
      <div class="the-icons">
        <i class="arrow-left"></i>
        <i class="arrow-right"></i>
        <i class="arrow-up"></i>
        <i class="arrow-down"></i>
        <i class="share"></i>
        <i class="resize-full"></i>
        <i class="resize-small"></i>
        <i class="plus"></i>
        <i class="minus"></i>
        <i class="asterisk"></i>
      </div>
    </div>
    <div class="span2">
      <p class="muted">Light red background color is only used to show the dimensions of the icons in the docs.</p>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="span4">
      <h3>Built as a sprite</h3>
      <p>Instead of making every icon an extra request, we've compiled them into a sprite&mdash;a bunch of images in one file that uses CSS to position the images with <code>background-position</code>. This is the same method we use on Twitter.com and it has worked well for us.</p>
      <p><a href="http://glyphicons.com" target="_blank">Glyphicons</a> has granted us use of the Halflings set in our open-source toolkit so long as we provide a link and credit. Please consider doing the same in your projects.</p>
    </div>
    <div class="span4">
      <h3>How to use</h3>
      <p>With v2.0.0, the <code>&lt;i&gt;</code> tag is essentially dedicated to iconography. To use the icons, you can place the follow code wherever you like one to appear:</p>
<pre class="prettyprint linenums">
&lt;i class="chevron-left"&gt;&lt;/i&gt;
</pre>
      <p>There are over 100 classes to choose from for your icons. Just add an <code>&lt;i&gt;</code> tag with the right class and you're set. You can find the full list in sprites.less or right here in this document.</p>
    </div>
    <div class="span4">
      <h3>Use cases</h3>
      <p>Icons are great, but where would one use them? Here are a few ideas:</p>
      <ul>
        <li>As visuals for your sidebar navigation</li>
        <li>For a purely icon-driven nav</li>
        <li>For buttons to help convey the meaning of an action</li>
        <li>With links to share context on a user's destination</li>
      </ul>
      <p>Essentially, anywhere you can put an <code>&lt;i&gt;</code> tag, you can put an icon.</p>
    </div>
  </div>

  <h3>Examples</h3>
  <div class="row">
    <div class="span4">
      <p>Use them in buttons, or in button groups for a toolbar style presentation.</p>
      <p>
        <a class="btn" href="#"><i class="refresh"></i> Refresh</a>
        <a class="btn" href="#"><i class="cog"></i> Settings</a>
      </p>
      <div class="btn-toolbar">
        <div class="btn-group">
          <a class="btn" href="#"><i class="font"></i></a>
          <a class="btn" href="#"><i class="bold"></i></a>
          <a class="btn" href="#"><i class="italic"></i></a>
        </div>
        <div class="btn-group">
          <a class="btn" href="#"><i class="align-left"></i></a>
          <a class="btn" href="#"><i class="align-center"></i></a>
          <a class="btn" href="#"><i class="align-right"></i></a>
          <a class="btn" href="#"><i class="align-justify"></i></a>
        </div>
      </div>
    </div>
    <div class="span3">
      <p>Or, use them in navigation.</p>
      <div class="well" style="padding: 8px 0;">
        <ul class="nav list">
          <li class="active"><a href="#"><i class="home"></i> Home</a></li>
          <li><a href="#"><i class="book"></i> Library</a></li>
          <li><a href="#"><i class="pencil"></i> Applications</a></li>
        </ul>
      </div> <!-- /well -->
    </div>
  </div>
</section>

<?php endwhile; ?>
      
    <script>
    (function($) {
   $(function () {
        $(".tablesorter-example").tablesorter({ sortList: [[1,0]] });
        $('.dropdown-toggle').dropdown();
      })
  
})( jQuery );
     
    </script>
		

<?php get_footer(); ?>