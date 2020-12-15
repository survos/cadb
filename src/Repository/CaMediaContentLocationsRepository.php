<?php

namespace App\Repository;

use App\Entity\CaMediaContentLocations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMediaContentLocations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMediaContentLocations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMediaContentLocations[]    findAll()
 * @method CaMediaContentLocations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMediaContentLocationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMediaContentLocations::class);
    }

    // /**
    //  * @return CaMediaContentLocations[] Returns an array of CaMediaContentLocations objects
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
    public function findOneBySomeField($value): ?CaMediaContentLocations
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
