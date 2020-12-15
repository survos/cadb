<?php

namespace App\Repository;

use App\Entity\CaMovementsXObjects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMovementsXObjects|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMovementsXObjects|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMovementsXObjects[]    findAll()
 * @method CaMovementsXObjects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMovementsXObjectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMovementsXObjects::class);
    }

    // /**
    //  * @return CaMovementsXObjects[] Returns an array of CaMovementsXObjects objects
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
    public function findOneBySomeField($value): ?CaMovementsXObjects
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
