<?php

namespace App\Repository;

use App\Entity\CaObjectsXPlaces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectsXPlaces|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectsXPlaces|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectsXPlaces[]    findAll()
 * @method CaObjectsXPlaces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectsXPlacesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectsXPlaces::class);
    }

    // /**
    //  * @return CaObjectsXPlaces[] Returns an array of CaObjectsXPlaces objects
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
    public function findOneBySomeField($value): ?CaObjectsXPlaces
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
