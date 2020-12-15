<?php

namespace App\Repository;

use App\Entity\CaRepresentationAnnotationsXVocabularyTerms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaRepresentationAnnotationsXVocabularyTerms|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaRepresentationAnnotationsXVocabularyTerms|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaRepresentationAnnotationsXVocabularyTerms[]    findAll()
 * @method CaRepresentationAnnotationsXVocabularyTerms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaRepresentationAnnotationsXVocabularyTermsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaRepresentationAnnotationsXVocabularyTerms::class);
    }

    // /**
    //  * @return CaRepresentationAnnotationsXVocabularyTerms[] Returns an array of CaRepresentationAnnotationsXVocabularyTerms objects
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
    public function findOneBySomeField($value): ?CaRepresentationAnnotationsXVocabularyTerms
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
