<?php

namespace App\Repository;

use App\Entity\CaStorageLocationLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaStorageLocationLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaStorageLocationLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaStorageLocationLabels[]    findAll()
 * @method CaStorageLocationLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaStorageLocationLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaStorageLocationLabels::class);
    }

    // /**
    //  * @return CaStorageLocationLabels[] Returns an array of CaStorageLocationLabels objects
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
    public function findOneBySomeField($value): ?CaStorageLocationLabels
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
