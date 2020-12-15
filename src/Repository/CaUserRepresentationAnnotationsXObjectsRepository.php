<?php

namespace App\Repository;

use App\Entity\CaUserRepresentationAnnotationsXObjects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaUserRepresentationAnnotationsXObjects|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaUserRepresentationAnnotationsXObjects|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaUserRepresentationAnnotationsXObjects[]    findAll()
 * @method CaUserRepresentationAnnotationsXObjects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaUserRepresentationAnnotationsXObjectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaUserRepresentationAnnotationsXObjects::class);
    }

    // /**
    //  * @return CaUserRepresentationAnnotationsXObjects[] Returns an array of CaUserRepresentationAnnotationsXObjects objects
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
    public function findOneBySomeField($value): ?CaUserRepresentationAnnotationsXObjects
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
