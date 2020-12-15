<?php

namespace App\Repository;

use App\Entity\CaSetItemLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSetItemLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSetItemLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSetItemLabels[]    findAll()
 * @method CaSetItemLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSetItemLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSetItemLabels::class);
    }

    // /**
    //  * @return CaSetItemLabels[] Returns an array of CaSetItemLabels objects
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
    public function findOneBySomeField($value): ?CaSetItemLabels
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
