<?php

namespace App\Repository;

use App\Entity\CaObjectLotsXOccurrences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectLotsXOccurrences|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectLotsXOccurrences|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectLotsXOccurrences[]    findAll()
 * @method CaObjectLotsXOccurrences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectLotsXOccurrencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectLotsXOccurrences::class);
    }

    // /**
    //  * @return CaObjectLotsXOccurrences[] Returns an array of CaObjectLotsXOccurrences objects
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
    public function findOneBySomeField($value): ?CaObjectLotsXOccurrences
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
