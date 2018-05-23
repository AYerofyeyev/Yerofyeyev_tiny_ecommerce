<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.05.2018
 * Time: 20:51
 */

namespace App\Form;

use App\Entity\Seller;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class SellerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class );
    }
}