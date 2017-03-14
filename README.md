#FuelPHP

* Version: 1.8
* [Website](http://ustora.esy.es/)
* [Website for admin](http://ustora.esy.es/admin)(username+ password: please contact: nguyenvannam20132696@gmail.com)
* [information for framework](https://fuelphp.com)

## Used
* Xampp.
* Sublimtext
* phpmyadmin
## Config
* fuel/app/config/development/db.php (mysql have database name: fantastic, password: null, username: root)

```
 return array(
  'default' => array(
     'connection'  => array(
         'dsn'      => 'mysql:host=localhost;dbname=fantastic',
         'username' => 'root',
         'password' => '',
     ),
  ),
);
```
* fuel/app/config/config.php

```
/**************************************************************************/
/* Always Load                    */
/**************************************************************************/
'always_load'  => array(

    'packages'  => array(
        'auth',
'orm',
    ),
```
whitelisted_classes
```
'whitelisted_classes' => array(
    'Fuel\\Core\\Response',
    'Fuel\\Core\\View',
    'Fuel\\Core\\ViewModel',
    'Fuel\Core\Validation',
    'Closure',
),
```
* fuel/packages/auth/config/simpleauth.php
```
return array(
  'groups' => array(
      -1 => array('name' => 'Banned', 'roles' => array('banned')),
      0 => array('name' => 'Guests', 'roles' => array()),
      1 => array('name' => 'Users', 'roles' => array('user')),
      50 => array('name' => 'Moderators', 'roles' => array('user', 'moderator')),
      100  => array('name' => 'Administrators', 'roles' => array('user', 'moderator', 'admin')),
  ),
);
```

## How to run:
