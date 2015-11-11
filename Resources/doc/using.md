# Using

This is an example how to create a Natural User on MangoPay

``` php
<?php

namespace MyBundle\Controller;

use MangoPay\UserNatural;

class UserMangoController
{
    $factory = $this->get('houssrad_api_factory');
    
    $api =  $factory->getApi();

    $User = new UserNatural();
            
    $User->Email = "email@gmail.com"

    $User->FirstName = "my_first_name";

    $User->LastName = "my_last_name";

    // Must be Timestamp 
    $User->Birthday = 1272508903; 

    $User->Nationality = "FR";

    $User->CountryOfResidence = "FR";

    /*
    * $Response is \MangoPay\UserNatural Object 
    * 
    */
    $Response = $api->Users->Create($User);

} 
```

You can find documentation of mangopay here https://docs.mangopay.com/api-references/
And some example here http://mangopay-api-reference.colouredcow.com/usage-examples.php

[Back to the index](index.md)
