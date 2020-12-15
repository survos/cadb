<?php

namespace App\Repository;

use App\Entity\CaEditorUiScreenTypeRestrictions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEditorUiScreenTypeRestrictions|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEditorUiScreenTypeRestrictions|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEditorUiScreenTypeRestrictions[]    findAll()
 * @method CaEditorUiScreenTypeRestrictions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEditorUiScreenTypeRestrictionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEditorUiScreenTypeRestrictions::class);
    }

    // /**
    //  * @return CaEditorUiScreenTypeRestrictions[] Returns an array of CaEditorUiScreenTypeRestrictions objects
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
    public function findOneBySomeField($value): ?CaEditorUiScreenTypeRestrictions
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
