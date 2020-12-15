<?php

namespace App\Repository;

use App\Entity\CaLoansXMovements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaLoansXMovements|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaLoansXMovements|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaLoansXMovements[]    findAll()
 * @method CaLoansXMovements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaLoansXMovementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaLoansXMovements::class);
    }

    // /**
    //  * @return CaLoansXMovements[] Returns an array of CaLoansXMovements objects
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
    public function findOneBySomeField($value): ?CaLoansXMovements
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
