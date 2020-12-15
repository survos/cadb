<?php

namespace App\Repository;

use App\Entity\CaObjectRepresentationsXOccurrences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectRepresentationsXOccurrences|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectRepresentationsXOccurrences|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectRepresentationsXOccurrences[]    findAll()
 * @method CaObjectRepresentationsXOccurrences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectRepresentationsXOccurrencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectRepresentationsXOccurrences::class);
    }

    // /**
    //  * @return CaObjectRepresentationsXOccurrences[] Returns an array of CaObjectRepresentationsXOccurrences objects
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
    public function findOneBySomeField($value): ?CaObjectRepresentationsXOccurrences
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
