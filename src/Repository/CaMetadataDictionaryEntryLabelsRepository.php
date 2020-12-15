<?php

namespace App\Repository;

use App\Entity\CaMetadataDictionaryEntryLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMetadataDictionaryEntryLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMetadataDictionaryEntryLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMetadataDictionaryEntryLabels[]    findAll()
 * @method CaMetadataDictionaryEntryLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMetadataDictionaryEntryLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMetadataDictionaryEntryLabels::class);
    }

    // /**
    //  * @return CaMetadataDictionaryEntryLabels[] Returns an array of CaMetadataDictionaryEntryLabels objects
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
    public function findOneBySomeField($value): ?CaMetadataDictionaryEntryLabels
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
