<?php

namespace App\Repository;

use App\Entity\CaObjectsXOccurrences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectsXOccurrences|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectsXOccurrences|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectsXOccurrences[]    findAll()
 * @method CaObjectsXOccurrences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectsXOccurrencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectsXOccurrences::class);
    }

    // /**
    //  * @return CaObjectsXOccurrences[] Returns an array of CaObjectsXOccurrences objects
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
    public function findOneBySomeField($value): ?CaObjectsXOccurrences
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
