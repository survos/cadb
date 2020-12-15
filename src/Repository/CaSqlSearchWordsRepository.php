<?php

namespace App\Repository;

use App\Entity\CaSqlSearchWords;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSqlSearchWords|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSqlSearchWords|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSqlSearchWords[]    findAll()
 * @method CaSqlSearchWords[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSqlSearchWordsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSqlSearchWords::class);
    }

    // /**
    //  * @return CaSqlSearchWords[] Returns an array of CaSqlSearchWords objects
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
    public function findOneBySomeField($value): ?CaSqlSearchWords
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
