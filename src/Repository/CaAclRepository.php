<?php

namespace App\Repository;

use App\Entity\CaAcl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaAcl|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaAcl|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaAcl[]    findAll()
 * @method CaAcl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaAclRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaAcl::class);
    }

    // /**
    //  * @return CaAcl[] Returns an array of CaAcl objects
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
    public function findOneBySomeField($value): ?CaAcl
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
