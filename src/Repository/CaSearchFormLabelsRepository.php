<?php

namespace App\Repository;

use App\Entity\CaSearchFormLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSearchFormLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSearchFormLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSearchFormLabels[]    findAll()
 * @method CaSearchFormLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSearchFormLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSearchFormLabels::class);
    }

    // /**
    //  * @return CaSearchFormLabels[] Returns an array of CaSearchFormLabels objects
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
    public function findOneBySomeField($value): ?CaSearchFormLabels
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
