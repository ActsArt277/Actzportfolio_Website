<?php
// Security headers must be sent before any page output.
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: camera=(), microphone=(), geolocation=()');
header("Content-Security-Policy: default-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline'; font-src 'self'; script-src 'none'; connect-src 'none'; frame-ancestors 'self'; base-uri 'self'; form-action 'self' mailto:");
header('Strict-Transport-Security: max-age=31536000; includeSubDomains');

require __DIR__ . '/index.html';
