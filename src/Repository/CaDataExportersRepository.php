<?php

namespace App\Repository;

use App\Entity\CaDataExporters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaDataExporters|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaDataExporters|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaDataExporters[]    findAll()
 * @method CaDataExporters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaDataExportersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaDataExporters::class);
    }

    // /**
    //  * @return CaDataExporters[] Returns an array of CaDataExporters objects
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
    public function findOneBySomeField($value): ?CaDataExporters
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
