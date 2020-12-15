<?php

namespace App\Repository;

use App\Entity\CaCollectionsXStorageLocations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaCollectionsXStorageLocations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaCollectionsXStorageLocations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaCollectionsXStorageLocations[]    findAll()
 * @method CaCollectionsXStorageLocations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaCollectionsXStorageLocationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaCollectionsXStorageLocations::class);
    }

    // /**
    //  * @return CaCollectionsXStorageLocations[] Returns an array of CaCollectionsXStorageLocations objects
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
    public function findOneBySomeField($value): ?CaCollectionsXStorageLocations
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
