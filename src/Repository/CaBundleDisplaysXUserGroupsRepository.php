<?php

namespace App\Repository;

use App\Entity\CaBundleDisplaysXUserGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaBundleDisplaysXUserGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaBundleDisplaysXUserGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaBundleDisplaysXUserGroups[]    findAll()
 * @method CaBundleDisplaysXUserGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaBundleDisplaysXUserGroupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaBundleDisplaysXUserGroups::class);
    }

    // /**
    //  * @return CaBundleDisplaysXUserGroups[] Returns an array of CaBundleDisplaysXUserGroups objects
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
    public function findOneBySomeField($value): ?CaBundleDisplaysXUserGroups
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
