<?php

namespace App\Repository;

use App\Entity\CaLoansXOccurrences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaLoansXOccurrences|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaLoansXOccurrences|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaLoansXOccurrences[]    findAll()
 * @method CaLoansXOccurrences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaLoansXOccurrencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaLoansXOccurrences::class);
    }

    // /**
    //  * @return CaLoansXOccurrences[] Returns an array of CaLoansXOccurrences objects
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
    public function findOneBySomeField($value): ?CaLoansXOccurrences
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
