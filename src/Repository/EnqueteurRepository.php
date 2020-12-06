<?php

namespace App\Repository;

use App\Entity\Enqueteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Enqueteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enqueteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enqueteur[]    findAll()
 * @method Enqueteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnqueteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enqueteur::class);
    }

    // /**
    //  * @return Enqueteur[] Returns an array of Enqueteur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Enqueteur
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
