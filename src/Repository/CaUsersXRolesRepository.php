<?php

namespace App\Repository;

use App\Entity\CaUsersXRoles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaUsersXRoles|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaUsersXRoles|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaUsersXRoles[]    findAll()
 * @method CaUsersXRoles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaUsersXRolesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaUsersXRoles::class);
    }

    // /**
    //  * @return CaUsersXRoles[] Returns an array of CaUsersXRoles objects
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
    public function findOneBySomeField($value): ?CaUsersXRoles
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
