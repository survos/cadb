<?php

namespace App\Repository;

use App\Entity\CaDataImporterGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaDataImporterGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaDataImporterGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaDataImporterGroups[]    findAll()
 * @method CaDataImporterGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaDataImporterGroupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaDataImporterGroups::class);
    }

    // /**
    //  * @return CaDataImporterGroups[] Returns an array of CaDataImporterGroups objects
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
    public function findOneBySomeField($value): ?CaDataImporterGroups
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
