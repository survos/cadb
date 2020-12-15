<?php

namespace App\Repository;

use App\Entity\CaEditorUiScreenLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaEditorUiScreenLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaEditorUiScreenLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaEditorUiScreenLabels[]    findAll()
 * @method CaEditorUiScreenLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaEditorUiScreenLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaEditorUiScreenLabels::class);
    }

    // /**
    //  * @return CaEditorUiScreenLabels[] Returns an array of CaEditorUiScreenLabels objects
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
    public function findOneBySomeField($value): ?CaEditorUiScreenLabels
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
