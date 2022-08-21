<?php

namespace App\Config;


class Dependencies {

    private static $_instance = null;

    public static function getContainer() {
      self::$_instance = new Dependencies();
      return self::$_instance;
    }

    public function setUpDatabase(){


      $settings = array (

        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'php_db',
        'username' => 'jochemos',
        'password' => 'Password123#@!',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',

      );

      $capsule = new \Illuminate\Database\Capsule\Manager;
      $capsule->addConnection($settings);
      $capsule->setAsGlobal();
      $capsule->bootEloquent();

    }


}
