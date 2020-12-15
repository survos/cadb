<?php

namespace App\Repository;

use App\Entity\CaObjectRepresentationMultifiles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaObjectRepresentationMultifiles|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaObjectRepresentationMultifiles|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaObjectRepresentationMultifiles[]    findAll()
 * @method CaObjectRepresentationMultifiles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaObjectRepresentationMultifilesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaObjectRepresentationMultifiles::class);
    }

    // /**
    //  * @return CaObjectRepresentationMultifiles[] Returns an array of CaObjectRepresentationMultifiles objects
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
    public function findOneBySomeField($value): ?CaObjectRepresentationMultifiles
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
