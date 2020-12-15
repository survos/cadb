<?php

namespace App\Repository;

use App\Entity\CaUserRepresentationAnnotationsXPlaces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaUserRepresentationAnnotationsXPlaces|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaUserRepresentationAnnotationsXPlaces|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaUserRepresentationAnnotationsXPlaces[]    findAll()
 * @method CaUserRepresentationAnnotationsXPlaces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaUserRepresentationAnnotationsXPlacesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaUserRepresentationAnnotationsXPlaces::class);
    }

    // /**
    //  * @return CaUserRepresentationAnnotationsXPlaces[] Returns an array of CaUserRepresentationAnnotationsXPlaces objects
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
    public function findOneBySomeField($value): ?CaUserRepresentationAnnotationsXPlaces
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
