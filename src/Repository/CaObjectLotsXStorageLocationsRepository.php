<?php

namespace App\Repository;

use App\Entity\CaObjectLotsXStorageLocations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectLotsXStorageLocations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectLotsXStorageLocations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectLotsXStorageLocations[]    findAll()
 * @method CaObjectLotsXStorageLocations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectLotsXStorageLocationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectLotsXStorageLocations::class);
    }

    // /**
    //  * @return CaObjectLotsXStorageLocations[] Returns an array of CaObjectLotsXStorageLocations objects
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
    public function findOneBySomeField($value): ?CaObjectLotsXStorageLocations
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
