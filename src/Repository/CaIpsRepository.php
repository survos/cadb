<?php

namespace App\Repository;

use App\Entity\CaIps;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaIps|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaIps|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaIps[]    findAll()
 * @method CaIps[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaIpsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaIps::class);
    }

    // /**
    //  * @return CaIps[] Returns an array of CaIps objects
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
    public function findOneBySomeField($value): ?CaIps
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
