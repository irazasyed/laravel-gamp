<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Google Analytics Tracking / Web Property ID [REQUIRED]
    |--------------------------------------------------------------------------
    |
    | Your Google Analytics tracking ID / web property ID. The format is UA-XXXX-Y.
    | All collected data is associated by this ID.
    |
    | Refer:
    | https://developers.google.com/analytics/devguides/collection/protocol/v1/parameters#tid
    |
    */
    'tracking_id' => env('GA_ID'),

    /*
    |--------------------------------------------------------------------------
    | Measurement Protocol Version [REQUIRED]
    |--------------------------------------------------------------------------
    |
    | The Protocol version. The current value is '1'.
    | This will only change when there are changes made that are not backwards compatible.
    |
    | Refer:
    | https://developers.google.com/analytics/devguides/collection/protocol/v1/parameters#v
    |
    | Default: 1
    |
    */
    'protocol_version' => 1,

    /*
    |--------------------------------------------------------------------------
    | URL Endpoint - SSL Support: Send Data over SSL [Optional]
    |--------------------------------------------------------------------------
    |
    | This option controls the URL endpoint of the Measurement Protocol.
    | To send data over SSL, set true.
    |
    | Refer:
    | https://developers.google.com/analytics/devguides/collection/protocol/v1/parameters#tid
    |
    | Default: false
    | Valid Values: (Boolean) "true" OR "false"
    |
    */
    'is_ssl' => false,

    /*
    |--------------------------------------------------------------------------
    | Disable Hits [Optional]
    |--------------------------------------------------------------------------
    |
    | This option controls enabling or disabling the library.
    | Useful in Staging/Dev environments when you don't want to actually send hits to GA.
    | When disabled, it returns a AnalyticsResponseInterface object that returns empty values.
    |
    | To disable library hits, set true.
    |
    | Default: false
    | Valid Values: (Boolean) "true" OR "false"
    |
    */
    'is_disabled' => false,

    /*
    |--------------------------------------------------------------------------
    | Anonymize IP [Optional]
    |--------------------------------------------------------------------------
    |
    | When set to True, the IP address of the sender will be anonymized.
    |
    | Refer:
    | https://developers.google.com/analytics/devguides/collection/protocol/v1/parameters#aip
    |
    | Default: false
    | Valid Values: (Boolean) "true" OR "false"
    |
    */
    'anonymize_ip' => false,

    /*
    |--------------------------------------------------------------------------
    | Asynchronous Requests [Optional]
    |--------------------------------------------------------------------------
    |
    | When set to True, All the requests would be made non-blocking (Async).
    |
    | Default: false
    | Valid Values: (Boolean) "true" OR "false"
    |
    */
    'async_requests' => false,
];
