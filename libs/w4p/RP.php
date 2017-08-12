<?php
include_once "WayForPay.php";

class ResponsePayment extends WayForPay
{
    private $orderReference;
    private $merchantSignature;
    private $amount;
    private $currency;
    private $authCode;
    private $email;
    private $phone;
    private $createdDate;
    private $processingDate;
    private $cardPan;
    private $cardType;
    private $issuerBankCountry;
    private $issuerBankName;
    private $recToken;
    private $transactionStatus;
    private $reason;
    private $reasonCode;
    private $fee;
    private $paymentSystem;
    public function __construct($merchantAccount, $merchantSecretKey)
    {
        parent::__construct($merchantAccount, $merchantSecretKey);
        if(!empty($_POST)){
            foreach($this as $key => $value){
                if(!empty($_POST[$key])){
                    $this->{$key} = $_POST[$key];
                }
            }
        }
    }

    public function getMerchantAccount()
    {
        return $this->merchantAccount;
    }

    public function getOrderReference()
    {
        return $this->orderReference;
    }

    public function getMerchantSignature()
    {
        return $this->merchantSignature;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function getAuthCode()
    {
        return $this->authCode;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    public function getProcessingDate()
    {
        return $this->processingDate;
    }

    public function getCardPan()
    {
        return $this->cardPan;
    }

    public function getCardType()
    {
        return $this->cardType;
    }

    public function getIssuerBankCountry()
    {
        return $this->issuerBankCountry;
    }

    public function getIssuerBankName()
    {
        return $this->issuerBankName;
    }

    public function getRecToken()
    {
        return $this->recToken;
    }

    public function getTransactionStatus()
    {
        return $this->transactionStatus;
    }

    public function getReason()
    {
        return $this->reason;
    }
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    public function getFee()
    {
        return $this->fee;
    }

    public function getPaymentSystem()
    {
        return $this->paymentSystem;
    }

    protected function generateMerchantSignature()
    {
        $attrForSignature = array(
            'merchantAccount',
            'orderReference',
            'amount',
            'currency',
            'authCode',
            'transactionStatus',
            'reasonCode',
        );
        $values = array();
        foreach ($attrForSignature as $attr) {
            if (empty($this->$attr)) {
                continue;
            }
            $values[] = $this->{$attr};
        }
        $string = implode(';', $values);
        $merchantSignature = hash_hmac('md5', $string, $this->merchantSecretKey);
        return $merchantSignature;
    }
    protected function getStatusesOnSuccess()
    {
        return array(
            'InProcessing',
            'Approved',
        );
    }

    public function validation()
    {
//        if(!$response = $this->generateMerchantSignature()){
//            return false;
//        }
//        return $this->merchantSignature == $response;
        return in_array($this->getTransactionStatus(), $this->getStatusesOnSuccess());
    }
}