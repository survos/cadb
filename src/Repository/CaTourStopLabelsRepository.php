<?php

namespace App\Repository;

use App\Entity\CaTourStopLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaTourStopLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaTourStopLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaTourStopLabels[]    findAll()
 * @method CaTourStopLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaTourStopLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaTourStopLabels::class);
    }

    // /**
    //  * @return CaTourStopLabels[] Returns an array of CaTourStopLabels objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CaTourStopLabels
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
