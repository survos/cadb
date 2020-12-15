<?php

namespace App\Repository;

use App\Entity\CaLoans;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaLoans|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaLoans|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaLoans[]    findAll()
 * @method CaLoans[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaLoansRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaLoans::class);
    }

    // /**
    //  * @return CaLoans[] Returns an array of CaLoans objects
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
    public function findOneBySomeField($value): ?CaLoans
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
