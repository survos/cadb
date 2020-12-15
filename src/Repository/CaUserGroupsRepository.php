<?php

namespace App\Repository;

use App\Entity\CaUserGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaUserGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaUserGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaUserGroups[]    findAll()
 * @method CaUserGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaUserGroupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaUserGroups::class);
    }

    // /**
    //  * @return CaUserGroups[] Returns an array of CaUserGroups objects
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
    public function findOneBySomeField($value): ?CaUserGroups
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
