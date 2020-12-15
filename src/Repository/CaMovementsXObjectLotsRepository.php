<?php

namespace App\Repository;

use App\Entity\CaMovementsXObjectLots;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMovementsXObjectLots|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMovementsXObjectLots|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMovementsXObjectLots[]    findAll()
 * @method CaMovementsXObjectLots[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMovementsXObjectLotsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMovementsXObjectLots::class);
    }

    // /**
    //  * @return CaMovementsXObjectLots[] Returns an array of CaMovementsXObjectLots objects
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
    public function findOneBySomeField($value): ?CaMovementsXObjectLots
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
