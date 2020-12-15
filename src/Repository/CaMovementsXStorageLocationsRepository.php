<?php

namespace App\Repository;

use App\Entity\CaMovementsXStorageLocations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMovementsXStorageLocations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMovementsXStorageLocations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMovementsXStorageLocations[]    findAll()
 * @method CaMovementsXStorageLocations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMovementsXStorageLocationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMovementsXStorageLocations::class);
    }

    // /**
    //  * @return CaMovementsXStorageLocations[] Returns an array of CaMovementsXStorageLocations objects
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
    public function findOneBySomeField($value): ?CaMovementsXStorageLocations
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
