<?php

namespace App\Repository;

use App\Entity\CaRepresentationAnnotationsXPlaces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaRepresentationAnnotationsXPlaces|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaRepresentationAnnotationsXPlaces|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaRepresentationAnnotationsXPlaces[]    findAll()
 * @method CaRepresentationAnnotationsXPlaces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaRepresentationAnnotationsXPlacesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaRepresentationAnnotationsXPlaces::class);
    }

    // /**
    //  * @return CaRepresentationAnnotationsXPlaces[] Returns an array of CaRepresentationAnnotationsXPlaces objects
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
    public function findOneBySomeField($value): ?CaRepresentationAnnotationsXPlaces
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
