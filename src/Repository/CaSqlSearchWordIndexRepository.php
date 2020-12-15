<?php

namespace App\Repository;

use App\Entity\CaSqlSearchWordIndex;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSqlSearchWordIndex|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSqlSearchWordIndex|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSqlSearchWordIndex[]    findAll()
 * @method CaSqlSearchWordIndex[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSqlSearchWordIndexRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSqlSearchWordIndex::class);
    }

    // /**
    //  * @return CaSqlSearchWordIndex[] Returns an array of CaSqlSearchWordIndex objects
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
    public function findOneBySomeField($value): ?CaSqlSearchWordIndex
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
