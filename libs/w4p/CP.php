<?php

include_once "WayForPay.php";

class CreatePayment extends WayForPay
{
    private $merchantAuthType = 'SimpleSignature';
    private $merchantDomainName;
    private $merchantTransactionType = 'AUTO';
    private $merchantTransactionSecureType = 'AUTO';
    private $language = 'RU';
    private $returnUrl;
    private $serviceUrl;
    private $orderReference;
    private $orderDate;
    private $amount;
    private $currency = 'UAH';
    private $alternativeAmount;
    private $alternativeCurrency;
    private $orderTimeout;
    private $recToken;
    private $productName = array();
    private $productPrice = array();
    private $productCount = array();
    private $clientAccountId;
    private $socialUri;
    private $clientFirstName;
    private $clientLastName;
    private $clientAddress;
    private $clientCity;
    private $clientState;
    private $clientZipCode;
    private $clientCountry;
    private $clientEmail;
    private $clientPhone;
    private $deliveryFirstName;
    private $deliveryLastName;
    private $deliveryAddress;
    private $deliveryCity;
    private $deliveryState;
    private $deliveryZipCode;
    private $deliveryCountry;
    private $deliveryEmail;
    private $deliveryPhone;
    private $aviaDepartureDate;
    private $aviaLocationNumber;
    private $aviaLocationCodes;
    private $aviaFirstName;
    private $aviaLastName;
    private $aviaReservationCode;
    private $paymentSystems;
    private $defaultPaymentSystem = 'card';

    public function setMerchantAuthType($merchantAuthType)
    {
        $this->merchantAuthType = $merchantAuthType;
        return $this;
    }

    public function getMerchantAuthType()
    {
        return $this->merchantAuthType;
    }

    public function getMerchantAuthTypeList()
    {
        return array(
            'SimpleSignature',
            'ticket',
            'password',
        );
    }

    public function setMerchantDomainName($merchantDomainName)
    {
        $this->merchantDomainName = $merchantDomainName;
        return $this;
    }

    public function getMerchantDomainName()
    {
        return $this->merchantDomainName;
    }

    public function setMerchantTransactionType($merchantTransactionType)
    {
        $this->merchantTransactionType = $merchantTransactionType;
        return $this;
    }

    public function getMerchantTransactionType()
    {
        return $this->merchantTransactionType;
    }

    public function getMerchantTransactionTypeList()
    {
        return array(
            'AUTO',
            'AUTH',
            'SALE',
        );
    }

    public function setMerchantTransactionSecureType($merchantTransactionSecureType)
    {
        $this->merchantTransactionSecureType = $merchantTransactionSecureType;
        return $this;
    }

    public function getMerchantTransactionSecureType()
    {
        return $this->merchantTransactionSecureType;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getLanguageList()
    {
        return array(
            'AUTO',
            'RU',
            'UA',
            'EN',
        );
    }

    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }

    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    public function setServiceUrl($serviceUrl)
    {
        $this->serviceUrl = $serviceUrl;
        return $this;
    }

