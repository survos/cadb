<?php

namespace App\Repository;

use App\Entity\CaRepresentationAnnotationLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaRepresentationAnnotationLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaRepresentationAnnotationLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaRepresentationAnnotationLabels[]    findAll()
 * @method CaRepresentationAnnotationLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaRepresentationAnnotationLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaRepresentationAnnotationLabels::class);
    }

    // /**
    //  * @return CaRepresentationAnnotationLabels[] Returns an array of CaRepresentationAnnotationLabels objects
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
    public function findOneBySomeField($value): ?CaRepresentationAnnotationLabels
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
