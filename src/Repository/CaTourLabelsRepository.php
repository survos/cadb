<?php

namespace App\Repository;

use App\Entity\CaTourLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaTourLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaTourLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaTourLabels[]    findAll()
 * @method CaTourLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaTourLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaTourLabels::class);
    }

    // /**
    //  * @return CaTourLabels[] Returns an array of CaTourLabels objects
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
    public function findOneBySomeField($value): ?CaTourLabels
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
