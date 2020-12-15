<?php

namespace App\Repository;

use App\Entity\CaDataImporterLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaDataImporterLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaDataImporterLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaDataImporterLog[]    findAll()
 * @method CaDataImporterLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaDataImporterLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaDataImporterLog::class);
    }

    // /**
    //  * @return CaDataImporterLog[] Returns an array of CaDataImporterLog objects
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
    public function findOneBySomeField($value): ?CaDataImporterLog
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
