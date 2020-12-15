<?php

namespace App\Repository;

use App\Entity\CaMetadataTypeRestrictions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMetadataTypeRestrictions|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMetadataTypeRestrictions|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMetadataTypeRestrictions[]    findAll()
 * @method CaMetadataTypeRestrictions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMetadataTypeRestrictionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMetadataTypeRestrictions::class);
    }

    // /**
    //  * @return CaMetadataTypeRestrictions[] Returns an array of CaMetadataTypeRestrictions objects
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
    public function findOneBySomeField($value): ?CaMetadataTypeRestrictions
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
