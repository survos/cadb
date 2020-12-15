<?php

namespace App\Repository;

use App\Entity\CaSets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSets|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSets|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSets[]    findAll()
 * @method CaSets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSetsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSets::class);
    }

    // /**
    //  * @return CaSets[] Returns an array of CaSets objects
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
    public function findOneBySomeField($value): ?CaSets
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
