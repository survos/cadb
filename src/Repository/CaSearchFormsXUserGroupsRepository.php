<?php

namespace App\Repository;

use App\Entity\CaSearchFormsXUserGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSearchFormsXUserGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSearchFormsXUserGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSearchFormsXUserGroups[]    findAll()
 * @method CaSearchFormsXUserGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSearchFormsXUserGroupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSearchFormsXUserGroups::class);
    }

    // /**
    //  * @return CaSearchFormsXUserGroups[] Returns an array of CaSearchFormsXUserGroups objects
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
    public function findOneBySomeField($value): ?CaSearchFormsXUserGroups
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
