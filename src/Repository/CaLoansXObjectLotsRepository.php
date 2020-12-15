<?php

namespace App\Repository;

use App\Entity\CaLoansXObjectLots;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaLoansXObjectLots|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaLoansXObjectLots|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaLoansXObjectLots[]    findAll()
 * @method CaLoansXObjectLots[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaLoansXObjectLotsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaLoansXObjectLots::class);
    }

    // /**
    //  * @return CaLoansXObjectLots[] Returns an array of CaLoansXObjectLots objects
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
    public function findOneBySomeField($value): ?CaLoansXObjectLots
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
