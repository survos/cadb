<?php

namespace App\Repository;

use App\Entity\CaTourStopsXVocabularyTerms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaTourStopsXVocabularyTerms|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaTourStopsXVocabularyTerms|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaTourStopsXVocabularyTerms[]    findAll()
 * @method CaTourStopsXVocabularyTerms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaTourStopsXVocabularyTermsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaTourStopsXVocabularyTerms::class);
    }

    // /**
    //  * @return CaTourStopsXVocabularyTerms[] Returns an array of CaTourStopsXVocabularyTerms objects
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
    public function findOneBySomeField($value): ?CaTourStopsXVocabularyTerms
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
