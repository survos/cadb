<?php

namespace App\Repository;

use App\Entity\CaBookmarks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaBookmarks|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaBookmarks|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaBookmarks[]    findAll()
 * @method CaBookmarks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaBookmarksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaBookmarks::class);
    }

    // /**
    //  * @return CaBookmarks[] Returns an array of CaBookmarks objects
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
    public function findOneBySomeField($value): ?CaBookmarks
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