    public function getServiceUrl()
    {
        return $this->serviceUrl;
    }

    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    public function getOrderReference()
    {
        return $this->orderReference;
    }

    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    public function getOrderDate()
    {
        return $this->orderDate;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setAlternativeAmount($alternativeAmount)
    {
        $this->alternativeAmount = $alternativeAmount;
        return $this;
    }

    public function getAlternativeAmount()
    {
        return $this->alternativeAmount;
    }

    public function setAlternativeCurrency($alternativeCurrency)
    {
        $this->alternativeCurrency = $alternativeCurrency;
        return $this;
    }

    public function getAlternativeCurrency()
    {
        return $this->alternativeCurrency;
    }

    public function setOrderTimeout($orderTimeout)
    {
        $this->orderTimeout = $orderTimeout;
        return $this;
    }

    public function getOrderTimeout()
    {
        return $this->orderTimeout;
    }

    public function setRecToken($recToken)
    {
        $this->recToken = $recToken;
        return $this;
    }

    public function getRecToken()
    {
        return $this->recToken;
    }

    public function addProduct($productName, $productPrice, $productCount)
    {
        $this->productName[] = $productName;
        $this->productPrice[] = $productPrice;
        $this->productCount[] = $productCount;
        return $this;
    }

    public function deleteProducts()
    {
        $this->productName[] = array();
        $this->productPrice[] = array();
        $this->productCount[] = array();
        return $this;
    }

    public function getProducts()
    {
        $products = array();
        foreach ($this->productName as $key => $item) {
            $products[] = array(
                'productName' => $item,
                'productPrice' => $this->productPrice[$key],
                'productCount' => $this->productCount[$key],
            );
        }
        return $products;
    }

    public function setClientAccountId($clientAccountId)
    {
        $this->clientAccountId = $clientAccountId;
        return $this;
    }

    public function getClientAccountId()
    {
        return $this->clientAccountId;
    }

    public function setSocialUri($socialUri)
    {
        $this->socialUri = $socialUri;
        return $this;
    }

    public function getSocialUri()
    {
        return $this->socialUri;
    }

    public function setClientFirstName($clientFirstName)
    {
        $this->clientFirstName = $clientFirstName;
        return $this;
    }

    public function getClientFirstName()
    {
        return $this->clientFirstName;
    }

    public function setClientLastName($clientLastName)
    {
        $this->clientLastName = $clientLastName;
        return $this;
    }

    public function getClientLastName()
    {
        return $this->clientLastName;
    }

    public function setClientAddress($clientAddress)
    {
        $this->clientAddress = $clientAddress;
        return $this;
    }

    public function getClientAddress()
    {
        return $this->clientAddress;
    }

    public function setClientCity($clientCity)
    {
        $this->clientCity = $clientCity;
        return $this;
    }

    public function getClientCity()
    {
        return $this->clientCity;
    }

    public function setClientState($clientState)
    {
        $this->clientState = $clientState;
        return $this;
    }

    public function getClientState()
    {
        return $this->clientState;
    }

    public function setClientZipCode($clientZipCode)
    {
        $this->clientZipCode = $clientZipCode;
        return $this;
    }

    public function getClientZipCode()
    {
        return $this->clientZipCode;
    }

    public function setClientCountry($clientCountry)
    {
        $this->clientCountry = $clientCountry;
        return $this;
    }

    public function getClientCountry()
    {
        return $this->clientCountry;
    }

    public function setClientEmail($clientEmail)
    {
        $this->clientEmail = $clientEmail;
        return $this;
    }

    public function getClientEmail()
    {
        return $this->clientEmail;
    }

    public function setClientPhone($clientPhone)
    {
        $this->clientPhone = $clientPhone;
        return $this;
    }

    public function getClientPhone()
    {
        return $this->clientPhone;
    }

    public function setDeliveryFirstName($deliveryFirstName)
    {
        $this->deliveryFirstName = $deliveryFirstName;
        return $this;
    }

    public function getDeliveryFirstName()
    {
        return $this->deliveryFirstName;
    }

    public function setDeliveryLastName($deliveryLastName)
    {
        $this->deliveryLastName = $deliveryLastName;
        return $this;
    }

    public function getDeliveryLastName()
    {
        return $this->deliveryLastName;
    }

    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryCity($deliveryCity)
    {
        $this->deliveryCity = $deliveryCity;
        return $this;
    }

    public function getDeliveryCity()
    {
        return $this->deliveryCity;
    }

    public function setDeliveryState($deliveryState)
    {
        $this->deliveryState = $deliveryState;
        return $this;
    }

    public function getDeliveryState()
    {
        return $this->deliveryState;
    }

    public function setDeliveryZipCode($deliveryZipCode)
    {
        $this->deliveryZipCode = $deliveryZipCode;
        return $this;
    }

    public function getDeliveryZipCode()
    {
        return $this->deliveryZipCode;
    }

    public function setDeliveryCountry($deliveryCountry)
    {
        $this->deliveryCountry = $deliveryCountry;
        return $this;
    }

    public function getDeliveryCountry()
    {
        return $this->deliveryCountry;
    }

    public function setDeliveryEmail($deliveryEmail)
    {
        $this->deliveryEmail = $deliveryEmail;
        return $this;
    }

    public function getDeliveryEmail()
    {
        return $this->deliveryEmail;
    }

    public function setDeliveryPhone($deliveryPhone)
    {
        $this->deliveryPhone = $deliveryPhone;
        return $this;
    }

    public function getDeliveryPhone()
    {
        return $this->deliveryPhone;
    }

    public function setAviaDepartureDate($aviaDepartureDate)
    {
        $this->aviaDepartureDate = $aviaDepartureDate;
        return $this;
    }

    public function getAviaDepartureDate()
    {
        return $this->aviaDepartureDate;
    }

    public function setAviaLocationNumber($aviaLocationNumber)
    {
        $this->aviaLocationNumber = $aviaLocationNumber;
        return $this;
    }

    public function getAviaLocationNumber()
    {
        return $this->aviaLocationNumber;
    }

    public function setAviaLocationCodes($aviaLocationCodes)
    {
        $this->aviaLocationCodes = $aviaLocationCodes;
        return $this;
    }

    public function getAviaLocationCodes()
    {
        return $this->aviaLocationCodes;
    }

    public function setAviaFirstName($aviaFirstName)
    {
        $this->aviaFirstName = $aviaFirstName;
        return $this;
    }

    public function getAviaFirstName()
    {
        return $this->aviaFirstName;
    }

    public function setAviaLastName($aviaLastName)
    {
        $this->aviaLastName = $aviaLastName;
        return $this;
    }

    public function getAviaLastName()
    {
        return $this->aviaLastName;
    }

    public function setAviaReservationCode($aviaReservationCode)
    {
        $this->aviaReservationCode = $aviaReservationCode;
        return $this;
    }

    public function getAviaReservationCode()
    {
        return $this->aviaReservationCode;
    }

    public function setPaymentSystems($paymentSystems)
    {
        $this->paymentSystems = $paymentSystems;
        return $this;
    }

    public function getPaymentSystems()
    {
        return $this->paymentSystems;
    }

    public function getPaymentSystemsList()
    {
        return array(
            'card',
            'privat24'
        );
    }

    public function setDefaultPaymentSystem($defaultPaymentSystem)
    {
        $this->defaultPaymentSystem = $defaultPaymentSystem;
        return $this;
    }

    public function getDefaultPaymentSystem()
    {
        return $this->defaultPaymentSystem;
    }

    protected function generateMerchantSignature()
    {
        $attrForSignature = array(
            'merchantAccount',
            'merchantDomainName',
            'orderReference',
            'orderDate',
            'amount',
            'currency',
            'productName',
            'productCount',
            'productPrice',
        );

        $values = array();
        foreach ($attrForSignature as $attr) {
            if (empty($this->$attr)) {
                throw new InvalidArgumentException("Argument $attr must be not empty");
            }
            if ($this->{$attr} === null) {
                continue;
            } elseif (is_array($this->{$attr})) {
                foreach ($this->{$attr} as $item) {
                    $values[] = $item;
                }
            } else {
                $values[] = $this->{$attr};
            }
        }

        $string = implode(';', $values);
        $merchantSignature = hash_hmac('md5', $string, $this->merchantSecretKey);
        return $merchantSignature;
    }

    protected function _setDefaultOrderDate()
    {
        $this->setOrderDate(time());
    }

    protected function _setDefaultAmount()
    {
        $amount = 0;
        foreach ($this->productPrice as $price) {
            $amount += $price;
        }
        $this->setOrderDate($amount);
    }

    public function getButtonPayment($text = 'Send', $options = array())
    {
        if (!$this->getOrderDate()) {
            $this->_setDefaultOrderDate();
        }
        if (!$this->getAmount()) {
            $this->_setDefaultAmount();
        }

        $html = "";
        $html .= "<form method='post' action='" . self::ADDRESS_URL_WAY_FOR_PAY . "' accept-charset='UTF-8'>\n";
        foreach ($this as $key => $attr) {
            if ($this->{$key} === null || $key == 'merchantSecretKey') {
                continue;
            } elseif (is_array($this->{$key})) {
                foreach ($this->{$key} as $item) {
                    $html .= "<input type='hidden' name='" . $key . "[]' value='" . $item . "'>\n";
                }
            } else {
                $html .= "<input type='hidden' name='$key' value='" . $this->{$key} . "'>\n";
            }
        }
        $html .= "<input type='hidden' name='merchantSignature' value='" . $this->generateMerchantSignature() . "'>\n";

        $attrForButton = '';
        foreach ($options as $key => $value) {
            $attrForButton .= $key . "='$value' ";
        }
        //$html .= "<button $attrForButton type='submit'>$text</button>\n";
        $html .= "<input $attrForButton type='submit' value='$text'>\n";
        $html .= '</form>';

        return $html;
    }
}