<?php

namespace App\Repository;

use App\Entity\CaEditorUiTypeRestrictions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEditorUiTypeRestrictions|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEditorUiTypeRestrictions|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEditorUiTypeRestrictions[]    findAll()
 * @method CaEditorUiTypeRestrictions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEditorUiTypeRestrictionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEditorUiTypeRestrictions::class);
    }

    // /**
    //  * @return CaEditorUiTypeRestrictions[] Returns an array of CaEditorUiTypeRestrictions objects
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
    public function findOneBySomeField($value): ?CaEditorUiTypeRestrictions
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
