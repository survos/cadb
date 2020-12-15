<?php

namespace App\Repository;

use App\Entity\CaDataImportEventLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaDataImportEventLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaDataImportEventLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaDataImportEventLog[]    findAll()
 * @method CaDataImportEventLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaDataImportEventLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaDataImportEventLog::class);
    }

    // /**
    //  * @return CaDataImportEventLog[] Returns an array of CaDataImportEventLog objects
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
    public function findOneBySomeField($value): ?CaDataImportEventLog
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
