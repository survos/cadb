<?php

namespace App\Repository;

use App\Entity\CaSchemaUpdates;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSchemaUpdates|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSchemaUpdates|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSchemaUpdates[]    findAll()
 * @method CaSchemaUpdates[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSchemaUpdatesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSchemaUpdates::class);
    }

    // /**
    //  * @return CaSchemaUpdates[] Returns an array of CaSchemaUpdates objects
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
    public function findOneBySomeField($value): ?CaSchemaUpdates
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
