<?php

namespace App\Repository;

use App\Entity\CaWatchList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaWatchList|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaWatchList|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaWatchList[]    findAll()
 * @method CaWatchList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaWatchListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaWatchList::class);
    }

    // /**
    //  * @return CaWatchList[] Returns an array of CaWatchList objects
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
    public function findOneBySomeField($value): ?CaWatchList
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
