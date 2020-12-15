<?php

namespace App\Repository;

use App\Entity\CaEntitiesXOccurrences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEntitiesXOccurrences|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEntitiesXOccurrences|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEntitiesXOccurrences[]    findAll()
 * @method CaEntitiesXOccurrences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEntitiesXOccurrencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEntitiesXOccurrences::class);
    }

    // /**
    //  * @return CaEntitiesXOccurrences[] Returns an array of CaEntitiesXOccurrences objects
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
    public function findOneBySomeField($value): ?CaEntitiesXOccurrences
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
