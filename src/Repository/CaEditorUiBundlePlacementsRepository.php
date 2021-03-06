<?php

namespace App\Repository;

use App\Entity\CaEditorUiBundlePlacements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEditorUiBundlePlacements|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEditorUiBundlePlacements|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEditorUiBundlePlacements[]    findAll()
 * @method CaEditorUiBundlePlacements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEditorUiBundlePlacementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEditorUiBundlePlacements::class);
    }

    // /**
    //  * @return CaEditorUiBundlePlacements[] Returns an array of CaEditorUiBundlePlacements objects
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
    public function findOneBySomeField($value): ?CaEditorUiBundlePlacements
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
