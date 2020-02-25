<?php
declare(strict_types=1);

namespace Level\AppBundle\Form\Type;

use Level\AppBundle\Model\CalculatorEmojis;
use Level\AppBundle\Model\OperationTypes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;

class CalculatorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'number1',
            NumberType::class,
            [
                'required' => true,
            ]
        )->add(
            'operand',
            ChoiceType::class,
            [
                'choices' => array_flip(
                    [
                        OperationTypes::ADD => CalculatorEmojis::EMOJI_ADD,
                        OperationTypes::SUB => CalculatorEmojis::EMOJI_SUB,
                        OperationTypes::MUL => CalculatorEmojis::EMOJI_MUL,
                        OperationTypes::DIV => CalculatorEmojis::EMOJI_DIV,
                    ]
                ),
                'choice_translation_domain' => false,
                'label' => false,
            ]
        )->add(
            'number2',
            NumberType::class,
            [
                'required' => true,
            ]
        )->add(
            'submit',
            ButtonType::class,
            [
                'label' => 'Calculate',
                'attr' => [
                    'class' => 'btn btn-primary',
                ]
            ]
        );
    }
}
