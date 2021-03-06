<?php

namespace SwedbankPaymentPortal\BankLink\CommunicationEntity\TransactionQueryRequest;

use JMS\Serializer\Annotation;
use SwedbankPaymentPortal\BankLink\CommunicationEntity\TransactionQueryRequest\APMTxn;

/**
 * Class HPSQueryRequest.
 *
 * @Annotation\AccessType("public_method")
 */
class Transaction
{
    /**
     * @var APMTxn
     *
     * @Annotation\Type("SwedbankPaymentPortal\BankLink\CommunicationEntity\TransactionQueryRequest\APMTxn")
     * @Annotation\SerializedName("APMTxn")
     */
    private $apmTxn;

    /**
     * @param APMTxn $apmTxn
     */
    public function __construct($apmTxn)
    {
        $this->apmTxn = $apmTxn;
    }

    /**
     *
     * @return APMTxn
     */
    public function getApmTxn()
    {
        return $this->apmTxn;
    }

    /**
     *
     * @param APMTxn $apmTxn
     */
    public function setApmTxn($apmTxn)
    {
        $this->apmTxn = $apmTxn;
    }
}
