<?php

namespace Victoire\Widget\TitleBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Widget\TextBundle\Form\WidgetTextType;

class WidgetTitleType extends WidgetTextType
{

    /**
     * define form fields
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('headingLevel', 'choice', array(
            'choices' => array(
                'h1' => 'H1',
                'h2' => 'H2',
                'h3' => 'H3',
                'h4' => 'H4',
                'h5' => 'H5',
                'h6' => 'H6'
            ),
            'label' => 'widget_text.form.headingLevel.label'
        ));

        $builder->add('headingStyle', 'choice', array(
            'label' => 'widget_text.form.headingStyle.label',
            'empty_value' => 'Défault',
            'choices' => array(
                'h1' => 'H1',
                'h2' => 'H2',
                'h3' => 'H3',
                'h4' => 'H4',
                'h5' => 'H5',
                'h6' => 'H6'
            ),
        ));
        parent::buildForm($builder, $options);
    }

    /**
     * bind form to WidgetText entity
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults(array(
            'data_class'         => 'Victoire\Widget\TitleBundle\Entity\WidgetTitle',
            'widget'             => 'text',
            'translation_domain' => 'victoire'
        ));
    }

    /**
     * get form name
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_title';
    }
}
