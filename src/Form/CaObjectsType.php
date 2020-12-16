<?php

namespace App\Form;

use App\Entity\CaObjects;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CaObjectsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('isTemplate')
            ->add('commentingStatus')
            ->add('taggingStatus')
            ->add('ratingStatus')
            ->add('viewCount')
            ->add('idno')
            ->add('idnoSort')
            ->add('sourceInfo')
            ->add('hierObjectId')
            ->add('hierLeft')
            ->add('hierRight')
            ->add('extent')
            ->add('extentUnits')
            ->add('access')
            ->add('status')
            ->add('deleted')
            ->add('rank')
            ->add('aclInheritFromCaCollections')
            ->add('aclInheritFromParent')
            ->add('accessInheritFromParent')
            ->add('accessionSdatetime')
            ->add('accessionEdatetime')
            ->add('deaccessionSdatetime')
            ->add('deaccessionEdatetime')
            ->add('isDeaccessioned')
            ->add('deaccessionNotes')
            ->add('currentLocClass')
            ->add('currentLocSubclass')
            ->add('currentLocId')
            ->add('deaccessionDisposalSdatetime')
            ->add('deaccessionDisposalEdatetime')
            ->add('submissionUserId')
            ->add('submissionGroupId')
            ->add('submissionStatusId')
            ->add('submissionViaForm')
            ->add('acquisitionType')
            ->add('circulationStatus')
            ->add('deaccessionType')
            ->add('homeLocation')
            ->add('itemStatus')
            ->add('locale')
            ->add('lot')
            ->add('parent')
            ->add('source')
            ->add('type')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CaObjects::class,
        ]);
    }
}
