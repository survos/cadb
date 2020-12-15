<?php

namespace App\Repository;

use App\Entity\CaRepresentationTranscriptions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaRepresentationTranscriptions|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaRepresentationTranscriptions|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaRepresentationTranscriptions[]    findAll()
 * @method CaRepresentationTranscriptions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaRepresentationTranscriptionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaRepresentationTranscriptions::class);
    }

    // /**
    //  * @return CaRepresentationTranscriptions[] Returns an array of CaRepresentationTranscriptions objects
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
    public function findOneBySomeField($value): ?CaRepresentationTranscriptions
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
