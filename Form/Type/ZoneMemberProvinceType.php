<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AddressingBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;

/**
 * Province zone member form type.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class ZoneMemberProvinceType extends ZoneMemberType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('province', 'sylius_addressing_province_choice', array(
                'label' => 'sylius_addressing.label.zone_member_province.province'
            ))
        ;

        parent::buildForm($builder, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sylius_addressing_zone_member_province';
    }
}
