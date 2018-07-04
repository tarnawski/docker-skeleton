<?php

$pdo = new PDO('pgsql:host=postgres;dbname=fitness_club', 'admin', 'root');

// Check connection is enabled
echo $pdo ? 'Connected!' : 'Not connected!';