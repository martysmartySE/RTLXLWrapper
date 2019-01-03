<?php 

class RTLXLWrapperTest extends PHPUnit_Framework_TestCase{


    public function test_getShows(){

      $wrapper = new \martysmartySE\RTLXLWrapper\RTLXLWrapper();

      $this->assertObjectHasAttribute("name", $wrapper->getShows()[10]);

    }

    public function test_getShowSeasons(){

        $wrapper = new \martysmartySE\RTLXLWrapper\RTLXLWrapper();

        $this->assertObjectHasAttribute("season_key", $wrapper->getShowSeasons(10821)[2]);

    }


    public function test_getShowSeasonEpisodes(){

        $wrapper = new \martysmartySE\RTLXLWrapper\RTLXLWrapper();

        $this->assertObjectHasAttribute("title", $wrapper->getSeasonEpisodes(10821, 378858)[2]);

    }

  
}