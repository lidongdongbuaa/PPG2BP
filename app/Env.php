<?php
/**
 * 环境变量
 *
 * @author mybsdc <mybsdc@gmail.com>
 * @date 2019/11/27
 * @time 9:42
 */

namespace Luolongfei\App;

use Dotenv\Dotenv;

class Env
{
    /**
     * @var Env
     */
    protected static $instance;

    /**
     * @var array 环境变量值
     */
    protected static $val;

    public function __construct()
    {
    }

    public static function instance()
    {
        if (!self::$instance instanceof Env) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function load($fileName = '.env')
    {
        if (self::$val === null) {
            self::$val = Dotenv::create(ROOT_PATH, $fileName)->load();
        }

        return self::$val;
    }
}