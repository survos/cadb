<?php

namespace App\Repository;

use App\Entity\CaBookmarkFolders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaBookmarkFolders|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaBookmarkFolders|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaBookmarkFolders[]    findAll()
 * @method CaBookmarkFolders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaBookmarkFoldersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaBookmarkFolders::class);
    }

    // /**
    //  * @return CaBookmarkFolders[] Returns an array of CaBookmarkFolders objects
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
    public function findOneBySomeField($value): ?CaBookmarkFolders
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
