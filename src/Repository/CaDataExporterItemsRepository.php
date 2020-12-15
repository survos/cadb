<?php

namespace App\Repository;

use App\Entity\CaDataExporterItems;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaDataExporterItems|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaDataExporterItems|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaDataExporterItems[]    findAll()
 * @method CaDataExporterItems[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaDataExporterItemsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaDataExporterItems::class);
    }

    // /**
    //  * @return CaDataExporterItems[] Returns an array of CaDataExporterItems objects
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
    public function findOneBySomeField($value): ?CaDataExporterItems
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
