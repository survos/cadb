<?php

namespace App\Repository;

use App\Entity\CaLocales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaLocales|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaLocales|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaLocales[]    findAll()
 * @method CaLocales[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaLocalesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaLocales::class);
    }

    // /**
    //  * @return CaLocales[] Returns an array of CaLocales objects
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
    public function findOneBySomeField($value): ?CaLocales
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
