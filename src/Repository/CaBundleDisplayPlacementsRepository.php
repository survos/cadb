<?php

namespace App\Repository;

use App\Entity\CaBundleDisplayPlacements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaBundleDisplayPlacements|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaBundleDisplayPlacements|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaBundleDisplayPlacements[]    findAll()
 * @method CaBundleDisplayPlacements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaBundleDisplayPlacementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaBundleDisplayPlacements::class);
    }

    // /**
    //  * @return CaBundleDisplayPlacements[] Returns an array of CaBundleDisplayPlacements objects
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
    public function findOneBySomeField($value): ?CaBundleDisplayPlacements
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
