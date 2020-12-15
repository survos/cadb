<?php

namespace App\Repository;

use App\Entity\CaPlaceLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaPlaceLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaPlaceLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaPlaceLabels[]    findAll()
 * @method CaPlaceLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaPlaceLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaPlaceLabels::class);
    }

    // /**
    //  * @return CaPlaceLabels[] Returns an array of CaPlaceLabels objects
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
    public function findOneBySomeField($value): ?CaPlaceLabels
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
