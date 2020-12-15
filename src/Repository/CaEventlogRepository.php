<?php

namespace App\Repository;

use App\Entity\CaEventlog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEventlog|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEventlog|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEventlog[]    findAll()
 * @method CaEventlog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEventlogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEventlog::class);
    }

    // /**
    //  * @return CaEventlog[] Returns an array of CaEventlog objects
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
    public function findOneBySomeField($value): ?CaEventlog
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
