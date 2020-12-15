<?php

namespace App\Repository;

use App\Entity\CaObjectCheckouts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectCheckouts|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectCheckouts|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectCheckouts[]    findAll()
 * @method CaObjectCheckouts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectCheckoutsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectCheckouts::class);
    }

    // /**
    //  * @return CaObjectCheckouts[] Returns an array of CaObjectCheckouts objects
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
    public function findOneBySomeField($value): ?CaObjectCheckouts
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
