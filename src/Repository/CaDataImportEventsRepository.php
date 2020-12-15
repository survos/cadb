<?php

namespace App\Repository;

use App\Entity\CaDataImportEvents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaDataImportEvents|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaDataImportEvents|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaDataImportEvents[]    findAll()
 * @method CaDataImportEvents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaDataImportEventsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaDataImportEvents::class);
    }

    // /**
    //  * @return CaDataImportEvents[] Returns an array of CaDataImportEvents objects
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
    public function findOneBySomeField($value): ?CaDataImportEvents
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
