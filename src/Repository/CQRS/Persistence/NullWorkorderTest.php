<?php

namespace App\Repository\CQRS\Persistence;

use App\Entity\WorkorderTest;

class NullWorkorderTest extends WorkorderTest
{

    public function getId(): ?int
    {
        return null;
    }

    public function getTechnicianId(): ?int
    {
        return null;
    }

    public function setComment(string $comment): WorkorderTest
    {
        return '';
    }

    public function getDeviceId(): ?int
    {
        return null;
    }

    public function setDateCreate(\DateTimeInterface $dateCreate): WorkorderTest
    {
        return new \DateTime();
    }

    public function getDateUpdate(): ?\DateTimeInterface
    {
        return new \DateTime();
    }

}
