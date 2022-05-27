<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../auto-prepend/settings.php';

use CrowdSecBouncer\StandaloneBounce;
use CrowdSecBouncer\Geolocation;

if (isset($_GET['ip'])) {
    $requestedIp = $_GET['ip'];
    $dbName = $_GET['db-name'] ?? 'GeoLite2-Country.mmdb';
    $dbType = $_GET['db-type'] ?? 'country';
    $saveResult = isset($_GET['save-result']);

    $geolocConfig = [
        'enabled' => true,
        'save_result' => $saveResult,
        'type' => 'maxmind',
        'maxmind' => [
            'database_type' => $dbType,
            'database_path' => '/var/www/html/my-own-modules/crowdsec-php-lib/tests/' . $dbName
        ]
    ];

    $bounce = new StandaloneBounce();
    /** @var $crowdSecStandaloneBouncerConfig */
    $bouncer = $bounce->init($crowdSecStandaloneBouncerConfig);
    $apiCache = $bouncer->getApiCache();

    $geolocation = new Geolocation();
    if(!$saveResult){
        $geolocation->clearGeolocationCache($requestedIp, $apiCache);
    }

    $countryResult = $geolocation->getCountryResult($geolocConfig, $requestedIp, $apiCache);
    $country = $countryResult['country'];
    $notFound = $countryResult['not_found'];
    $error = $countryResult['error'];
    $saveMessage = $saveResult ? 'true' : 'false';

    echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'/>
    <title>Geolocation for IP: $requestedIp</title>
</head>

<body>
    <h1>For IP $requestedIp:</h1>
    <ul>
        <li>Country: $country</li>
        <li>Not Found message: $notFound</li>
        <li>Error message: $error</li>
        <li>Save result: $saveMessage</li>
    </ul>
</body>
</html>
";
} else {
    die('You must pass an "ip" param' . PHP_EOL);
}




