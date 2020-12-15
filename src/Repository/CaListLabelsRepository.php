<?php

namespace App\Repository;

use App\Entity\CaListLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaListLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaListLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaListLabels[]    findAll()
 * @method CaListLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaListLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaListLabels::class);
    }

    // /**
    //  * @return CaListLabels[] Returns an array of CaListLabels objects
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
    public function findOneBySomeField($value): ?CaListLabels
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
