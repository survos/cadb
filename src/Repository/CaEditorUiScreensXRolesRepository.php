<?php

namespace App\Repository;

use App\Entity\CaEditorUiScreensXRoles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEditorUiScreensXRoles|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEditorUiScreensXRoles|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEditorUiScreensXRoles[]    findAll()
 * @method CaEditorUiScreensXRoles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEditorUiScreensXRolesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEditorUiScreensXRoles::class);
    }

    // /**
    //  * @return CaEditorUiScreensXRoles[] Returns an array of CaEditorUiScreensXRoles objects
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
    public function findOneBySomeField($value): ?CaEditorUiScreensXRoles
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
