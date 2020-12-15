<?php

namespace App\Repository;

use App\Entity\CaEntitiesXPlaces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEntitiesXPlaces|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEntitiesXPlaces|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEntitiesXPlaces[]    findAll()
 * @method CaEntitiesXPlaces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEntitiesXPlacesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEntitiesXPlaces::class);
    }

    // /**
    //  * @return CaEntitiesXPlaces[] Returns an array of CaEntitiesXPlaces objects
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
    public function findOneBySomeField($value): ?CaEntitiesXPlaces
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
