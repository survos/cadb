<?php

namespace App\Repository;

use App\Entity\CaEditorUisXRoles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEditorUisXRoles|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEditorUisXRoles|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEditorUisXRoles[]    findAll()
 * @method CaEditorUisXRoles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEditorUisXRolesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEditorUisXRoles::class);
    }

    // /**
    //  * @return CaEditorUisXRoles[] Returns an array of CaEditorUisXRoles objects
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
    public function findOneBySomeField($value): ?CaEditorUisXRoles
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
