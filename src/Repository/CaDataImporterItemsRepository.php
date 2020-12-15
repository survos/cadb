<?php

namespace App\Repository;

use App\Entity\CaDataImporterItems;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaDataImporterItems|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaDataImporterItems|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaDataImporterItems[]    findAll()
 * @method CaDataImporterItems[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaDataImporterItemsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaDataImporterItems::class);
    }

    // /**
    //  * @return CaDataImporterItems[] Returns an array of CaDataImporterItems objects
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
    public function findOneBySomeField($value): ?CaDataImporterItems
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
