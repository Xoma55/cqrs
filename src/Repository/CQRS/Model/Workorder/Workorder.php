<?php

namespace App\Repository\CQRS\Model\Workorder;

class Workorder
{

    /** @var int */
    private $id;

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


    public function __construct($id, $technicianId, $deviceId, $comment, $dateCreate, $dateUpdate)
    {

        $this->id = $id;
        $this->technicianId = $technicianId;
        $this->deviceId = $deviceId;
        $this->comment = $comment;
        $this->dateCreate = $dateCreate;
        $this->dateUpdate = $dateUpdate;

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getTechnicianId(): int
    {
        return $this->technicianId;
    }

    /**
     * @param int $technicianId
     */
    public function setTechnicianId(int $technicianId): void
    {
        $this->technicianId = $technicianId;
    }

    /**
     * @return int
     */
    public function getDeviceId(): int
    {
        return $this->deviceId;
    }

    /**
     * @param int $deviceId
     */
    public function setDeviceId(int $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreate(): \DateTime
    {
        return $this->dateCreate;
    }

    /**
     * @param \DateTime $dateCreate
     */
    public function setDateCreate(\DateTime $dateCreate): void
    {
        $this->dateCreate = $dateCreate;
    }

    /**
     * @return \DateTime
     */
    public function getDateUpdate(): \DateTime
    {
        return $this->dateUpdate;
    }

    /**
     * @param \DateTime $dateUpdate
     */
    public function setDateUpdate(\DateTime $dateUpdate): void
    {
        $this->dateUpdate = $dateUpdate;
    }

}
