<?php

namespace App\Repository;

use App\Entity\CaOccurrenceLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaOccurrenceLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaOccurrenceLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaOccurrenceLabels[]    findAll()
 * @method CaOccurrenceLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaOccurrenceLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaOccurrenceLabels::class);
    }

    // /**
    //  * @return CaOccurrenceLabels[] Returns an array of CaOccurrenceLabels objects
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
    public function findOneBySomeField($value): ?CaOccurrenceLabels
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
