<?php
class WayForPay
{
    const ADDRESS_URL_WAY_FOR_PAY = "https://secure.wayforpay.com/pay";

    protected $merchantAccount;
    protected $merchantSecretKey;

    public function __construct($merchantAccount, $merchantSecretKey)
    {
        $this->merchantAccount = $merchantAccount;
        $this->merchantSecretKey = $merchantSecretKey;
    }

    public function setMerchantAccount($merchantAccount)
    {
        $this->merchantAccount = $merchantAccount;
        return $this;
    }

    public function getMerchantAccount()
    {
        return $this->merchantAccount;
    }
}