<?php

namespace App\Repository;

use App\Entity\CaCollectionLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaCollectionLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaCollectionLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaCollectionLabels[]    findAll()
 * @method CaCollectionLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaCollectionLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaCollectionLabels::class);
    }

    // /**
    //  * @return CaCollectionLabels[] Returns an array of CaCollectionLabels objects
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
    public function findOneBySomeField($value): ?CaCollectionLabels
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
