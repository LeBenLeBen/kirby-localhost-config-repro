<h1><?= $page->title() ?></h1>

<p>Expect `&lt;?=&nbsp;page(&#39;home&#39;)&#45;&gt;url()&nbsp;?&gt;` to output `http://localhost:3000` as defined in `config/config.localhost.php`</p>

<p>Actual result:</p>

<pre><code><?= page('home')->url() ?></code></pre>

<?php
# Uncomment the following line to realize that the `debug` option
# is properly picked up from the `config.localhost.php` file.
# boom()
?>