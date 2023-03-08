<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
<<<<<<< HEAD
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
=======
<<<<<<< HEAD
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
=======
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481

/**
 * @extends ServiceEntityRepository<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
<<<<<<< HEAD
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
=======
<<<<<<< HEAD
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
=======
class UserRepository extends ServiceEntityRepository
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function save(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);

        $this->save($user, true);
    }

<<<<<<< HEAD
    public function findUserByNsc($email)
    {
        return $this->createQueryBuilder("user")
            ->where('user.email LIKE :email')
            ->setParameter('email', '%' . $email . '%')
            ->getQuery()
            ->getResult();
    }

=======
=======
>>>>>>> 38628a194bbbcdc751d7d39588e264ee1ca95b0f
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
//    /**
//     * @return User[] Returns an array of User objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?User
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
<<<<<<< HEAD


=======
>>>>>>> 5a7565d83818f1db89ef814a2b2e450ef201f481
}
