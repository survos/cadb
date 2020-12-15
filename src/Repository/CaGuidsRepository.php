<?php

namespace App\Repository;

use App\Entity\CaGuids;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaGuids|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaGuids|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaGuids[]    findAll()
 * @method CaGuids[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaGuidsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaGuids::class);
    }

    // /**
    //  * @return CaGuids[] Returns an array of CaGuids objects
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
    public function findOneBySomeField($value): ?CaGuids
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
