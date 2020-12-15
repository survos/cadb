<?php

namespace App\Repository;

use App\Entity\CaPlacesXPlaces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaPlacesXPlaces|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaPlacesXPlaces|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaPlacesXPlaces[]    findAll()
 * @method CaPlacesXPlaces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaPlacesXPlacesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaPlacesXPlaces::class);
    }

    // /**
    //  * @return CaPlacesXPlaces[] Returns an array of CaPlacesXPlaces objects
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
    public function findOneBySomeField($value): ?CaPlacesXPlaces
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
