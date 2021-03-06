<?php

namespace SwedbankPaymentPortal\BankLink\CommunicationEntity\PurchaseRequest\Transaction\APMTxn\AlternativePayment\TransactionDetails;

use Jms\Serializer\Annotation;

/**
 * Class for personal details.
 *
 * @Annotation\AccessType("public_method")
 */
class PersonalDetails
{
    /**
     * The email address of the consumer.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("Email")
     * @Annotation\Type("string")
     */
    private $email;

    /**
     * PersonalDetails constructor.
     *
     * @param string $email
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Email getter.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Email setter.
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
