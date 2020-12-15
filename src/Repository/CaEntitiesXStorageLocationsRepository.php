<?php

namespace App\Repository;

use App\Entity\CaEntitiesXStorageLocations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEntitiesXStorageLocations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEntitiesXStorageLocations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEntitiesXStorageLocations[]    findAll()
 * @method CaEntitiesXStorageLocations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEntitiesXStorageLocationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEntitiesXStorageLocations::class);
    }

    // /**
    //  * @return CaEntitiesXStorageLocations[] Returns an array of CaEntitiesXStorageLocations objects
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
    public function findOneBySomeField($value): ?CaEntitiesXStorageLocations
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
