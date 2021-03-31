<?php


namespace App\Form;


use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchGroupeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
        $builder
            ->add('name', ChoiceType::class, [
                'choices' => [
                    array_combine(Reclamation::categorierec, Reclamation::categorierec)

                ]
            ])
            ->add('recherche',SubmitTipe::class )
        ;

    }
}