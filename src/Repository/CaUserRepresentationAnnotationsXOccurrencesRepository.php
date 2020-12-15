<?php

namespace App\Repository;

use App\Entity\CaUserRepresentationAnnotationsXOccurrences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaUserRepresentationAnnotationsXOccurrences|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaUserRepresentationAnnotationsXOccurrences|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaUserRepresentationAnnotationsXOccurrences[]    findAll()
 * @method CaUserRepresentationAnnotationsXOccurrences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaUserRepresentationAnnotationsXOccurrencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaUserRepresentationAnnotationsXOccurrences::class);
    }

    // /**
    //  * @return CaUserRepresentationAnnotationsXOccurrences[] Returns an array of CaUserRepresentationAnnotationsXOccurrences objects
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
    public function findOneBySomeField($value): ?CaUserRepresentationAnnotationsXOccurrences
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
