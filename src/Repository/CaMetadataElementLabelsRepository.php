<?php

namespace App\Repository;

use App\Entity\CaMetadataElementLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMetadataElementLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMetadataElementLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMetadataElementLabels[]    findAll()
 * @method CaMetadataElementLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMetadataElementLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMetadataElementLabels::class);
    }

    // /**
    //  * @return CaMetadataElementLabels[] Returns an array of CaMetadataElementLabels objects
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
    public function findOneBySomeField($value): ?CaMetadataElementLabels
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
