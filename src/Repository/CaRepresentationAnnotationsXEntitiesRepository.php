<?php

namespace App\Repository;

use App\Entity\CaRepresentationAnnotationsXEntities;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaRepresentationAnnotationsXEntities|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaRepresentationAnnotationsXEntities|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaRepresentationAnnotationsXEntities[]    findAll()
 * @method CaRepresentationAnnotationsXEntities[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaRepresentationAnnotationsXEntitiesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaRepresentationAnnotationsXEntities::class);
    }

    // /**
    //  * @return CaRepresentationAnnotationsXEntities[] Returns an array of CaRepresentationAnnotationsXEntities objects
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
    public function findOneBySomeField($value): ?CaRepresentationAnnotationsXEntities
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
