<?php

namespace App\Repository;

use App\Entity\CaRepresentationAnnotationsXOccurrences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaRepresentationAnnotationsXOccurrences|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaRepresentationAnnotationsXOccurrences|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaRepresentationAnnotationsXOccurrences[]    findAll()
 * @method CaRepresentationAnnotationsXOccurrences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaRepresentationAnnotationsXOccurrencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaRepresentationAnnotationsXOccurrences::class);
    }

    // /**
    //  * @return CaRepresentationAnnotationsXOccurrences[] Returns an array of CaRepresentationAnnotationsXOccurrences objects
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
    public function findOneBySomeField($value): ?CaRepresentationAnnotationsXOccurrences
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
