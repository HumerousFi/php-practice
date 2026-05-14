<?php

$name = $_GET['name'] ?? "Guest";

echo "Hello " . htmlspecialchars($name);

?>