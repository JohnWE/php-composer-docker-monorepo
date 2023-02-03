<?php

declare(strict_types=1);

use PHPMR\Package1\PackageClass;

require_once "../vendor/autoload.php";

echo "<h1>Service 2</h1>";
echo "package exists" . class_exists(PackageClass::class);

echo "<br>";

$package = new PackageClass();

echo $package->doSomething();

?>
<br><br>
<a href="http://localhost">Go to service 1</a>
