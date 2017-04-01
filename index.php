<?php

require_once __DIR__.'/init.php';

$input = $request->get('name', 'World');

$response->sendContent(sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));
$response->send();
