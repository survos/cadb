<?php

namespace App\Repository;

use App\Entity\CaStorageLocationsXStorageLocations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaStorageLocationsXStorageLocations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaStorageLocationsXStorageLocations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaStorageLocationsXStorageLocations[]    findAll()
 * @method CaStorageLocationsXStorageLocations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaStorageLocationsXStorageLocationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaStorageLocationsXStorageLocations::class);
    }

    // /**
    //  * @return CaStorageLocationsXStorageLocations[] Returns an array of CaStorageLocationsXStorageLocations objects
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
    public function findOneBySomeField($value): ?CaStorageLocationsXStorageLocations
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
