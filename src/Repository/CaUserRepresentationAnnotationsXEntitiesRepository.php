<?php

namespace App\Repository;

use App\Entity\CaUserRepresentationAnnotationsXEntities;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaUserRepresentationAnnotationsXEntities|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaUserRepresentationAnnotationsXEntities|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaUserRepresentationAnnotationsXEntities[]    findAll()
 * @method CaUserRepresentationAnnotationsXEntities[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaUserRepresentationAnnotationsXEntitiesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaUserRepresentationAnnotationsXEntities::class);
    }

    // /**
    //  * @return CaUserRepresentationAnnotationsXEntities[] Returns an array of CaUserRepresentationAnnotationsXEntities objects
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
    public function findOneBySomeField($value): ?CaUserRepresentationAnnotationsXEntities
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
