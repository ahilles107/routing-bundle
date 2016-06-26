<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2015 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Bundle\RoutingBundle\Form\Type;

use Sonata\CoreBundle\Form\Type\ImmutableArrayType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Maximilian Berghoff <Maximilian.Berghoff@mayflower.de>
 */
class RouteAdvancedType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $keys = array_key_exists('keys', $options) ? $options['keys'] : [];
        $builder
            ->add('variablePattern', TextType::class, ['required' => false], ['help' => 'form.help_variable_pattern'])
            ->add('defaults', ImmutableArrayType::class, ['keys' => $keys])
            ->add('options', ImmutableArrayType::class, ['keys' => $keys], ['help' => 'form.help_options'])
        ;
    }

    /**
     * Configures the options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options.
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'keys' => []
        ]);
    }
}
