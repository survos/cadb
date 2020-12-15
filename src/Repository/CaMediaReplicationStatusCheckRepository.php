<?php

namespace App\Repository;

use App\Entity\CaMediaReplicationStatusCheck;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMediaReplicationStatusCheck|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMediaReplicationStatusCheck|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMediaReplicationStatusCheck[]    findAll()
 * @method CaMediaReplicationStatusCheck[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMediaReplicationStatusCheckRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMediaReplicationStatusCheck::class);
    }

    // /**
    //  * @return CaMediaReplicationStatusCheck[] Returns an array of CaMediaReplicationStatusCheck objects
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
    public function findOneBySomeField($value): ?CaMediaReplicationStatusCheck
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
