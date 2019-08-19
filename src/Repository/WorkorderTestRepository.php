<?php

namespace App\Repository;

use App\Entity\WorkorderTest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method WorkorderTest|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkorderTest|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkorderTest[]    findAll()
 * @method WorkorderTest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkorderTestRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, WorkorderTest::class);
    }

    // /**
    //  * @return WorkorderTest[] Returns an array of WorkorderTest objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WorkorderTest
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
