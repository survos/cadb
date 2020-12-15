<?php

namespace App\Repository;

use App\Entity\CaObjectRepresentationsXPlaces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectRepresentationsXPlaces|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectRepresentationsXPlaces|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectRepresentationsXPlaces[]    findAll()
 * @method CaObjectRepresentationsXPlaces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectRepresentationsXPlacesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectRepresentationsXPlaces::class);
    }

    // /**
    //  * @return CaObjectRepresentationsXPlaces[] Returns an array of CaObjectRepresentationsXPlaces objects
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
    public function findOneBySomeField($value): ?CaObjectRepresentationsXPlaces
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
