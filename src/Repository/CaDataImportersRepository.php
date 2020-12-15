<?php

namespace App\Repository;

use App\Entity\CaDataImporters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaDataImporters|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaDataImporters|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaDataImporters[]    findAll()
 * @method CaDataImporters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaDataImportersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaDataImporters::class);
    }

    // /**
    //  * @return CaDataImporters[] Returns an array of CaDataImporters objects
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
    public function findOneBySomeField($value): ?CaDataImporters
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
