<?php

// Shim for hosts (like Hostinger shared hosting) where the document root
// can't be changed to point at /public — this lets the deployed repo root
// itself serve as the web root while delegating to Laravel's real front
// controller. __DIR__ inside the required file still resolves to /public,
// so all of Laravel's relative bootstrap paths keep working unmodified.
require __DIR__.'/public/index.php';
