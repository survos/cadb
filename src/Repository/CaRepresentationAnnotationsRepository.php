<?php

namespace App\Repository;

use App\Entity\CaRepresentationAnnotations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaRepresentationAnnotations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaRepresentationAnnotations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaRepresentationAnnotations[]    findAll()
 * @method CaRepresentationAnnotations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaRepresentationAnnotationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaRepresentationAnnotations::class);
    }

    // /**
    //  * @return CaRepresentationAnnotations[] Returns an array of CaRepresentationAnnotations objects
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
    public function findOneBySomeField($value): ?CaRepresentationAnnotations
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
