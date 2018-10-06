<?php

namespace My;

use Facebook\WebDriver\Exception\NoSuchElementException;
use Lmc\Steward\Test\AbstractTestCase;

/**
 * Created by PhpStorm.
 * User: hemant.ojha
 * Date: 6/10/18
 * Time: 12:04 PM
 */
class AnotherGoogleSearchTest extends AbstractTestCase
{


    /**
     *
     */
    public function testGoogleSearchResults()
    {

        try {
            $this->wd->get('http://www.google.com');
            $this->assertContains("Google", $this->wd->getTitle());

            $this->log('Current page "%s" has title "%s"', $this->wd->getCurrentURL(), $this->wd->getTitle());


            $this->findByCss("input[name='asdasd']")->sendKeys("Selenium");

            $this->findByCss("input[value='Google Search']")->click();


            $this->log($this->findByCss(".srg .r>a")->getText());

        } catch (NoSuchElementException $e) {

            echo $e->getResults();
        }


    }
    /**
     *
     */
    public function testGoogleSearchResults1()
    {

        try {
            $this->wd->get('http://www.google.com');
            $this->assertContains("Google", $this->wd->getTitle());

            $this->log('Current page "%s" has title "%s"', $this->wd->getCurrentURL(), $this->wd->getTitle());


            $this->findByCss("input[name='q']")->sendKeys("Selenium");

            $this->findByCss("input[value='Google Search']")->click();


            $this->log($this->findByCss(".srg .r>a")->getText());

        } catch (NoSuchElementException $e) {

            echo $e->getResults();
        }


    }
    /**
     *
     */
    public function testGoogleSearchResults2()
    {

        try {
            $this->wd->get('http://www.google.com');
            $this->assertContains("Google", $this->wd->getTitle());

            $this->log('Current page "%s" has title "%s"', $this->wd->getCurrentURL(), $this->wd->getTitle());


            $this->findByCss("input[name='q']")->sendKeys("Selenium");

            $this->findByCss("input[value='Google Search']")->click();


            $this->log($this->findByCss(".srg .r>a")->getText());

        } catch (NoSuchElementException $e) {

            echo $e->getResults();
        }


    }
    /**
     *
     */
    public function testGoogleSearchResults3()
    {

        try {
            $this->wd->get('http://www.google.com');
            $this->assertContains("Google", $this->wd->getTitle());

            $this->log('Current page "%s" has title "%s"', $this->wd->getCurrentURL(), $this->wd->getTitle());


            $this->findByCss("input[name='q']")->sendKeys("Selenium");

            $this->findByCss("input[value='Google Search']")->click();


            $this->log($this->findByCss(".srg .r>a")->getText());

        } catch (NoSuchElementException $e) {

            echo $e->getResults();
        }


    }

}