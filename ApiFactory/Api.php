<?php

namespace Houssrad\MangoPayBundle\ApiFactory;

use MangoPay\MangoPayApi;
use Symfony\Component\DependencyInjection\Container;

/**
 * Description of Api
 *
 * @author ARFAOUI HoussemEddine <arfaouihousseme@gmail.com>
 */
class Api implements ApiInterface
{
    /**
     * Service Container 
     * 
     * @var Container
     */
    protected $container;
    
    public function __construct(Container $container)
    {
        $this->container = $container;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getApi()
    {
        $api = new MangoPayApi(); 
        $api->Config->ClientId = $this->container->getParameter('houssrad_mango_pay.mangopay_id');
        $api->Config->ClientPassword = $this->container->getParameter('houssrad_mango_pay.mangopay_password');
        $api->Config->BaseUrl = $this->container->getParameter('houssrad_mango_pay.mangopay_base_url');
        $api->Config->TemporaryFolder = sys_get_temp_dir();
        return $api;
    }
    
}
