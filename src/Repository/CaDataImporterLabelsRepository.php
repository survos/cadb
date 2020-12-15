<?php

namespace App\Repository;

use App\Entity\CaDataImporterLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaDataImporterLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaDataImporterLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaDataImporterLabels[]    findAll()
 * @method CaDataImporterLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaDataImporterLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaDataImporterLabels::class);
    }

    // /**
    //  * @return CaDataImporterLabels[] Returns an array of CaDataImporterLabels objects
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
    public function findOneBySomeField($value): ?CaDataImporterLabels
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
