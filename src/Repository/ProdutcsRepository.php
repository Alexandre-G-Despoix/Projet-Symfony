<?php

namespace App\Repository;

use App\Entity\Produtcs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Produtcs>
 *
 * @method Produtcs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produtcs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produtcs[]    findAll()
 * @method Produtcs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProdutcsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produtcs::class);
    }

//    /**
//     * @return Produtcs[] Returns an array of Produtcs objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Produtcs
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
