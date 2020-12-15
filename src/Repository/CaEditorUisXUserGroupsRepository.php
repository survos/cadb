<?php

namespace App\Repository;

use App\Entity\CaEditorUisXUserGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEditorUisXUserGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEditorUisXUserGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEditorUisXUserGroups[]    findAll()
 * @method CaEditorUisXUserGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEditorUisXUserGroupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEditorUisXUserGroups::class);
    }

    // /**
    //  * @return CaEditorUisXUserGroups[] Returns an array of CaEditorUisXUserGroups objects
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
    public function findOneBySomeField($value): ?CaEditorUisXUserGroups
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
