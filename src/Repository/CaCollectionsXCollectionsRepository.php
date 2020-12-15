<?php

namespace App\Repository;

use App\Entity\CaCollectionsXCollections;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaCollectionsXCollections|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaCollectionsXCollections|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaCollectionsXCollections[]    findAll()
 * @method CaCollectionsXCollections[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaCollectionsXCollectionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaCollectionsXCollections::class);
    }

    // /**
    //  * @return CaCollectionsXCollections[] Returns an array of CaCollectionsXCollections objects
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
    public function findOneBySomeField($value): ?CaCollectionsXCollections
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
