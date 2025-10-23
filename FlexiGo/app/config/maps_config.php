<?php
function getEnvValue($key, $default = null) {
    if (file_exists(__DIR__ . '/../../.env')) {
        $lines = file(__DIR__ . '/../../.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos($line, '=') !== false) {
                list($envKey, $envValue) = explode('=', $line, 2);
                if (trim($envKey) === $key) {
                    return trim($envValue);
                }
            }
        }
    }
    return $default;
}

// Google Maps API Configuration
return [
    'api_key' => getEnvValue('GOOGLE_MAPS_API_KEY', '')
];
?>