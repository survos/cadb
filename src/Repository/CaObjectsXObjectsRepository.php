<?php

namespace App\Repository;

use App\Entity\CaObjectsXObjects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectsXObjects|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectsXObjects|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectsXObjects[]    findAll()
 * @method CaObjectsXObjects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectsXObjectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectsXObjects::class);
    }

    // /**
    //  * @return CaObjectsXObjects[] Returns an array of CaObjectsXObjects objects
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
    public function findOneBySomeField($value): ?CaObjectsXObjects
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
