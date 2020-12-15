<?php

namespace App\Repository;

use App\Entity\CaObjectRepresentationsXEntities;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectRepresentationsXEntities|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectRepresentationsXEntities|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectRepresentationsXEntities[]    findAll()
 * @method CaObjectRepresentationsXEntities[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectRepresentationsXEntitiesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectRepresentationsXEntities::class);
    }

    // /**
    //  * @return CaObjectRepresentationsXEntities[] Returns an array of CaObjectRepresentationsXEntities objects
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
    public function findOneBySomeField($value): ?CaObjectRepresentationsXEntities
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
