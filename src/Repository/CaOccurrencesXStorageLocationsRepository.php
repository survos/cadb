<?php

namespace App\Repository;

use App\Entity\CaOccurrencesXStorageLocations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaOccurrencesXStorageLocations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaOccurrencesXStorageLocations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaOccurrencesXStorageLocations[]    findAll()
 * @method CaOccurrencesXStorageLocations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaOccurrencesXStorageLocationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaOccurrencesXStorageLocations::class);
    }

    // /**
    //  * @return CaOccurrencesXStorageLocations[] Returns an array of CaOccurrencesXStorageLocations objects
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
    public function findOneBySomeField($value): ?CaOccurrencesXStorageLocations
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
