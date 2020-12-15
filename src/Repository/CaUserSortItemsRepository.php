<?php

namespace App\Repository;

use App\Entity\CaUserSortItems;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaUserSortItems|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaUserSortItems|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaUserSortItems[]    findAll()
 * @method CaUserSortItems[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaUserSortItemsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaUserSortItems::class);
    }

    // /**
    //  * @return CaUserSortItems[] Returns an array of CaUserSortItems objects
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
    public function findOneBySomeField($value): ?CaUserSortItems
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
