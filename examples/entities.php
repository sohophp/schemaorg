<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Bootstrap.php';

header('content-type:text/html;charset=utf-8');

$Page = \Sohophp\SchemaOrg\Entities::WebPage();
$Page->name("test one")->text('content');
$Page->setName($Page->getName());

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

