<?php

namespace Pyz\Zed\InstantChat\Business\Asker;

use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Generated\Shared\Transfer\InstantChatResponseTransfer;
use Kambo\Langchain\DocumentLoaders\TextLoader;
use Kambo\Langchain\Indexes\VectorstoreIndexCreator;
use Kambo\Langchain\LLMs\OpenAI;

class AiAsker implements AiAskerInterface
{

    private string $openAiApiKey;

    public function __construct(string $openAiApiKey)
    {
        $this->openAiApiKey = $openAiApiKey;
    }

    public function ask(InstantChatRequestTransfer $instantChatRequestTransfer): InstantChatResponseTransfer
    {
        //TODO REFACTOR THIS SHIT!!!!!!!!!

        putenv(sprintf('OPENAI_API_KEY=%s', $this->openAiApiKey));

        $loader = new TextLoader(APPLICATION_ROOT_DIR . '/data/ai/spryker_faq.txt');

        $index = (new VectorstoreIndexCreator())->fromLoaders([$loader]);
        $openAi = new OpenAI(['temperature' => 0]);

        $answer = $index->query($instantChatRequestTransfer->getMessage(), $openAi);

        $responseTransfer = new InstantChatResponseTransfer();
        $responseTransfer->setAnswer($answer);

        return $responseTransfer;
    }
}
