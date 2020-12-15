<?php

namespace App\Repository;

use App\Entity\CaPlacesXStorageLocations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaPlacesXStorageLocations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaPlacesXStorageLocations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaPlacesXStorageLocations[]    findAll()
 * @method CaPlacesXStorageLocations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaPlacesXStorageLocationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaPlacesXStorageLocations::class);
    }

    // /**
    //  * @return CaPlacesXStorageLocations[] Returns an array of CaPlacesXStorageLocations objects
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
    public function findOneBySomeField($value): ?CaPlacesXStorageLocations
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
