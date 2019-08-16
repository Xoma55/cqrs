<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WorkorderRepository")
 */
class Workorder
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $accountId;

    /**
     * @ORM\Column(type="integer")
     */
    private $statusId;

    /**
     * @ORM\Column(type="integer")
     */
    private $divisionId;

    /**
     * @ORM\Column(type="bigint")
     */
    private $grandTotal;

    /**
     * @ORM\Column(type="bigint")
     */
    private $totalServiceFee;

    /**
     * @ORM\Column(type="string")
     */
    private $directions;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCreate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateUpdate;

    /**
     * @ORM\Column(type="string")
     */
    private $internalComment;

    /**
     * @ORM\Column(type="integer")
     */
    private $authorizerId;

    /**
     * @ORM\Column(type="integer")
     */
    private $paymentMethodId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    public function setAccountId(int $accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function getStatusId(): ?int
    {
        return $this->statusId;
    }

    public function setStatusId(int $statusId): self
    {
        $this->statusId = $statusId;

        return $this;
    }

    public function getDivisionId(): ?int
    {
        return $this->divisionId;
    }

    public function setDivisionId(int $divisionId): self
    {
        $this->divisionId = $divisionId;

        return $this;
    }

    public function getGrandTotal(): ?int
    {
        return $this->grandTotal;
    }

    public function setGrandTotal(int $grandTotal): self
    {
        $this->grandTotal = $grandTotal;

        return $this;
    }

    public function getTotalServiceFee(): ?int
    {
        return $this->totalServiceFee;
    }

    public function setTotalServiceFee(int $totalServiceFee): self
    {
        $this->totalServiceFee = $totalServiceFee;

        return $this;
    }

    public function getDirections(): ?string
    {
        return $this->directions;
    }

    public function setDirections(string $directions): self
    {
        $this->directions = $directions;

        return $this;
    }

    public function getDateCreate(): ?\DateTimeInterface
    {
        return $this->dateCreate;
    }

    public function setDateCreate(\DateTimeInterface $dateCreate): self
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    public function getDateUpdate(): ?\DateTimeInterface
    {
        return $this->dateUpdate;
    }

    public function setDateUpdate(\DateTimeInterface $dateUpdate): self
    {
        $this->dateUpdate = $dateUpdate;

        return $this;
    }

    public function getInternalComment(): ?string
    {
        return $this->internalComment;
    }

    public function setInternalComment(string $internalComment): self
    {
        $this->internalComment = $internalComment;

        return $this;
    }

    public function getAuthorizerId(): ?int
    {
        return $this->authorizerId;
    }

    public function setAuthorizerId(int $authorizerId): self
    {
        $this->authorizerId = $authorizerId;

        return $this;
    }

    public function getPaymentMethodId(): ?int
    {
        return $this->paymentMethodId;
    }

    public function setPaymentMethodId(int $paymentMethodId): self
    {
        $this->paymentMethodId = $paymentMethodId;

        return $this;
    }
}
