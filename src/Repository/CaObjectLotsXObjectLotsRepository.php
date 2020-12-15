<?php

namespace App\Repository;

use App\Entity\CaObjectLotsXObjectLots;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectLotsXObjectLots|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectLotsXObjectLots|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectLotsXObjectLots[]    findAll()
 * @method CaObjectLotsXObjectLots[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectLotsXObjectLotsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectLotsXObjectLots::class);
    }

    // /**
    //  * @return CaObjectLotsXObjectLots[] Returns an array of CaObjectLotsXObjectLots objects
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
    public function findOneBySomeField($value): ?CaObjectLotsXObjectLots
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
