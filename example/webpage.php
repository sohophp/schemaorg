<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Bootstrap.php';

use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

header('content-type:text/html;charset=utf-8');

$Page = new WebPage();
$Page->name("test one")->text('content');
$script = $Page->toScript(JSON_PRETTY_PRINT);

?>
<html>
<head>
    <title>webpage</title>

    <?= $script ?>

</head>

<body>
<pre>

<?= htmlspecialchars($script); ?>

</pre>
</body>
</html>
