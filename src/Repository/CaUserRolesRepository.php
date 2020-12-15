<?php

namespace App\Repository;

use App\Entity\CaUserRoles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaUserRoles|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaUserRoles|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaUserRoles[]    findAll()
 * @method CaUserRoles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaUserRolesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaUserRoles::class);
    }

    // /**
    //  * @return CaUserRoles[] Returns an array of CaUserRoles objects
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
    public function findOneBySomeField($value): ?CaUserRoles
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
