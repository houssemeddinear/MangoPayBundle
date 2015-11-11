# MangoPayBundle

### Step 1: Download HoussradMangoPayBundle using composer

Tell composer to require HoussradMangoPayBundle by running the command:

``` bash
$ php composer.phar require "houssrad/mangopay-bundle:dev-master"
```

Composer will install the bundle to your project's `vendor/houssrad/mangopay-bundle` directory.


## Step 2: Enable the bundle

Finally, enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...

        new Houssrad\MangoPayBundle\HoussradMangoPayBundle(),
    );
}
```

[Back to the index](../../README.md)
