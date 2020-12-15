<?php

namespace App\Repository;

use App\Entity\CaUserSorts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaUserSorts|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaUserSorts|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaUserSorts[]    findAll()
 * @method CaUserSorts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaUserSortsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaUserSorts::class);
    }

    // /**
    //  * @return CaUserSorts[] Returns an array of CaUserSorts objects
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
    public function findOneBySomeField($value): ?CaUserSorts
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
