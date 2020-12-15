<?php

namespace App\Repository;

use App\Entity\CaGroupsXRoles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaGroupsXRoles|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaGroupsXRoles|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaGroupsXRoles[]    findAll()
 * @method CaGroupsXRoles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaGroupsXRolesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaGroupsXRoles::class);
    }

    // /**
    //  * @return CaGroupsXRoles[] Returns an array of CaGroupsXRoles objects
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
    public function findOneBySomeField($value): ?CaGroupsXRoles
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
