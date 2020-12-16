<?php

namespace App\Request\ParamConverter;

use App\Entity\CaObjects;

use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class CaObjectsParamConverter implements ParamConverterInterface
{

    private $registry;

    /**
     * @param ManagerRegistry $registry Manager registry
     */
    public function __construct(ManagerRegistry $registry = null)
    {
        $this->registry = $registry;
    }

    /**
     * {@inheritdoc}
     *
     * Check, if object supported by our converter
     */
    public function supports(ParamConverter $configuration)
    {
        return CaObjects::class == $configuration->getClass();
    }

    /**
     * {@inheritdoc}
     *
     * Applies converting
     *
     * @throws \InvalidArgumentException When route attributes are missing
     * @throws NotFoundHttpException     When object not found
     * @throws Exception
     */
    public function apply(Request $request, ParamConverter $configuration)
    {
        $params = $request->attributes->get('_route_params');

//        if (isset($params['caObjectId']) && ($caObjectId = $request->attributes->get('caObjectId')))

        $caObjectId = $request->attributes->get('caObjectId');
        if ($caObjectId === 'undefined') {
            throw new Exception("Invalid caObjectId " . $caObjectId);
        }

        // Check, if route attributes exists
        if (null === $caObjectId ) {
            if (!isset($params['caObjectId'])) {
                return; // no caObjectId in the route, so leave.  Could throw an exception.
            }
        }

        // Get actual entity manager for class.  We can also pass it in, but that won't work for the doctrine tree extension.
        $em = $this->registry->getManagerForClass($configuration->getClass());
        $repository = $em->getRepository($configuration->getClass());

        // Try to find caObject by its Id
        $caObject = $repository->findOneBy(['objectId' => $caObjectId]);

        if (null === $caObject || !($caObject instanceof CaObjects)) {
            throw new NotFoundHttpException(sprintf('%s %s object not found.', $caObjectId, $configuration->getClass()));
        }

        // Map found caObject to the route's parameter
        $request->attributes->set($configuration->getName(), $caObject);
    }

}
