<?php

namespace App\Repository;

use App\Entity\CaOccurrencesXOccurrences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaOccurrencesXOccurrences|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaOccurrencesXOccurrences|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaOccurrencesXOccurrences[]    findAll()
 * @method CaOccurrencesXOccurrences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaOccurrencesXOccurrencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaOccurrencesXOccurrences::class);
    }

    // /**
    //  * @return CaOccurrencesXOccurrences[] Returns an array of CaOccurrencesXOccurrences objects
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
    public function findOneBySomeField($value): ?CaOccurrencesXOccurrences
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
