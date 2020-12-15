<?php

namespace App\Repository;

use App\Entity\CaDownloadLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaDownloadLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaDownloadLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaDownloadLog[]    findAll()
 * @method CaDownloadLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaDownloadLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaDownloadLog::class);
    }

    // /**
    //  * @return CaDownloadLog[] Returns an array of CaDownloadLog objects
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
    public function findOneBySomeField($value): ?CaDownloadLog
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
