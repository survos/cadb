<?php

namespace App\Repository;

use App\Entity\CaLoansXObjectRepresentations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaLoansXObjectRepresentations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaLoansXObjectRepresentations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaLoansXObjectRepresentations[]    findAll()
 * @method CaLoansXObjectRepresentations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaLoansXObjectRepresentationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaLoansXObjectRepresentations::class);
    }

    // /**
    //  * @return CaLoansXObjectRepresentations[] Returns an array of CaLoansXObjectRepresentations objects
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
    public function findOneBySomeField($value): ?CaLoansXObjectRepresentations
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
