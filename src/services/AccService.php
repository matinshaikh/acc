<?php
/**
 * acc plugin for Craft CMS 3.x
 *
 * Description
 *
 * @link      https://qaswaweb.com
 * @copyright Copyright (c) 2019 Matin Shaikh
 */

namespace matinshaikh\acc\services;

use matinshaikh\acc\Acc;

use Craft;
use craft\base\Component;

/**
 * AccService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Matin Shaikh
 * @package   Acc
 * @since     1.0.0
 */
class AccService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Acc::$plugin->accService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
