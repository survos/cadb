<?php

namespace App\Repository;

use App\Entity\CaObjectLotsXCollections;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectLotsXCollections|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectLotsXCollections|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectLotsXCollections[]    findAll()
 * @method CaObjectLotsXCollections[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectLotsXCollectionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectLotsXCollections::class);
    }

    // /**
    //  * @return CaObjectLotsXCollections[] Returns an array of CaObjectLotsXCollections objects
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
    public function findOneBySomeField($value): ?CaObjectLotsXCollections
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
