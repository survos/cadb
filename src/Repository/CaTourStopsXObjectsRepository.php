<?php

namespace App\Repository;

use App\Entity\CaTourStopsXObjects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaTourStopsXObjects|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaTourStopsXObjects|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaTourStopsXObjects[]    findAll()
 * @method CaTourStopsXObjects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaTourStopsXObjectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaTourStopsXObjects::class);
    }

    // /**
    //  * @return CaTourStopsXObjects[] Returns an array of CaTourStopsXObjects objects
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
    public function findOneBySomeField($value): ?CaTourStopsXObjects
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
