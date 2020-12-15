<?php

namespace App\Repository;

use App\Entity\CaLoanLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaLoanLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaLoanLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaLoanLabels[]    findAll()
 * @method CaLoanLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaLoanLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaLoanLabels::class);
    }

    // /**
    //  * @return CaLoanLabels[] Returns an array of CaLoanLabels objects
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
    public function findOneBySomeField($value): ?CaLoanLabels
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
