<?php

namespace App\Repository;

use App\Entity\Categoriegr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Categoriegr|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categoriegr|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categoriegr[]    findAll()
 * @method Categoriegr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoriegrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categoriegr::class);
    }

    // /**
    //  * @return Categoriegr[] Returns an array of Categoriegr objects
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
    public function findOneBySomeField($value): ?Categoriegr
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
