<?php

namespace App\Repository;

use App\Entity\CaObjectLots;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectLots|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectLots|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectLots[]    findAll()
 * @method CaObjectLots[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectLotsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectLots::class);
    }

    // /**
    //  * @return CaObjectLots[] Returns an array of CaObjectLots objects
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
    public function findOneBySomeField($value): ?CaObjectLots
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
