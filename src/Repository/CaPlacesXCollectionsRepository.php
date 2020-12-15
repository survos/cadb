<?php

namespace App\Repository;

use App\Entity\CaPlacesXCollections;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaPlacesXCollections|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaPlacesXCollections|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaPlacesXCollections[]    findAll()
 * @method CaPlacesXCollections[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaPlacesXCollectionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaPlacesXCollections::class);
    }

    // /**
    //  * @return CaPlacesXCollections[] Returns an array of CaPlacesXCollections objects
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
    public function findOneBySomeField($value): ?CaPlacesXCollections
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
