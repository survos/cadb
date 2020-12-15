<?php

namespace App\Repository;

use App\Entity\CaLoansXEntities;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaLoansXEntities|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaLoansXEntities|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaLoansXEntities[]    findAll()
 * @method CaLoansXEntities[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaLoansXEntitiesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaLoansXEntities::class);
    }

    // /**
    //  * @return CaLoansXEntities[] Returns an array of CaLoansXEntities objects
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
    public function findOneBySomeField($value): ?CaLoansXEntities
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
