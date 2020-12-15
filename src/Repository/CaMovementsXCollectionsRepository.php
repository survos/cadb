<?php

namespace App\Repository;

use App\Entity\CaMovementsXCollections;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMovementsXCollections|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMovementsXCollections|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMovementsXCollections[]    findAll()
 * @method CaMovementsXCollections[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMovementsXCollectionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMovementsXCollections::class);
    }

    // /**
    //  * @return CaMovementsXCollections[] Returns an array of CaMovementsXCollections objects
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
    public function findOneBySomeField($value): ?CaMovementsXCollections
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
