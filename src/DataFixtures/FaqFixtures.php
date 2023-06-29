<?php

namespace App\DataFixtures;

use App\Entity\Faq;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FaqFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $question1 = new Faq();
        $question1->setTitle("Qu'est-ce que sont vos produits et d'où proviennent-ils ?");
        $question1->setContent('Lorem ipsum dolor sit amet, consectetur adip');
        $manager->persist($question1);

        $question2 = new Faq();
        $question2->setTitle("Comment fonctionnent vos services ?");
        $question2->setContent('Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
            culpa qui officia deserunt mollit anim id est laborum');
        $manager->persist($question2);

        $question3 = new Faq();
        $question3->setTitle("Qu'est-ce que sont vos produits et d'où proviennent-ils ?");
        $question3->setContent('
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos 
            dolores et quas molestias excepturi sint occaecati cupiditate non provident,<br>
            similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.<br><br>
            Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil<br>
            impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis<br>
            aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.<br><br>
            Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
        ');
        $manager->persist($question3);

        $manager->flush();
    }
}
