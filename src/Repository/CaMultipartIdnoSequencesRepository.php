<?php

namespace App\Repository;

use App\Entity\CaMultipartIdnoSequences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMultipartIdnoSequences|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMultipartIdnoSequences|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMultipartIdnoSequences[]    findAll()
 * @method CaMultipartIdnoSequences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMultipartIdnoSequencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMultipartIdnoSequences::class);
    }

    // /**
    //  * @return CaMultipartIdnoSequences[] Returns an array of CaMultipartIdnoSequences objects
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
    public function findOneBySomeField($value): ?CaMultipartIdnoSequences
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
