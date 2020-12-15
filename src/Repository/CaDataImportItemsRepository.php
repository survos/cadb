<?php

namespace App\Repository;

use App\Entity\CaDataImportItems;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaDataImportItems|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaDataImportItems|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaDataImportItems[]    findAll()
 * @method CaDataImportItems[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaDataImportItemsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaDataImportItems::class);
    }

    // /**
    //  * @return CaDataImportItems[] Returns an array of CaDataImportItems objects
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
    public function findOneBySomeField($value): ?CaDataImportItems
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
