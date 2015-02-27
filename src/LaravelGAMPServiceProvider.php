<?php namespace Irazasyed\LaravelGAMP;

/**
 * Laravel GAMP: Google Analytics - Measurement Protocol
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the MIT License.
 *
 * This source file is subject to the MIT  License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://opensource.org/licenses/MIT
 *
 * @package       LaravelGAMP
 * @author        Lukonet
 * @license       MIT
 * @copyright (c) 2015 Lukonet Pvt. Ltd.
 * @link          https://lukonet.com
 */

use Illuminate\Support\ServiceProvider;
use TheIconic\Tracking\GoogleAnalytics\Analytics;

class LaravelGAMPServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/gamp.php' => config_path('gamp.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['gamp'] = $this->app->share(function ($app) {
            return $this->registerAnalytics();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [ 'gamp' ];
    }

    /**
     * Initialize Analytics Library with Default Config
     *
     * @return \TheIconic\Tracking\GoogleAnalytics\Analytics
     */
    public function registerAnalytics()
    {
        $analytics = new Analytics(config('gamp.is_ssl'));

        $analytics->setProtocolVersion(config('gamp.protocol_version'))
            ->setTrackingId(config('gamp.tracking_id'));

        if (config('gamp.anonymize_ip')) {
            $analytics->setAnonymizeIp('1');
        }

        if (config('gamp.async_requests')) {
            $analytics->makeNonBlocking();
        }

        return $analytics;
    }
}
