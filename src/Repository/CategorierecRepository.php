<?php

namespace App\Repository;

use App\Entity\Categorierec;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Categorierec|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categorierec|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categorierec[]    findAll()
 * @method Categorierec[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorierecRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categorierec::class);
    }

    // /**
    //  * @return Categorierec[] Returns an array of Categorierec objects
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
    public function findOneBySomeField($value): ?Categorierec
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
