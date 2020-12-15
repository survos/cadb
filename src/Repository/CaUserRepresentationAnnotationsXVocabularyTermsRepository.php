<?php

namespace App\Repository;

use App\Entity\CaUserRepresentationAnnotationsXVocabularyTerms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaUserRepresentationAnnotationsXVocabularyTerms|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaUserRepresentationAnnotationsXVocabularyTerms|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaUserRepresentationAnnotationsXVocabularyTerms[]    findAll()
 * @method CaUserRepresentationAnnotationsXVocabularyTerms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaUserRepresentationAnnotationsXVocabularyTermsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaUserRepresentationAnnotationsXVocabularyTerms::class);
    }

    // /**
    //  * @return CaUserRepresentationAnnotationsXVocabularyTerms[] Returns an array of CaUserRepresentationAnnotationsXVocabularyTerms objects
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
    public function findOneBySomeField($value): ?CaUserRepresentationAnnotationsXVocabularyTerms
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
