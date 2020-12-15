<?php

namespace App\Repository;

use App\Entity\CaEntityLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEntityLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEntityLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEntityLabels[]    findAll()
 * @method CaEntityLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEntityLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEntityLabels::class);
    }

    // /**
    //  * @return CaEntityLabels[] Returns an array of CaEntityLabels objects
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
    public function findOneBySomeField($value): ?CaEntityLabels
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
