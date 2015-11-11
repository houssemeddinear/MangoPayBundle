<?php

namespace Houssrad\MangoPayBundle\ApiFactory;

use MangoPay\MangoPayApi;

/**
 * API Interface
 *
 * @author ARFAOUI HoussemEddine <arfaouihousseme@gmail.com>
 */
interface ApiInterface
{
    /**
     * Create API MangoPay Object
     * 
     * @return MangoPayApi
     */
    function getApi();
}
