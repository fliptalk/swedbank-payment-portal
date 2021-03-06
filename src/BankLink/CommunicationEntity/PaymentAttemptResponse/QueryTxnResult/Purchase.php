<?php

namespace SwedbankPaymentPortal\BankLink\CommunicationEntity\PaymentAttemptResponse\QueryTxnResult;

use JMS\Serializer\Annotation;
use SwedbankPaymentPortal\SharedEntity\Type\ResponseStatus;

/**
 * The top-level XML element container for the purchase transaction.
 *
 * @Annotation\AccessType("public_method")
 */
class Purchase
{
    /**
     * The merchant’s APM account details.
     *
     * @var string
     *
     * @Annotation\XmlAttribute
     * @Annotation\Type("string")
     * @Annotation\SerializedName("DPGReferenceId")
     */
    private $dpgReferenceId;

    /**
     * The merchant’s APM account details.
     *
     * @var string
     *
     * @Annotation\XmlAttribute
     * @Annotation\Type("string")
     * @Annotation\SerializedName("TransactionId")
     */
    private $transactionId;

    /**
     * The email address of the consumer.
     *
     * @var Amount
     *
     * @Annotation\SerializedName("Amount")
     * @Annotation\Type("SwedbankPaymentPortal\BankLink\CommunicationEntity\PaymentAttemptResponse\QueryTxnResult\Amount")
     */
    private $amount;

    /**
     * The top-level container element that depicts the APM used for the transaction.
     *
     * @var Method
     *
     * @Annotation\SerializedName("PaymentMethod")
     * @Annotation\Type("SwedbankPaymentPortal\BankLink\CommunicationEntity\PaymentAttemptResponse\QueryTxnResult\Method")
     */
    private $method;

    /**
     * The email address of the consumer.
     *
     * @var string
     *
     * @Annotation\SerializedName("RecommendedClientMessage")
     * @Annotation\Type("string")
     */
    private $recommendedClientMessage;

    /**
     * The container element for the risk screening result.
     *
     * @var RiskResult
     *
     * @Annotation\SerializedName("RiskResult")
     * @Annotation\Type("SwedbankPaymentPortal\BankLink\CommunicationEntity\PaymentAttemptResponse\QueryTxnResult\RiskResult")
     */
    private $riskResult;

    /**
     * The response that indicates whether the transaction was accepted, or not.
     *
     * @var ResponseStatus
     *
     * @Annotation\SerializedName("Status")
     * @Annotation\Type("SwedbankPaymentPortal\SharedEntity\Type\ResponseStatus<'asString'>")
     *
     */
    private $status;

    /**
     * Purchase constructor.
     *
     * @param Method         $method
     * @param RiskResult     $riskResult
     * @param string         $dpgReferenceId
     * @param string         $transactionId
     * @param Amount         $amount
     * @param string         $recommendedClientMessage
     * @param ResponseStatus $status
     */
    public function __construct(
        Method $method,
        RiskResult $riskResult,
        $dpgReferenceId,
        $transactionId,
        Amount $amount,
        $recommendedClientMessage,
        ResponseStatus $status
    ) {
        $this->method = $method;
        $this->riskResult = $riskResult;
        $this->dpgReferenceId = $dpgReferenceId;
        $this->transactionId = $transactionId;
        $this->amount = $amount;
        $this->recommendedClientMessage = $recommendedClientMessage;
        $this->status = $status;
    }

    /**
     * DpgReferenceId getter.
     *
     * @return string
     */
    public function getDpgReferenceId()
    {
        return $this->dpgReferenceId;
    }

    /**
     * DpgReferenceId setter.
     *
     * @param string $dpgReferenceId
     */
    public function setDpgReferenceId($dpgReferenceId)
    {
        $this->dpgReferenceId = $dpgReferenceId;
    }

    /**
     * TransactionId getter.
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * TransactionId setter.
     *
     * @param string $transactionId
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Amount getter.
     *
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Amount setter.
     *
     * @param Amount $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * RecommendedClientMessage getter.
     *
     * @return string
     */
    public function getRecommendedClientMessage()
    {
        return $this->recommendedClientMessage;
    }

    /**
     * RecommendedClientMessage setter.
     *
     * @param string $recommendedClientMessage
     */
    public function setRecommendedClientMessage($recommendedClientMessage)
    {
        $this->recommendedClientMessage = $recommendedClientMessage;
    }

    /**
     * Status getter.
     *
     * @return ResponseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status setter.
     *
     * @param ResponseStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * RiskResult getter.
     *
     * @return RiskResult
     */
    public function getRiskResult()
    {
        return $this->riskResult;
    }

    /**
     * RiskResult setter.
     *
     * @param RiskResult $riskResult
     */
    public function setRiskResult($riskResult)
    {
        $this->riskResult = $riskResult;
    }

    /**
     * Method getter.
     *
     * @return Method
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Method setter.
     *
     * @param Method $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }
}
