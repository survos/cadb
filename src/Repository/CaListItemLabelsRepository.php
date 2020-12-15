<?php

namespace App\Repository;

use App\Entity\CaListItemLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaListItemLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaListItemLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaListItemLabels[]    findAll()
 * @method CaListItemLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaListItemLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaListItemLabels::class);
    }

    // /**
    //  * @return CaListItemLabels[] Returns an array of CaListItemLabels objects
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
    public function findOneBySomeField($value): ?CaListItemLabels
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
