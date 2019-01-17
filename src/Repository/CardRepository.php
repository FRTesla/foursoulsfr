<?php

namespace App\Repository;

use App\Entity\Card;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Card|null find($id, $lockMode = null, $lockVersion = null)
 * @method Card|null findOneBy(array $criteria, array $orderBy = null)
 * @method Card[]    findAll()
 * @method Card[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CardRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Card::class);
    }

//    /**
//     * @return Card[] Returns an array of Card objects
//     */
    
    public function myFindByTypes($type)
    {
        $qb = $this->createQueryBuilder('card')
           ->leftJoin ('card.types','t')
           ->where('t.name = :name')
           ->setParameter('name', $type);
        
        $query = $qb->getQuery();
        $results = $query->getResult();
        return $results;
    }

    public function myFindByName($name) {
        $qb = $this->createQueryBuilder('card')
            ->where('REGEXP(card.name, :regexp) = true')
            ->setParameter('regexp', $name);

        $query = $qb->getQuery();
        $results = $query->getResult();
        return $results;
    }
    

    /*
    public function findOneBySomeField($value): ?Card
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
