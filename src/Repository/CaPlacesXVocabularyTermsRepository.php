<?php

namespace App\Repository;

use App\Entity\CaPlacesXVocabularyTerms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaPlacesXVocabularyTerms|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaPlacesXVocabularyTerms|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaPlacesXVocabularyTerms[]    findAll()
 * @method CaPlacesXVocabularyTerms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaPlacesXVocabularyTermsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaPlacesXVocabularyTerms::class);
    }

    // /**
    //  * @return CaPlacesXVocabularyTerms[] Returns an array of CaPlacesXVocabularyTerms objects
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
    public function findOneBySomeField($value): ?CaPlacesXVocabularyTerms
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
