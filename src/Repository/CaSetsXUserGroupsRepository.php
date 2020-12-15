<?php

namespace App\Repository;

use App\Entity\CaSetsXUserGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSetsXUserGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSetsXUserGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSetsXUserGroups[]    findAll()
 * @method CaSetsXUserGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSetsXUserGroupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSetsXUserGroups::class);
    }

    // /**
    //  * @return CaSetsXUserGroups[] Returns an array of CaSetsXUserGroups objects
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
    public function findOneBySomeField($value): ?CaSetsXUserGroups
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
