<?php

namespace App\Repository;

use App\Entity\CaIpBans;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaIpBans|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaIpBans|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaIpBans[]    findAll()
 * @method CaIpBans[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaIpBansRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaIpBans::class);
    }

    // /**
    //  * @return CaIpBans[] Returns an array of CaIpBans objects
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
    public function findOneBySomeField($value): ?CaIpBans
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
