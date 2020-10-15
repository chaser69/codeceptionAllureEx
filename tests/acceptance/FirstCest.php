<?php

use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Model\DescriptionType;

/**
 * @Stories({"story1", "story2"})
 * @Features({"feature1", "feature2", "feature3"})
 */
class FirstCest
{
    /**
     * @Description(value = "Detailed description for <b>test class</b>.", type = DescriptionType::HTML)
     * @Title("First test")
     * @param AcceptanceTester $I
     */
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeInTitle('About | Chaser');
    }
}
