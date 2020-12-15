<?php

namespace App\Repository;

use App\Entity\CaObjectLotsXPlaces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectLotsXPlaces|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectLotsXPlaces|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectLotsXPlaces[]    findAll()
 * @method CaObjectLotsXPlaces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectLotsXPlacesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectLotsXPlaces::class);
    }

    // /**
    //  * @return CaObjectLotsXPlaces[] Returns an array of CaObjectLotsXPlaces objects
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
    public function findOneBySomeField($value): ?CaObjectLotsXPlaces
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
