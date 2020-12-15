<?php

namespace App\Repository;

use App\Entity\CaSqlSearchNgrams;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSqlSearchNgrams|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSqlSearchNgrams|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSqlSearchNgrams[]    findAll()
 * @method CaSqlSearchNgrams[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSqlSearchNgramsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSqlSearchNgrams::class);
    }

    // /**
    //  * @return CaSqlSearchNgrams[] Returns an array of CaSqlSearchNgrams objects
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
    public function findOneBySomeField($value): ?CaSqlSearchNgrams
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
