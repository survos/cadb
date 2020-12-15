<?php

namespace App\Repository;

use App\Entity\CaLoansXStorageLocations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaLoansXStorageLocations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaLoansXStorageLocations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaLoansXStorageLocations[]    findAll()
 * @method CaLoansXStorageLocations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaLoansXStorageLocationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaLoansXStorageLocations::class);
    }

    // /**
    //  * @return CaLoansXStorageLocations[] Returns an array of CaLoansXStorageLocations objects
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
    public function findOneBySomeField($value): ?CaLoansXStorageLocations
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
