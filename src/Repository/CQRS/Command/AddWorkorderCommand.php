<?php

namespace App\Repository\CQRS\Command;


use App\Interfaces\MessageInterface;
use phpDocumentor\Reflection\Types\Integer;

class AddWorkorderCommand implements MessageInterface
{

    /** @var int */
    private $technicianId;

    /** @var int */
    private $deviceId;

    /** @var string */
    private $comment;

    /** @var \DateTime */
    private $dateCreate;

    /** @var \DateTime */
    private $dateUpdate;


    public function __construct(
        int $technicianId,
        int $deviceId,
        string $comment,
        \DateTime $dateCreate,
        \DateTime $dateUpdate
    )
    {
        $this->technicianId = $technicianId;
        $this->deviceId = $deviceId;
        $this->comment = $comment;
        $this->dateCreate = $dateCreate;
        $this->dateUpdate = $dateUpdate;
    }

    /**
     * @return int
     */
    public function getTechnicianId(): int
    {
        return $this->technicianId;
    }

    /**
     * @return int
     */
    public function getDeviceId(): int
    {
        return $this->deviceId;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreate(): \DateTime
    {
        return $this->dateCreate;
    }

    /**
     * @return \DateTime
     */
    public function getDateUpdate(): \DateTime
    {
        return $this->dateUpdate;
    }





}
