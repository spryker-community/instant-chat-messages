<?php

namespace Pyz\Zed\ChatMessage\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @method \Pyz\Zed\ChatMessage\Communication\ChatMessageCommunicationFactory getFactory()
 */
class IndexController extends AbstractController
{
    /**
     * @return array
     */
    public function indexAction(): array
    {
        $table = $this->getFactory()->createChatMessageTable();

        return $this->viewResponse([
            'chatMessageTable' => $table->render(),
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function tableAction(): JsonResponse
    {
        $table = $this->getFactory()->createChatMessageTable();

        return $this->jsonResponse($table->fetchData());
    }
}
