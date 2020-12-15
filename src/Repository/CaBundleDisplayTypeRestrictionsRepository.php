<?php

namespace App\Repository;

use App\Entity\CaBundleDisplayTypeRestrictions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaBundleDisplayTypeRestrictions|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaBundleDisplayTypeRestrictions|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaBundleDisplayTypeRestrictions[]    findAll()
 * @method CaBundleDisplayTypeRestrictions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaBundleDisplayTypeRestrictionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaBundleDisplayTypeRestrictions::class);
    }

    // /**
    //  * @return CaBundleDisplayTypeRestrictions[] Returns an array of CaBundleDisplayTypeRestrictions objects
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
    public function findOneBySomeField($value): ?CaBundleDisplayTypeRestrictions
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
