<?php

namespace App\Repository;

use App\Entity\CaObjectLotLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectLotLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectLotLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectLotLabels[]    findAll()
 * @method CaObjectLotLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectLotLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectLotLabels::class);
    }

    // /**
    //  * @return CaObjectLotLabels[] Returns an array of CaObjectLotLabels objects
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
    public function findOneBySomeField($value): ?CaObjectLotLabels
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
