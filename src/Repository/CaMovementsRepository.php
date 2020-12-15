<?php

namespace App\Repository;

use App\Entity\CaMovements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMovements|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMovements|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMovements[]    findAll()
 * @method CaMovements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMovementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMovements::class);
    }

    // /**
    //  * @return CaMovements[] Returns an array of CaMovements objects
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
    public function findOneBySomeField($value): ?CaMovements
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
